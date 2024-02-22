//PARTE 1
//Envia pulsos

void pulsos(int cantidad, int frecuencia)
{
  for(int i=0; i<cantidad; i++)
  {
  	digitalWrite(8, HIGH);
   // Serial.print(1);
  	delay(1000/frecuencia); 
  	digitalWrite(8, LOW);
   // Serial.print(0);
  	delay(1000/frecuencia);
  }
}

void setup()
{
  // Serial.begin(9600);
  pinMode(8, OUTPUT);
  pulsos(86,100);
}

void loop()
{
}
/*
//PARTE 2

//Envia pulsos


void pulsot(int tiempo)
{
  	digitalWrite(8, HIGH);
  	delay(tiempo); 
  	digitalWrite(8, LOW);
  	delay(tiempo);
}

void setup()
{
  delay(2000);
  pinMode(8, OUTPUT);
  pulsot(50);
}

void loop()
{
}
*/