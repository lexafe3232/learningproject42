<?php


namespace DBObjects;

use DbConnection\DbConnection;
use \Exceptions\DbObjectException;

class User extends DBObject
{
    protected function setDefaultFieldsValues()
    {
        $this->setFields(array(
            'reg_datetime' => date("Y-m-d H:i:s")
        ));
    }

    public static function getTable()
    {
        return 'Users';
    }

    public static function getByEmail($email)
    {
        $db = DbConnection::getConnection();
        $fields = $db->executeQuery('SELECT * FROM '.static::getTable().' WHERE email = ?', array($email))->fetch(\PDO::FETCH_ASSOC);
        if (is_array($fields)) {
            $user = new \Users\User($fields);
            return $user;
        } else {
            throw($e = new DbObjectException('User not found'));
        }
    }

    public static function getByEmail_Username($email, $username)
    {
        $db = DbConnection::getConnection();
        $fields = $db->executeQuery('SELECT * FROM '.static::getTable().' WHERE email = ? OR username = ?', array($email, $username))->fetch(\PDO::FETCH_ASSOC);
        if (is_array($fields)) {
            $user = new \Users\User($fields);
            return $user;
        } else {
            throw($e = new DbObjectException('User not found'));
        }
    }
}