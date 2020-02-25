<?php


namespace Application\Languages;


class Russian extends Language
{
    protected $strings = [
        'app_name' => 'Тестовое Веб-Приложение',
        'app_copyright' => '© Сергей Собянин 2020',

        'str_welcome' => 'Добро пожаловать',
        'str_logout' => 'Выйти',

        'label_authorization' => 'Авторизация',
        'label_registration' => 'Регистрация',
        'label_login' => 'Вход',

        'label_register' => 'Зарегистрироваться',
        'label_authorize' => 'Войти',

        'label_user' => 'Пользователь',
        'label_username' => 'Имя пользователя',
        'label_email' => 'E-mail',
        'label_password' => 'Пароль',
        'label_firstname' => 'Имя',
        'label_lastname' => 'Фамилия',
        'label_reg_datetime' => 'Дата регистрации',
        'label_upd_datetime' => 'Дата обновления',

        'label_upload_image' => 'Зарузить аватар',
        'label_upload_avatar_format' => 'Допустимые форматы: JPEG, PNG, GIF. Размер изображения не должен превышать 4 МБ',

        'error_404' => 'Ошибка 404',
        'error_404_descr' => 'К сожалению, запрошення Вами страница не найдена.',

        'error_auth_empty_data' => 'Необходимо ввести логин и пароль',
        'error_auth_user_not_found' => 'Пользователь с указанным email не найден',
        'error_auth_invalid_password' => 'Неверный пароль',
        'error_auth_invalid_email' => 'Некорретный email',

        'error_reg_username_exists' => 'Введенное имя пользователя уже занято. Пожалуйста, введите другое имя',
        'error_reg_invalid_username' => 'Имя пользователя может включать в себя буквы и цифры, содержать не менее 4 и не более 20 символов',
        'error_reg_email_exists' => 'Введенный E-mail уже занят. Пожалуйста, введите другой адрес',
        'error_reg_invalid_email' => 'E-mail должен соответствовать формату username@service.domain',
        'error_reg_invalid_password' => 'Пароль может состоять из букв и цифр, содержать не менее 6 и не более 30 символов',
        'error_reg_invalid_firstname' => 'Поле Имя должно содержать только буквы, не менее 4 и не более 20 символов',
        'error_reg_invalid_lastname' => 'Поле Фамилия должно содержать только буквы, не менее 4 и не более 20 символов',
        'error_reg_upload_avatar_invalid_file' => 'Недопустимый формат файла',
        'error_reg_upload_avatar_too_large' => 'Размер файла не должен превышать 4 Мб',
        'error_reg_upload_avatar_error' => 'Не удалось загрузить аватар. Пожалуйста, попробуйте другое изображение',
    ];

    protected $stringsClient = [
        'validate_empty_email' => 'Пожалуйста, введите E-mail',
        'validate_empty_username' => 'Пожалуйста, введите имя пользователя',
        'validate_empty_firstname' => 'Пожалуйста, введите имя',
        'validate_empty_lastname' => 'Пожалуйста, введите имя',
        'validate_empty_password' => 'Пожалуйста, введите пароль',
        'validate_invalid_email' => 'Пожалуйста, введите корректный email-адрес',
        'validate_invalid_password_min' => 'Пароль должен содержать не менее 6 символов',
        'validate_invalid_password_max' => 'Пароль должен содержать не более 30 символов',
        'validate_invalid_username_min' => 'Имя пользователя должно содержать не менее 4 символов',
        'validate_invalid_username_max' => 'Имя пользователя должно содержать не более 20 символов',
        'validate_invalid_firstname_min' => 'Поле Имя должно содержать не менее 4 символов',
        'validate_invalid_firstname_max' => 'Поле Имя должно содержать не более 20 символов',
        'validate_invalid_lastname_min' => 'Поле Фамилия должно содержать не менее 4 символов',
        'validate_invalid_lastname_max' => 'Поле Фамилия должно содержать не более 20 символов'
    ];
}