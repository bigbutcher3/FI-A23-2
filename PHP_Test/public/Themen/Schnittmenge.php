<?php
$titel = "Schnittmenge";
require_once "../template/head.tpl.php";

$menge2 = array(2,2,3,5,11,19);
$menge1 = array(3,3,3,5,7,11);
$schnittmenge = array();

foreach ($menge1 as $m) {
    if (in_array($m, $menge2)) {
        if (!in_array($m, $schnittmenge)) {
            $schnittmenge[] += $m;
        }
    }
}
echo "menge1: ";
print_r($menge1);
echo "<br>";
echo "menge2: ";
print_r($menge2);
echo "<br>";
echo "schnittmenge: ";
print_r($schnittmenge);

require_once "../template/footer.tpl.html";
