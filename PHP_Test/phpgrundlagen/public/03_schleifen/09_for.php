<?php
require_once __DIR__.'/../config.php';
require_once PATHTEMPLATE.'head.tpl.php';
echo '<h4>Die for-Anweisung</h4>';
for ($zaehler = 1; $zaehler <= 10; $zaehler++) {
    $temp = 4000 / $zaehler;
    print "4000 geteilt durch $zaehler ist ... $temp<br>";
}
require_once PATHTEMPLATE.'footer.tpl.html';
