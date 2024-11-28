<?php

namespace mvc_smarty\Library;

use mvc_smarty\AbtractClass\Library\AControllerFactory;
use mvc_smarty\Exceptions\ControllerFactory\NotFoundAction;
use mvc_smarty\Exceptions\ControllerFactory\NotFoundController;

class ControllerFactory extends AControllerFactory
{
    /**
     * @var object $controller
     */
    private object $controller;
    /**
     * @var string $controllerName
     */
    private string $controllerName;
    /**
     * @var string $controllerPath
     */
    private string $controllerPath;

    /**
     * @param string $namespace
     * @param RequestHandler $request
     */
    public function __construct(private readonly string $namespace, private readonly RequestHandler $request)
    {
        $this->buildControllerNameWithNamespace();
        $this->buildControllerPath();
        $this->checkIfControllerExists();
        $this->loadController();
        $this->checkIfActionExists();
    }

    /**
     * @return void
     */
    protected function buildControllerNameWithNamespace(): void
    {
        #mvc_smarty\Controllers\Impressum\Controller
        $this->controllerName = '\\' . $this->namespace . '\\Controllers\\' . ucfirst($this->request->getControllerName()) . '\\Controller';
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

    /**
     * @return void
     */
    protected function buildControllerPath(): void
    {
        //LINUXROOT/src/Controller/Home/Controller.php
        //LINUXROOT.'src/Controllers/'.ucfirst($this->request->getControllerName()).'/Controller.php';
        //dirname(__DIR__,1).'/Controllers/'.ucfirst($this->request->getControllerName()).'/Controller.php';
        $this->controllerPath = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Controllers' . DIRECTORY_SEPARATOR . ucfirst($this->request->getControllerName()) . DIRECTORY_SEPARATOR . 'Controller.php';
    }

    /**
     * @return void
     */
    protected function checkIfControllerExists(): void
    {
       if(!file_exists($this->controllerPath))
       {
           throw new NotFoundController($this->request->getControllerName().'-Controller does not exists!');
       }
    }

    /**
     * @return void
     */
    protected function checkIfActionExists(): void
    {
        if(!method_exists($this->controller,$this->request->getActionName().'Action'))
        {
            throw new NotFoundAction($this->request->getActionName().' Action not found im Controller '.$this->request->getControllerName());
        }
    }
}