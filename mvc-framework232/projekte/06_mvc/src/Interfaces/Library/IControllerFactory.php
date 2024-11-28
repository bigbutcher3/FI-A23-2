<?php

namespace mvc_sixth\Interfaces\Library;

use mvc_sixth\Library\RequestHandler;

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