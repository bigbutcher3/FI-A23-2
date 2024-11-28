<?php

namespace mvc_sixth\Library;

class AnzeigeTool
{
    /**
     * @param array|object|int|string|null $param
     * @return void
     */
    static public function printr(array|object|null|int|string $param): void
    {
        if (is_null($param)) {
            echo 'ist NULL';
        } elseif (is_string($param) || is_int($param)) {
            echo $param;
        } else {
            echo PRE;
            print_r($param);
            echo UPRE;
        }
    }
}