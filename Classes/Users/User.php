<?php


namespace Users;

class User extends \DBObjects\User
{
    public function checkPasswordHash($passHash) {
        if ($this->getField('passwordHash') == $passHash) {
            return true;
        } else {
            return false;
        }
    }
}