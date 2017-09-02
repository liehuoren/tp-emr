<<<<<<< HEAD
$(document).ready(function() {
    
    $('#profile-password').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
        valid: 'fa fa-check-circle fa-lg text-success',
        invalid: 'fa fa-times-circle fa-lg',
        validating: 'fa fa-refresh'
        },

        fields: {
        oldpassword: {
            container: 'popover',
            validators: {
                notEmpty: {
                    message: '旧密码不能为空'
                },
                stringLength: {
                    min: 6,
                    max: 32,
                    message: '密码长度必须在6至32位之间'
                }
            }
        },
        password: {
            container: 'popover',
            validators: {
                notEmpty: {
                    message: '密码不能为空'
                },
                stringLength: {
                    min: 6,
                    max: 32,
                    message: '密码长度必须在6至32位之间'
                }
            }
        },
        repassword: {
            container: 'popover',
            validators: {
                notEmpty: {
                    message: '确认密码不能为空'
                },
                identical: {
                    field: 'password',
                    message: '两次输入密码不一致'
                }
            }
        }
        }
    }).on('success.field.bv', function(e, data) {
        // $(e.target)  --> The field element
        // data.bv      --> The BootstrapValidator instance
        // data.field   --> The field name
        // data.element --> The field element

        var $parent = data.element.parents('.form-group');

        // Remove the has-success class
        $parent.removeClass('has-success');


        // Hide the success icon
        //$parent.find('.form-control-feedback[data-bv-icon-for="' + data.field + '"]').hide();
    }).on('error.form.bv', function(e) {
        console.log(e);
        isValid = false;
    });
    $('#birthday').mask('9999-99-99');

=======
$(document).ready(function() {
    
    $('#profile-password').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
        valid: 'fa fa-check-circle fa-lg text-success',
        invalid: 'fa fa-times-circle fa-lg',
        validating: 'fa fa-refresh'
        },

        fields: {
        oldpassword: {
            container: 'popover',
            validators: {
                notEmpty: {
                    message: '旧密码不能为空'
                },
                stringLength: {
                    min: 6,
                    max: 32,
                    message: '密码长度必须在6至32位之间'
                }
            }
        },
        password: {
            container: 'popover',
            validators: {
                notEmpty: {
                    message: '密码不能为空'
                },
                stringLength: {
                    min: 6,
                    max: 32,
                    message: '密码长度必须在6至32位之间'
                }
            }
        },
        repassword: {
            container: 'popover',
            validators: {
                notEmpty: {
                    message: '确认密码不能为空'
                },
                identical: {
                    field: 'password',
                    message: '两次输入密码不一致'
                }
            }
        }
        }
    }).on('success.field.bv', function(e, data) {
        // $(e.target)  --> The field element
        // data.bv      --> The BootstrapValidator instance
        // data.field   --> The field name
        // data.element --> The field element

        var $parent = data.element.parents('.form-group');

        // Remove the has-success class
        $parent.removeClass('has-success');


        // Hide the success icon
        //$parent.find('.form-control-feedback[data-bv-icon-for="' + data.field + '"]').hide();
    }).on('error.form.bv', function(e) {
        console.log(e);
        isValid = false;
    });
    $('#birthday').mask('9999-99-99');

>>>>>>> 167bbffb22afb6112c63cb1c93c2905c2cdb6cef
})