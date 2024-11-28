<?php

namespace mvc_fifth\Interfaces\Library;

interface IRequestHandler
{
    /**
     * @param array $serverVariablen
     */
    public function __construct(array $serverVariablen);

    /**
     * @return string
     */
    public function getControllerName():string;

    /**
     * @return string
     */
    public function getActionName():string;
}