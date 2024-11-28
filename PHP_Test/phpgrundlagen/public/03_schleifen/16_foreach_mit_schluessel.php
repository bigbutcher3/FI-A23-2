<?php
require_once __DIR__.'/../config.php';
    $hauptstaedte = array(
        'Deutschland' => 'Berlin',
        'England'     => 'London',
        'Frankreich'  => 'Paris',
        'Italien'     => 'Rom',
        'Spanien'     => 'Madrid'
    );
    echo PRE;
    print_r($hauptstaedte);
    echo UPRE;

require_once PATHTEMPLATE.'head.tpl.php';
?>

    <h1>Länder und Hauptstädte</h1>
    <table class="table">
        <tr>
            <th>Land</th>
            <th>Hauptstadt</th>
        </tr>
        <?php foreach ($hauptstaedte as $land => $stadt) { ?>
            <tr>
                <td><?php echo $land; ?></td>
                <td><?php echo $stadt; ?></td>
            </tr>
        <?php } ?>
    </table>
<?php
require_once PATHTEMPLATE.'footer.tpl.html';