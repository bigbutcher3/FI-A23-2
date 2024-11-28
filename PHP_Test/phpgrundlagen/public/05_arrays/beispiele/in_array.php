<?php
    $staedte = array(
        'Hamburg',
        'München', 
        'Stuttgart',
        'Köln',
        'Frankfurt',
        'Berlin'
    );
    $test1 = 'Nürnberg';
    $test2 = 'Köln';
    $test3 = 'Dresden';
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8" />
    <title>in_array()</title>
</head>

<body>
    Die Stadt <?php echo $test1; ?> ist nicht in der Liste: 
    <?php echo in_array($test1, $staedte) ?><br />
    
    Die Stadt <?php echo $test2; ?> ist in der Liste: 
    <?php echo in_array($test2, $staedte) ?><br />
    
    Die Stadt <?php echo $test3; ?> ist nicht in der Liste: 
    <?php echo in_array($test3, $staedte) ?><br />
</body>

</html>