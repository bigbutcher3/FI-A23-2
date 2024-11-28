<?php

namespace mvc_smarty\AbtractClass\Controllers;

use mvc_smarty\Interfaces\Controllers\IController;
use mvc_smarty\Library\RequestHandler;

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