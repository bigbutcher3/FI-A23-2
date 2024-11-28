<?php
namespace mvc_sixth;

use mvc_sixth\Foot\FootIndex;
use mvc_sixth\Head\HeadIndex;
use mvc_sixth\Navi\NaviIndex;

require_once __DIR__.'/config/config.php';

$init = new Init();

HeadIndex::getHead($init);
NaviIndex::getNavi($init);

$init->setDisplay();

FootIndex::getFoot();








/*echo PRE;
print_r($_GET);

echo $_GET['param1'];*/