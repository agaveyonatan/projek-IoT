#include <SoftwareSerial.h>
#include <NewPing.h>

#define RX 10
#define TX 11
#define echo_pin 9
#define trigger_pin 8

String AP = "Galaxy A513838";       // WIFI NAME
String PASS = "mjua4555"; // WIFI PASSWORD
String HOST = "192.168.43.250";  // UBAH SESUAI DENGAN IP DARI WEBSITENYA
String PORT = "80";
int countTrueCommand;
int countTimeCommand; 
boolean found = false; 
int valSensor = 1;
int pin_buzzer = 3;

#define MAX_DISTANCE 200 // Maximum distance we want to ping for (in centimeters). Maximum sensor distance is rated at 400-500cm.

NewPing sonar(trigger_pin, echo_pin, MAX_DISTANCE); // NewPing setup of pins and maximum distance.
  
SoftwareSerial esp8266(RX,TX); 
  
void setup() {
  Serial.begin(9600);
  esp8266.begin(9600);
  sendCommand("AT",5,"OK");
  sendCommand("AT+CWMODE=1",5,"OK");
  sendCommand("AT+CWJAP=\""+ AP +"\",\""+ PASS +"\"",20,"OK");
  setupUltrasonic();
  pinMode(pin_buzzer, OUTPUT);
}

void loop() {
  int getJarak = sonar.ping_cm(); // get jarak
 // getJarak = sonar.ping_cm() < 9 ? 9 : getJarak; //limit
  Serial.println("Jarak: "+String(getJarak));
  String jarak = String(getJarak);
 String getData = "GET /html/rangefinder/projek-IoT-master/insert.php?jarak="+jarak;
 sendCommand("AT+CIPMUX=1",5,"OK");
 sendCommand("AT+CIPSTART=0,\"TCP\",\""+ HOST +"\","+ PORT,15,"OK");
 sendCommand("AT+CIPSEND=0," +String(getData.length()+4),4,">");
 esp8266.println("GET /html/rangefinder/projek-IoT-master/insert.php?jarak="+jarak);
//tambah buzzer  
  if(getJarak<100 && getJarak>=30){
      digitalWrite(pin_buzzer, HIGH);
      delay(1000);
      digitalWrite(pin_buzzer, LOW);
      delay(1000);
  }
  else if(getJarak < 30){
      digitalWrite(pin_buzzer, HIGH);
      delay(500);
      digitalWrite(pin_buzzer, LOW);
      delay(500);
  } 
  else if(getJarak < 10){
    digitalWrite(pin_buzzer, HIGH);
    delay(100);
    digitalWrite(pin_buzzer, LOW);
    delay(100);
  }
 countTrueCommand++;
 sendCommand("AT+CIPCLOSE=0",5,"OK");
 delay(500);
}

void setupUltrasonic(){
  pinMode(trigger_pin,OUTPUT);
  pinMode(echo_pin,INPUT);
}

//String getJarakValue(){
//
//   Serial.print(" Jarak (cm)= ");
//   digitalWrite(trigger_pin, LOW); delayMicroseconds(2);
//   digitalWrite(trigger_pin, HIGH);delayMicroseconds(10);
//   digitalWrite(trigger_pin, LOW);
//   long duration = pulseIn(echo_pin,HIGH);
//   long distance = duration/29/2;
//   Serial.println(distance); 
//   delay(50);
//   return String(distance); 
//  
//}


void sendCommand(String command, int maxTime, char readReplay[]) {
  Serial.print(countTrueCommand);
  Serial.print(". at command => ");
  Serial.print(command);
  Serial.print(" ");
  while(countTimeCommand < (maxTime*1))
  {
    esp8266.println(command);//at+cipsend
    if(esp8266.find(readReplay))//ok
    {
      found = true;
      break;
    }
  
    countTimeCommand++;
  }
  
  if(found == true)
  {
    Serial.println("OK");
    countTrueCommand++;
    countTimeCommand = 0;
  }
  
  if(found == false)
  {
    Serial.println("Fail");
    countTrueCommand = 0;
    countTimeCommand = 0;
  }
  
  found = false;
 }
