<?php

namespace mvc_second\Navi;

class NaviIndex
{
    /**
     * @return void
     */
    static function getNavi():void
    {
        require_once __DIR__ . '/index.tpl.html';
    }
}