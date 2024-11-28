<?php
    $namen = array('Hans', 'Heike', 'Erika', 'Bernd', 'Sabine');
    
    // Als Verbindung wird ', ' (Komma und Leerzeichen) verwendet
    $text = implode(', ', $namen);
    echo $text;
?>