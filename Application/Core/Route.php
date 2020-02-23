<?php


namespace Application\Core;

use \Application\Controllers;

class Route
{
    public static function start()
    {
        session_start();

        $controller_name = 'authorize';
        $action_name = 'index';

        $routes = static::getUrlParts();

        if (!empty($routes[1])) {
            $controller_name = ucfirst(trim($routes[1]));
        }

        if (!empty($routes[2])) {
            $action_name = trim($routes[2]);
        }

        $controller_name = 'Controller_'.$controller_name;
        $action_name = 'action_'.$action_name;

        $controller_class = '\Application\Controllers\\'.$controller_name;

        if (class_exists($controller_class)) {
            $controller = new $controller_class;
        } else {
            Route::ErrorPage404();
        }

        if(method_exists($controller, $action_name))
        {
            $controller->$action_name();
        }
        else
        {
            Route::ErrorPage404();
        }
    }

    public static function getUrlParts()
    {
        $url_parts_all = explode('/', $_SERVER['REQUEST_URI']);

        $url_parts = [];
        foreach ($url_parts_all as $part) {
            $url_parts[]=trim(htmlspecialchars($part));
        }

        return $url_parts;
    }

    public static function ErrorPage404()
    {
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location: /404/');
    }

    public static function redirectToAutzUserProfile()
    {
        header('HTTP/1.1 303');
        header("Status: 303");
        header('Location: /profile/view/'.$_SESSION['user_id'].'/');
    }
}