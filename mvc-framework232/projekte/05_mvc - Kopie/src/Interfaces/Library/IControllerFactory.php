<?php

namespace mvc_fifth\Interfaces\Library;

use mvc_fifth\Library\RequestHandler;

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