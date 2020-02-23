<?php


namespace DbConnection;


use \database\DB;

class DbConnection
{
    public static function getConnection()
    {
        return new DB('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
    }
}