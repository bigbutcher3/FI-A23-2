<?php
require_once __DIR__.'/../config.php';
require_once PATHTEMPLATE.'head.tpl.php';
if (isset($_POST['senden'])) {
    $bewertung = $_REQUEST['bewertung'];

    switch ($bewertung) {
        case '1':
            $nachricht = 'Vielen Dank! Sie sind zu freundlich!';
            break;
        case '2':
            $nachricht = 'Danke! Wir freuen uns über positive Bewertungen.';
            break;
        case '3':
            $nachricht = 'Danke! Wenigstens geben wir uns Mühe, oder?';
            break;
        case '4':
            $nachricht = 'Naja, es war echt spät, als ich das geschrieben habe!';
            break;
        case '5':
            $nachricht = 'War irgend etwas auf der Seite in Ordnung? Das Layout vielleicht?';
            break;
        case '6':
            $nachricht = 'Also das ist doch eine Unverschämtheit!!!';
            break;
        default:
            $nachricht = 'Was haben Sie denn da eingegeben?!';
            break;
    }
    echo $nachricht;
} else {
    ?>
    <h4>Bewertung</h4>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label for="bewertung">Bewertung</label>
            <input type="text" class="form-control" id="bewertung" aria-describedby="describ_name" name="bewertung"
                   placeholder="Bitte eine Bewertung eintragen!!"
                   value="">
        </div>

        <button type="submit" class="btn btn-primary" name="senden">Submit</button>
    </form>
    <p>Bitte Note zum Bewerben eingeben<br>
        Die 1 = Hervorragend<br>
        Die 2 = Gut<br>
        Die 3 = Durchschnittlich<br>
        Die 4 = Schlecht<br>
        Die 5 = Miserabel<br>
        Die 6 = Grauenhaft<br></p>
    <?php
}
require_once PATHTEMPLATE.'footer.tpl.html';
