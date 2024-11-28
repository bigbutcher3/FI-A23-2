<?php
   $tp["Montag"] = 17.5;
   $tp["Dienstag"] = 19.2;
   $tp["Mittwoch"] = 21.8;
   $tp["Donnerstag"] = 21.6;
   $tp["Freitag"] = 17.5;
   $tp["Samstag"] = 21.8;
   $tp["Sonntag"] = 16.6;

   echo "Der gesamte Array: ";
   foreach($tp as $x => $w) echo "$x => $w, ";
   echo "<p>";

   echo "Alle Keys in einem neuen Array: ";
   $tpkeys = array_keys($tp);
   foreach($tpkeys as $w) echo "$w, ";
   echo "<p>";

   echo "Alle Keys mit bestimmtem Wert in neuen Array: ";
   $tpspec = array_keys($tp,21.8);
   foreach($tpspec as $w) echo "$w, ";
   echo "<p>";

   echo "Alle Werte in einem neuen Array: ";
   $tpvalues = array_values($tp);
   foreach($tpvalues as $w) echo "$w, ";
   echo "<p>";

   /* Suche */
   $such = 21.8;
   if(in_array($such,$tp))
      echo "Gesuchter Wert $such ist vorhanden<p>";
   else
      echo "Gesuchter Wert $such ist nicht vorhanden<p>";

   $such = 12.3;
   if(in_array($such,$tp))
      echo "Gesuchter Wert $such ist vorhanden<p>";
   else
      echo "Gesuchter Wert $such ist nicht vorhanden<p>";

   echo "Häufigkeit feststellen:<br>";
   echo "Der gesamte Array: ";
   $tpx = array(17,19,21,21,17,22,16,18,17,22,26);
   for($i=0; $i<sizeof($tpx); $i++)
   {
      echo "$tpx[$i], ";
   }
   $freq = array_count_values($tpx);
   foreach($freq as $x => $w) echo "<br>$x kommt $w mal vor";

