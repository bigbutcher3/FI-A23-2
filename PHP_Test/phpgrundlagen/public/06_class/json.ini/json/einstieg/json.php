<?php

$testArray = array('Lehmann','Sven','Halle');
foreach ($testArray as $value)
{
    echo $value;
}


/*echo $testArray[0];*/
echo '<pre>';
print_r($testArray);
echo '</pre>';
$jsonTest = json_encode($testArray);
echo $jsonTest;

echo '<pre>';
print_r(json_decode($jsonTest));
echo '</pre>';

$testArray = array('name'=>'Lehmann','vorname'=>'Sven','ort'=>'Halle');
/*echo $testArray['name'];*/
foreach ($testArray as $item=>$value)
{
    echo $value;
}
echo '<br>';
$jsonTest = json_encode($testArray);
echo $jsonTest;


echo '<pre>';
print_r($testArray);
echo '</pre>';
$vornameArray[] = array("Peter", "Schmidt", "Berlin");
$vornameArray[] = array('Sven', 'Maurer', 'Magdeburg');
$vornameArray[] = array('Katrin', 'Lehmann', 'Leipzig');
$vornameArray[] = array('Ina', 'Schnabel', 'Jena');

echo '<pre>';
print_r($vornameArray);
echo '</pre>';
echo '<br>';
$jsonTest = json_encode($vornameArray);
echo $jsonTest;



$vornameArray1[] = array('vorname'=>'Peter', 'name'=>'Schmidt', 'ort'=>'Berlin');
$vornameArray1[] = array('vorname'=>'Sven', 'name'=>'Maurer', 'ort'=>'Magdeburg');
$vornameArray1[] = array('vorname'=>'Katrin', 'name'=>'Lehmann', 'ort'=>'Leipzig');
$vornameArray1[] = array('vorname'=>'Ina', 'name'=>'Schnabel', 'ort'=>'Jena');

echo '<pre>';
print_r($vornameArray1);
echo '</pre>';
echo '<br>';
$jsonTest = json_encode($vornameArray1);
echo $jsonTest;
echo '<br>';
foreach ($vornameArray1 as $item){
    foreach ($item as $key=>$value){
        echo $value;
    }
}
echo '<br>';
foreach ($vornameArray1[0] as $item){
   echo $item;
}
echo '<br>';
foreach ($vornameArray1 as $item){
    echo $item['name'];
}
echo '<br>';
foreach ($vornameArray1 as $item){
    echo $item['ort'];
}