<?php

namespace mvc_smarty\Interfaces\Library;

use mvc_smarty\Library\RequestHandler;

interface IControllerFactory
{
    /**
     * @param string $namespace
     * @param RequestHandler $request
     */
    public function __construct(string $namespace, RequestHandler $request);

    /**
     * @return object
     */
    public function getController():object;
}