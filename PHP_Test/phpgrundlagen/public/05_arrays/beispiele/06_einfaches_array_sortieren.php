<?php
   $vorname = array("Peter", "Markus", "Jens", "Julia", "Monika", "Gerd");
   $alter = array(35,42,16,17,42,55);
   sort($vorname);
   for($i=0; $i<=5; $i=$i+1) echo "$vorname[$i], ";
   echo "<p>";
   rsort($alter);
   for($i=0; $i<=5; $i=$i+1) echo "$alter[$i], ";

