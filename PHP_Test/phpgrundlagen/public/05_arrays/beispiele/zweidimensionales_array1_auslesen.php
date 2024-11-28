<?php
    $zahlen = array(
        array(3, 5, 7, 12),
        array(2, 78, 96, 117),
        array(4, 45, 94, 101)
    );
    
    echo $zahlen[2][1] . ', '; // gibt 45 aus
    echo $zahlen[0][3] . ', '; // gibt 12 aus
    echo $zahlen[1][0] . ', '; // gibt 2 aus
    echo $zahlen[2][2];        // gibt 94 aus
?>