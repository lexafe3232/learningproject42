<?php


namespace Encryption;


class PasswordEncryption
{
    public static function encrypt($pass)
    {
        $hash = md5($pass);

        return $hash;
    }
}