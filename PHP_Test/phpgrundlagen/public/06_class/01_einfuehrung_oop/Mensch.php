<?php

namespace mensch;

class Mensch
{
    /**
     * @var string $name
     */
    public string $name;

    /**
     * @var string $vorname
     */
    public string $vorname='Sven';
}

$lehmann = new Mensch();
$lehmann->name = 'Lehmann';
echo $lehmann->name;
echo $lehmann->vorname;

$lorenz=new Mensch();
$lorenz->name= 'Lorenz';
$lorenz->vorname = 'Ina';
echo $lorenz->name;
echo $lorenz->vorname;
/*echo '<pre>';
var_dump($lehmann);*/