<?php

$tp = array("Montag" => 17.5, "Dienstag" => 19.2, "Mittwoch" => 21.8);
$tp[ "Donnerstag" ] = 21.6;
$tp[ "Freitag" ] = 17.5;
$tp[ "Samstag" ] = 20.2;
$tp[ "Sonntag" ] = 16.6;

// Das erste Element
var_dump(current($tp));
reset($tp);

// Alle Elemente aus dem Array
foreach ($tp as $item => $value) {
    echo 'ITEM = ' . $item . ' VALUE = ' . $value.'<br>';
}
echo '<br><br>';
//**************************************************
$array = array('waehrung1' => 'Dollar',
    'waehrung2' => 'Euro',
    'waehrung3' => 'Yen');
foreach ($array as $item => $value) {
    echo 'ITEM = ' . $item . ' VALUE = ' . $value.'<br>';
}
echo '<br><br>';
echo $array[ 'waehrung2' ];
