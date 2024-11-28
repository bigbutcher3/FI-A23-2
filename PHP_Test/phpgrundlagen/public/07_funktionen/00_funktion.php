<?php
//einfache Funktion
function test()
{
	echo 'Ausgabe';

}
//test();
//-------------------------------------------------
//Funktion mit einer globalen Variablen 
function muster()
{
	global $test;
	echo $test;

}
$test=1234;
//muster();
//-------------------------------------------------
//Funktion mit Variablenübergabe 
function muster1(int $affe)
{
	
	echo $affe;

}
$test=1234;
//muster1($test);
//muster1(1234);
//----------------------------------------------------
//Funktion mit Variablenübergabe 
function muster2(string $affe1,string $affe2,int $affe3)
{
	
	echo $affe1.$affe2.$affe3;

}
$test='Hallo';
$test1=1111;
muster2($test,'Fan',$test1);
//------------------------------------
//Funktion mit einem Rückgabewert
function muster3(int $affe1,int $affe2):int
{
	$erg = $affe1+$affe2;
	return $erg;

}
$erg = muster3(2,4);
echo $erg;
?>