<?php

namespace wuerfelspiel1;


readonly class Wuerfelbecher
{
    public function __construct(private object $wuerfel, private int $anzahlWuerfel = 5)
    {

    }

    /**
     * @return string|int
     */
    private function tueWuerfeln(): string|int
    {
        if(gettype($this->wuerfel->getErgebnis())!='string')
        {
            $erg = array();
            for ($i = 1; $i <= $this->anzahlWuerfel; $i++) {
                $erg[] = $this->wuerfel->getErgebnis();
            }
            return array_sum($erg);
        }
        return $this->wuerfel->getErgebnis();
    }

    /**
     * @return string|int
     */
    public function getErgebnis(): string|int
    {
        return $this->tueWuerfeln();
    }
}
