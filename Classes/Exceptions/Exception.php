<?php


namespace Exceptions;


class Exception extends Exception implements IException
{
    private $code = 0; // Код ошибки

    public function __construct($message = null, $code = 0)
    {
        parent::__construct($message, $code);
    }
}