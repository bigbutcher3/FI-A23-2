<?php
require_once __DIR__.'/../config.php';
require_once PATHTEMPLATE.'head.tpl.php';
echo '<h4>Die while-Anweisung</h4>';
   srand((double)microtime()*1000000);
   $summe = 0;
   $zaehler = 0;

   while ($summe < 30)
   {
      $zufallszahl = rand(1,6);
      $summe = $summe + $zufallszahl;
      $zaehler = $zaehler + 1;
      echo "Nr. $zaehler, Zahl $zufallszahl, Summe $summe<p>";
      if ($zaehler >= 9) break;       // Sonderfall
   }
require_once PATHTEMPLATE.'footer.tpl.html';