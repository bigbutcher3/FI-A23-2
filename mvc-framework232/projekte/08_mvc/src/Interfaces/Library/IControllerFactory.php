<?php

namespace dateninjson\Interfaces\Library;

use dateninjson\Library\RequestHandler;

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