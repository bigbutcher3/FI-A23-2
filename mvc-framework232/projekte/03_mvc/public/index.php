<?php
namespace mvc_third;

use mvc_third\Foot\FootIndex;
use mvc_third\Head\HeadIndex;
use mvc_third\Navi\NaviIndex;

require_once __DIR__.'/config/config.php';

$init = new Init();

HeadIndex::getHead($init);
NaviIndex::getNavi($init);

$init->setDisplay();

FootIndex::getFoot();








/*echo PRE;
print_r($_GET);

echo $_GET['param1'];*/