<?php
require_once '../config.php';
require_once PATHTEMPLATE.'head.tpl.php';
   function vtauschen(int $a,int $b):array
   {
      $temp = $a;
      $a = $b;
      $b = $temp;
      $rueck[]=$a;
      $rueck[]=$b;
      return $rueck;

   }

   function rtauschen(int &$a, int &$b)
   {
      $temp = $a;
      $a = $b;
      $b = $temp;
   }

   $x = 12;   $y = 18;
   echo "Methode 1, vorher: $x, $y <p>";
   $test = vtauschen($x,$y);

   echo "Methode 1, nachher: $test[0], $test[1] <p>";


   $x = 12;   $y = 18;
   echo "Methode 2, vorher: $x, $y <p>";
   rtauschen($x,$y);
   echo "Methode 2, nachher: $x, $y <p>";
require_once PATHTEMPLATE.'footer.tpl.html';
