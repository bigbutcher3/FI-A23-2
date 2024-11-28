<?php

namespace wuerfelspiel1;

class Wuerfel
{
    /**
     * @param int $anzahlSeiten
     */
    public function __construct(private readonly int $anzahlSeiten = 6)
    {
        
    }

    /**
     * @return int|string
     */
    private function tueWuerfeln(): int|string
    {
        return ($this->anzahlSeiten >= 2 && $this->anzahlSeiten <= 8) ? rand(1, $this->anzahlSeiten) : 'Bitte nur Eingaben von 2-8 Seiten';
    }

    /**
     * @return int|string
     */
    public function getErgebnis(): int|string
    {
        return $this->tueWuerfeln();
    }
}
