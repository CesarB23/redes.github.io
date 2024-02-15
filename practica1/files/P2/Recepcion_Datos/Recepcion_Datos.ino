const int numBits = 8;
int inputPins[numBits] = {2, 3, 4, 5, 6, 7, 8, 9};

void setup() {
  Serial.begin(9600); 
}

void loop() {
  int scaledValue = scaleTo10Bits(readBinaryValue()); 
  Serial.print("Valor Escalado: ");
  Serial.println(scaledValue);
  delay(500); 
}

int readBinaryValue() {
  int binaryValue = 0;
  for (int i = 0; i < numBits; i++) {
    int bitValue = digitalRead(inputPins[i]);
    binaryValue = (binaryValue << 1) | bitValue;
  }
  
  return binaryValue;
}

int scaleTo10Bits(int value8Bits) {
  return map(value8Bits, 0, 255, 0, 1023);
}


