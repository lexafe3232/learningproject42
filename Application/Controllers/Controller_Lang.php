<?php


namespace Application\Controllers;


use Application\Core\Route;
use Application\Languages\Language;

class Controller_Lang
{
    public function action_set()
    {
        $routes = Route::getUrlParts();
        if (empty($routes[3])) {
            Route::ErrorPage404();
        } else {
            if (!Language::changeLanguage(trim(ucfirst($routes[3])))) {
                Route::ErrorPage404();
            } else {
                header("Location: /authorize/");
            }
        }
    }
}