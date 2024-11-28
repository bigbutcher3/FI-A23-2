<?php
require_once '../config.php';
require_once PATHTEMPLATE.'head.tpl.php';
function flexloop(int $von, int $bis, int $schritt)
{
    echo "<br>Es folgt eine Schleife von $von";
    echo " bis $bis mit der Schrittweite $schritt<br>";
    for ($i = $von; $i <= $bis; $i = $i + $schritt) {
        echo "$i ";
    }
}

echo "<p>Nummer 1";
flexloop(5, 27, 3);

echo "<p>Nummer 2";
flexloop(-10, 10, 4);

echo "<p>Nummer 3";
$x = 100;
$y = 200;
$z = 10;
flexloop($x, $y, $z);

echo "<p>Nummer 4";
flexloop($x, $y, ($y - $x) / 20);
require_once PATHTEMPLATE.'footer.tpl.html';
?>
