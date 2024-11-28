<?php
/**
 * Created by PhpStorm.
 * User: maurerd
 * Date: 16.06.2017
 * Time: 11:14
 */
$adress = array();
$min = 0;
$adress = unserialize(file_get_contents('adress.txt'));
echo '<pre>';
print_r($adress);
/*$min = $adress['alter'][0];
for($i=0; $i<count($adress['alter']);$i++){
    if($adress['alter'][$i]<=$min){
        $min = $adress['alter'][$i];
    }
}
echo $min;*/

foreach ($adress as $schluessel=>$wert){

    echo $wert;
}