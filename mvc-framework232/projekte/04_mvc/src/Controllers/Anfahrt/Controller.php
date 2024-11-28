<?php

namespace mvc_fourth\Controllers\Anfahrt;

use mvc_fourth\AbstractClass\Controllers\AController;
use mvc_fourth\Views\Anfahrt\ViewAnfahrt;

class Controller extends AController
{

    /**
     * @return void
     */
    protected function getView(): void
    {
        ViewAnfahrt::getAnfahrt();
    }
}