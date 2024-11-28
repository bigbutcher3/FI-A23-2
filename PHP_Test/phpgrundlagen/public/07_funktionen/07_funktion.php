<?php
require_once '../config.php';
require_once PATHTEMPLATE.'head.tpl.php';
   function add(int $z1,int $z2):int
   {
      $summe = $z1 + $z2;
      return $summe;
   }

   $c = add(3,4);
   echo "Summe: $c<p>";

   $x = 5;
   $c= add($x,12);
   echo "Summe: $c<p>";

   echo "Summe: " . add(13,2) . "<p>";
require_once PATHTEMPLATE.'footer.tpl.html';