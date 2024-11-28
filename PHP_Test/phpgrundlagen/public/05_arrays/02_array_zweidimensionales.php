<!DOCTYPE html>
<?php
echo '<pre>';
//1.Möglichkeit
$vornameArray[0] = array("Peter", "Schmidt", "Berlin");
$vornameArray[1] = array("Sven", "Maurer", "Magdeburg");
$vornameArray[2] = array("Katrin", "Lehmann", "Leipzig");
$vornameArray[3] = array("Ina", "Schnabel", "Jena");


var_dump($vornameArray);
echo '<br>';
print_r($vornameArray);
echo '<br>';

echo $vornameArray[0][1];


echo '<br>';
echo 'Anzahl der Einträge:' . count($vornameArray);
echo '<br>';

echo '<br>';
echo 'Anzahl der Datensätz:' . count($vornameArray[0]);
echo '<br>';


foreach ($vornameArray as $datensaetze) {
    foreach ($datensaetze as $daten) {
        echo $daten . '<br>';
    }
    echo '<br>';
}
echo '<br>';


$i = 0;
while ($i < count($vornameArray)) {
    $x = 0;
    while ($x <  count($vornameArray[$i])) {
        echo $i . ' ' . $vornameArray[$i][$x] . '<br>';
        $x++;
    }
    $i++;
    echo '<br>';
}
echo '<br>';

for ($i = 0; $i < count($vornameArray); $i++) {
    for ($x=0;$x<count($vornameArray[$i]);$x++)
    {
        echo $i . ' ' . $vornameArray[$i][$x] . '<br>';
    }
    echo '<br>';
}

//2.Möglichkeit

$vornameArray = array();
$vornameArray[] = array("Peter", "Schmidt", "Berlin");
$vornameArray[] = array("Sven", "Maurer", "Magdeburg");
$vornameArray[] = array("Katrin", "Lehmann", "Leipzig");
$vornameArray[] = array("Ina", "Schnabel", "Jena");


var_dump($vornameArray);
echo '<br>';
print_r($vornameArray);
echo '<br>';

echo $vornameArray[0][1];


echo '<br>';
echo 'Anzahl der Einträge:' . count($vornameArray);
echo '<br>';

echo '<br>';
echo 'Anzahl der Datensätz:' . count($vornameArray[0]);
echo '<br>';


foreach ($vornameArray as $datensaetze) {
    foreach ($datensaetze as $daten) {
        echo $daten . '<br>';
    }
    echo '<br>';
}
echo '<br>';


$i = 0;
while ($i < count($vornameArray)) {
    $x = 0;
    while ($x <  count($vornameArray[$i])) {
        echo $i . ' ' . $vornameArray[$i][$x] . '<br>';
        $x++;
    }
    $i++;
    echo '<br>';
}
echo '<br>';

for ($i = 0; $i < count($vornameArray); $i++) {
    for ($x=0;$x<count($vornameArray[$i]);$x++)
    {
        echo $i . ' ' . $vornameArray[$i][$x] . '<br>';
    }
    echo '<br>';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$a_Persons = array(
    array("Clementine","Doiron"),
    array("Wolfgang","Dresdner"),
    array("Ben","Jackson"),
    array("Matthew","Field"),
    array("Hana","Grubišić"),
    array("Joso","Jelić"),
    array("Christopher","Karns"),
    array("Cheryl","Costa"),
    array("Megan","Brennan"),
    array("Dinko","Đurić"),
    array("Dirk","König"),
    array("Kevin","Trice"),
    array("Saša","Jakšić"),
    array("Rudolf","Vidović"),
    array("Ines","Kuester"),
    array("Velimir","Tadić"),
    array("Ivan","Bunn"),
    array("Joy","Duplanty"),
    array("Mike","Battles"),
    array("Jacob","Murray"),
    array("Benoît","Gagné"),
    array("Vladimir","Topić"),
    array("Angela","Durr"),
    array("Elena","Vidović"),
    array("Saber","Proulx"),
    array("Isaac","Chadwick"),
    array("Neville","Carignan"),
    array("Bryan","Mollica"),
    array("Mojmir","Hrvatin")
);

##var_dump($a_Persons);

echo "<table class=\"w3-table-all w3-centered\">";
echo "<tr><th>Vorname</th><th>Nachname</th></tr>";
foreach ($a_Persons as $row) {
    echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td></tr>";
}
echo "</table>";
?>
</body>
</html>