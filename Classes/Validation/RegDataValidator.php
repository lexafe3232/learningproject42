<?php


namespace Validation;

use \Aura\Filter\FilterFactory;
use \Users\User;

class RegDataValidator
{
    public static function validate($data)
    {
        $result = ['validated' => false, 'errors' => []];

        $result['errors'] = static::checkExists($data['email'], $data['username']);

        $result['errors'] = array_merge($result['errors'], static::validateFields($data));

        if (!count($result['errors'])) {
            $result['validated'] = true;
        }

        return $result;
    }

    protected static function checkExists($email, $username)
    {
        $errors = [];

        try {
            $user = User::getByEmail_Username($email, $username);
            if ($user->getField('email') == $email) {
                array_push($errors,'reg_email_exists');
            }
            if ($user->getField('username') == $username) {
                array_push($errors,'reg_username_exists');
            }
        } catch (\Exception $e) {

        }

        return $errors;
    }

    protected static function validateFields($data)
    {
        $errors = [];

        $filter = (new FilterFactory)->newSubjectFilter();

        $filter->validate('username')
            ->isNotBlank()
            ->is('alnum')
            ->is('strlenBetween', 4, 20)
            ->setMessage('reg_invalid_username');

        $filter->validate('email')
            ->isNotBlank()
            ->is('email')
            ->setMessage('reg_invalid_email');

        $filter->validate('password')
            ->isNotBlank()
            ->is('alnum')
            ->is('strlenBetween', 6, 30)
            ->setMessage('reg_invalid_password');

        $filter->validate('firstname')
            ->isNotBlank()
            ->is('alpha')
            ->is('strlenBetween', 4, 20)
            ->setMessage('reg_invalid_firstname');

        $filter->validate('lastname')
            ->isNotBlank()
            ->is('alpha')
            ->is('strlenBetween', 4, 20)
            ->setMessage('reg_invalid_lastname');


        $valid = $filter->apply($data);

        if (!$valid) {
            $failures = $filter->getFailures();
            $messages = $failures->getMessages();

            foreach ($messages as $item) {
                $errors[]=$item[0];
            }
        }

        return $errors;
    }
}