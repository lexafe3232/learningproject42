<?php


namespace Application\Languages;


class English extends Language
{
    protected $strings = [
        'app_name' => 'Test Web-Application',
        'app_copyright' => '© Sergey Sobyanin 2020',

        'str_welcome' => 'Welcome',
        'str_logout' => 'Logout',

        'label_authorization' => 'Authorization',
        'label_registration' => 'Registration',
        'label_login' => 'Login',

        'label_register' => 'Register',
        'label_authorize' => 'Login',

        'label_user' => 'User',
        'label_username' => 'Username',
        'label_email' => 'E-mail',
        'label_password' => 'Password',
        'label_firstname' => 'Firstname',
        'label_lastname' => 'Lastname',
        'label_reg_datetime' => 'Registration date',
        'label_upd_datetime' => 'Update date',

        'label_upload_image' => 'Upload avatar',
        'label_upload_avatar_format' => 'Allowed formats: JPEG, PNG, GIF. Image size should not exceed 4 MB',

        'error_404' => '404 error',
        'error_404_descr' => 'Sorry, the page you requested was not found.',

        'error_auth_empty_data' => 'Please, input login and password',
        'error_auth_user_not_found' => 'User with specified email not found',
        'error_auth_invalid_password' => 'invalid password',
        'error_auth_invalid_email' => 'invalid E-mail',

        'error_reg_username_exists' => 'The username entered is already associated with another account. Please enter a different name',
        'error_reg_invalid_username' => 'The user name can include letters and numbers, contain at least 4 and at most 20 characters',
        'error_reg_email_exists' => 'The email you entered is already taken. Please enter a different address',
        'error_reg_invalid_email' => 'E-mail must conform to username@service.domain format',
        'error_reg_invalid_password' => 'Password can consist of letters and numbers, contain at least 6 and no more than 30 characters',
        'error_reg_invalid_firstname' => 'The Firstname field should contain only letters, not less than 4 and not more than 20 characters',
        'error_reg_invalid_lastname' => 'The Lastname field should contain only letters, at least 4 and at most 20 characters',
        'error_reg_upload_avatar_invalid_file' => 'Invalid file format',
        'error_reg_upload_avatar_too_large' => 'File size must not exceed 4 MB',
        'error_reg_upload_avatar_error' => 'Failed to load avatar. Please try another image',
    ];
}