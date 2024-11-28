<?php

namespace mvc_sixth\Controllers\Ueberuns;

use mvc_sixth\AbtractClass\Controllers\AController;
use mvc_sixth\Views\Ueberuns\ViewUeberuns;

class Controller extends AController
{

    /**
     * @return void
     */
    protected function getView(): void
    {
        ViewUeberuns::getUeberuns();
    }
}