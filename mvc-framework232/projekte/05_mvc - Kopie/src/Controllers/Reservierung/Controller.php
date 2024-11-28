<?php

namespace mvc_fifth\Controllers\Reservierung;

use mvc_fifth\AbtractClass\Controllers\AController;
use mvc_fifth\Library\AnzeigeTool;
use mvc_fifth\Views\Reservierung\ViewReservierung;

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