<?php

namespace mvc_fifth\Controllers\Home;

use mvc_fifth\AbtractClass\Controllers\AController;
use mvc_fifth\Views\Home\ViewHome;

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
        /*$test = new \mvc_fifth\Controllers\Impressum\Controller();
        $test->indexAction();*/
        ViewHome::getHome();
    }


}