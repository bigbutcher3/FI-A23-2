<?php

namespace dateninjson\Controllers\Spiel;

use dateninjson\AbtractClass\Controllers\AController;

use dateninjson\Models\Spiel\Header;
use dateninjson\Views\Spiel\ViewSpiel;

class Controller extends AController
{

    /**
     * @return void
     */
    protected function getView(): void
    {
        ViewSpiel::getSpiel();
    }
    public function loginAction(): void
    {
        $_SESSION['login']=true;
        Header::ueberpruefung();
    }
    public function zumLoginAction(): void
    {
        echo 'zum Login';
    }
    public function zumauslesenAction():void
    {
        echo 'zum Auslesen';
    }
}