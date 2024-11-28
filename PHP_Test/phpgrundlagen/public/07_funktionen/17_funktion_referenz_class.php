<?php
require_once '../config.php';
require_once PATHTEMPLATE.'head.tpl.php';

class test
{
    public $name = 'Maurer';
    public function __construct(){}
}


function av(object $referenz)
{
    echo $referenz->name;
}

av(new test());


require_once PATHTEMPLATE.'footer.tpl.html';

