<?php

namespace dateninjson\Controllers\Csv;

use dateninjson\AbtractClass\Controllers\AController;
use dateninjson\Exceptions\CSV\ErrorInCsv;
use dateninjson\Exceptions\Verzeichniserstellung\ErrorInVerzeichnis;
use dateninjson\Library\DirectoryHandling\Rmdir;
use dateninjson\Models\Csv\ConvertDefault;
use dateninjson\Models\Csv\DownloadCsv;
use dateninjson\Models\Downloadimg\Upload;
use dateninjson\Views\Csv\ViewCsv;
use dateninjson\Views\Meldung\ViewMeldung;

class Controller extends AController
{
    /**
     * @return void
     * @throws ErrorInVerzeichnis
     * @throws ErrorInCsv
     */
    public function uploadAction(): void
    {
        $upload = new Upload(PATHSPEICHERORT.JSONPATH,ZULASSUNGSTYP,'dateninjson\Exceptions\CSV\ErrorInCsv','files');
        new ConvertDefault(DATENSATZJSONFILE, PATHSPEICHERORT.JSONPATH,CSVPATH,NAMEARRAY);
        #$rm = new Rmdir(PATHSPEICHERORT,JSONPATH);
        #$rm->setDelAllFile();
        ViewMeldung::getMeldung($upload->getMeldung(),'/Csv');
    }

    /**
     * @return void
     */
    public function downloadIfFileExistsAction():void
    {
        new DownloadCsv(CSVPATH);
    }

    /**
     * @return void
     */
    public function downloadAction():void
    {
        header("Content-Type: text/csv");
        header("Content-Disposition: attachment; filename=meine.csv");
        header("Content-Length: " . filesize($file = CSVPATH));
        readfile($file);
    }
    protected function getView():void
    {
        ViewCsv::getCsv();
    }
}