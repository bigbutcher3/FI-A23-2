<?php
$ein_array = array("eins"=>5, "zwei"=>2, "drei"=>1);
asort($ein_array);
foreach($ein_array as $schluessel => $wert) {
	print "$schluessel = $wert<br>";
}
?>