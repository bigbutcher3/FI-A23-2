<?php
namespace mvc_fifth;

use mvc_fifth\Foot\FootIndex;
use mvc_fifth\Head\HeadIndex;
use mvc_fifth\Navi\NaviIndex;

require_once __DIR__.'/config/config.php';

$init = new Init();

HeadIndex::getHead($init);
NaviIndex::getNavi($init);

$init->setDisplay();

FootIndex::getFoot();








/*echo PRE;
print_r($_GET);

echo $_GET['param1'];*/