<?php

namespace dateninjson\Exceptions\Textspeichernjson;

use Exception;
use Throwable;

class ErrorInTextspeichern extends Exception
{
    /**
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(string $message = "", int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
        file_put_contents(__DIR__ . '/Logs/ErrorTextspeichern.log',
            date('d.m.y H:i') . parent::getTraceAsString() . "\n" . parent::getMessage() . "\n", FILE_APPEND);
    }
}