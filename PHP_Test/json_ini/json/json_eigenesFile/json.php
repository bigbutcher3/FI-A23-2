<?php

echo json_encode(array('Lehmann', 'Sven', 'Halle'));
echo '<br><br><br>';
file_put_contents('arrayJson.json',json_encode(array('Lehmann', 'Sven', 'Halle')));


echo json_encode(array('name' => 'Lehmann', 'vorname' => 'Sven', 'ort' => 'Halle'));
echo '<br><br><br>';
file_put_contents('arrayAssoJson.json',json_encode(array('name' => 'Lehmann', 'vorname' => 'Sven', 'ort' => 'Halle')));

$kundenArray[] = array("Peter", "Schmidt", "Berlin");
$kundenArray[] = array('Sven', 'Maurer', 'Magdeburg');
$kundenArray[] = array('Katrin', 'Lehmann', 'Leipzig');
$kundenArray[] = array('Ina', 'Schnabel', 'Jena');

echo json_encode($kundenArray);
file_put_contents('arrayZweiJson.json',json_encode($kundenArray));
echo '<br><br><br>';

$kunden[] = array('vorname' => 'Peter', 'name' => 'Schmidt', 'ort' => 'Berlin');
$kunden[] = array('vorname' => 'Sven', 'name' => 'Maurer', 'ort' => 'Magdeburg');
$kunden[] = array('vorname' => 'Katrin', 'name' => 'Lehmann', 'ort' => 'Leipzig');
$kunden[] = array('vorname' => 'Ina', 'name' => 'Schnabel', 'ort' => 'Jena');

echo json_encode($kunden);
file_put_contents('arrayZweiAssJson.json',json_encode($kunden));
echo '<br><br><br>';
