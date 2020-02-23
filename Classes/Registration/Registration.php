<?php


namespace Registration;

use \Encryption\PasswordEncryption;
use \Users\User;

class Registration
{
    public static function register($user_data)
    {
        $result = ['success' => false, 'errors' => []];

        $user_data['passwordHash'] = PasswordEncryption::encrypt($user_data['password']);
        unset($user_data['password']);

        try {
            $user = new User($user_data);
            $user->save();

            $result['user_id'] = $user->getId();
            $result['success'] = true;
        } catch (\Exception $e) {
            $result['success'] = false;
        }

        return $result;
    }
}