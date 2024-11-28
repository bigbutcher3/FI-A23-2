<?php
$person = array('name'=>"bob",
	 'beruf'=>"Held",
	 'alter'=>30,
	 "spezielle Eigenschaft"=>"gammastrahlenfest");

foreach($person as $schluessel=>$wert) {
	print "$schluessel = $wert<br>";
}
