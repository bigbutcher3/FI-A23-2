<?php

$betriebssystem[] = "Windows";
$betriebssystem[] = "Linux";
$betriebssystem[] = "Solaris";
$betriebssystem[] = "Mac";
echo "<pre>";
print_r ( $betriebssystem );

//******************************************************************************
/*assoziative Arrays
 * array(
    Schlüssel  => Wert,
    Schlüssel2 => Wert2,
    Schlüssel3 => Wert3,
    ...
)
 */
$emails['hans'] = 'hans@example.com';
$emails['sabine'] = 'sabine@example.com';
$emails['heiko'] = 'heiko@example.com';
$emails['jan'] = 'jan@example.com';
echo "<pre>";
print_r ( $emails );
//oder
$emails = array('hans' => 'hans@example.com', 'sabine' => 'sabine@example.com', 'heiko' => 'heiko@example.com', 'jan' => 'jan@example.com');
foreach ($emails as $name => $value) {
    //echo $name . ':  ';
    //echo $value;
    echo '<br>';
}

//****************************************************************************

$kunde['maurer']['vorname'] = 'Sven';
$kunde['maurer']['nachname'] = 'Maurer';
$kunde['maurer']['ort'] = 'Magdeburg';
$kunde['maurer']['strasse'] = 'Am Markt';

$kunde['Lehmann']['vorname'] = 'Katrin';
$kunde['Lehmann']['nachname'] = 'Lehmann';
$kunde['Lehmann']['ort'] = 'Halle';
$kunde['Lehmann']['strasse'] = 'Herweghstraße';

$kunde['Schmidt']['vorname'] = 'Ina';
$kunde['Schmidt']['nachname'] = 'Schmidt';
$kunde['Schmidt']['ort'] = 'Berlin';
$kunde['Schmidt']['strasse'] = 'Torstraße';


foreach ($kunde as $name => $wert) {
    foreach ($wert as $ausgabe ){
        echo $ausgabe;
    }
    echo '<br>';

}
