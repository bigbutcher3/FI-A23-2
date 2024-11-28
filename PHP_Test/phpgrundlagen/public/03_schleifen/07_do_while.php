<?php
require_once __DIR__.'/../config.php';
require_once PATHTEMPLATE.'head.tpl.php';
echo '<h4>Die do-while-Anweisung</h4>';
$num = 1;
do {
    print "Laufende Nummer: " . $num . "<br>\n";
    $num++;
} while ($num < 200);

require_once PATHTEMPLATE.'footer.tpl.html';
