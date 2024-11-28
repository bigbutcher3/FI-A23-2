<?php
	echo '<h4>Arrays</h4>';
	
	$variable[] = 'wert';
	$variable[] = 'wert1';
	$variable[] = 'wert3';
	//echo $variable[2];
	$variable[2] = 'Überschrieben';
	//echo $variable[2];
	
	$variable = array(1,2,3,4,5,6);
	echo $variable[2];
	//Assoziatives Arrays
	$emails['maurer'] = 'detlef.maurer@gmx.de';
	$emails['mueller'] = 'sven.mueller@gmx.de';
	$emails['lehmann'] = 'micha.lehmann@gmx.de';
	$emails['schmidt'] = 'ralf.schmidt@gmx.de';
	echo $emails['mueller'];
	
	
	$emails = array('maurer'=>'detlef.maurer@gmx.de','mueller'=>'sven.mueller@gmx.de');
	echo $emails['mueller'];
	
	$emails = array(
	'maurer'=>'detlef.maurer@gmx.de',
	'mueller'=>'sven.mueller@gmx.de'
	);
	echo $emails['mueller'];
	
	echo is_array($emails);
	echo count($emails);
