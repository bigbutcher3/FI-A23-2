<?php
require_once '../../config.php';
require_once PATHTEMPLATE.'head.tpl.php';
   $fp = array(array("Hersteller"=>"Quantum", "Typ"=>"Fireball CX", "MB"=>6400, "Preis"=>215, "Artikelnummer"=>"HDA-208"),
                 array("Hersteller"=>"Quantum", "Typ"=>"Fireball Plus", "MB"=>9100, "Preis"=>269, "Artikelnummer"=>"HDA-163"),
                 array("Hersteller"=>"Fujitsu", "Typ"=>"MPE 3136", "MB"=>13600, "Preis"=>275, "Artikelnummer"=>"HDA-171"),
                 array("Hersteller"=>"Seagate", "Typ"=>"310232A", "MB"=>10200, "Preis"=>245, "Artikelnummer"=>"HDA-144"));



foreach ($fp as $festpl) {
    foreach ($festpl as $item => $value)
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