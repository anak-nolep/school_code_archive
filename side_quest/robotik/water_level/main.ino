/*
perlu WIFI untuk projek ini
*/
#include "WiFi.h"
//#include "led.c"

#define POWER_PIN 33
#define SIGNAL_PIN 32

#define ssid "LinuxUserProperty"
#define password "windowselek"
#define host "192.168.130.44" //tcp server
#define port 52275

uint16_t value = 0;
uint8_t level = 0;

WiFiClient client;

void check_wifi() {
  while (WiFi.status() != WL_CONNECTED) {
    Serial.println("Connecting to WiFi...");
    WiFi.disconnect();
    WiFi.reconnect();
    delay(5000);
    if (WiFi.status() == WL_CONNECTED) {
      Serial.println("");
      Serial.println("WiFi connected");
      Serial.println("IP address: ");
      Serial.println(WiFi.localIP());
    }
  }
}

void check_server() {
  if (!client.connected()) {
    Serial.println("Disconnected from server");
    while (!client.connect(host, port)) {
      Serial.println("Reconnecting to server...");
      delay(5000);
    }
    Serial.println("Connected to server");
  }
}

void setup() {
  Serial.begin(9600);
  WiFi.begin(ssid, password);
  delay(1000);
  check_wifi();

  pinMode(POWER_PIN, OUTPUT);
  digitalWrite(POWER_PIN, LOW);
  //init_led();
}

void loop() {
  check_wifi();
  digitalWrite(POWER_PIN, HIGH);
  delay(10);
  value = analogRead(SIGNAL_PIN);
  digitalWrite(POWER_PIN, LOW);

  Serial.print("The water sensor value: ");
  Serial.println(value);

  if (value >= 1200) {
    level = 3;
    // led_level3();
  } else if (value >= 600) {
    level = 2;
    // led_level2();
  } else if (value >= 1) {
    level = 1;
    // led_level1();
  } else {
    level = 0;
    // led_level0();
  }

  check_server();

  client.printf("%un%u", level, value);
  //client.stop();

  delay(1000);
}