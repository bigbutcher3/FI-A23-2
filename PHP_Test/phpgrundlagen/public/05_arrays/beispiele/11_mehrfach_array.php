<?php
   $fp = array(array("Quantum", "Fireball CX", 6400, 215, "HDA-208"),
                 array("Quantum", "Fireball Plus", 9100, 269, "HDA-163"),
                 array("Fujitsu", "MPE 3136", 13600, 275, "HDA-171"),
                 array("Seagate", "310232A", 10200, 245, "HDA-144"));

   for($i=0; $i<4; $i = $i+1)
   {
      for($k=0; $k<5; $k = $k+1)
      {
         echo $fp[$i][$k] . " ----";
      }
      echo "<p>";
   }

