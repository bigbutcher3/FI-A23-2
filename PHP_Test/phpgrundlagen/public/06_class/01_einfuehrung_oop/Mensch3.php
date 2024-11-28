<?php

namespace mensch3;

class Mensch3
{
    /**
     * @var string $name
     */
    private string $name;
    /**
     * @var string $vorname
     */
    private string|null $vorname;

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
    public function setVorName(string|null $vorname=null):void
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
$lorenz = new Mensch3();
$lorenz->setName('Lorenz');
$lorenz->setVorName('susi');
echo $lorenz->getAusgabe();