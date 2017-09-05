$(document).ready(function(){
    var faIcon = {
        valid: 'fa fa-check-circle fa-lg text-success',
        invalid: 'fa fa-times-circle fa-lg',
        validating: 'fa fa-refresh'
    }

    $('#base-info-form').bootstrapValidator({
        message: 'This value is not valid',
        excluded: [':disabled'],
        feedbackIcons: faIcon,
        fields: {
            t_name: {
                container: 'tooltip',
                validators: {
                    notEmpty: {
                        message: '评估师姓名不能为空'
                    }
                }
            },
            assess_time: {
                container: 'tooltip',
                validators:{
                    notEmpty: {
                        message: '评估日期不能为空'
                    },
                    date: {
                        format: 'YYYY-MM-DD',
                        message: '评估日期格式错误'
                    }
                }
            }
        }
    }).on('success.form.bv',function(e){
            e.preventDefault();

            var $form = $(e.target);

            var bv = $form.data('bootstrapValidator');

            $.post($form.attr('action'), $form.serialize(), function(result) {
                if (result== true || result == 'true') {  
                    // You can reload the current location
                    layer.msg('新增成功',{icon:6},function(){
                        $('#report-modal').modal('hide');
                        window.location.reload();
                    });
                      
                    // Or use Javascript to update your page, such as showing the account name  
                    // $('#welcome').html('Hello ' + result.username);  
                } else {  
                    // The account is not found  
                    // Show the errors  
                    layer.msg('新增失败',{icon:5})
  
                    // Enable the submit buttons  
                    $('#base-info-form').bootstrapValidator('disableSubmitButtons', false);  
                }
            }, 'json');
    });
    
    $("#assess-date").mask('9999-99-99',{placeholder: "____-__-__"})
    $("#diagnosis-chosen-select").chosen({width:"100%"});
    $("#speech-chosen-select").chosen({width:"100%"});
})