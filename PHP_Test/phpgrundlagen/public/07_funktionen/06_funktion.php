<?php
require_once '../config.php';
require_once PATHTEMPLATE.'head.tpl.php';
function dev(string $vname, string $nname, string $firma, string $stadt, int $g)
{
    if ($g == 1) {
        $gtext = "Frau";
    } else {
        $gtext = "Herrn";
    }
    $ausgabe = "Dieses Programm ist von $gtext $vname $nname, ";
    $ausgabe .= "$firma in $stadt";
    echo "$ausgabe<p>";
}

$meinvorname = "Max";
$meinnachname = "Müller";
$meinefirma = "Quadro GmbH";
$meinestadt = "Obertupfingen";
dev($meinvorname, $meinnachname, $meinefirma, $meinestadt, 2);

dev("Julia", "Maier", "Siemens", "Düsseldorf", 1);
dev($meinvorname, $meinnachname, "Siemens", "Düsseldorf", 2);
require_once PATHTEMPLATE.'footer.tpl.html';