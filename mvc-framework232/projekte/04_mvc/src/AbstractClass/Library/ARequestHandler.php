<?php

namespace mvc_fourth\AbstractClass\Library;

use mvc_fourth\Interfaces\Library\IRequestHandler;

abstract class ARequestHandler implements IRequestHandler
{
    /**
     * @param array $serverVariablen
     */
    public function __construct(private readonly array $serverVariablen)
    {
        $this->checkIfUriPartsExists($this->cutUriParts());
    }
    /**
     * @return array
     */
    abstract protected function cutUriParts():array;

    abstract protected function checkIfUriPartsExists($matches):void;
}