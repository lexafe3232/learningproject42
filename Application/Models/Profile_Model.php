<?php


namespace Application\Models;


use \Users\User;

class Profile_Model extends \Application\Core\Model
{
    public function getUserData($user_id)
    {
        $data = [];
        if (is_int($user_id) && $user_id > 0) {
            try {
                $data = User::getById($user_id)->getFields();

                $data['reg_datetime'] = date('d.m.Y H:i:s', strtotime($data['reg_datetime']));

                if (!empty($data['avatar'])) {
                    if (!file_exists(ROOT.AVATAR_DIR.$data['avatar'])) {
                        unset($data['avatar']);
                    }
                }

                return $data;
            } catch(\Exception $e) {
                return false;
            }
        }

        return false;
    }
}