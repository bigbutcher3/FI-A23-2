<?php
interface ILesbar {
    public function lesen();
}

interface ISchreibbar {
    public function schreiben();
}

class Dokument implements ILesbar, ISchreibbar {
    public function lesen() {
        echo "Dokument wird gelesen.";
    }

    public function schreiben() {
        echo "Dokument wird geschrieben.";
    }
}


class Auslage implements ILesbar, ISchreibbar {
    public function lesen() {
        echo "Dokument wird gelesen.";
    }

    public function schreiben() {
        echo "Dokument ist nicht beschreibbar.";
    }
}

// Objekte der Klassen erstellen und Methoden aufrufen
$dokument = new Dokument();
$dokument->lesen();      // Gibt aus: Dokument wird gelesen.
$dokument->schreiben();  // Gibt aus: Dokument wird geschrieben.

$auslage = new Auslage();
$auslage->lesen();      // Gibt aus: Dokument wird gelesen.
$auslage->schreiben();  // Gibt aus: Dokument ist nicht beschreibbar.
?>
