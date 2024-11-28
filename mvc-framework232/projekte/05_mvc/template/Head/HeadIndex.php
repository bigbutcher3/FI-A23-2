<?php

namespace mvc_fifth\Head;


class HeadIndex
{
    /**
     * @param object $init
     * @return void
     */
    static public function getHead(object $init): void
    {
        $title = TEMPLATEINFOJSON[lcfirst($init->getControllerName())]['title']??'';
        require_once __DIR__ . '/index.tpl.php';
    }
}