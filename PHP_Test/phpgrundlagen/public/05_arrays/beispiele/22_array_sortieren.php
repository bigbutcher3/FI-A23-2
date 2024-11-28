<?php
$produkte = array(
        array( 'name'=>'HAL 2000',          'preis'=>4500.5  ),
        array( 'name'=>'Tricorder',         'preis'=>55.5    ),
        array( 'name'=>'ORAC AI',           'preis'=>2200.5  ),
        array( 'name'=>'Sonic Screwdriver', 'preis'=>22.5    )
        );
function preisVergleich( $a, $b )
{
    if ( $a['preis'] == $b['preis'] )
        return 0;
    return ($a['preis'] < $b['preis'] ) ? -1 : 1;
}
#Die Vergleichsfunktion muss einen Integer kleiner als, gleich oder größer als Null zurückgeben, wenn das erste Argument respektive kleiner, gleich oder größer als das zweite ist.
usort( $produkte, 'preisVergleich' );
foreach ( $produkte as $wert )
    print "$wert[name]: $wert[preis]<BR>\n";