<?php

namespace mvc_third\Controllers\Ueberuns;

use mvc_third\Views\Ueberuns\ViewUeberuns;

class Controller
{
    /**
     * @return void
     */
    public function indexAction()
    {
        $this->getView();
    }

    /**
     * @return void
     */
    private function getView()
    {
        ViewUeberuns::getUeberuns();
    }
}