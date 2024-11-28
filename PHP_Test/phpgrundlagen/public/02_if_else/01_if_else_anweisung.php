<?php
require_once __DIR__.'/../config.php';
require_once PATHTEMPLATE.'head.tpl.php';
	
	$a = 7;
	$b = 12;
//alles identisch	
	$c	= 1;
	$d	=1.0;
	if($c===$d)
	{
		echo 'identisch';
	}
	else
	{
		echo 'nicht identisch';
	}
// alles gleich	
	if($c==$d)
	{
		echo 'gleich';
	}
	else
	{
		echo 'nicht gleich';
	}
	echo NL;
//----------------------if und else-------------------------------------------------------------------------------------------------------------------------------------
	if ($a < $b)
	{
		echo "$a ist kleiner als $b".NL;
		echo $a.' ist kleiner als '.$b.NL;
	}
	else
	{
		echo "$a ist nicht kleiner als $b".NL;
		echo $a.' ist nicht kleiner als '.$b.NL;
	}
	echo NL;

//------------------------Bedingung   )--------------------------------------------------------------------------------------------------------------------------------
	$ausgabe=(($a < $b) ? "$a ist kleiner als $b": "$a ist nicht kleiner als $b");
	echo "$ausgabe".NL;
	$ausgabe1=(($a < $b) ? $a.' ist kleiner als '.$b : $a.' ist nicht kleiner als '.$b);
	echo $ausgabe1.NL;
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$stadt = "Bonn";
	$stadt1= "Berlin";
	$zahl1 = 15;
	$zahl2 = 3.2;

   if ($stadt == $stadt1)
      echo "Die Zeichenketten sind gleich".NL;
   else
      echo "Die Zeichenketten sind nicht gleich".NL;

   if ($stadt != $stadt1)
      echo "Die Zeichenketten sind nicht gleich".NL;
   else
      echo "Die Zeichenketten sind gleich".NL;

   if ($zahl1 <= $zahl2)
      echo "$zahl1 ist kleiner oder gleich $zahl2".NL;
   else
      echo "$zahl1 ist größer als $zahl2".NL;

   if ($zahl1 >= $zahl2)
      echo "$zahl1 ist größer oder gleich $zahl2".NL;
   else
      echo "$zahl1 ist kleiner als $zahl2".NL;
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	$stadt = "Bonn";
	$stadt1= "Berlin";
	$zahl1 = 15;
	$zahl2 = 3.2;

   if ($stadt == $stadt1)
      echo "Die Zeichenketten sind gleich".NL;
   else
      echo "Die Zeichenketten sind nicht gleich".NL;

   if ($stadt != $stadt1)
      echo "Die Zeichenketten sind nicht gleich".NL;
   else
      echo "Die Zeichenketten sind gleich".NL;

   if ($zahl1 <= $zahl2)
      echo "$zahl1 ist kleiner oder gleich $zahl2".NL;
   else
      echo "$zahl1 ist größer als $zahl2".NL;

   if ($zahl1 >= $zahl2)
      echo "$zahl1 ist größer oder gleich $zahl2".NL;
   else
      echo "$zahl1 ist kleiner als $zahl2".NL;
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------	  
	$a = 8;
	$b = 12;
	$c = 24;

   /* Bedingung 1 */
	if ($a < $b && $b < $c)
	{
      echo "$a ist kleiner als $b und $b ist kleiner als $c".NL;
      echo "also ist $a kleiner als $c".NL;
	}

   /* Bedingung 2 */
	if ($b < $a || $b < $c)
      echo "$b ist kleiner als $a oder als $c".NL;
	else
	{
      echo "$b ist größer oder gleich $a".NL;
      echo "und größer oder gleich $c".NL;
	}

   /* Bedingung 3 */
	if (!($a > $b)) echo "$a ist nicht größer als $b".NL;
/*echo $_POST['email']??'';

echo isset($_POST['email'])?$_POST['email']:'';

if(isset($_POST['email']))
{
echo $_POST['email'];
}
else{
echo $_POST['email']='';
}*/
require_once PATHTEMPLATE.'footer.tpl.html';