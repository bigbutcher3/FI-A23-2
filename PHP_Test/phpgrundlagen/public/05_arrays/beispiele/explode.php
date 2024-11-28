<?php
    $text  = 'Ich bin nur ein ganz kleiner Blindtext';
    /*
     * Als Trenner wird das Leerzeichen verwendet. 
     * Sie erhalten also jedes einzelne Wort als einen Wert im Array.
     */ 
    $worte = explode(' ', $text);
	echo $worte[2];
?>
<?php var_dump($worte); ?>