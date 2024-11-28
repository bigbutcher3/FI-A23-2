<?php

namespace mvc_fourth;


use mvc_fourth\Library\ControllerFactory;
use mvc_fourth\Library\RequestHandler;

class Init
{
    /**
     * @var RequestHandler $requestHandler
     */
    private RequestHandler $requestHandler;

    /**
     *
     */
    public function __construct()
    {
        /*echo PRE;
        print_r($_SERVER['REQUEST_URI']);*/
        $this->requestHandler = new RequestHandler($_SERVER);
        /* echo $this->requestHandler->getControllerName();
                echo $this->requestHandler->getActionName();*/
        /*echo PRE;
        print_r($this->requestHandler);*/
    }

    /**
     * @return void
     */
    public function setDisplay():void
    {
        #Magische Konstante __NAMESPACE_
        $controllerFactory = new ControllerFactory(__NAMESPACE__,$this->requestHandler);
        $controller =  $controllerFactory->getController();
        #holt sich der Actionname aus dem Objekt "requestHandler" index
        $action = $this->requestHandler->getActionName().'Action';
        #Aus dem Instanziierte Objekt "Controller" wird die Methode indexAction aufgerufen
        $controller->$action();
    }

    /**
     * @return string
     */
    public function getControllerName():string
    {
       return $this->requestHandler->getControllerName();
    }
}