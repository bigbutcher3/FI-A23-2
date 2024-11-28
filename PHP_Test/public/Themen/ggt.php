<?php
$titel = "Größter Gemeinsamer Teiler";
require_once "../template/head.tpl.php";

$zahl1 = rand(1,100);
$zahl2 = rand(1,100);

function gcd($pNumber1, $pNumber2)
{
    $lNumber1 = abs($pNumber1);
    $lNumber2 = abs($pNumber2);
    $lShiftCount = 0;

    /* Liefere 0 zurÃ¼ck, wenn eine der Zahlen 0 ist. */
    if (!($lNumber1 && $lNumber2)) {
        return 0;
    }

    /* Liefere die erste Zahl zurÃ¼ck, wenn beide Zahlen gleich sind. */
    if ($lNumber1 == $lNumber2) {
        return $lNumber1;
    }

    /* Teile die Zahlen solange durch 2, wie sie den gemeinsamen Primfaktor 2 enthalten. */
    while (!($lNumber1 & 1 || $lNumber2 & 1)) {
        $lNumber1 = $lNumber1 >> 1;
        $lNumber2 = $lNumber2 >> 1;
        $lShiftCount++;
    }

    /* Wende den euklidischen Algorithmus an. */
    if ($lNumber1 & 1) {
        $lDistance = -$lNumber2;
    } else {
        $lDistance = $lNumber1;
    }

    while ($lDistance) {
        while (!($lDistance & 1)) {
            $lDistance = $lDistance >> 1;
        }

        if ($lDistance > 0) {
            $lNumber1 = $lDistance;
        } else {
            $lNumber2 = -$lDistance;
        }

        $lDistance = $lNumber1 - $lNumber2;
    }

    /* Multiplizierte $lShiftCount-mal mit 2 und liefere das Ergebnis zurÃ¼ck. */
    return $lNumber1 << $lShiftCount;
}

echo "Zahl1: ".$zahl1."<br>Zahl2: ".$zahl2."<hr>"."GGT:   ".gcd($zahl1, $zahl2);

require_once "../template/footer.tpl.html";
