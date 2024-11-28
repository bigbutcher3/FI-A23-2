<?php
require_once __DIR__.'/../config.php';
require_once PATHTEMPLATE.'head.tpl.php';
echo '<h4>Die for-Anweisung</h4>';
   for ($z=1; $z<=5; $z=$z+1)
   {
      for ($s=1; $s<=3; $s=$s+1)
      {
         echo "Ze$z/Sp$s ";
      }
      echo "<p>";
   }
require_once PATHTEMPLATE.'footer.tpl.html';