<?php
echo "<pre>";

$buchstabenAusgabe_l[] = '';
$buchstabenArray = range('A', 'Z');
$test = 'H';
$i = 0;

while (!in_array($test, $buchstabenAusgabe_l)) {
    break;
}

//print_r($buchstabenArray);
foreach ($buchstabenArray as $buchstabe) {
    echo /*'☺'.*/$buchstabe.'<br>';
}