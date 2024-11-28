<?php

namespace dateninjson\Controllers\Dropzone;

use dateninjson\AbtractClass\Controllers\AController;
use dateninjson\Models\Downloadimg\Upload;
use dateninjson\Models\Downloadimg\UploadArray;
use dateninjson\Views\Dropzone\ViewDropzone;
use dateninjson\Views\Meldung\ViewMeldung;

class Controller extends AController
{

    /**
     * @return void
     */
    public function uploadAction():void
    {
        $upload = new Upload(IMGUPLOAD . 'Dropzone', UPLOADTYP, 'dateninjson\Exceptions\Verzeichniserstellung\ErrorInVerzeichnis', 'files');
        ViewMeldung::getMeldung($upload->getMeldung(), '/Dropzone');
    }

    /**
     * @return void
     */
    public function uploadArrayAction():void
    {
        $upload = new UploadArray(IMGUPLOAD . 'Dropzone', UPLOADTYP, 'dateninjson\Exceptions\Verzeichniserstellung\ErrorInVerzeichnis', 'files');
        ViewMeldung::getMeldung($upload->getMeldung(), '/Dropzone');
    }
    /**
     * @return void
     */
    protected function getView(): void
    {
        ViewDropzone::getDropzone();
    }
}