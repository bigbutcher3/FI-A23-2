<?php
require_once '../config.php';
require_once PATHTEMPLATE.'head.tpl.php';
   function bigger(int $x, int $y):int
   {
      if ($x > $y) $ergebnis = $x;
      else $ergebnis = $y;
      return $ergebnis;
   }

   $c = bigger(3,4);
   echo "Maximum: $c<p>";

   $x = 5;
   $c = bigger($x,12);
   echo "Maximum: $c<p>";

   echo "Maximum: " . bigger(13,2) . "<p>";
require_once PATHTEMPLATE.'footer.tpl.html';