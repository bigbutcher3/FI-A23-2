<?php

namespace dateninjson\Head;

class HeadIndex
{
    /**
     * @param object $init
     * @param object $smarty
     * @return void
     */
    static public function getHead(object $init,object $smarty): void
    {
        $smarty->assign('title',TEMPLATEINFOJSON[lcfirst($init->getControllerName())]['title'] ?? '');
        $smarty->display(__DIR__ . '/index.tpl.html');
    }
}