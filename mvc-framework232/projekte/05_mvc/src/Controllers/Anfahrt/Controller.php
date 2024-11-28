<?php

namespace mvc_fifth\Controllers\Anfahrt;

use mvc_fifth\AbtractClass\Controllers\AController;
use mvc_fifth\Views\Anfahrt\ViewAnfahrt;

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