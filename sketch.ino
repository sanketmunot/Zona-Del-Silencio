#include <ESP8266WiFi.h>

int normal = 0;//3
int emergency = 4;//2
int ir = 13;//7
int buzzer = 14;//5
int led = 12;//6
const char *ssid =  "N";
const char *pass =  "11111122";
const char* host = "delsilentzone.000webhostapp.com";
int httpPort = 80;
WiFiClient client;
void setup() {
  pinMode(normal, INPUT);
  pinMode(emergency, INPUT);
  pinMode(ir, INPUT);
  pinMode(buzzer, OUTPUT);
  pinMode(led, OUTPUT);
  WiFi.begin(ssid, pass);
  digitalWrite(buzzer, LOW);
  digitalWrite(led, LOW);
  Serial.begin(115200);
}

void loop() {
  if (WiFi.status() == WL_CONNECTED) {
    if (digitalRead(emergency) == LOW) {
      Serial.print("emergency");
      if (digitalRead(ir) == HIGH) {
        Serial.print("wrong");
        if (client.connect(host, httpPort)) {
          String url = "/fine.php?mac="+WiFi.macAddress() ;
          client.print(String("GET ") + url + " HTTP/1.1\r\n" +
                       "Host: " + host + "\r\n" +
                       "Connection: close\r\n\r\n");
          digitalWrite(led,HIGH);
          delay(500);
          digitalWrite(led,LOW);                     
        }
        else {
          Serial.println("connection failed");
        }
      }
      digitalWrite(buzzer, HIGH);
      delay(500);
      digitalWrite(buzzer, LOW);
    }
  }
  else {

    if (digitalRead(normal) == LOW) {
      Serial.print("normal");
      digitalWrite(buzzer, HIGH);
      delay(500);
      digitalWrite(buzzer, LOW);
    }
  }

}
