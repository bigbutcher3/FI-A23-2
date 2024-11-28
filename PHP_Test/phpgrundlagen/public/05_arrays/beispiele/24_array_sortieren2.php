<?php
$exes = array(
    'xxxx' => 4,
    'xxx' => 5,
    'xx' => 7,
    'xxxxx' => 2,
    'x' => 8
);
function preisVergleich($a, $b)
{
    if (strlen($a) == strlen($b))
        return 0;
    return (strlen($a) < strlen($b)) ? -1 : 1;
}

uksort($exes, 'preisVergleich');
foreach ($exes as $schluessel => $wert)
    print "$schluessel: $wert<BR>\n";

// Ausgabe:
// x: 8
// xx: 7
// xxx: 5
// xxxx: 4
// xxxxx: 2
?>