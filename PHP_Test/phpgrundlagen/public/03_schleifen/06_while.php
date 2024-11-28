<?php
require_once __DIR__.'/../config.php';
require_once PATHTEMPLATE.'head.tpl.php';
echo '<h4>Die while-Anweisung</h4>';
$zaehler = 1;
while ($zaehler <= 12) {
    print "$zaehler mal 2 ist " . ($zaehler * 2) . "<br>";
    $zaehler++;
}

require_once PATHTEMPLATE.'footer.tpl.html';
