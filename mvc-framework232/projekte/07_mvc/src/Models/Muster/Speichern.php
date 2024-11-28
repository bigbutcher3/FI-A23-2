<?php

namespace mvc_smarty\Models\Muster;

use mvc_smarty\Library\AnzeigeTool;

class Speichern
{
    public function __construct()
    {
        AnzeigeTool::printr($_POST);
        echo 'geht zur DB';
    }
}