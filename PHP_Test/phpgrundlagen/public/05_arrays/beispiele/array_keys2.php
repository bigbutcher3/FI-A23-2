<?php
    $passwoerter = array(
        'bernd'   => 'geheim',
        'sabine'  => 'sagnix',
        'klaus'   => '12345',
        'claudia' => 'geheim'
    );
    
    $keys_geheim = array_keys($passwoerter, 'geheim');
?>
<pre><?php var_dump($keys_geheim); ?></pre>