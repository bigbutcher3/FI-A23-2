<?php

namespace dateninjson\Controllers\Textspeichernjson;

use dateninjson\AbtractClass\Controllers\AController;
use dateninjson\Exceptions\Textspeichernjson\ErrorInTextspeichern;
use dateninjson\Models\Textspeichernjson\AuslesenDatensatz;
use dateninjson\Models\Textspeichernjson\Login\Authentifizierung;
use dateninjson\Models\Textspeichernjson\PostZuSession;
use dateninjson\Models\Textspeichernjson\SpeichernDatensatz;
use dateninjson\Views\Meldung\ViewMeldung;
use dateninjson\Views\Textspeichernjson\DatensaetzeAuslesen\ViewAuslesen;
use dateninjson\Views\Textspeichernjson\Kontaktformular\ViewKontaktformular;
use dateninjson\Views\Textspeichernjson\Login\ViewLogIn;
use dateninjson\Views\Textspeichernjson\Uerberpruefung\ViewUeberpruefung;

class Controller extends AController
{

    /**
     * @return void
     */
    protected function getView(): void
    {
        ViewKontaktformular::getKontaktformular();
    }

    /**
     * @return void
     * @throws ErrorInTextspeichern
     */
    public function sendenAction(): void
    {
        $instanzPostSession = new PostZuSession($_POST, INDEXARRAY);
        $_SESSION['datensatz'] = $instanzPostSession->getDatensatz();
        ViewUeberpruefung::getPruefung();
    }

    /**
     * @return void
     * @throws ErrorInTextspeichern
     */
    public function speichernAction(): void
    {
        $speichern = new SpeichernDatensatz(PATHSPEICHERORT, DATENSATZJSONFILE, $_SESSION['datensatz']);
        ViewMeldung::getMeldung($speichern->getMeldung(), '/Textspeichernjson');
    }

    /**
     * @return void
     */
    public function ueberpruefungSessionAction(): void
    {
        Authentifizierung::ueberpruefungSession();
    }

    /**
     * @return void
     */
    public function zumloginAction(): void
    {
        ViewLogIn::getLogIn();
    }

    /**
     * @return void
     * @throws ErrorInTextspeichern
     */
    public function logincontrolAction(): void
    {
        Authentifizierung::ueberpruefeLogin($_POST['username'], $_POST['passwd']);
    }

    /**
     * @return void
     * @throws ErrorInTextspeichern
     */
    public function zumauslesenAction(): void
    {
            $_SESSION['login'] ?? header('Location: /textspeichernjson/zumlogin');
        $_SESSION['auslesen'] = new AuslesenDatensatz(PATHSPEICHERORT, DATENSATZJSONFILE);
        $this->getAusgabe();
    }

    /**
     * @return void
     * @throws ErrorInTextspeichern
     */
    public function nextAction(): void
    {
        empty($_SESSION['login']) ? header('Location: /textspeichernjson/zumlogin') : $_SESSION['auslesen']->setNextDatensatz();
        $this->getAusgabe();
    }

    /**
     * @return void
     * @throws ErrorInTextspeichern
     */
    public function backAction(): void
    {
        empty($_SESSION['login']) ? header('Location: /textspeichernjson/zumlogin') : $_SESSION['auslesen']->setBackDatensatz();
        $this->getAusgabe();
    }

    /**
     * @return void
     * @throws ErrorInTextspeichern
     */
    public function delAction(): void
    {
        empty($_SESSION['login']) ? header('Location: /textspeichernjson/zumlogin') : $_SESSION['auslesen']->setDelDatensatz();
        ViewMeldung::getMeldung($_SESSION['auslesen']->getMeldung(), '/textspeichernjson');
    }

    /**
     * @return void
     * @throws ErrorInTextspeichern
     */
    public function anfangDatensatzAction(): void
    {
        empty($_SESSION['login']) ? header('Location: /textspeichernjson/zumlogin') : $_SESSION['auslesen']->setAnfangDatensatz();
        $this->getAusgabe();
    }

    /**
     * @return void
     * @throws ErrorInTextspeichern
     */
    public function endeDatensatzAction(): void
    {
        empty($_SESSION['login']) ? header('Location: /textspeichernjson/zumlogin') : $_SESSION['auslesen']->setEndDatensatz();
        $this->getAusgabe();
    }

    /**
     * @return void
     */
    public function destroyAction(): void
    {
        empty($_SESSION['login']) ? header('Location: /textspeichernjson/zumlogin') : session_destroy();
        ViewMeldung::getMeldung('Sie haben sich abgemeldet!', '/textspeichernjson');
    }

    /**
     * @return void
     * @throws ErrorInTextspeichern
     */
    private function getAusgabe(): void
    {
        $_SESSION['datensatz'] = $_SESSION['auslesen']->getDatensatz();
        ViewAuslesen::getAuslesen();
    }
}