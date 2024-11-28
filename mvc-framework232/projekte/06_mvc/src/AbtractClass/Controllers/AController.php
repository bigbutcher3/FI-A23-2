<?php

namespace mvc_sixth\AbtractClass\Controllers;

use mvc_sixth\Interfaces\Controllers\IController;
use mvc_sixth\Library\RequestHandler;

abstract class AController implements IController
{
    /**
     * @return void
     */
    public function indexAction(): void
    {
        $this->getView();
    }

   final public function __construct(protected RequestHandler $request){}


    /**
     * @return void
     */
    abstract protected function getView(): void;

}