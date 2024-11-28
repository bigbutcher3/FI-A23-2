<?php
$ein_array = array("a", "b", "c");
while(count($ein_array)) {
	$wert = array_shift($ein_array);
	print "$wert<br>";
	print "Es sind noch ".count($ein_array)." Elemente in \$ein_array <br>";
}
?>