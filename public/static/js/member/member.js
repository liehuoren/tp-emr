$(document).ready(function() {
    var faIcon = {
        valid: 'fa fa-check-circle fa-lg text-success',
        invalid: 'fa fa-times-circle fa-lg',
        validating: 'fa fa-refresh'
    }
    
    $('#member-form').bootstrapValidator({
        message: 'This value is not valid',
        excluded: [':disabled'],
        feedbackIcons: faIcon,
        fields: {
        name: {
            container: 'tooltip',
            validators: {
                notEmpty: {
                    message: '学员姓名不能为空'
                }
            }
        },
        sex: {
            container: 'popover',
            validators: {
                notEmpty: {
                    message: '性别必填'
                }
            }
        },
        birthday: {
            container: 'popover',
            validators: {
                notEmpty: {
                    message: '出生日期必须填写'
                },
                date: {
                    format: 'YYYY-MM-DD',
                    message: '出生日期格式错误'
                }
            }
        },
        reg_time: {
            container: 'popover',
            validators: {
                notEmpty: {
                    message: '建档日期必须填写'
                },
                date: {
                    format: 'YYYY-MM-DD',
                    message: '建档日期格式错误'
                }
            }
        },
        mobile: {
            container: 'popover',
            validators: {
                notEmpty: {
                    message: '手机号必须填写'
                },
                digits: {
                    message: '手机号只能包含数字'
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

    $('#birth-date').mask('9999-99-99',{placeholder: "____-__-__"});
    $('#reg-date').mask('9999-99-99',{placeholder: "____-__-__"});
    $("#diagnosis-chosen-select").chosen();
    $("#speech-chosen-select").chosen();
})