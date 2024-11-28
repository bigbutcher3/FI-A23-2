<?php
$personen =
	array(
		array('name'=>"bob",
		      'beruf'=>"Held",
		      'alter'=>30,
		      'spezialitaet'=>"gammastrahlenfest"),
		array('name'=>"sally",
		      'beruf'=>"Heldin",
		      'alter'=>24,
		      'spezialitaet'=>"megastark"),
		array('name'=>"mary",
		      'beruf'=>"Heldentrainer",
		      'alter'=>63,
		      'spezialitaet'=>"immer cool")
	);

foreach($personen as $wert) {
	foreach($wert as $schluessel=>$endwert) {
		print "$schluessel: $endwert<br>";
	}
	print "<br>";
}
