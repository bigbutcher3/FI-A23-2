<?php
    $passwoerter = array(
    	'bernd'   => 'geheim',
        'klaus'   => 'sehrgeheim',
        'claudia' => '12345',
        'sabine'  => 'sagnix'
    );
    
    $values_passwoerter = array_values($passwoerter);
    var_dump($values_passwoerter);  
?>