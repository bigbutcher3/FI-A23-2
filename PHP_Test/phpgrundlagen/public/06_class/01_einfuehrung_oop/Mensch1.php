<?php

namespace mensch1;

class Mensch1
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
     * @var string $NameVorname
     */
    private string $NameVorname;

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
     * @return void
     */
    private function zusammenfassenName():void
    {
        $this->NameVorname = $this->vorname.'--'.$this->name;
    }

    /**
     * @return string
     */
    public function getAusgabe():string
    {
       $this->zusammenfassenName();
       return $this->NameVorname;
    }
}
$maurer = new Mensch1();
$maurer->setName('Lorenz');
$maurer->setVorName('Ina');
echo $maurer->getAusgabe();