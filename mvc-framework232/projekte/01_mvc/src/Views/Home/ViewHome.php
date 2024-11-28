<?php

namespace mvc_first\Views\Home;

class ViewHome
{
    /**
     * @return void
     */
    static public function getHome():void
    {
        require_once __DIR__.'/index.tpl.html';
    }
}