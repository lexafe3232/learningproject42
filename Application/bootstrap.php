<?php
ini_set('display_errors', 1);

define('ROOT', $_SERVER['DOCUMENT_ROOT']);
define('APP_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/Application/');
define('CLASSES_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/Classes/');

include ROOT.'/configs/db.php';
include ROOT.'/vendor/autoload.php';

\Application\Core\Route::start();