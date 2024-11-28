<?php
$produkte = array(
    'HAL 2000' => array('farbe' => 'red', 'preis' => 4500.5),
    'Tricorder' => array('farbe' => 'blue', 'preis' => 55.5),
    'ORAC AI' => array('farbe' => 'green', 'preis' => 2200.5),
    'Sonic Screwdriver' => array('farbe' => 'red', 'preis' => 22.5)
);
function preisVergleich($a, $b)
{
    if ($a[ 'preis' ] == $b[ 'preis' ])
        return 0;
    return ($a['preis'] < $b['preis'] ) ? -1 : 1;
}

uasort($produkte, 'preisVergleich');
foreach ($produkte as $schluessel => $wert)
    echo "$schluessel: $wert[farbe]<BR>\n";
