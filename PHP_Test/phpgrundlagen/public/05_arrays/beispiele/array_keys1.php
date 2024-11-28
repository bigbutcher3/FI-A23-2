<?php
    $staedte = array(
        'Hamburg',
        'München', 
        'Stuttgart',
        'Köln',
        'Frankfurt',
        'Berlin'
    );
    
    $passwoerter = array(
        'bernd'   => 'geheim',
        'klaus'   => 'sehrgeheim',
        'claudia' => '12345',
        'sabine'  => 'sagnix'
    );
    
    $keys_staedte     = array_keys($staedte);
    $keys_passwoerter = array_keys($passwoerter);
?>
<pre><?php var_dump($keys_staedte); ?></pre>
<pre><?php var_dump($keys_passwoerter); ?></pre>