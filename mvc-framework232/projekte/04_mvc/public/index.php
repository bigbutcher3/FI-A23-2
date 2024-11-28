<?php
namespace mvc_fourth;

use mvc_fourth\Foot\FootIndex;
use mvc_fourth\Head\HeadIndex;
use mvc_fourth\Navi\NaviIndex;

require_once __DIR__.'/config/config.php';

$init = new Init();

HeadIndex::getHead($init);
NaviIndex::getNavi($init);

$init->setDisplay();

FootIndex::getFoot();








/*echo PRE;
print_r($_GET);

echo $_GET['param1'];*/