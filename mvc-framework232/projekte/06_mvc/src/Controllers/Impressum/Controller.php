<?php

namespace mvc_sixth\Controllers\Impressum;

use mvc_sixth\AbtractClass\Controllers\AController;
use mvc_sixth\Views\Impressum\ViewImpressum;

class Controller extends AController
{
    /**
     * @return void
     */
    protected function getView(): void
    {
        ViewImpressum::getImpressum();
    }
}