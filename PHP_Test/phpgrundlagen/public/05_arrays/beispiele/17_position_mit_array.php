
<?php
   $f = array("a", "b", "c", "d", "e", "f", "g");
   echo("Vollständiges Array: ");
   foreach($f as $w) echo "$w, ";
   echo("<p>");

   $tf = array_slice($f,3);
   echo("Teil-Array ab Position 3: ");
   foreach($tf as $w) echo "$w, ";
   echo("<p>");

   $tf = array_slice($f,-3);
   echo("Teil-Array ab Position 3, vom Ende aus gerechnet: ");
   foreach($tf as $w) echo "$w, ";
   echo("<p>");

   $tf = array_slice($f,3,2);
   echo("Teil-Array ab Position 3, zwei Elemente: ");
   foreach($tf as $w) echo "$w, ";
   echo("<p>");
