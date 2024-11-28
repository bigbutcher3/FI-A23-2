<?php

namespace mvc_third\Controllers\Home;

use mvc_third\Views\Home\ViewHome;

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
        ViewHome::getHome();
    }
}