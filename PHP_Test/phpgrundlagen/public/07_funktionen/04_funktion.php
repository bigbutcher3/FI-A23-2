<?php
require_once '../config.php';
require_once PATHTEMPLATE.'head.tpl.php';
   function av(int $a, int $b, int $c)
   {
      $mw = ($a + $b + $c) / 3;
      echo "Der Mittelwert von $a, $b und $c ist $mw<p>";
   }

   av(4,7,7);
   av(44,69,1);
   av(-5,0,-13);
   av(1e-3,8e-3,3e-3);

   $x = 5;
   av($x,$x+3,$x-3);
   require_once PATHTEMPLATE.'footer.tpl.html';

