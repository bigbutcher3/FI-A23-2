<?php

namespace mvc_second;


use mvc_second\Library\ControllerFactory;
use mvc_second\Library\RequestHandler;

class Init
{
    /**
     * @var RequestHandler $requestHandler
     */
    private RequestHandler $requestHandler;
    public function __construct()
    {
        /*echo PRE;
        print_r($_SERVER['REQUEST_URI']);*/
        $this->requestHandler = new RequestHandler($_SERVER);
       $controllerFactory = new ControllerFactory(__NAMESPACE__,$this->requestHandler);
       $controller =  $controllerFactory->getController();
       $action = $this->requestHandler->getActionName().'Action';
       $controller->$action();
    }
}