<?php

namespace mvc_smarty\Controllers\Object;

use mvc_smarty\AbtractClass\Controllers\AController;
use mvc_smarty\Views\Object\ViewObject;

class Controller extends AController
{
    /**
     * @return void
     */
    protected function getView(): void
    {
        ViewObject::getObject();
    }
}