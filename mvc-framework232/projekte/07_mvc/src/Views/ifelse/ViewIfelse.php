<?php

namespace mvc_smarty\Views\ifelse;

class ViewIfelse
{
    /**
     * @return void
     */
    static function getIfelse(): void
    {
        $_SESSION['smarty']->display(__DIR__ . '/index.tpl.html');
    }
}