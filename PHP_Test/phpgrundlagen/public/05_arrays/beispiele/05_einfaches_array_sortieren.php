<?php
   $tp = array(17.5,19.2,21.8,21.6,17.5,20.2,16.6);
   sort($tp);
   for($i=0; $i<=6; $i++) echo "$tp[$i] / ";
   echo "<p>";
   rsort($tp);
   for($i=0; $i<=6; $i++) echo "$tp[$i] / ";

