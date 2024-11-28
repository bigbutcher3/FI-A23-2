<?php

$testArray = array('Lehmann','Sven','Halle');
foreach ($testArray as $value)
{
    echo $value;
}


/*echo $testArray[0];*/
echo '<pre>';
print_r($testArray);

$jsonTest = json_encode($testArray);
echo $jsonTest;

echo '<pre>';
print_r(json_decode($jsonTest));


$testArray = array('name'=>'Lehmann','vorname'=>'Sven','ort'=>'Halle');
/*echo $testArray['name'];*/
foreach ($testArray as $item=>$value)
{
    echo $value;
}



echo '<pre>';
print_r($testArray);

$vornameArray[] = array("Peter", "Schmidt", "Berlin");
$vornameArray[] = array('Sven', 'Maurer', 'Magdeburg');
$vornameArray[] = array('Katrin', 'Lehmann', 'Leipzig');
$vornameArray[] = array('Ina', 'Schnabel', 'Jena');

echo '<pre>';
print_r($vornameArray);

$vornameArray1[] = array('vorname'=>'Peter', 'name'=>'Schmidt', 'ort'=>'Berlin');
$vornameArray1[] = array('vorname'=>'Sven', 'name'=>'Maurer', 'ort'=>'Magdeburg');
$vornameArray1[] = array('vorname'=>'Katrin', 'name'=>'Lehmann', 'ort'=>'Leipzig');
$vornameArray1[] = array('vorname'=>'Ina', 'name'=>'Schnabel', 'ort'=>'Jena');

echo '<pre>';
print_r($vornameArray1);
