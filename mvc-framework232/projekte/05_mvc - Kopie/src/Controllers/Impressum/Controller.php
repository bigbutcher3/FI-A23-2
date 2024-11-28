<?php

namespace mvc_fifth\Controllers\Impressum;

use mvc_fifth\AbtractClass\Controllers\AController;
use mvc_fifth\Views\Impressum\ViewImpressum;

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