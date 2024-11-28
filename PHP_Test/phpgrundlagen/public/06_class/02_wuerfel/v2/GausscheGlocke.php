<?php
namespace wuerfelspiel1;
require_once('Wuerfelbecher.php');
require_once ('Wuerfel.php');
class GausscheGlocke
{
    /**
     * @param object $wuerfelbecher
     */
    
    //Der Konstruktor erstellt eine neue Klasse mit den Parametern, die in den Klammern stehen.
    //Diese Parameter holt sich das Programm von außen aus den anderen Klassen und Funktionen
    public function __construct(private object $wuerfelbecher,private int $anzahlSeiten, private int $anzahlWuerfel, private int $anzahlSpiel)
    {

    }

    /**
     * @return string|int
     */
    private function tueWuerfeln(): string|array
    {
        if(gettype($this->wuerfelbecher->getErgebnis())!='string') {
            $ausgabeArray = array_fill($this->anzahlWuerfel, ($this->anzahlWuerfel * $this->anzahlSeiten) - ($this->anzahlWuerfel - 1), 0);
            for ($i = 1; $i <= $this->anzahlSpiel; $i++) {
                $ausgabeArray[$this->wuerfelbecher->getErgebnis()]++;
            }
            return $ausgabeArray;
        }
        return $this->wuerfelbecher->getErgebnis();
    }

    /**
     * @return string|array|int
     */
    public function getErgebnis():string|array|int
    {
        return $this->tueWuerfeln();
    }
}

//Diese Werte überschreiben die Klassen Parameter von oben
$anzahlSeiten = 6;
$anzahlWuerfel = 5;
$anzahlSpiel = 1000;
$test = new GausscheGlocke(new Wuerfelbecher(new Wuerfel($anzahlSeiten),$anzahlWuerfel),$anzahlSeiten,$anzahlWuerfel,$anzahlSpiel );
echo '<pre>';
print_r($test->getErgebnis());