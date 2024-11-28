<?php

namespace mvc_sixth\Controllers\Anfahrt;

use mvc_sixth\AbtractClass\Controllers\AController;
use mvc_sixth\Views\Anfahrt\ViewAnfahrt;

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