<?php
require_once __DIR__.'/../config.php';
require_once PATHTEMPLATE.'head.tpl.php';
if(isset($_POST['senden']))
{
    $bewertung = $_REQUEST['bewertung'];

    switch ($bewertung) {
        case 'hervorragend':
            $nachricht = 'Vielen Dank! Sie sind zu freundlich!';
            break;
        case 'gut':
            $nachricht = 'Danke! Wir freuen uns über positive Bewertungen.';
            break;
        case 'durchschnittlich':
            $nachricht = 'Danke! Wenigstens geben wir uns Mühe, oder?';
            break;
        case 'schlecht':
            $nachricht = 'Naja, es war echt spät, als ich das geschrieben habe!';
            break;
        case 'miserabel':
            $nachricht = 'War irgend etwas auf der Seite in Ordnung? Das Layout vielleicht?';
            break;
        case 'grauenhaft':
            $nachricht = 'Also das ist doch eine Unverschämtheit!!!';
            break;
        default:
        	$nachricht = 'Was haben Sie denn da eingegeben?!';
        	break;
    }
echo $nachricht;
	}
	else
	{
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
        <p>Bewerben eingeben</p>
        <ul>
            <li>hervorragend</li>
            <li>gut</li>
            <li>durchschnittlich</li>
            <li>schlecht</li>
            <li>miserabel</li>
            <li>grauenhaft</li>
        </ul>
        <?php
    }
require_once PATHTEMPLATE.'footer.tpl.html';