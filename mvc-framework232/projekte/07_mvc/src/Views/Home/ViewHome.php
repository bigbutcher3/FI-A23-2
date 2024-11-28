<?php

namespace mvc_smarty\Views\Home;

class ViewHome
{
    /**
     * @return void
     */
    static function getHome(): void
    {
        $_SESSION['smarty']->display(__DIR__ . '/index.tpl.html');
    }
}