<?php

namespace mvc_smarty\AbtractClass\Library;

use mvc_smarty\Interfaces\Library\IControllerFactory;

abstract class AControllerFactory implements IControllerFactory
{
    /**
     * @return void
     */
    abstract protected function buildControllerNameWithNamespace(): void;

    /**
     * @return void
     */
    abstract protected function loadController(): void;

    /**
     * @return void
     */
    abstract protected function buildControllerPath():void;
    /**
     * @return void
     */
    abstract protected function checkIfControllerExists():void;

    /**
     * @return void
     */
    abstract protected function checkIfActionExists():void;
}