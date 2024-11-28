<?php

namespace mvc_fourth\Foot;

class FootIndex
{
    /**
     * @return void
     */
    static public function getFoot(): void
    {
        require_once __DIR__ . '/index.tpl.html';
    }
}