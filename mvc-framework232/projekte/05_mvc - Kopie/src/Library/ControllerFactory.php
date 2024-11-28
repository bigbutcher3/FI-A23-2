<?php

namespace mvc_fifth\Library;

use mvc_fifth\AbtractClass\Library\AControllerFactory;
use mvc_fifth\Exceptions\ControllerFactory\NotFoundController;

class ControllerFactory extends AControllerFactory
{
    /**
     * @var string
     */
    private string $controllerPath;
    /**
     * @var object $controller
     */
    private object $controller;
    /**
     * @var string $controllerName
     */
    private string $controllerName;

    /**
     * @param string $namespace
     * @param RequestHandler $request
     * @throws NotFoundController
     */
    public function __construct(private readonly string $namespace, private readonly RequestHandler $request)
    {
        $this->buildControllerNameWithNamespace();
        $this->buildControllerPath();
        $this->checkIfControllerExists();
        $this->checkIfActionExists();
        $this->loadController();
    }

    /**
     * @return void
     */
    protected function buildControllerNameWithNamespace(): void
    {
        #mvc_fifth\Controllers\Impressum\Controller
       $this->controllerName = '\\' . $this->namespace . '\\Controllers\\' . ucfirst($this->request->getControllerName()) . '\\Controller';
    }
    protected function buildControllerPath():void
    {
        //LINUXROOT/src/Controller/Home/Controller.php
        // echo LINUXROOT.'src/Controllers/'.ucfirst($this->request->getControllerName()).'/Controller.php';
        //echo dirname(__DIR__,1).'/Controllers/'.ucfirst($this->request->getControllerName()).'/Controller.php';
        echo $this->controllerPath = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Controllers' . DIRECTORY_SEPARATOR . ucfirst($this->request->getControllerName()) . DIRECTORY_SEPARATOR . 'Controller.php';
    }

    /**
     * @return void
     * @throws NotFoundController
     */
    protected function checkIfControllerExists():void
    {
        if(!file_exists($this->controllerPath))
        {
           throw new NotFoundController($this->request->getControllerName().'-Controller does not exists');
        }
    }

    /**
     * @return void
     */
    protected function checkIfActionExists(): void
    {

    }
    /**
     * @return void
     */
    protected function loadController(): void
    {
        $this->controller = new $this->controllerName($this->request);
    }

    /**
     * @return object
     */
    public function getController(): object
    {
        return $this->controller;
    }
}