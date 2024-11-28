<?php

namespace mvc_smarty\Controllers\Schleifen;

use mvc_smarty\AbtractClass\Controllers\AController;
use mvc_smarty\Views\Schleifen\ViewSchleifen;


class Controller extends AController
{

    /**
     * @return void
     */
    protected function getView(): void
    {
        ViewSchleifen::getSchleifen();
    }
}