<?php
declare(strict_types=1);
date_default_timezone_set('Europe/Berlin');
const NL= '<br>';
const PRE = '<pre>';
const UPRE = '</pre>';

define('DOCUMENTROOT',dirname(__DIR__).'/');
define('LINUXROOT',dirname(__DIR__,2).'/');

$templateInfoJson = json_decode(file_get_contents(DOCUMENTROOT.'/config/templateInfo.json'),true);
define('TEMPLATEINFOJSON',$templateInfoJson);



require_once LINUXROOT.'vendor/autoload.php';
session_start();

//Smarty Testvariablen
const TESTARRAY = ['Maurer', 'Sven', 'Halle', '06114'];
const TESTARRAYASSO  = ['Name' => 'Maurer', 'Vorname' => 'Sven', 'Adresse' => 'Halle', 'PLZ' => '06114'];

const TEXTCONST = 'Ich bin eine Constante';
$_SESSION['array'] = ['Maurer', 'Sven', 'Halle', '06114'];
$_SESSION['arrayasso']  = ['Name' => 'Maurer', 'Vorname' => 'Sven', 'Adresse' => 'Halle', 'PLZ' => '06114'];

$_SESSION['text'] = 'Ich bin eine SESSION';

$_SESSION['json'] = TEMPLATEINFOJSON;