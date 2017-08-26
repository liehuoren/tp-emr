$(document).ready(function() {
    var faIcon = {
        valid: 'fa fa-check-circle fa-lg text-success',
        invalid: 'fa fa-times-circle fa-lg',
        validating: 'fa fa-refresh'
    }

        // FORM WIZARD WITH VALIDATION
    // =================================================================
    $('#register-bv-wz').bootstrapWizard({
        tabClass            : 'wz-steps',
        nextSelector        : '.next',
        previousSelector    : '.previous',
        onTabClick          : function(tab, navigation, index) {
            return false;
        },
        onInit : function(){
            $('#register-bv-wz').find('.finish').hide().prop('disabled', true);
        },
        onTabShow: function(tab, navigation, index) {
            var $total = navigation.find('li').length;
            var $current = index+1;
            var $percent = ($current/$total) * 100;
            var wdt = 100/$total;
            var lft = wdt*index;

            $('#register-bv-wz').find('.progress-bar').css({width:wdt+'%',left:lft+"%", 'position':'relative', 'transition':'all .5s'});

            // If it's the last tab then hide the last button and show the finish instead
            if($current >= $total) {
                $('#register-bv-wz').find('.next').hide();
                $('#register-bv-wz').find('.finish').show();
                $('#register-bv-wz').find('.finish').prop('disabled', false);
            } else {
                $('#register-bv-wz').find('.next').show();
                $('#register-bv-wz').find('.finish').hide().prop('disabled', true);
            }
        },
        onNext: function(){
            isValid = null;
            $('#register-bv-wz-form').bootstrapValidator('validate');


            if(isValid === false)return false;
        }
    });




    // FORM VALIDATION
    // =================================================================
    // Require Bootstrap Validator
    // http://bootstrapvalidator.com/
    // =================================================================

    var isValid;
    $('#register-bv-wz-form').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
        valid: 'fa fa-check-circle fa-lg text-success',
        invalid: 'fa fa-times-circle fa-lg',
        validating: 'fa fa-refresh'
        },

        fields: {
        email: {
            container: 'popover',
            validators: {
                notEmpty: {
                    message: '邮箱地址不能为空'
                },
                emailAddress: {
                    message: '输入不是有效的电子邮件地址'
                }
            }
        },
        verify: {
            container: 'popover',
            message: '验证码不能为空',
            validators: {
                notEmpty: {
                    message: '验证码不能为空'
                },
                digits: {
                    message: '验证码只能包含数字'
                }
            }
        },
        nickname: {
            container: 'popover',
            validators: {
                notEmpty: {
                    message: '昵称不能为空'
                },
                regexp: {
                    regexp: /^[\u4E00-\u9FA5A-Za-z0-9_]+$/i,
                    message: '昵称格式不正确'
                }
            }
        },
        fullname: {
            container: 'popover',
            validators: {
                notEmpty: {
                    message: '真实姓名不能为空'
                },
                regexp: {
                    regexp: /^[\u4E00-\u9FA5A-Za-z0-9_]+$/i,
                    message: '真实姓名格式不正确'
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
        rpassword: {
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

})