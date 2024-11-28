<?php

namespace mvc_sixth\Controllers\Home;

use mvc_sixth\AbtractClass\Controllers\AController;
use mvc_sixth\Views\Home\ViewHome;

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
        /*$test = new \mvc_sixth\Controllers\Impressum\Controller();
        $test->indexAction();*/
        ViewHome::getHome();
    }


}