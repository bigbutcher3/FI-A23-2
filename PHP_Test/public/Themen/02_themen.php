<?php
$int = 7363846584684;

function berechneQuersumme(int $zahl): int
{
    $quersumme = 0;
    while ($zahl != 0) {
        $quersumme += $zahl % 10;
        $zahl = floor($zahl / 10);
    }
    return $quersumme;
}

echo "<pre>";
echo "Zahl      : " . $int . "<br>";
echo "Quersumme : ";
echo berechneQuersumme($int);

echo "<br>";

function berechneQuersumme1(int $zahl): int
{
    return array_sum(str_split($zahl));
}

echo "Quersumme1: ";
echo berechneQuersumme1($int);

function berechneBuchstabe(string $buchstabe): int
{
    return ord($buchstabe) - 64;
}

$string = "A";
echo "<hr>";
echo "Position von \"" . $string . "\" im Alphabet: ";
echo berechneBuchstabe($string);
echo "<hr>";

echo "Banknote";

function getQuersumme(array $seriennummer): int
{
    $seriennummer[0] = berechneBuchstabe($seriennummer[0]);
    return array_sum($seriennummer) - end($seriennummer);
}

function berechnePruefsumme(int $quersumme): int
{
    $rest = $quersumme % 9;
    return (8 - $rest == 0) ? 9 : (8 - $rest);
}

$seriennummer = array('A', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 5);

echo "<br>";
//print_r($seriennummer);
if (count($seriennummer) == 12 && (array_search($seriennummer[0], range('A', 'Z')) || $seriennummer[0] == 'A')) {
    if (berechnePruefsumme(getQuersumme($seriennummer)) == end($seriennummer)) {
        echo "Prüfsumme i.O.";
    } else {
        echo "Prüfsumme falsch";
    }
} else {
    echo "Falsches Format der Seriennummer<br>";
    print_r($seriennummer);
}

