<?php
   function addiere()
   {
      $param = func_get_args();
      $anz = func_num_args();
      echo "Anzahl der Werte: $anz<br>";

      $sum = 0;
      for($i=0; $i<$anz; $i++)
      {
         $sum = $sum + $param[$i];
      }
      echo "Summe der Werte: $sum<p>";
   }

   addiere(2,3,6);
   addiere(13,26);
   addiere(65,-3,88,31,12.5,7);

