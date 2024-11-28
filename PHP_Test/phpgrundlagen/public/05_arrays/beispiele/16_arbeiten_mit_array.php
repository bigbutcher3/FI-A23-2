<?php
   echo "<p>merge bei assoziativen Arrays<br>";
   $tpa["Montag"] = 10;
   $tpa["Dienstag"] = 11;
   $tpa["Mittwoch"] = 12;

   $tpb["Montag"] = 13;
   $tpb["Freitag"] = 14;
   $tpb["Samstag"] = 15;

   $tpc["Samstag"] = 16;
   $tpc["Sonntag"] = 17;

   echo "Array tpa: ";
   foreach($tpa as $x => $w) echo "$x => $w, ";
   echo "<br>";

   echo "Array tpb: ";
   foreach($tpb as $x => $w) echo "$x => $w, ";
   echo "<br>";

   echo "Array tpc: ";
   foreach($tpc as $x => $w) echo "$x => $w, ";
   echo "<br>";

   $tp = array_merge($tpa, $tpb, $tpc);
   echo "resultierender Array tp:<br>";
   foreach($tp as $x => $w) echo "$x => $w, ";

   echo "<p>merge bei numerischen Arrays<br>";
   $fa = array(10, 11, 12);
   $fb = array(13, 14, 15);
   $fc = array(16, 17);

   echo "Array fa: ";
   foreach($fa as $x => $w) echo "$x => $w, ";
   echo "<br>";

   echo "Array fb: ";
   foreach($fb as $x => $w) echo "$x => $w, ";
   echo "<br>";

   echo "Array fc: ";
   foreach($fc as $x => $w) echo "$x => $w, ";
   echo "<br>";

   $f = array_merge($fa, $fb, $fc);
   echo "resultierender Array f:<br>";
   foreach($f as $x => $w) echo "$x => $w, ";
