<?php
    $werte = array(1, 2, 3, 4);
    
    $werte[] = 5;
    $werte[] = 10;

    $schluessel = array_keys($werte);

    // gibt den höchsten Schlüssel (hier 5) aus
    echo array_pop($schluessel);
?>