<?php
/**
 * Created by PhpStorm.
 * User: maurerd
 * Date: 07.02.2018
 * Time: 12:00
 */
function foo()
{
    $anzahlArgs = func_num_args();
    echo 'Anzahl der Argumente: '.$anzahlArgs.'<br>';

    $argListe = func_get_args();
    $i=1;
    foreach ($argListe as $arg)
    {
        echo 'Argument '.$i.' ist: ' .$arg. '<br>';
        $i++;
    }
}

foo('Affe', 'Hund','Katze','Maus');