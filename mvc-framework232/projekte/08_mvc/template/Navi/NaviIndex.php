<?php

namespace dateninjson\Navi;

class NaviIndex
{
    /**
     * @param object $init
     * @param object $smarty
     * @return void
     */

    static public function getNavi(object $init, object $smarty): void
    {
        $smarty->assign('ActivItem', lcfirst($init->getControllerName()));
        $smarty->display(__DIR__ . '/index.tpl.html');
    }
}