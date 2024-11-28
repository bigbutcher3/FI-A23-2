<?php
require_once __DIR__.'/../config.php';
require_once PATHTEMPLATE.'head.tpl.php';
echo '<h4>if & else Anweisungen</h4>';
$a = 714;
$b = 71;
if ($a < $b) {
    echo $a.' ist kleiner als '.$b.NL;
} else {
    echo $a.' ist nicht kleiner als '.$b.NL;
}
$ausgabe = (($a < $b) ?  "$a ist kleiner als $b" :  "$a ist nicht kleiner als $b");
$ausgabe = (($a < $b) ?  $a.' ist kleiner als '.$b :  $a.' ist nicht kleiner als '.$b);
echo $ausgabe;
echo NL;
//------------------------------------------------------------------	
$ausgabe = (($a < $b) ? $a . ' ist kleiner als ' . $b : (($a > $b) ? $a . ' ist größer als ' . $b : $a . ' gleich ' . $b));
echo $ausgabe;
echo NL;
$stadt = 'Halle';
$stadt1 = 'Leipzig';
$zahl1 = 15;
$zahl2 = 15.0;

if ($stadt == $stadt1) {
    echo 'sind gleich';
} else {
    echo 'nicht gleich';
}
echo NL;
if ($stadt != $stadt1) {
    echo 'nicht gleich';
} else {
    echo ' gleich';
}
echo NL;
if ($zahl1 == $zahl2) {
    echo 'gleich';
} else {
    echo 'nicht gleich';
}
echo NL;
if ($zahl1 === $zahl2) {
    echo 'gleich';
} else {
    echo 'nicht gleich';
}
echo NL;
//Verschachtelung 
$a = 8;
$b = 12;
$c = 24;
if ($a < $b && $c > $b) {
    echo 'stimmt';
} else {
    echo 'stimmt nicht';
}
echo NL;
if ($a < $b || $c < $b) {
    echo 'stimmt';
} else {
    echo 'stimmt nicht';
}
echo NL;
if (!($a > $b)) {
    echo 'stimmt';
} else {
    echo 'stimmt nicht';
}

require_once PATHTEMPLATE.'footer.tpl.html';