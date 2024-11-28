<?php
namespace mvc_second;

use mvc_second\Foot\FootIndex;
use mvc_second\Head\HeadIndex;
use mvc_second\Navi\NaviIndex;


require_once __DIR__.'/config/config.php';

HeadIndex::getHead();
NaviIndex::getNavi();
new Init();

FootIndex::getFoot();








/*echo PRE;
print_r($_GET);

echo $_GET['param1'];*/