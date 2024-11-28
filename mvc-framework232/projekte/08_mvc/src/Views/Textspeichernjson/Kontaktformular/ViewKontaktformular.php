<?php

namespace dateninjson\Views\Textspeichernjson\Kontaktformular;

use dateninjson\Models\Textspeichernjson\AuswahlSessionSmarty;

class ViewKontaktformular
{
    static function getKontaktformular():void
    {
        $_SESSION['smarty']->assign('AuswahlSession', new AuswahlSessionSmarty());
        $_SESSION['smarty']->display(__DIR__ . '/index.tpl.html');
    }
}