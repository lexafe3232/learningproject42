<?php


namespace Authorization;

use \Encryption\PasswordEncryption;
use \Users\User;

class Authorization
{
    public static function login($email, $password)
    {
        $result = ['success' => false, 'errors' => []];

        try {
            $user = User::getByEmail($email);
            $passHash = PasswordEncryption::encrypt($password);
            if ($user->checkPasswordHash($passHash)) {
                static::setAuthorized(true, $user->getId(), $user->getField('username'));
                $result['success'] = true;
            } else {
                $result['success'] = false;
                $result['errors'] = ['auth_invalid_pass'];
            }
        } catch (\Exception $e) {
            $result['success'] = false;
            $result['errors'] = ['auth_user_not_found'];
        }

        return $result;
    }

    public static function setAuthorized(bool $authorized, $user_id = null, $username = null)
    {
        if ($authorized == true) {
            $_SESSION['user_id'] = $user_id;
            $_SESSION['username'] = $username;
        } else {
            unset($_SESSION["user_id"]);
            unset($_SESSION["username"]);
            session_destroy();
        }
    }

    public static function logout()
    {

    }
}