<?php


namespace Validation;

use \Aura\Filter\FilterFactory;

class AuthDataValidator
{
    public static function validate($data)
    {
        $result = ['validated' => false, 'errors' => []];

        $filter = (new FilterFactory)->newSubjectFilter();

        $filter->validate('email')
            ->isNotBlank()
            ->is('email')
            ->setMessage('auth_invalid_email');

        $filter->validate('password')
            ->isNotBlank()
            ->is('alnum')
            ->setMessage('auth_invalid_password');

        $valid = $filter->apply($data);

        if (!$valid) {
            $failures = $filter->getFailures();
            $messages = $failures->getMessages();

            foreach ($messages as $item) {
                $result['errors'][]=$item[0];
            }
        } else {
            $result['validated'] = true;
        }

        return $result;
    }
}