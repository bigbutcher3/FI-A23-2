<?php

namespace mvc_fourth\AbstractClass\Controllers;

use mvc_fourth\Interfaces\Controllers\IController;
use mvc_fourth\Library\RequestHandler;

abstract class AController implements IController
{
    /**
     *
     */
    final public function __construct(protected RequestHandler $request)
    {

    }
    /**
     * @return void
     */
    public function indexAction():void
    {
        $this->getView();
    }

    /**
     * @return void
     */
    abstract protected function getView():void;
}