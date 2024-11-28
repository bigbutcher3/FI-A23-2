<?php

namespace mvc_fifth;

use mvc_fifth\Exceptions\ControllerFactory\NotFoundController;
use mvc_fifth\Interfaces\IInit;
use mvc_fifth\Library\ControllerFactory;
use mvc_fifth\Library\RequestHandler;

class Init implements IInit
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
        /* echo PRE;
           print_r($_SERVER);*/
        $this->requestHandler = new RequestHandler($_SERVER);
        /* echo $this->requestHandler->getControllerName();
         echo $this->requestHandler->getActionName();*/
        /*echo PRE;
        print_r($this->requestHandler);*/
        #Magische Konstante __NAMESPACE

    }

    public function setDisplay(): void
    {
        try {
            #Magische Konstante __NAMESPACE
            $controllerFactory = new ControllerFactory(__NAMESPACE__, $this->requestHandler);
            $controller = $controllerFactory->getController();
            #holt sich der Actionname aus dem Objekt "requestHandler" index
            $action = $this->requestHandler->getActionName() . 'Action';
            #Aus dem Instanziierte Objekt "Controller" wird die Methode indexAction aufgerufen
            $controller->$action();
        }catch (NotFoundController $controller)
        {
            echo $controller->getMessage();
        }

    }

    /**
     * @return string
     */
    public function getControllerName(): string
    {
        return $this->requestHandler->getControllerName();
    }

}