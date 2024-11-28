<?php
    $variable = array(5 => 1, 2, 3, 4);
    
    $variable[] = 5;
    $variable[] = 10;

    // gibt den ersten Wert (also 1) aus
    echo array_shift($variable);
?>