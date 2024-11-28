<?php

namespace mvc_smarty\AbtractClass\Library;

use mvc_smarty\Interfaces\Library\IRequestHandler;

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