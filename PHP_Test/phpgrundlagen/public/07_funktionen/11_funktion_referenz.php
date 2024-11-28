<?php
require_once '../config.php';
require_once PATHTEMPLATE.'head.tpl.php';
function rechne(int $a, int $b, int &$su, int &$pr)
{
    $su = $a + $b;
    $pr = $a * $b;
}

$x = 7;
$y = 5;
$summe = 0;
$produkt = 0;
rechne($x, $y, $summe, $produkt);
echo "Die Summe von $x und $y ist $summe<p>";
echo "Das Produkt von $x und $y ist $produkt";
echo '<br><br>';

function rechneUm(float &$euro)
{
    $euro = $euro * 1.6;
}

$dollar = 20;
rechneUm($dollar);
echo $dollar;

echo '<br><br>';
require_once PATHTEMPLATE.'footer.tpl.html';

