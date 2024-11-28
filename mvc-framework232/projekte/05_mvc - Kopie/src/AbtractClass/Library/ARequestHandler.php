<?php

namespace mvc_fifth\AbtractClass\Library;

use mvc_fifth\Interfaces\Library\IRequestHandler;

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