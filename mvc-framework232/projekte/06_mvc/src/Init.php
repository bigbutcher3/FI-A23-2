<?php

namespace mvc_sixth;

use mvc_sixth\Exceptions\ControllerFactory\NotFoundAction;
use mvc_sixth\Exceptions\ControllerFactory\NotFoundController;
use mvc_sixth\Interfaces\IInit;
use mvc_sixth\Library\ControllerFactory;
use mvc_sixth\Library\RequestHandler;
use mvc_sixth\Views\Meldung\ViewMeldung;

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

    /**
     * @return void
     */
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
        }catch (NotFoundController | NotFoundAction $controller)
        {
           ViewMeldung::getMeldung($controller->getMessage(),'/anfahrt');
            //echo $controller->getMessage();
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