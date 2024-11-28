<?php
require_once '../config.php';
require_once PATHTEMPLATE.'head.tpl.php';
   function etikett(string $vn, string $nn,string $plz,string $ort):string
   {
      $erg1 = "An<br>$vn $nn<br>$plz $ort";
      return $erg1;
   }

   $meinvorname = "Max";
   $meinnachname = "Müller";
   $meineplz = '02699';
   $meinestadt = "Obertupfingen";
   $ausgabe = etikett($meinvorname, $meinnachname, $meineplz, $meinestadt);
   echo "<p>$ausgabe";

   $ausgabe = etikett("Julia", "Maier", 56601, "Düsseldorf");
   echo "<p>$ausgabe";

   $ausgabe = etikett($meinvorname, $meinnachname, 57433,"Düsseldorf");
   echo "<p>$ausgabe";
require_once PATHTEMPLATE.'footer.tpl.html';