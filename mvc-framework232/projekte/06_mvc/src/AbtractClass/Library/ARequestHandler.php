<?php

namespace mvc_sixth\AbtractClass\Library;

use mvc_sixth\Interfaces\Library\IRequestHandler;

abstract class ARequestHandler implements IRequestHandler
{
    /**
     * @return array
     */
    abstract protected function cutUriParts(): array;

    /**
     * @param $matches
     * @return void
     */

    abstract protected function checkIfUriPartsExists($matches): void;
}