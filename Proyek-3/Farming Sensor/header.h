#include <Wire.h>
#include <WiFiClientSecure.h>
#include <HTTPClient.h>
#include <Adafruit_GFX.h>
#include <Adafruit_SSD1306.h>
#include <Edspert_sht20.h>
#include <EdspertPubSub.h>
#include <LDR.h>
#include <ArduinoJson.h>

//========= Json Declaration ================//
StaticJsonDocument<200> doc;
String jsonString,jsonPayload;

//========= Connection Declaration ================//
// WiFi Setting
char* ssid = "GSH28b";
char* password = "DIAngg0kanumaYAran";
WiFiClientSecure client; // Buat WiFiClientSecure & HTTPClient
HTTPClient https; //create an HTTPClient instance

// Broker Setting
String MQTTUser = "user1";
String MQTTPass = "pengguna1";

// MQQT Setting
char* mqttServer = "192.168.0.247";
int mqttPort = 1883;
String myClientID = "m1k1klien";
String Topic = "edspert/data/sensor";
String TopicSub = "edspert/data/pump";
// String Topic_1 = "edspert/data/tmp";
// String Topic_2 = "edspert/data/humi";
// String Topic_3 = "edspert/data/inten";
extern String callBackPayload;
extern String callBackTopic;

EdspertPubSub clientMQTT;

// Parameter URL/Endpoint 
String accessToken = "pmdwEVU1clfaFy5ZUbbW";
String url = "https://demo.thingsboard.io/api/v1/"+ accessToken + "/telemetry";

//========= OLED LCD Declaration ================//
#define SCREEN_WIDTH 128 // OLED display width, in pixels
#define SCREEN_HEIGHT 64 // OLED display height, in pixels

// Declaration for an SSD1306 display connected to I2C (SDA, SCL pins)
Adafruit_SSD1306 display(SCREEN_WIDTH, SCREEN_HEIGHT, &Wire, -1);

//========= SHT Declaration ================//
HardwareSerial serial(2);
Edspert_sht20 sht20(&serial, 9600, 16, 17);

//========= LDR Declaration ================//
#define pinLDR 33
LDR ldr(pinLDR);

//========= Soil Moisture Declaration ================//
#define pinSoil 34

//========= Distance Declaration ================//
#define ECHOPIN 13
#define TRIGPIN 12

//========= Relay Declaration ================//
#define RELAY 4

//========= Buzzer/LED Declaration ================//
#define ledB 2

float temperature, humidity, intensitas;
float soilMoisturePercent;
float distance;
float fltCallBackPayload;

unsigned long previousMillis = 0;
const long interval = 3000;
