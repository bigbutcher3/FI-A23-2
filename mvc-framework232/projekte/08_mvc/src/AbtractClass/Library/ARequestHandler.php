<?php

namespace dateninjson\AbtractClass\Library;

use dateninjson\Interfaces\Library\IRequestHandler;

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