<?php

namespace mvc_smarty\Foot;

class FootIndex
{
    /**
     * @param object $smarty
     * @return void
     */
    static public function getFoot(object $smarty): void
    {
        $smarty->display(__DIR__ . '/index.tpl.html');
    }
}