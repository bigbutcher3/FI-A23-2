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
			'spezialitae'=>"megastark"),
		array('name'=>"mary",
			'beruf'=>"Heldentrainer",
			'alter'=>63,
			'spezialitaet'=>"immer cool")
	);

print $personen[0]['beruf']; // gibt "Held" aus
?>
