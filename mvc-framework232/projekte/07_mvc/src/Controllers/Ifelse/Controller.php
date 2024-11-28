<?php

namespace mvc_smarty\Controllers\Ifelse;

use mvc_smarty\AbtractClass\Controllers\AController;
use mvc_smarty\Views\ifelse\ViewIfelse;


class Controller extends AController
{

    /**
     * @return void
     */
    protected function getView(): void
    {
        ViewIfelse::getIfelse();
    }
}