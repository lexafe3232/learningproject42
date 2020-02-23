<?php


namespace Application\Controllers;


use Application\Application;
use Application\Core\Route;

class Controller_Profile extends \Application\Core\Controller
{
    function __construct()
    {
        $this->model = new \Application\Models\Profile_Model();
        $this->view = new \Application\Core\View();
    }

    function action_view()
    {
        $data = [];

        $routes = Route::getUrlParts();
        if (empty($routes[3])) {
            Route::ErrorPage404();
        } else {
            $user_id = (integer)trim($routes[3]);
            $data = $this->model->getUserData($user_id);
            if ($data === false) {
                Route::ErrorPage404();
            }
        }
        
        $this->view->generate('profile.php', 'default.php', $data);
    }
}