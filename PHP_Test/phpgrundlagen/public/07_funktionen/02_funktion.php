<?php
require_once '../config.php';
require_once PATHTEMPLATE.'head.tpl.php';
   function trennstrich(int $anzahl)
   {
      echo "<br>";
      for ($i=1; $i<=$anzahl; $i++)
      {
         echo "-";
      }
      echo "<br>";
   }

   trennstrich(30);
   echo "In diesem Programm,";
   trennstrich(40);
   echo "sind die Trennstriche";
   $x = 20;
   trennstrich($x);
   echo "unterschiedlich lang";
   trennstrich($x * 3);
   require_once PATHTEMPLATE.'footer.tpl.html';
?>
