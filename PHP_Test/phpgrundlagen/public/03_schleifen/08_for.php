<?php
require_once __DIR__.'/../config.php';
require_once PATHTEMPLATE.'head.tpl.php';
echo '<h4>Die for-Anweisung</h4>';
for($zaehler=1; $zaehler<=12; $zaehler++) {
        print "$zaehler mal 2 ist ".($zaehler*2)."<br>";
}

require_once PATHTEMPLATE.'footer.tpl.html';
