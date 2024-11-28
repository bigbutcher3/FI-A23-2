<?php


$age = array("Peter" => 35, "Markus" => 42, "Jens" => 16,
    "Julia" => 17, "Monika" => 42, "Gerd" => 55);

// Alle Elemente aus dem Array
while (list($vname, $lebensalter) = each($age))
    echo "$vname, $lebensalter Jahre<p>";
$tp[ "Montag" ] = 17.5;
$tp[ "Dienstag" ] = 19.2;
$tp[ "Mittwoch" ] = 21.8;
$tp[ "Donnerstag" ] = 21.6;
$tp[ "Freitag" ] = 17.5;
$tp[ "Samstag" ] = 20.2;
$tp[ "Sonntag" ] = 16.6;
echo '<pre>';
// Ausgabe unsortiert
print_r($tp);

// sortiert nach Werten, aufsteigend
// also Maximum zuerst
echo "<br>";
asort($tp);
print_r($tp);

// sortiert nach Werten, absteigend
// also Minimum zuerst
echo "<br>";
arsort($tp);
print_r($tp);

// sortiert nach Keys, aufsteigend
echo "<br>";
ksort($tp);
print_r($tp);
