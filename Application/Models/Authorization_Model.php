<?php


namespace Application\Models;

use \Authorization\Authorization;
use \Validation\AuthDataValidator;

class Authorization_Model extends \Application\Core\Model
{
    public function login($email, $password)
    {
        $result = ['success' => false, 'errors' => []];

        $validation_result = $this->validateData(['email' => $email, 'password' => $password]);

        if ($validation_result['validated'] == false) {
            $result['errors'] = $validation_result['errors'];
        } else {
            $result = Authorization::login($email, $password);
        }

        return $result;
    }

    public function validateData($reg_data)
    {
        return AuthDataValidator::validate($reg_data);
    }

    public function logout()
    {
        if ($_SESSION['user_id']) {
            Authorization::logout();
        }
    }
}