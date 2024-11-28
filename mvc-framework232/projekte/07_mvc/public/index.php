<?php
namespace mvc_smarty;

use mvc_smarty\Foot\FootIndex;
use mvc_smarty\Head\HeadIndex;
use mvc_smarty\Library\AnzeigeTool;
use mvc_smarty\Navi\NaviIndex;
use Smarty\Smarty;


require_once __DIR__.'/config/config.php';

$_SESSION['smarty'] = $smarty = new Smarty();
#AnzeigeTool::printr($smarty);
$init =new Init();

HeadIndex::getHead($init,$smarty);
NaviIndex::getNavi($init,$smarty);
$init->setDisplay();

FootIndex::getFoot($smarty);