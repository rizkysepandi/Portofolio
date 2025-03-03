#include "header.h"

void setup() {
  Serial.begin(115200);
  splashScreenOled();
  sht20.begin();
  ldr.begin();
  initDistanceSensor();
  pinMode(RELAY, OUTPUT);
  pinMode(ledB, OUTPUT);

  clientMQTT.connect_to_AP(ssid, password);
  clientMQTT.init_to_broker(mqttServer, mqttPort);
  clientMQTT.connect_to_broker(myClientID, MQTTUser, MQTTPass);
  clientMQTT.mqtt_subscribe(TopicSub);

  // set secure client without certificate
  client.setInsecure();
  
}

void loop() {  
  clientMQTT.rxMessFrBroker();
  if(callBackTopic == TopicSub){
    fltCallBackPayload = callBackPayload.toFloat();
  }

  unsigned long currentMillis = millis();
  if(currentMillis - previousMillis >= interval){
    previousMillis = currentMillis;

    // Read sensor
    temperature = sht20.readTemperature();
    humidity = sht20.readHumidity();
    intensitas = ldr.readIntensitas();
    soilMoisturePercent = readSoilMoisture();
    distance = readDistance();
    
    // Kirim data ke Server HTTP
    kirimdataMQTT();
    // Kirim data ke Server HTTP
    kirimdataHTTP();

    // clientMQTT.mqtt_publish(Topic_1, String(temperature));
    // clientMQTT.mqtt_publish(Topic_2, String(humidity));
    // clientMQTT.mqtt_publish(Topic_3, String(intensitas));

    displayMeassuring(temperature, humidity, intensitas, soilMoisturePercent, distance);
    display.clearDisplay();
  }

  //Action Based on Distance
  if(distance > 60){
    digitalWrite(ledB, HIGH);
  } else{
    digitalWrite(ledB, LOW);
  }
  
  //Action Based on Relay (MQTT Control Override)
  if(fltCallBackPayload == 1){
    digitalWrite(RELAY, HIGH); // Manual via dashboard nodered
  } else if(soilMoisturePercent < 45){
    digitalWrite(RELAY, HIGH); // Action Based on Soil Moisture
  } else {
    digitalWrite(RELAY, LOW);
  }

}
