<?php
   $f = array("a", "b", "c", "d", "e", "f", "g");
   echo("Vollständiges Array: ");
   foreach($f as $w) echo "$w, ";
   echo("<p>");
   $f_ori = $f;

   $z = array("p", "q", "r", "s");
   echo("Zusätzliches Array: ");
   foreach($z as $w) echo "$w, ";
   echo("<p>");

   $nf = array_splice($f,4,0,$z);
   echo("geändertes Array, zusätzliches Array wurde ab Position 3 eingefägt: ");
   foreach($f as $w) echo "$w, ";
   echo("<br>");
   echo("bei dieser Aktion entfernte Elemente: ");
   foreach($nf as $w) echo "$w, ";
   echo("<p>");

   $f = $f_ori;
   $nf = array_splice($f,3,2,$z);
   echo("geändertes Array, zusätzliches Array wurde ab Position 3 eingefägt, zwei Elemente wurden entfernt: ");
   foreach($f as $w) echo "$w, ";
   echo("<br>");
   echo("bei dieser Aktion entfernte Elemente: ");
   foreach($nf as $w) echo "$w, ";
   echo("<p>");

   $f = $f_ori;
   $nf = array_splice($f,3,count($f)-2,$z);
   echo("geändertes Array, zusätzliches Array wurde ab Position 3 eingefägt, Rest wurde entfernt: ");
   foreach($f as $w) echo "$w, ";
   echo("<br>");
   echo("bei dieser Aktion entfernte Elemente: ");
   foreach($nf as $w) echo "$w, ";
   echo("<p>");
