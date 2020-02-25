$(document).foundation();

$().ready(function() {

    $errorPlacement = function(error, element) {
        error.attr('class', 'error form-error is-visible');
        error.insertAfter(element);
    };

    $(function(){
        $('#login_form').validate({
            errorPlacement: $errorPlacement,
            rules: {
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 6,
                    maxlength: 30
                }
            },
            messages: {
                email: {
                    required: "Пожалуйста, введите E-mail",
                    email: "Пожалуйста, введите корректный email-адрес"
                },
                password: {
                    required: "Пожалуйста, введите пароль",
                    minlength: "Пароль должен содержать не менее 6 символов",
                    maxlength: "Пароль должен содержать не более 30 символов"
                }
            }
        });

        $('#register_form').validate({
            errorPlacement: $errorPlacement,
            rules: {
                reg_username: {
                    required: true,
                    minlength: 4,
                    maxlength: 20,
                },
                reg_email: {
                    required: true,
                    email: true
                },
                reg_password: {
                    required: true,
                    minlength: 6,
                    maxlength: 30,
                },
                reg_firstname: {
                    required: true,
                    minlength: 4,
                    maxlength: 20,
                },
                reg_lastname: {
                    required: true,
                    minlength: 4,
                    maxlength: 20,
                },
            },
            messages: {
                reg_username: {
                    required: "Пожалуйста, введите имя пользователя",
                    minlength: "Имя пользователя должно содержать не менее 4 символов",
                    maxlength: "Имя пользователя должно содержать не более 20 символов"
                },
                reg_email: {
                    required: "Пожалуйста, введите E-mail",
                    email: "Пожалуйста, введите корректный email-адрес"
                },
                reg_password: {
                    required: "Пожалуйста, введите пароль",
                    minlength: "Пароль должен содержать не менее 6 символов",
                    maxlength: "Пароль должен содержать не более 30 символов"
                },
                reg_firstname: {
                    required: "Пожалуйста, введите имя",
                    minlength: "Поле Имя должно содержать не менее 4 символов",
                    maxlength: "Поле Имя должно содержать не более 20 символов"
                },
                reg_lastname: {
                    required: "Пожалуйста, введите фамилию",
                    minlength: "Поле Фамилия должно содержать не менее 4 символов",
                    maxlength: "Поле Фамилия должно содержать не более 20 символов"
                }
            }
        });
    });

});