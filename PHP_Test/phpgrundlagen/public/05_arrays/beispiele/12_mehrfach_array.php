<?php
require_once '../../config.php';
require_once PATHTEMPLATE.'head.tpl.php';
// 1. Zeile und 2. Zeile
$pers = array(array("Name" => "Maier",
    "Vorname" => "Hans",
    "Personalnummer" => 6714,
    "Gehalt" => 3500),
    array("Name" => "Schmitz",
        "Vorname" => "Peter",
        "Personalnummer" => 81343,
        "Gehalt" => 3750));


foreach ($pers as $perso) {
    foreach ($perso as $item => $value)
        {
            echo "<table class='table'>";
            echo "<tr>";
            echo "<td>$item:</td>";
            echo "<td>" . $value . "</td>";
            echo "</tr>";

            echo "</table>";
        }
        echo "<p>";
    }
    require_once PATHTEMPLATE.'footer.tpl.html';

