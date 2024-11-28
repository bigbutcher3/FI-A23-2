<?php

namespace mvc_smarty\Views\Constsession;

class ViewConst
{
    /**
     * @return void
     */
    static function getConstsession(): void
    {
        $_SESSION['smarty']->display(__DIR__ . '/index.tpl.html');
    }
}