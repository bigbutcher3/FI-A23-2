<?php
echo '<pre>';
//1.Möglichkeit
$ortArray = array('Schmidt'=> 'Halle','Schnabel'=> 'Berlin','Lehmann'=> 'Leipzig','Maurer'=> 'Magdeburg');
    foreach ($ortArray as $ort=>$value){
        echo $ort.'--'.$value.'<br>';

}
//2.Möglichkeit
$ortArray['Schmidt'] = 'Halle';
$ortArray['Schnabel'] = 'Berlin';
$ortArray['Lehmann'] = 'Leipzig';
$ortArray['Maurer'] = 'Magdeburg';

foreach ($ortArray as $ort=>$value){
    echo $ort.'--'.$value.'<br>';
}

//3.Möglichkeit
$vornameArray['Schmidt'] = array("Peter", "03114", "Berlin");
$vornameArray['Maurer'] = array("Sven", "05634", "Magdeburg");
$vornameArray['Lehmann'] = array("Katrin", "04976", "Leipzig");
$vornameArray['Schnabel'] = array("Ina", "08875", "Jena");


var_dump($vornameArray);
echo '<br>';
print_r($vornameArray);
echo '<br>';

echo $vornameArray['Schmidt'][1];


echo '<br>';
echo 'Anzahl der Einträge:' . count($vornameArray);
echo '<br>';

echo '<br>';
echo 'Anzahl der Datensätz:' . count($vornameArray['Schmidt']);
echo '<br>';


foreach ($vornameArray['Schmidt'] as $datensaetze) {
    echo $datensaetze.'<br>';
}
echo '<br>';


$i = 0;
while ($i < count($vornameArray['Schmidt'])) {
    echo $vornameArray['Schmidt'][$i];
    $i++;
}
echo '<br>';

for ($i = 0; $i < count($vornameArray['Schmidt']); $i++) {
    echo $vornameArray['Schmidt'][$i];
}

//4.Möglichkeit
$vornameArray['Schmidt']= array();
$vornameArray['Schmidt'][] = "Peter";
$vornameArray['Schmidt'][] = "03114";
$vornameArray['Schmidt'][] = "Berlin";

$vornameArray['Maurer']= array();
$vornameArray['Maurer'][] = "Sven";
$vornameArray['Maurer'][] = "05634";
$vornameArray['Maurer'][] = "Magdeburg";

$vornameArray['Lehmann']= array();
$vornameArray['Lehmann'][] = "Katrin";
$vornameArray['Lehmann'][] = "04976";
$vornameArray['Lehmann'][] = "Leipzig";

$vornameArray['Schnabel']= array();
$vornameArray['Schnabel'][] = "Ina";
$vornameArray['Schnabel'][] = "08875";
$vornameArray['Schnabel'][] = "Jena";



var_dump($vornameArray);
echo '<br>';
print_r($vornameArray);
echo '<br>';

echo $vornameArray['Schmidt'][1];


echo '<br>';
echo 'Anzahl der Einträge:' . count($vornameArray);
echo '<br>';

echo '<br>';
echo 'Anzahl der Datensätz:' . count($vornameArray['Schmidt']);
echo '<br>';


foreach ($vornameArray['Schmidt'] as $datensaetze) {
    echo $datensaetze.'<br>';
}
echo '<br>';


$i = 0;
while ($i < count($vornameArray['Schmidt'])) {
    echo $vornameArray['Schmidt'][$i];
    $i++;
}
echo '<br>';

for ($i = 0; $i < count($vornameArray['Schmidt']); $i++) {
    echo $vornameArray['Schmidt'][$i];
}
