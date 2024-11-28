<?php
require_once __DIR__.'/../config.php';
require_once PATHTEMPLATE.'head.tpl.php';
echo "<h5>Eine verschaltete Schleife.</h5>
<table class='table'>";
for ($y = 1; $y <= 13; $y++) {
    echo "<tr>";
    for ($x = 1; $x <= 13; $x++) {

        echo "<td>" . $x * $y . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
require_once PATHTEMPLATE.'footer.tpl.html';

