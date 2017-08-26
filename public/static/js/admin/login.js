$(document).ready(function() {
    var faIcon = {
        valid: 'fa fa-check-circle fa-lg text-success',
        invalid: 'fa fa-times-circle fa-lg',
        validating: 'fa fa-refresh'
    }
    
    $('#login-bv-errorcnt').bootstrapValidator({
        message: 'This value is not valid',
        excluded: [':disabled'],
        feedbackIcons: faIcon,
        fields: {
        username: {
            container: 'tooltip',
            validators: {
                notEmpty: {
                    message: '登录账号不能为空'
                }
            }
        },

        password: {
            container: 'popover',
                validators: {
                    notEmpty: {
                    message: '登录密码不能为空'
                    }
                }
        }
        
        }
    }).on('status.field.bv', function(e, data) {
        var $form     = $(e.target),
        validator = data.bv,
        $tabPane  = data.element.parents('.tab-pane'),
        tabId     = $tabPane.attr('id');

        if (tabId) {
        var $icon = $('a[href="#' + tabId + '"][data-toggle="tab"]').parent().find('i');
        // Add custom class to tab containing the field
        if (data.status == validator.STATUS_INVALID) {
            $icon.removeClass(faIcon.valid).addClass(faIcon.invalid);
        } else if (data.status == validator.STATUS_VALID) {
            var isValidTab = validator.isValidContainer($tabPane);
            $icon.removeClass(faIcon.valid).addClass(isValidTab ? faIcon.valid : faIcon.invalid);
        }
        }
    });
})