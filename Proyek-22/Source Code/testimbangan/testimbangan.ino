
#define BLYNK_TEMPLATE_ID "TMPL6NCn9MEbn"
#define BLYNK_TEMPLATE_NAME "nodemcudht22"
#define BLYNK_AUTH_TOKEN "XzXgLdePUGkUX3EZDDkG0QnU62ZehsQQ"
#define BLYNK_PRINT Serial
#define DHTPIN 5   // pin 2 untuk koneksi sensor DHT22
#define DHTTYPE DHT22  // Type DHT-22
#define BOTtoken "6430863003:AAHKqGD0e6442FA-KVbft34WiSsolJkHj40"
#define idAnda "1554564842"

#include "HX711.h"
#include "DHT.h"

#include <ESP8266WiFi.h>
#include <BlynkSimpleEsp8266.h>
//#include <CTBot.h>
#include <WiFiClientSecure.h>
#include <UniversalTelegramBot.h>

char auth[] = BLYNK_AUTH_TOKEN;
char ssid[] = "SorcefourG";  // wifi ssid
char pass[] = "Ekahijiduatilu321";  // wifi password
 
HX711 scale(D6, D7);
DHT dht(DHTPIN, DHTTYPE);
//CTBot telebot;
WiFiClientSecure client;
UniversalTelegramBot bot(BOTtoken, client);
//String token ="6430863003:AAHKqGD0e6442FA-KVbft34WiSsolJkHj40";
//const int id = 1554564842;
long bufKirimPesan, Bot_lasttime;
int Bot_mtbs = 1500, kirimPesan = 120000; 
String txtBuff = "";
 
float weight;
//float calibration_factor = -410825.00; // nilai kalibrasi
float calibration_factor = 275525.00; //362525.00;//374725.00;

void setup() 
{
  Serial.begin(115200); 
  Blynk.begin(auth, ssid, pass, "blynk.cloud", 80);
  WiFi.begin(ssid, pass);
  while(WiFi.status() != WL_CONNECTED)
  {
    delay(500);
  }
  //bot.wifiConnect(ssid, pass);
  //bot.setTelegramToken(BOTtoken);
  scale.set_scale();
  scale.tare(); //Reset the scale to 0
  long zero_factor = scale.read_average(); //Pembacaan loadcell
  dht.begin();
}
 
void loop() 
{
  scale.set_scale(calibration_factor); //menghubungkan dengan calibration factor
  weight = scale.get_units(5); 
  
  Serial.print("Weight: ");
  Serial.print(weight);
  Serial.println(" KG");
  Serial.println();

  float Temperature = dht.readTemperature();
  float Humidity = dht.readHumidity();
  
  Serial.print("Suhu: ");
  Serial.print(Temperature);
  Serial.println(" °C");
  Serial.print("Kelembaban: ");
  Serial.print(Humidity);
  Serial.println(" %");
  
  Blynk.virtualWrite(V0, weight);
  Blynk.virtualWrite(V1, Temperature);
  Blynk.virtualWrite(V2, Humidity);
  Blynk.run();

  if (weight < 0.20){
  batasberat();
  }
}

void batasberat(){
back:
Blynk.logEvent("weight_alerts", String("Pakan Hampir Habis !!! Tersisa ") + weight + String(" kg"));
bot.sendMessage(idAnda, String("Pakan Hampir Habis !!! Tersisa") + weight + String(" kg"));
  weight = scale.get_units(5);
  Serial.print("Weight: ");
  Serial.print(weight);
  Serial.println(" KG");
  Serial.println();

  float Temperature = dht.readTemperature();
  float Humidity = dht.readHumidity();
  
  Serial.print("Suhu: ");
  Serial.print(Temperature);
  Serial.println(" °C");
  Serial.print("Kelembaban: ");
  Serial.print(Humidity);
  Serial.println(" %");
  
Blynk.virtualWrite(V0, 0.00);
Blynk.virtualWrite(V1, Temperature);
Blynk.virtualWrite(V2, Humidity);
Blynk.run();

if (millis() > Bot_lasttime + Bot_mtbs){
 int numNewMessages = bot.getUpdates(bot.last_message_received + 1);
  while(numNewMessages){
    Serial.println("Ada Pesan masuk");
    handleNewMessages(numNewMessages);
    numNewMessages = bot.getUpdates(bot.last_message_received + 1);
    }
 Bot_lasttime = millis();     
}
kirimPesanOtomatis(kirimPesan);
if (weight < 0.20){
  goto back;
}
else {
  loop();
}
}

void handleNewMessages(int numNewMessages){
for (int i=0; i<numNewMessages; i++){
  String chat_id = String(bot.messages[i].chat_id);
  String text = bot.messages[i].text;
  String from_name = bot.messages[i].from_name;
    
  Serial.println(text);
    txtBuff = text;
  }
// masukan perintah disini
 if (txtBuff == "Cek"){
   bot.sendMessage(idAnda,"Nih ! ketinggian Air Sekarang: ");
 }
}

void kirimPesanOtomatis(long x){
if (millis() > bufKirimPesan + x){
  bot.sendMessage(idAnda,"PESAN OTOMATIS , Ketinggian Airnya segini gan : ");
  bufKirimPesan = millis();   
  }
}
