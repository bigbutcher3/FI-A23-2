<?php

namespace dateninjson\Models\Spiel;

class Header
{
    /**
     * @return void
     */
    public static function ueberpruefung():void
    {
        empty($_SESSION['login'])?header('Location:/spiel/zumLogin'):header('Location:/spiel/zumauslesen');
    }
}