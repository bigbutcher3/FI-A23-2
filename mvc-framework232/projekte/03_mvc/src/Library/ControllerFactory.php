<?php

namespace mvc_third\Library;

class ControllerFactory
{
    /**
     * @var object $controller
     */
    private object $controller;
    /**
     * @var string $controllerPath
     */
    private string $controllerName;

    /**
     * @param string $namespace
     * @param RequestHandler $requestHandler
     */
    public function __construct(private readonly string $namespace, private readonly RequestHandler $requestHandler)
    {
        $this->buildControllerNameWithNamespace();
        $this->loadController();
    }

    /**
     * @return void
     */
    private function buildControllerNameWithNamespace(): void
    {
        //use mvc_third\Controllers\Impressum\Controller;
        $this->controllerName = '\\' . $this->namespace . '\\Controllers\\' . ucfirst($this->requestHandler->getControllerName() . '\\Controller');
    }

    private function loadController(): void
    {
        $this->controller = new $this->controllerName;
    }

    public function getController():object
    {
        return $this->controller;
    }

}