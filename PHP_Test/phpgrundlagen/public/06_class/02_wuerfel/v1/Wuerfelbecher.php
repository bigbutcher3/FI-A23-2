<?php

require_once('Wuerfel.php');
class Wuerfelbecher
{
    /**
     * @var object $wuerfel
     */
    private object $wuerfel;

    /**
     * @param int $anzahlWuerfel
     */
    public function __construct(private int $anzahlWuerfel = 5)
    {
        $this->wuerfel = new Wuerfel();
    }

    /**
     * @return int
     */
    private function tueWuerfeln():int
    {
        /*$erg=0;
        for($i=1;$i<=$this->anzahlWuerfel;$i++)
        {
            $erg +=$this->wuerfel->getErgebnis();
        }
        return $erg;*/
        $erg = array();
        for($i=1;$i<=$this->anzahlWuerfel;$i++)
        {
            $erg[] = $this->wuerfel->getErgebnis();
        }
        /*echo '<pre>';
        print_r($erg);*/
        return array_sum($erg);
    }

    /**
     * @return int
     */
    public function getErgebnis():int
    {
        return $this->tueWuerfeln();
    }
}
