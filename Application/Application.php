<?php


namespace Application;

use Core\Route;
use \database\DB;

class Application
{
    private $db = null;
    private $dbConnected = false;
    private $urlParts = [];

    public function init()
    {
        $this->urlParts = Route::getUrlParts();
    }

    public function getDBConnection()
    {
        if ($dbConnected == false) {
            $this->dbConnect();
        }

        return $this->db;
    }

    public function getUrlParts()
    {
        return $this->urlParts;
    }

    private function dbConnect()
    {
        $this->db = new DB('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
    }
}