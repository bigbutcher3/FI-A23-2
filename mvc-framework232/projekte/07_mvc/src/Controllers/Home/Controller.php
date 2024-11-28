<?php

namespace mvc_smarty\Controllers\Home;

use mvc_smarty\AbtractClass\Controllers\AController;
use mvc_smarty\Views\Home\ViewHome;

class Controller extends AController
{

    /*public function __construct()
    {
        parent::__construct();
        echo 'Hallo';
    }*/


    /**
     * @return void
     */
    protected function getView(): void
    {
        /*$test = new \mvc_smarty\Controllers\Impressum\Controller();
        $test->indexAction();*/
        ViewHome::getHome();
    }


}