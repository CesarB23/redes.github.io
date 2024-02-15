const int numBits = 8; // Número de bits para representar el valor binario
int outputPins[numBits] = {2, 3, 4, 5, 6, 7, 8, 9}; // Pines digitales para la salida binaria

void setup() {
  Serial.begin(9600); // Iniciar la comunicación serial
}

void loop() {
  int sensorValue = analogRead(A5); // Leer el valor analógico del potenciómetro
  decimalToBinary(sensorValue); // Convertir el valor a binario y configurar las salidas
  delay(500); // Puedes ajustar el retardo según sea necesario
}

void decimalToBinary(int decimalValue) {
  // Crear un array para almacenar los bits binarios (ajustado a numBits)
  int binaryArray[numBits];
  
  // Inicializar el índice del array
  int index = 0;
  
  // Convertir el valor decimal a binario
  while (decimalValue > 0 && index < numBits) {
    binaryArray[index] = decimalValue % 2;
    decimalValue = decimalValue / 2;
    index++;
  }
  
  // Configurar cada pin digital como salida y establecer su valor
  for (int i = 0; i < numBits; i++) {
    pinMode(outputPins[i], OUTPUT);
    digitalWrite(outputPins[i], binaryArray[i]);
  }
}

