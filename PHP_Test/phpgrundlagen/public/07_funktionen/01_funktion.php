<?php
require_once '../config.php';
require_once 'trennstrich.php';
require_once PATHTEMPLATE.'head.tpl.php';
trennstrich();
echo "Dies ist ein Programm,";
trennstrich();
echo "in dem mehrmals";
trennstrich();
echo "eine Funktion verwendet wird,";
trennstrich();
echo "die zu Beginn definiert wurde";
trennstrich();
require_once PATHTEMPLATE.'footer.tpl.html';
?>
