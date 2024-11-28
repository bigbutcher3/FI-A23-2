<?php
//------include kann eine Datei mehrfach einbinden und gibt bei einer fehlerhaften Einbindung nur eine Warnmeldung.-----
//------require kann eine Datei mehrfach einbinden und gibt bei einer fehlerhaften Einbindung eine Fehlermeldung und Warnmeldung. Programm hält an-----
include __DIR__.'/../../include/einbinden.html';
require __DIR__.'/../../include/einbinden.html';

#include __DIR__.'/../../include/einbinden.html';
#include __DIR__.'/../../include/einbinden.php';

#include(dirname(dirname(__DIR__)).'/include/einbinden.php');
echo '<br>';
//------include_once kann eine Datei nur einmal einbinden
echo 'include_once kann eine Datei nur einmal einbinden<br>';

#include_once(dirname(dirname(__DIR__)).'/include/einbinden.php') ;
#include_once(dirname(dirname(__DIR__)).'/include/einbinden.php') ;
#include_once(dirname(dirname(__DIR__)).'/include/einbinden.php') ;

#require __DIR__.'/../../include/einbinden.html';
#require __DIR__.'/../../include/einbinden.php';

#require(dirname(dirname(__DIR__)).'/include/einbinden.php');
echo '<br>';
//------include_once kann eine Datei nur einmal einbinden
echo 'require_once kann eine Datei nur einmal einbinden<br>';

require_once(dirname(__DIR__,2).'/include/einbinden.php') ;
require_once(dirname(__DIR__,2).'/include/einbinden.php') ;
require_once(dirname(__DIR__,2).'/include/einbinden.php') ;