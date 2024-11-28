<?php

namespace mvc_sixth\Views\Home;

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