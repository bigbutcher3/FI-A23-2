<?php

namespace mvc_fifth\Models\Muster;

use mvc_fifth\Library\AnzeigeTool;

class Speichern
{
    public function __construct()
    {
        AnzeigeTool::printr($_POST);
        echo 'geht zur DB';
    }
}