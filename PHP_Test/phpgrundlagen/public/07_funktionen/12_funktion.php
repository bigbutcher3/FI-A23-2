<?php
require_once '../config.php';
require_once PATHTEMPLATE.'head.tpl.php';
   function summiere()
   {
      #global $z;
      echo "Variable z: $z<p>";
      global $x;
      $y = 35;
      $z = $x + $y;
      echo "Variable z: $z<p>";
   }

      $x = 6;
      $y = 52;
      $z = $x + $y;
      summiere();
      echo "Variable z: $z<p>";
require_once PATHTEMPLATE.'footer.tpl.html';