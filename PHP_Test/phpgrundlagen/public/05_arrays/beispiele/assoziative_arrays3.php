<?php
$adresse['name'][0] = 'Claudia Mustermann';
$adresse['straße'][0] = 'Musterstraße 0';
$adresse['plz'][0] = '00000';
$adresse['ort'][0] = 'Musterstadt';
$adresse['mail'][0] = 'info@mustermann.de';

$adresse['name'][1] = 'Dieter Hinz';
$adresse['straße'][1] = 'Hinzstraße 0';
$adresse['plz'][1] = '11111';
$adresse['ort'][1] = 'Hinzstadt';
$adresse['mail'][1] = 'dieter.hinz@bla.de';


#foreach ($adresse['name'] as $name) {
 #   echo $name;
#}


/*foreach($adresse as $key => $value)
{
    foreach ($value as $test)
    echo $key.'-'.$test.'<br>';
}
$unternehmen = array(
    "Vertrieb" => array("Klaus", "Lisa", "Lea"),
    "Produktion" => array("Peter", "Max")
);

foreach($unternehmen AS $abteilung => $mitarbeiter_der_abteilung) {
    echo "Mitarbeiter der Abteilung: $abteilung <br>";
    foreach($mitarbeiter_der_abteilung AS $mitarbeiter) {
        echo "$mitarbeiter <br>";
    }
    echo "<br>";
}*/
/*
$adresse['name'] = 'Claudia Mustermann';
$adresse['straße'] = 'Musterstraße 0';
$adresse['plz'] = '00000';
$adresse['ort'] = 'Musterstadt';
$adresse['mail'] = 'info@mustermann.de';
foreach($adresse as $key => $value)
{
    echo $key.'-'.$value.'<br>';
}
#$multiplex[12][7][8] = 'Mein Platz';

#echo $multiplex[12][7][8];
#print_r ($_SERVER);
#var_dump($_SERVER);*/
$adresse[0]['Name'] = 'Claudia Mustermann';
$adresse[0]['Straße'] = 'Musterstraße 0';
$adresse[0]['PLZ'] = '00000';
$adresse[0]['Ort'] = 'Musterstadt';
$adresse[0]['mail'] = 'info@mustermann.de';

$adresse[1]['Name'] = 'Dieter Hinz';
$adresse[1]['Straße'] = 'Hinzstraße 0';
$adresse[1]['PLZ'] = '11111';
$adresse[1]['Ort'] = 'Hinzstadt';
$adresse[1]['mail'] = 'dieter.hinz@bla.de';





foreach($adresse[0] as $key => $val) {
    echo $key.'-'. $val.'<br>';
}



while (list($key, $val) = each($adresse[1])) {
    echo $key.'_'.$val;
}
?>




