<?php
require_once __DIR__.'/../config.php';
require_once PATHTEMPLATE.'head.tpl.php';
echo '<h4>Die for-Anweisung</h4>';
   for ($i=13; $i<=29; $i=$i+4)
   {
      echo "$i ";
   }
   echo "<p>";

   for ($i=2; $i>=-1; $i=$i-0.5)
   {
      echo "$i ";
   }
   echo "<p>";

   for ($i=2000; $i<=6000; $i=$i+1000)
   {
      echo "$i ";
   }
   echo "<p>";

   for ($i=5; $i<=13; $i=$i+2)
   {
      echo "Z$i ";
   }
   echo "<p>";

   for ($i=1; $i<=3; $i=$i+1)
   {
      echo "a b$i ";
   }
   echo "<p>";

   for ($i=2; $i<=22; $i=$i+10)
   {
      $k = $i + 1;
      echo "c$i c$k ";
   }
   echo "<p>";

   for ($i=13; $i<=45; $i=$i+4)
   {
      if ($i<=21 || $i>=33) echo "$i ";
   }
require_once PATHTEMPLATE.'footer.tpl.html';