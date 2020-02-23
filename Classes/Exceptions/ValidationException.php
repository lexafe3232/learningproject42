<?php


namespace Exceptions;


class ValidationException extends Exception
{
    private $code = 10;
    private $field;

    public function __construct($message = null, $code = 0)
    {
        parent::__construct($message, $code);
    }
}