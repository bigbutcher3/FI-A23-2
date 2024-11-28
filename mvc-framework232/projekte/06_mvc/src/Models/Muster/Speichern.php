<?php

namespace mvc_sixth\Models\Muster;

use mvc_sixth\Library\AnzeigeTool;

class Speichern
{
    public function __construct()
    {
        AnzeigeTool::printr($_POST);
        echo 'geht zur DB';
    }
}