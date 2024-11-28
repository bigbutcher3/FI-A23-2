<?php

namespace mvc_smarty\Controllers\Constsession;

use mvc_smarty\AbtractClass\Controllers\AController;
use mvc_smarty\Views\Constsession\ViewConst;


class Controller extends AController
{

    /**
     * @return void
     */
    protected function getView(): void
    {
        ViewConst::getConstsession();
    }
}