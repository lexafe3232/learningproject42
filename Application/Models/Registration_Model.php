<?php


namespace Application\Models;

use \Registration\Registration;
use \Authorization\Authorization;
use \Validation\RegDataValidator;
use \Verot\Upload\Upload;

class Registration_Model extends \Application\Core\Model
{
    public function register($reg_data)
    {
        $result = ['success' => false, 'errors' => []];

        $validation_result = $this->validateData($reg_data);

        if ($validation_result['validated'] == false) {
            $result['errors'] = $validation_result['errors'];
        }

        if (!empty($_FILES['reg_avatar']['name'])) {
            $uploadimg_result = $this->uploadAvatar($_FILES['reg_avatar']);
            if ($uploadimg_result['success'] == true) {
                $reg_data['avatar'] = $uploadimg_result['file_name'];
            } else {
                $result['errors'] = array_merge($result['errors'], $uploadimg_result['errors']);
            }
        }

        if (count($result['errors']) == 0) {
            $result = Registration::register($reg_data);
            if ($result['success'] == true) {
                Authorization::setAuthorized(true, $result['user_id'], $reg_data['username']);
            }
        }

        if (isset($uploadimg_result['file_name']) && $result['success'] != true) {
            unlink(ROOT.AVATAR_DIR.$uploadimg_result['file_name']);
        }

        return $result;
    }

    public function validateData($reg_data)
    {
        return RegDataValidator::validate($reg_data);
    }

    public function uploadAvatar($uploaded_file)
    {
        $result = ['success' => false, 'errors' => []];

        if (!in_array($uploaded_file["type"], ['image/jpeg', 'image/gif', 'image/png'])) {
            $result['errors'] = ['reg_upload_avatar_invalid_file'];
        } else {
            if ($uploaded_file["size"] > AVATAR_MAX_SIZE) {
                $result['errors'] = ['reg_upload_avatar_too_large'];
            } else {
                list($width, $height, $type, $attr) = getimagesize($uploaded_file['tmp_name']);

                $imgHandler = new Upload($uploaded_file);

                if ($imgHandler->uploaded) {

                    $image_name = date('md_is').rand(10, 90);
                    $imgHandler->file_new_name_body = $image_name;
                    $imgHandler->image_convert = 'jpg';

                    if ($width > 200) {
                        $imgHandler->image_resize = true;
                        $imgHandler->image_x = 200;
                        $imgHandler->image_ratio_y = true;
                    }

                    $imgHandler->process(ROOT.AVATAR_DIR);

                    if ($imgHandler->processed) {
                        $result['success'] = true;
                        $result['file_name'] = $image_name.'.jpg';
                    } else {
                        $result['errors'] = ['reg_upload_avatar_error'];
                    }
                } else {
                    $result['errors'] = ['reg_upload_avatar_error'];
                }
                $imgHandler->clean();
            }
        }

        return $result;
    }
}