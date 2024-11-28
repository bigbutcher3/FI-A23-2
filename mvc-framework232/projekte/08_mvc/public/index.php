<?php
namespace dateninjson;

use dateninjson\Foot\FootIndex;
use dateninjson\Head\HeadIndex;
use dateninjson\Library\AnzeigeTool;
use dateninjson\Navi\NaviIndex;
use Smarty\Smarty;


require_once __DIR__.'/config/config.php';

$_SESSION['smarty'] = $smarty = new Smarty();
#AnzeigeTool::printr($smarty);
$init =new Init();

if ($_SERVER['REQUEST_URI'] != '/csv/download' && $_SERVER['REQUEST_URI'] != '/verzeichniserstellung/upload' && $_SERVER['REQUEST_URI'] != '/Verzeichniserstellung/imgladen/' && $_SERVER['REQUEST_URI'] != '/Dropzone/upload' && $_SERVER['REQUEST_URI'] != '/Dropzone/uploadArray')
{
    HeadIndex::getHead($init,$smarty);
    NaviIndex::getNavi($init,$smarty);
    $init->setDisplay();
    FootIndex::getFoot($smarty);
}else{
    $init->setDisplay();
}