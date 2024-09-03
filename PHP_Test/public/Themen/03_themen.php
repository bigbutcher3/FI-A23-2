<?php
echo "<pre>";

function berechneBuchstabe(string $buchstabe):int
{
    return ord($buchstabe) - 64;
}

$laendercode = 't';

//echo (berechneBuchstabe($laendercode) >= 1 && berechneBuchstabe($laendercode)) <= 26?"i.o.":"fehler";
//echo "<br>";

$buchstaben = range('A', 'Z');
//print_r($buchstaben);
echo (array_search($laendercode, $buchstaben) || $laendercode == 'A')?"i.o.":"fehler";

$pattern= '/^[A-Z]/';
//echo ("");