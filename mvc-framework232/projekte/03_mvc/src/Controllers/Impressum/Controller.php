<?php

namespace mvc_third\Controllers\Impressum;

use mvc_third\Views\Impressum\ViewImpressum;

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
        ViewImpressum::getImpressum();
    }
}