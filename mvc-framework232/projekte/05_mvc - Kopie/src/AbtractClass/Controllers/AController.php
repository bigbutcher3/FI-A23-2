<?php

namespace mvc_fifth\AbtractClass\Controllers;

use mvc_fifth\Interfaces\Controllers\IController;
use mvc_fifth\Library\RequestHandler;

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