<?php

namespace mvc_third\Controllers\Reservierung;

use mvc_third\Models\Muster\Speichern;
use mvc_third\Views\Reservierung\ViewReservierung;

class Controller
{
    /**
     * @return void
     */
    public function indexAction()
    {
        $this->getView();
    }
    public function speichernAction()
    {

        new Speichern();
    }

    /**
     * @return void
     */
    private function getView()
    {
        ViewReservierung::getReservierung();
    }
}