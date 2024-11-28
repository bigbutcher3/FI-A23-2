<?php

namespace mvc_third\Controllers\Anfahrt;

use mvc_third\Views\Anfahrt\ViewAnfahrt;

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
        ViewAnfahrt::getAnfahrt();
    }
}