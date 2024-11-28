<?php
namespace mvc_first;

use mvc_first\Foot\FootIndex;
use mvc_first\Head\HeadIndex;
use mvc_first\Views\Home\ViewHome;

require_once __DIR__.'/config/config.php';

HeadIndex::getHead();
ViewHome::getHome();
FootIndex::getFoot();