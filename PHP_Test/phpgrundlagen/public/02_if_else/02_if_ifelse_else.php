<?php
require_once __DIR__.'/../config.php';
require_once PATHTEMPLATE.'head.tpl.php';
$stimmung = "traurig";
if ($stimmung == "froh") {
    print "Super, ich bin gut drauf!";
} elseif ($stimmung == "traurig") {
    print "Ach, mach dir nichts draus.";
} else {
    print "Ich bin weder froh noch traurig sondern $stimmung.";
}
require_once PATHTEMPLATE.'footer.tpl.html';