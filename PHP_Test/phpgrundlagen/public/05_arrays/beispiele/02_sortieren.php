<?php
$vorname = array("Peter" => 35, "Markus" => 15, "Jens" => 18, "Julia" => 60, "Monika" => 5, "Gerd" => 55);
$alter = $vorname['Peter'];
$posmin = '';
foreach ($vorname as $schluessel => $wert) {
    #Ausgabe Vorname ->   echo $schluessel;
    #Ausgabe Alter->      echo $wert;
    if ($wert <= $alter){
        $alter = $wert;
        $posmin= $schluessel;
    }
  }



 echo "$posmin, $alter Jahre, ist der jüngste von allen";
