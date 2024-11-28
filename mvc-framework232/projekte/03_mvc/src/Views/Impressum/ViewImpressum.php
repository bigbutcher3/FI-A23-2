<?php

namespace mvc_third\Views\Impressum;

class ViewImpressum
{
    /**
     * @return void
     */
    static function getImpressum(): void
    {
        require_once __DIR__ . '/index.tpl.html';
    }
}