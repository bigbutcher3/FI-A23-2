<?php

namespace mvc_sixth\Exceptions\ControllerFactory;

use Exception;
use Throwable;

class NotFoundAction extends Exception
{
    /**
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(string $message = "", int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
        file_put_contents(__DIR__.'/Logs/NotFoundAction.log',
            date('d.m.y H:i').parent::getTraceAsString()."\n".parent::getMessage()."\n",FILE_APPEND);
    }
}