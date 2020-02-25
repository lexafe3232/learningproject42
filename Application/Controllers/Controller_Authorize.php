<?php


namespace Application\Controllers;

use \Authorization\Authorization;
use \Application\Core\Route;

class Controller_Authorize extends \Application\Core\Controller
{
    public function __construct()
    {
        $this->authorize_model = new \Application\Models\Authorization_Model();
        $this->register_model = new \Application\Models\Registration_Model();
        $this->view = new \Application\Core\View();
    }

    public function action_index()
    {
        $result = ['success' => false, 'errors' => []];

        if (isset($_SESSION['user_id'])) {
            Route::redirectToAutzUserProfile();
        }

        if (isset($_POST['register_submit'])) {
            $reg_data['username'] = trim($_POST['reg_username']);
            $reg_data['email'] = trim($_POST['reg_email']);
            $reg_data['password'] = trim($_POST['reg_password']);
            $reg_data['firstname'] = trim($_POST['reg_firstname']);
            $reg_data['lastname'] = trim($_POST['reg_lastname']);

            $result = $this->register_model->register($reg_data);
        }

        if (isset($_POST['login_submit'])) {
            $login = trim($_POST['email']);
            $password = trim($_POST['password']);

            $result = $this->authorize_model->login($login, $password);
        }

        if ($result['success'] == true) {
            unset($_POST);
            Route::redirectToAutzUserProfile();
        } else {
            $data['errors'] = $result['errors'];
        }

        $this->view->generate('authorize.php', 'default.php', $data);
    }

    public function action_logout()
    {
        Authorization::setAuthorized(false);
        header("Location: /authorize/");
    }
}