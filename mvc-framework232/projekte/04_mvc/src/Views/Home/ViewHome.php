<?php

namespace mvc_fourth\Views\Home;

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