<?php

namespace mvc_sixth\Controllers\Reservierung;

use mvc_sixth\AbtractClass\Controllers\AController;
use mvc_sixth\Library\AnzeigeTool;
use mvc_sixth\Views\Reservierung\ViewReservierung;

class Controller extends AController
{

    /**
     * @return void
     */
    protected function getView(): void
    {
        ViewReservierung::getReservierung();
    }

    /**
     * @return void
     */
    public function speichernAction()
    {
        AnzeigeTool::printr($_POST);
        echo 'geht';
    }
}