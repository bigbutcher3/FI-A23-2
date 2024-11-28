<?php

namespace mvc_sixth\Interfaces;

interface IInit
{
    /**
     * @return mixed
     */
    public function __construct();

    /**
     * @return void
     */
    public function setDisplay():void;

    /**
     * @return string
     */
    public function getControllerName():string;
}