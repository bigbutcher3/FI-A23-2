<?php

class PruefsummeBerechnen
{
    public function __construct()
    {
        //$this->seriennummer = $seriennummer;
    }

    static function berechneBuchstabe(array $seriennummer):int
    {
        //echo ord($seriennummer[0]) - 64;
        return ord($seriennummer[0]) - 64;
    }

    static function berechnePruefsumme(int $quersumme): int
    {
        $rest = $quersumme % 9;
        return (8 - $rest == 0) ? 9 : (8 - $rest);
    }

    static function getQuersumme(array $seriennummer): int
    {
        $seriennummer[0] = PruefsummeBerechnen::berechneBuchstabe($seriennummer);
        return array_sum($seriennummer) - end($seriennummer);
    }
}

echo "<pre>";
$seriennummer = array('A', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 5);

if (count($seriennummer) == 12 && (array_search($seriennummer[0], range('A', 'Z')) || $seriennummer[0] == 'A')) {
    if (PruefsummeBerechnen::berechnePruefsumme(PruefsummeBerechnen::getQuersumme($seriennummer)) == end($seriennummer)) {
        echo "Prüfsumme i.O.";
    } else {
        echo "Prüfsumme falsch";
    }
} else {
    echo "Falsches Format der Seriennummer<br>";
    print_r($seriennummer);
}