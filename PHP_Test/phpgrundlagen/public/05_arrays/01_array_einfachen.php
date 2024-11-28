<?php
require_once __DIR__ . '/../config.php';
echo PRE;
//1.Möglichkeit
$vornameArray = array("Peter", "Markus", "Jens", "Julia", "Monika", "Gerd");
var_dump($vornameArray);
echo NL;
print_r($vornameArray);
echo NL;
echo $vornameArray[ 1 ];
echo NL;
echo 'Anzahl der Einträge:' . count($vornameArray);
echo NL;

foreach ($vornameArray as $vorname) {
    echo $vorname . NL;
}
echo NL;
$i = 0;
while ($i < count($vornameArray)) {
    echo $i . ' ' . $vornameArray[ $i ] . NL;
    $i++;
}
echo NL;
for ($i = 0; $i < count($vornameArray); $i++) {
    echo $i . ' ' . $vornameArray[ $i ] . NL;
}

//2.Möglichkeit
$vornameArray[ 0 ] = "Peter";
$vornameArray[ 1 ] = "Markus";
$vornameArray[ 2 ] = "Jens";
$vornameArray[ 3 ] = "Julia";
$vornameArray[ 4 ] = "Monika";
$vornameArray[ 5 ] = "Gerd";


var_dump($vornameArray);
echo NL;
print_r($vornameArray);
echo NL;
echo $vornameArray[ 1 ];
echo NL;
echo 'Anzahl der Einträge:' . count($vornameArray);
echo NL;

foreach ($vornameArray as $vorname) {
    echo $vorname . NL;
}
echo NL;
$i = 0;
while ($i < count($vornameArray)) {
    echo $i . ' ' . $vornameArray[ $i ] . NL;
    $i++;
}
echo NL;
for ($i = 0; $i < count($vornameArray); $i++) {
    echo $i . ' ' . $vornameArray[ $i ] . NL;
}

//3.Möglichkeit
$vornameArray = array();
$vornameArray[] = "Peter";
$vornameArray[] = "Markus";
$vornameArray[] = "Jens";
$vornameArray[] = "Julia";
$vornameArray[] = "Monika";
$vornameArray[] = "Gerd";


var_dump($vornameArray);
echo NL;
print_r($vornameArray);
echo NL;
echo $vornameArray[ 1 ];
echo NL;
echo 'Anzahl der Einträge:' . count($vornameArray);
echo NL;

foreach ($vornameArray as $vorname) {
    echo $vorname . NL;
}
echo NL;
$i = 0;
while ($i < count($vornameArray)) {
    echo $i . ' ' . $vornameArray[ $i ] . NL;
    $i++;
}
echo NL;
for ($i = 0; $i < count($vornameArray); $i++) {
    echo $i . ' ' . $vornameArray[ $i ] . NL;
}
echo NL;
//4.Möglichkeit
function test(...$args)
{
    var_dump($args);
}

test(1, 2, 3,4);

echo NL;
//5.Möglichkeit
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = [...$arr1, ...$arr2];
$arr4 = [...$arr1, ...$arr3, 7, 8, 9];
echo NL;
print_r($arr4);

//6.Möglichkeit
echo NL;
function buildArray()
{
    return ['red', 'green', 'blue'];
}

$arr1 = [...buildArray(), 'pink', 'violet', 'yellow', 'black'];
print_r($arr1);

//6.Möglichkeit
echo NL;

$parts = ['apple', 'pear'];
$fruits = ['banana', 'orange', ...$parts, 'watermelon'];
var_dump($fruits);

//7.Möglichkeit
echo NL;

function generator() {
    for ($i = 3; $i <= 9; $i++) {
        yield $i;
    }
}
$arr1 = [0, 1, 2, ...generator()];
print_r($arr1);
