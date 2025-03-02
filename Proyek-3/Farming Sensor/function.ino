
float readSoilMoisture(){
  int soil = analogRead(pinSoil);
  float soilMoisture = map(soil, 4095, 0, 0, 100);
  return soilMoisture;
}

void initDistanceSensor(){
  pinMode(ECHOPIN, INPUT_PULLUP);
  pinMode (TRIGPIN, OUTPUT);
  pinMode (ECHOPIN, HIGH);
}

float readDistance(){
  digitalWrite(TRIGPIN, LOW);
  delayMicroseconds(2);
  digitalWrite(TRIGPIN, HIGH);
  delayMicroseconds(15);
  digitalWrite(TRIGPIN, LOW);
  float distance1 = pulseIn(ECHOPIN, HIGH, 26000);
  float ret_distance = distance1/58;
  return ret_distance;
}

//================  Kirim data mqtt ==========//
void kirimdataMQTT(){
//Convert to Json
  doc["tmp"] = temperature;
  doc["humi"] = humidity;
  doc["inten"] = intensitas;
  doc["soil"] = soilMoisturePercent;
  doc["dist"] = distance;

  //Serializasikan objek JSON ke dalam String JSON
  jsonPayload = ""; //Riset Payload jsonPayload
  serializeJson(doc, jsonPayload);

  clientMQTT.mqtt_publish(Topic, String(jsonPayload));

}

//================  Kirim data http ==========//
void kirimdataHTTP(){
  https.begin(client, url);
  String httpsBody = "{\"temperature\":"+ String(temperature) + ",\"humidity\":"+ String(humidity) + ",\"intensitas\":"+ String(intensitas) + ",\"soil\":"+ String(soilMoisturePercent) + ",\"distance\":"+ String(distance) +"}";
  Serial.println(httpsBody);
  int httpsResponseCode = https.POST(httpsBody);

  Serial.print("HTTPS Response Code: ");
  Serial.println(httpsResponseCode);
  https.end();

}

//================  OLED LCD ==========//
void splashScreenOled(){
  if(!display.begin(SSD1306_SWITCHCAPVCC, 0x3C)) { // Address 0x3D for 128x64
    Serial.println(F("SSD1306 allocation failed"));
    for(;;);
  }
  delay(2000);
  display.clearDisplay();

  display.setTextSize(2);
  display.setTextColor(WHITE);
  display.setCursor(25, 20);
  // Display static text
  display.println("EDSPERT");
  display.setCursor(20, 35);
  display.println("BOOTCAMP");

  display.display();
  delay(5000); 

  display.clearDisplay();
}

void displayMeassuring(float a, float b, float c, float d, float e){
  display.setTextSize(1.2);
  display.setTextColor(WHITE);
  display.setCursor(15, 5);
  // Display static text
  display.println("Nilai Parameter");

  display.setTextSize(1);
  display.setTextColor(WHITE);
  display.setCursor(10, 18);
  display.print("Temp: ");
  display.print(a);
  display.println(" C");

  display.setCursor(10, 27);
  display.print("Hum : ");
  display.print(b);
  display.println(" %");

  display.setCursor(10, 36);
  display.print("Inten : ");
  display.print(c);
  display.println(" Lx");

  display.setCursor(10, 45);
  display.print("Soil : ");
  display.print(d);
  display.println(" %");

  display.setCursor(10, 54);
  display.print("Distan : ");
  display.print(e);
  display.println(" cm");

  display.display();
}