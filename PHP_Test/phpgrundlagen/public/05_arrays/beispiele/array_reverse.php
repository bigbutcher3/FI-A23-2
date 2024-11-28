<?php
    $staedte = array(
        'Hamburg',
        'München', 
        'Stuttgart',
        'Köln',
        'Frankfurt',
        'Berlin'
    );
    
    $staedte_umgedreht = array_reverse($staedte);
?>
<pre><?php var_dump($staedte_umgedreht); ?></pre>