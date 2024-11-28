<?php
echo"<h2>For-Schleife</h2><br>";
// Anfangswert;Endwert;Zählschritte
for($i=1;$i<=10;$i++)
{
  echo"Zählschritt:  $i<br>";
}

//While-Schleife

echo"<h2>While-Schleife-Kopfgesteuert</h2><br>";
$x=1;//Schleifenanfangswert
While($x<=10)//Schleifenendwert
{
 echo"Zählschritt:  $x<br>";
 $x++;//Zählschritte
}

//do-While-Schleife   
echo"<h2>While-Schleife-Fußgesteuert</h2>";
echo"<h2>do-While-Schleife</h2><br>";
$z=1;//Schleifenanfangswert
do
{
echo"Zählschritt:  $z<br>";
$z++;//Zählschritte
}
While($z<=10)//Schleifenendwert
?>