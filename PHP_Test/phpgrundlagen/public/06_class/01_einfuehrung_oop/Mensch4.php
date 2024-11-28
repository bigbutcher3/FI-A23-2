<?php

namespace mensch4;

class Mensch4
{
    /**
     * @param string|null $name
     * @param string|null $vorname
     */
    public function __construct(private string|null $name = NULL,private string|null $vorname=NULL)
    {
        echo 'bin da!!';
    }

    public function getAusgabe():null|array
    {
        $ausgabe = array();
        $ausgabe['name'] = $this->name;
        $ausgabe['vorname'] = $this->vorname;
        return $ausgabe;
    }
}
$mensch = new Mensch4('maurer','Sven');
echo '<pre>';
print_r($mensch->getAusgabe());