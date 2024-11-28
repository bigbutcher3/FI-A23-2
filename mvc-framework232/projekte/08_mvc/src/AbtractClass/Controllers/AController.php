<?php

namespace dateninjson\AbtractClass\Controllers;

use dateninjson\Interfaces\Controllers\IController;
use dateninjson\Library\RequestHandler;

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