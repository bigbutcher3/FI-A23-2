<?php

namespace mensch2;

class Mensch2
{
    /**
     * @var string $name
     */
    private string $name;
    /**
     * @var string $vorname
     */
    private string $vorname;

    /**
     * @param string $name
     * @return void
     */
    public function setName(string $name):void
    {
        //Pseudovariable $this
        $this->name = $name;
    }
    /**
     * @param string $vorname
     * @return void
     */
    public function setVorName(string $vorname):void
    {
        //Pseudovariable $this
        $this->vorname = $vorname;
    }

    /**
     * @return string
     */
    private function zusammenfassenName():string
    {
        return $this->vorname.'--'.$this->name;
    }

    /**
     * @return string
     */
    public function getAusgabe():string
    {
        return $this->zusammenfassenName();
    }
}
$lorenz = new Mensch2();
$lorenz->setName('Lorenz');
$lorenz->setVorName('Ina');
echo $lorenz->getAusgabe();