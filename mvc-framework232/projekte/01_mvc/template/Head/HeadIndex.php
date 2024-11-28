<?php

namespace mvc_first\Head;

class HeadIndex
{
    /**
     * @return void
     */
    static public function getHead(): void
    {
        require_once __DIR__ . '/index.tpl.html';
    }
}