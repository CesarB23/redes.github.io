//PARTE 1
int cuenta=0;
void setup()
{
  pinMode(8, INPUT);
  Serial.begin(9600);
}

void loop()
{
  if(digitalRead(8)==HIGH)
  {
    while(digitalRead(8)==HIGH);
    cuenta++;
    Serial.println(cuenta);
  }

}
/*
//PARTE 2
//ARDUINO CONTADOR DE TIEMPO

int cuenta=0;

void setup()
{
  pinMode(8, INPUT);
  Serial.begin(9600);
}

void loop()
{
  if(digitalRead(8)==HIGH)
  {
    while(digitalRead(8)==HIGH)
    {
      delay(1);
      cuenta++;
    }
    Serial.println(cuenta);
  }
}
*/