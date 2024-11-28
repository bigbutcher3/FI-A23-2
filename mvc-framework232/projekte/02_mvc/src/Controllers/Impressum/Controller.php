<?php

namespace mvc_second\Controllers\Impressum;

use mvc_second\Views\Impressum\ViewImpressum;

class Controller
{
    /**
     * @return void
     */
    public function indexAction(): void
    {
        $this->getView();
    }

    /**
     * @return void
     */
    private function getView(): void
    {
        ViewImpressum::getImpressum();
    }
}