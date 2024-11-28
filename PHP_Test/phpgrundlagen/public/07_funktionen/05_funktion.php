<?php
require_once '../config.php';
require_once PATHTEMPLATE.'head.tpl.php';
   function dev(string $vname, string $nname, string $firma, string $stadt)
   {
      $ausgabe = "Dieses Programm ist von $vname $nname, ";
      $ausgabe .= "$firma in $stadt";
      echo "$ausgabe<p>";
   }

   $meinvorname = "Max";
   $meinnachname = "Müller";
   $meinefirma = "Quadro GmbH";
   $meinestadt = "Obertupfingen";
   dev($meinvorname, $meinnachname, $meinefirma, $meinestadt);

   dev("Hans", "Maier", "Siemens", "Düsseldorf");
   dev($meinvorname, $meinnachname, "Siemens","Düsseldorf");
require_once PATHTEMPLATE.'footer.tpl.html';