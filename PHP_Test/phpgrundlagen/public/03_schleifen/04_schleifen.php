<?php
require_once __DIR__.'/../config.php';
require_once PATHTEMPLATE.'head.tpl.php';
echo '<h4>Die while-Anweisung</h4>';
   // Initialisierung
   srand((double)microtime()*1000000);
   $summe = 0;

   while ($summe < 30)
   {
      $zufallszahl = rand(1,4);       // Würfel
      $summe += $zufallszahl;
      echo "Zahl $zufallszahl, Summe $summe<p>";
   }
require_once PATHTEMPLATE.'footer.tpl.html';