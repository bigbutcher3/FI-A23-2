<?php

namespace dateninjson\Views\Textspeichernjson\Uerberpruefung;

use dateninjson\Exceptions\Textspeichernjson\ErrorInTextspeichern;


class ViewUeberpruefung
{
    /**
     * @throws ErrorInTextspeichern
     */
    static public function getPruefung():void
  {
        !isset($_SESSION['datensatz'])?throw new ErrorInTextspeichern('Keine Datensätze übergeben!'):$_SESSION['smarty']->display(__DIR__.'/index.tpl.html');
 }
}