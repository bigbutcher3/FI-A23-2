<?php
   $vorname = array("Peter", "Markus", "Jens", "Julia", "Monika", "Gerd","Lehmann");
   $alter = array(35,42,16,17,42,55,5);
   $min = $alter[0];
   
   $posmin = 0;

   for($i=1; $i<count($vorname); $i++)
   {
      if ($alter[$i] <= $min)
      {
         $min = $alter[$i];
         $posmin = $i;
      }
   }

   echo "$vorname[$posmin], $min Jahre, ist der jüngste von allen";
