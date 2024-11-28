<?php

namespace mvc_fourth\Controllers\Home;

use mvc_fourth\AbstractClass\Controllers\AController;
use mvc_fourth\Views\Home\ViewHome;

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