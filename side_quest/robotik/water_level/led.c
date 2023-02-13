/*
ESP32 wifi tidak bisa digunakan
bersamaan dengan pin ADC2
*/
#include <esp32-hal-gpio.h>

#define RED 13
#define YELLOW 12
#define GREEN 14
#define red_off digitalWrite(RED, LOW);
#define yellow_off digitalWrite(YELLOW, LOW);
#define green_off digitalWrite(GREEN, LOW);

void init_led() {
  pinMode(RED, OUTPUT);
  pinMode(YELLOW, OUTPUT);
  pinMode(GREEN, OUTPUT);

  digitalWrite(RED, LOW);
  digitalWrite(YELLOW, LOW);
  digitalWrite(GREEN, LOW);
}

void led_level3() {
  digitalWrite(RED, HIGH);
  yellow_off;
  green_off;
}

void led_level2() {
  red_off;
  digitalWrite(YELLOW, HIGH);
  green_off;
}

void led_level1() {
  red_off;
  yellow_off;
  digitalWrite(GREEN, HIGH);
}

void led_level0() {
  red_off;
  yellow_off;
  green_off;
}
