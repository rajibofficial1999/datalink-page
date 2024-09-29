<?php

namespace App\Http\Exceptions;

use Exception;

class ExceptionHandler extends Exception
{
    protected mixed $statusCode;

    public function __construct($statusCode = 500, $message = '', Exception $previous = null)
    {
        $this->statusCode = $statusCode;
        $message = $message ?: $this->defaultMessageForStatusCode($statusCode);

        parent::__construct($message, $statusCode, $previous);
    }

    public function getStatusCode()
    {
        return $this->statusCode;
    }

    protected function defaultMessageForStatusCode($statusCode): string
    {
        $messages = [
            400 => 'Bad Request',
            401 => 'Unauthorized',
            403 => 'Forbidden',
            404 => 'Not Found',
            500 => 'Internal Server Error',
        ];

        return $messages[$statusCode] ?? 'Unknown Status';
    }
}
