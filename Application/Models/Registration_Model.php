<?php


namespace Application\Models;

use \Registration\Registration;
use \Authorization\Authorization;
use \Validation\RegDataValidator;

class Registration_Model extends \Application\Core\Model
{
    public function register($reg_data)
    {
        $result = ['success' => false, 'errors' => []];

        $validation_result = $this->validateData($reg_data);

        if ($validation_result['validated'] == false) {
            $result['errors'] = $validation_result['errors'];
        } else {
            $result = Registration::register($reg_data);
            if ($result['success'] == true) {
                Authorization::setAuthorized(true, $result['user_id'], $reg_data['username']);
            }
        }

        return $result;
    }

    public function validateData($reg_data)
    {
        return RegDataValidator::validate($reg_data);
    }
}