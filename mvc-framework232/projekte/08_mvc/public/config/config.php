<?php
declare(strict_types=1);


date_default_timezone_set('Europe/Berlin');
const NL = '<br>';
const PRE = '<pre>';
const UPRE = '</pre>';

define('DOCUMENTROOT', dirname(__DIR__) . '/');
define('LINUXROOT', dirname(__DIR__, 2) . '/');

$templateInfoJson = json_decode(file_get_contents(DOCUMENTROOT . '/config/templateInfo.json'), true);
define('TEMPLATEINFOJSON', $templateInfoJson);

$kontaktformularJson = json_decode(file_get_contents(DOCUMENTROOT . '/config/kontaktformular.json'), true);
define('SPORTART', $kontaktformularJson['sportart']);
define('LAENDER', $kontaktformularJson['laender']);
define('VEREIN', $kontaktformularJson['verein']);
define('INDEXARRAY', $kontaktformularJson['indexArray']);
define('NAMEARRAY', $kontaktformularJson['nameArray']);

const UMBRUCHTEXTAREA = 40;
define('NTL', chr(13) . chr(10));
const PATHSPEICHERORT = LINUXROOT . 'src/Speicherort/';
const DATENSATZJSONFILE = 'datensatz.json';


const IMGUPLOAD = DOCUMENTROOT.'ImgUpload/';
const UPLOADTYP = array('image/png', 'image/gif', 'image/jpeg','image/jpg', 'application/pdf');

const ZULASSUNGSTYP = array('application/json');

const JSONPATH ='Import/';

const CSVPATH = PATHSPEICHERORT . 'Export/export.csv';
require_once LINUXROOT . 'vendor/autoload.php';
session_start();