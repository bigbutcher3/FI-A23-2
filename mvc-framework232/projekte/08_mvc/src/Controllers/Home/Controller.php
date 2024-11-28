<?php

namespace dateninjson\Controllers\Home;

use dateninjson\AbtractClass\Controllers\AController;
use dateninjson\Views\Home\ViewHome;

class Controller extends AController
{
    /**
     * @return void
     */
    protected function getView(): void
    {

        ViewHome::getHome();
    }
}