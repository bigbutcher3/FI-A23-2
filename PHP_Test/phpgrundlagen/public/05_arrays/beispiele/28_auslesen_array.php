<?php
$ein_array = array("x"=>5, "a"=>2, "f"=>1);
ksort($ein_array);
foreach($ein_array as $schluessel => $wert) {
	print "$schluessel = $wert<br>";
}
?>