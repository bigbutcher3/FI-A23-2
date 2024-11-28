<?php

namespace mvc_fifth\Views\Home;

class ViewHome
{
    /**
     * @return void
     */
    static function getHome(): void
    {
        require_once __DIR__ . '/index.tpl.html';
    }
}