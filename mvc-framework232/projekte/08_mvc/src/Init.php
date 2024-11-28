<?php

namespace dateninjson;

use dateninjson\Exceptions\ControllerFactory\NotFoundAction;
use dateninjson\Exceptions\ControllerFactory\NotFoundController;
use dateninjson\Exceptions\CSV\ErrorInCsv;
use dateninjson\Exceptions\Textspeichernjson\ErrorInTextspeichern;
use dateninjson\Exceptions\Verzeichniserstellung\ErrorInVerzeichnis;
use dateninjson\Interfaces\IInit;
use dateninjson\Library\ControllerFactory;
use dateninjson\Library\RequestHandler;
use dateninjson\Views\Meldung\ViewMeldung;


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
      /*  echo PRE;
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
        } catch (NotFoundController|NotFoundAction $controller) {
            ViewMeldung::getMeldung($controller->getMessage());
        }catch (ErrorInTextspeichern $errorInTextspeichern){
            ViewMeldung::getMeldung($errorInTextspeichern->getMessage(),'/Textspeichernjson');
        }catch (ErrorInVerzeichnis $verzeichniserstellung) {
            ViewMeldung::getMeldung($verzeichniserstellung->getMessage(), '/Verzeichniserstellung');
        }catch (ErrorInCsv $csv) {
            ViewMeldung::getMeldung($csv->getMessage(), '/Csv');
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