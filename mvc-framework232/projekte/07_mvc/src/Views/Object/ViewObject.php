<?php

namespace mvc_smarty\Views\Object;

use mvc_smarty\Models\Objecte\SmartyObject;

class ViewObject
{
    /**
     * @return void
     */
    static function getObject(): void
    {
        $_SESSION['smarty']->assign('personen',new SmartyObject());
        $_SESSION['smarty']->display(__DIR__ . '/index.tpl.html');
    }
}