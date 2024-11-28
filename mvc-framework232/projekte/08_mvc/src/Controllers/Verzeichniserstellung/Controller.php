<?php

namespace dateninjson\Controllers\Verzeichniserstellung;



use dateninjson\AbtractClass\Controllers\AController;
use dateninjson\Exceptions\Verzeichniserstellung\ErrorInVerzeichnis;
use dateninjson\Library\DirectoryHandling\AuslesenDir;
use dateninjson\Library\DirectoryHandling\Mkdir;
use dateninjson\Library\DirectoryHandling\Rmdir;
use dateninjson\Library\DirectoryHandling\VerzeichnisAuslesen;
use dateninjson\Models\Downloadimg\Upload;
use dateninjson\Views\Meldung\ViewMeldung;
use dateninjson\Views\Verzeichniserstellung\DownloadFormular\ViewDownloadFormular;
use dateninjson\Views\Verzeichniserstellung\Galerie\ViewGalerie;
use dateninjson\Views\Verzeichniserstellung\UploadFormular\ViewUploadFormular;
use dateninjson\Views\Verzeichniserstellung\VerzAuswahlFormular\ViewVerzAuswahl;

class Controller extends AController
{

    /**
     * @return void
     * @throws ErrorInVerzeichnis
     */
    protected function getView(): void
    {
        unset($_SESSION['meldung']);
        $verzeichnis = new VerzeichnisAuslesen();
        $_SESSION['verzeichnisse']= $verzeichnis->getVerzeichnis(IMGUPLOAD);
        ViewVerzAuswahl::getContent();
    }
    /**
     * @return void
     * @throws ErrorInVerzeichnis
     */
    public function verzeichnisDelAction(): void
    {
        unset($_SESSION['meldung']);
        $rmdir = new Rmdir(IMGUPLOAD, $_POST['verzeichnis'] ?? NULL);
        $rmdir->setDelVerzeichnis();
        ViewMeldung::getMeldung($rmdir->getMeldung(), '/Verzeichniserstellung');
    }

    /**
     * @return void
     * @throws ErrorInVerzeichnis
     */
    public function verzeichnisInhaltDelAction(): void
    {
        unset($_SESSION['meldung']);
        $rmdir = new Rmdir(IMGUPLOAD, $_POST['verzeichnis'] ?? NULL);
        $rmdir->setDelAllFile();
        ViewMeldung::getMeldung($rmdir->getMeldung(), '/Verzeichniserstellung');
    }

    /**
     * @return void
     * @throws ErrorInVerzeichnis
     */
    public function mkdirAction(): void
    {
        $verzeichnismkdir = new Mkdir(IMGUPLOAD, $_POST['neuesVerzeichnis'] ?? '');
        $_SESSION['meldung'] = $verzeichnismkdir->getMeldung();
        $this->getView();
    }

    /**
     * @return void
     */
    public function uploadViewAction(): void
    {
        unset($_SESSION['meldung']);
        if (!empty($_POST['verzeichnis'])) {
            $_SESSION['verzeichnis'] = $_POST['verzeichnis'];
            ViewUploadFormular::getContent();
        } else {
            ViewMeldung::getMeldung('Kein Verzeichnis angelegt!', '/verzeichniserstellung');
        }
    }

    /**
     * @return void
     */
    public function uploadAction(): void
    {   unset($_SESSION['meldung']);
        $upload = new Upload(IMGUPLOAD . $_SESSION['verzeichnis'], UPLOADTYP, 'dateninjson\Exceptions\Verzeichniserstellung\ErrorInVerzeichnis', 'files');
        ViewMeldung::getMeldung($upload->getMeldung(), '/verzeichniserstellung');
    }

    /**
     * @return void
     * @throws ErrorInVerzeichnis
     */
    public function downloadAction(): void
    {
        unset($_SESSION['meldung']);
        if (!empty($_POST['verzeichnis'])) {
            $_SESSION['verzeichnis'] = $_POST['verzeichnis'];
            $imgdownload = new AuslesenDir(IMGUPLOAD . $_SESSION['verzeichnis'], '*.{jpg,gif,png}');
            ViewDownloadFormular::getContent($imgdownload->getAuslesenDir());
        } else {
            ViewMeldung::getMeldung('Kein Verzeichnis angelegt!', '/verzeichniserstellung');
        }
    }

    /**
     * @return void
     */
    public function galerieAction(): void
    {
        unset($_SESSION['meldung']);
        if (!empty($_POST['verzeichnis'])) {
            $_SESSION['verzeichnis'] = $_POST['verzeichnis'];
            ViewGalerie::getContent();
        } else {
            ViewMeldung::getMeldung('Kein Verzeichnis angelegt!', '/verzeichniserstellung');
        }
    }

    /**
     * @return void
     * @throws ErrorInVerzeichnis
     */
    public function imgladenAction(): void
    {   unset($_SESSION['meldung']);
        $imgdownload = new AuslesenDir(IMGUPLOAD . $_SESSION['verzeichnis'], '*.{jpg,gif,png}');
        echo json_encode($imgdownload->getAuslesenDir()['imgName']);
    }

}