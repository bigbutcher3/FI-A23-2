<?php

namespace mvc_sixth\AbtractClass\Library;

use mvc_sixth\Interfaces\Library\IControllerFactory;

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
}