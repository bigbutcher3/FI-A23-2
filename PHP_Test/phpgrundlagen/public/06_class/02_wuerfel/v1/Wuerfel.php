<?php


class Wuerfel
{
    /**
     * @var int $anzahlSeiten
     */
    private int $anzahlSeiten = 6;

    /**
     * @return int
     */
    private function tueWuerfeln(): int
    {
        return rand(1, $this->anzahlSeiten);
    }

    /**
     * @return int
     */
    public function getErgebnis(): int
    {
        return $this->tueWuerfeln();
    }
}
/*$test = new Wuerfel();
echo $test->getErgebnis();*/