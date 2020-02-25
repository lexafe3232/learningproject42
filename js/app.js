$(document).foundation();

var lang =  $.cookie('lang');


var requst_result = $.ajax({
    url: '/ajax/request/',
    method: 'POST',
    data: {
        action : 'getClientSideStrings',
        lang : lang
    },
    dataType: 'json',
    async: false
}).responseJSON;

var strings = [];
if (requst_result.success == true) {
    strings = requst_result.data;
}

function getStr(str_name) {
    return strings[str_name];
}

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
                    required: getStr('validate_empty_email'),
                    email: getStr('validate_invalid_email')
                },
                password: {
                    required: getStr('validate_empty_password'),
                    minlength: getStr('validate_invalid_password_min'),
                    maxlength: getStr('validate_invalid_password_max')
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
                    required: getStr('validate_empty_username'),
                    minlength: getStr('validate_invalid_username_min'),
                    maxlength: getStr('validate_invalid_username_max')
                },
                reg_email: {
                    required: getStr('validate_empty_email'),
                    email: getStr('validate_invalid_email')
                },
                reg_password: {
                    required: getStr('validate_empty_password'),
                    minlength: getStr('validate_invalid_password_min'),
                    maxlength: getStr('validate_invalid_password_max')
                },
                reg_firstname: {
                    required: getStr('validate_empty_firstname'),
                    minlength: getStr('validate_invalid_firstname_min'),
                    maxlength: getStr('validate_invalid_firstname_max')
                },
                reg_lastname: {
                    required: getStr('validate_empty_lastname'),
                    minlength: getStr('validate_invalid_lastname_min'),
                    maxlength: getStr('validate_invalid_lastname_max')
                }
            }
        });
    });

});