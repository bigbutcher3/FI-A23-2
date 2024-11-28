<?php

namespace dateninjson\Models\Textspeichernjson\Login;

use dateninjson\Exceptions\Textspeichernjson\ErrorInTextspeichern;


class Authentifizierung
{
    public static function ueberpruefungSession():void
    {
            empty($_SESSION['login'])?header('Location: /textspeichernjson/zumlogin'):header('Location: /textspeichernjson/zumauslesen');
    }

    /**
     * @param string|null $username
     * @param string|null $passwd
     * @return void
     * @throws ErrorInTextspeichern
     */
    public static function ueberpruefeLogin(null|string $username=NULL,null|string $passwd=NULL): void
    {
        (isset($username) && isset($passwd))?:throw new ErrorInTextspeichern('keine User-Daten vorhanden!');
        //LoginDaten::userDatenIni() oder  LoginDaten::userDatenJson()
        //AnzeigeTool::printr(LoginDaten::userDatenIni()['login']);
        //echo array_search($passwd, LoginDaten::userDatenIni()['login']);
        if ($username === array_search($passwd, LoginDaten::userDatenIni()['login'])) {
            $_SESSION['login'] = true;
            ///textspeichern/auslesen
            header('Refresh:0; /textspeichernjson/zumauslesen');
        } else {
            ///textspeichern/zumlogin/fehler
            header('Refresh:0; /textspeichernjson/zumlogin/fehler');
        }
    }
}