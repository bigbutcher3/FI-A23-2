<?php

namespace mvc_fifth\Controllers\Ueberuns;

use mvc_fifth\AbtractClass\Controllers\AController;
use mvc_fifth\Views\Ueberuns\ViewUeberuns;

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