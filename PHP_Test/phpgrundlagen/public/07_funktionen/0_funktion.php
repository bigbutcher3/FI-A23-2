<?php
echo"<h3>PHP-Funktionen</h3>";



function muster()
{
         $test=1215;
         echo"$test";
}

muster();
echo '<br>';
muster();
echo '<br>';
muster();
echo '<br>';
muster();
echo '<br>';
muster();
echo '<br>';echo '<br>';echo '<br>';










echo"<br>";
function muster1(int $hund, int $katze)
{
         //echo"$hund $katze";
		 echo $hund.' '. $katze;
}
$test=13;
$test1=14;
muster1($test,$test1);

echo"<br>";echo"<br>";echo"<br>";



echo"<br>";
function muster2()
{
         global $test;
         echo "$test";
}
$test='Hallo';
muster2();









echo"<br>";
function muster3(string $hund, string $katze)
         {

         echo $hund.' '.$katze;
         }
$test="Hallo";
$test1="fenster";
muster3($test,$test1);


echo"<br>";
function muster4(array $test):array
{
	echo 'in der Function '.$test[0];
    $test[]='Hallo Fans';
    $test[]='Hallo Fans1';
    $test[]='Hallo Fans2';
    $test[]='Hallo Fans3';
    $test[]='Hallo Fans4';
	return $test;
}
$daten[] = 'Hallo Fans 0';
var_dump(muster4($daten));


?>