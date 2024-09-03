<?php

$einer = array(
    '',
    'I',
    'II',
    'III',
    'IV',
    'V',
    'VI',
    'VII',
    'VIII',
    'IX'
);

$zehner = array(
    '',
    'X',
    'XX',
    'XXX',
    'XL',
    'L',
    'LX',
    'LXX',
    'LXXX',
    'XC'
);

$hunderter = array(
    '',
    'C',
    'CC',
    'CCC',
    'CD',
    'D',
    'DC',
    'DCC',
    'DCCC',
    'CM'
);

$tausender = array(
    '',
    'M',
    'MM',
    'MMM'
);

$jahr = array(0,0,7,9);

$rom = array($tausender[$jahr[0]], $hunderter[$jahr[1]], $zehner[$jahr[2]], $einer[$jahr[3]]);

foreach ($jahr as $item) {
    echo $item;
}
echo "<br>";
foreach ($rom as $r) {
    echo $r;
}
