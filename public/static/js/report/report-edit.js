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
                    layer.msg('更新成功',{icon:6},function(){
                        $('#report-modal').modal('hide');
                        window.location.reload();
                    });
                      
                    // Or use Javascript to update your page, such as showing the account name  
                    // $('#welcome').html('Hello ' + result.username);  
                } else {  
                    // The account is not found  
                    // Show the errors  
                    layer.msg('更新失败',{icon:5})
  
                    // Enable the submit buttons  
                    $('#base-info-form').bootstrapValidator('disableSubmitButtons', false);  
                }
            }, 'json');
    });

    $('#report-a-form').bootstrapValidator({
        message: 'This value is not valid',
        excluded: [':disabled'],
        feedbackIcons: faIcon,
        fields: {
            
        }
    }).on('success.form.bv',function(e){
            e.preventDefault();

            var $form = $(e.target);

            var bv = $form.data('bootstrapValidator');

            $.post($form.attr('action'), $form.serialize(), function(result) {
                if (result== true || result == 'true') {  
                    // You can reload the current location
                    layer.msg('更新成功',{icon:6,time:2000},function(){
                        $('#report-modal').modal('hide');
                        window.location.reload();
                    });
                      
                    // Or use Javascript to update your page, such as showing the account name  
                    // $('#welcome').html('Hello ' + result.username);  
                } else {  
                    // The account is not found  
                    // Show the errors  
                    layer.msg('更新失败',{icon:5,time:2000})
  
                    // Enable the submit buttons  
                    $('#report-a-form').bootstrapValidator('disableSubmitButtons', false);  
                }
            }, 'json');
    });

    $('#report-b-form').bootstrapValidator({
        message: 'This value is not valid',
        excluded: [':disabled'],
        feedbackIcons: faIcon,
        fields: {
            
        }
    }).on('success.form.bv',function(e){
            e.preventDefault();

            var $form = $(e.target);

            var bv = $form.data('bootstrapValidator');

            $.post($form.attr('action'), $form.serialize(), function(result) {
                if (result== true || result == 'true') {  
                    // You can reload the current location
                    layer.msg('更新成功',{icon:6,time:2000},function(){
                        $('#report-modal').modal('hide');
                        window.location.reload();
                    });
                      
                    // Or use Javascript to update your page, such as showing the account name  
                    // $('#welcome').html('Hello ' + result.username);  
                } else {  
                    // The account is not found  
                    // Show the errors  
                    layer.msg('更新失败',{icon:5,time:2000})
  
                    // Enable the submit buttons  
                    $('#report-b-form').bootstrapValidator('disableSubmitButtons', false);  
                }
            }, 'json');
    });

    $('#report-c-form').bootstrapValidator({
        message: 'This value is not valid',
        excluded: [':disabled'],
        feedbackIcons: faIcon,
        fields: {
            
        }
    }).on('success.form.bv',function(e){
            e.preventDefault();

            var $form = $(e.target);

            var bv = $form.data('bootstrapValidator');

            $.post($form.attr('action'), $form.serialize(), function(result) {
                if (result== true || result == 'true') {  
                    // You can reload the current location
                    layer.msg('更新成功',{icon:6,time:2000},function(){
                        $('#report-modal').modal('hide');
                        window.location.reload();
                    });
                      
                    // Or use Javascript to update your page, such as showing the account name  
                    // $('#welcome').html('Hello ' + result.username);  
                } else {  
                    // The account is not found  
                    // Show the errors  
                    layer.msg('更新失败',{icon:5,time:2000})
  
                    // Enable the submit buttons  
                    $('#report-c-form').bootstrapValidator('disableSubmitButtons', false);  
                }
            }, 'json');
    });

    $('#report-d-form').bootstrapValidator({
        message: 'This value is not valid',
        excluded: [':disabled'],
        feedbackIcons: faIcon,
        fields: {
            
        }
    }).on('success.form.bv',function(e){
            e.preventDefault();

            var $form = $(e.target);

            var bv = $form.data('bootstrapValidator');

            $.post($form.attr('action'), $form.serialize(), function(result) {
                if (result== true || result == 'true') {  
                    // You can reload the current location
                    layer.msg('更新成功',{icon:6,time:2000},function(){
                        $('#report-modal').modal('hide');
                        window.location.reload();
                    });
                      
                    // Or use Javascript to update your page, such as showing the account name  
                    // $('#welcome').html('Hello ' + result.username);  
                } else {  
                    // The account is not found  
                    // Show the errors  
                    layer.msg('更新失败',{icon:5,time:2000})
  
                    // Enable the submit buttons  
                    $('#report-d-form').bootstrapValidator('disableSubmitButtons', false);  
                }
            }, 'json');
    });

    $('#report-e-form').bootstrapValidator({
        message: 'This value is not valid',
        excluded: [':disabled'],
        feedbackIcons: faIcon,
        fields: {
            
        }
    }).on('success.form.bv',function(e){
            e.preventDefault();

            var $form = $(e.target);

            var bv = $form.data('bootstrapValidator');

            $.post($form.attr('action'), $form.serialize(), function(result) {
                if (result== true || result == 'true') {  
                    // You can reload the current location
                    layer.msg('更新成功',{icon:6,time:2000},function(){
                        $('#report-modal').modal('hide');
                        window.location.reload();
                    });
                      
                    // Or use Javascript to update your page, such as showing the account name  
                    // $('#welcome').html('Hello ' + result.username);  
                } else {  
                    // The account is not found  
                    // Show the errors  
                    layer.msg('更新失败',{icon:5,time:2000})
  
                    // Enable the submit buttons  
                    $('#report-e-form').bootstrapValidator('disableSubmitButtons', false);  
                }
            }, 'json');
    });

    $('#report-training-plan').bootstrapValidator({
        message: 'This value is not valid',
        excluded: [':disabled'],
        feedbackIcons: faIcon,
        fields: {
            
        }
    }).on('success.form.bv',function(e){
            e.preventDefault();

            var $form = $(e.target);

            var bv = $form.data('bootstrapValidator');

            $.post($form.attr('action'), $form.serialize(), function(result) {
                if (result== true || result == 'true') {  
                    // You can reload the current location
                    layer.msg('更新成功',{icon:6,time:2000},function(){
                        $('#report-modal').modal('hide');
                        window.location.reload();
                    });
                      
                    // Or use Javascript to update your page, such as showing the account name  
                    // $('#welcome').html('Hello ' + result.username);  
                } else {  
                    // The account is not found  
                    // Show the errors  
                    layer.msg('更新失败',{icon:5,time:2000})
  
                    // Enable the submit buttons  
                    $('#report-training-plan').bootstrapValidator('disableSubmitButtons', false);  
                }
            }, 'json');
    });

    $('#report-training-plan-2').bootstrapValidator({
        message: 'This value is not valid',
        excluded: [':disabled'],
        feedbackIcons: faIcon,
        fields: {
            
        }
    }).on('success.form.bv',function(e){
            e.preventDefault();

            var $form = $(e.target);

            var bv = $form.data('bootstrapValidator');

            $.post($form.attr('action'), $form.serialize(), function(result) {
                if (result== true || result == 'true') {  
                    // You can reload the current location
                    layer.msg('更新成功',{icon:6,time:2000},function(){
                        $('#report-modal').modal('hide');
                        window.location.reload();
                    });
                      
                    // Or use Javascript to update your page, such as showing the account name  
                    // $('#welcome').html('Hello ' + result.username);  
                } else {  
                    // The account is not found  
                    // Show the errors  
                    layer.msg('更新失败',{icon:5,time:2000})
  
                    // Enable the submit buttons  
                    $('#report-training-plan-2').bootstrapValidator('disableSubmitButtons', false);  
                }
            }, 'json');
    });

    $('#before-info-form').bootstrapValidator({
        message: 'This value is not valid',
        excluded: [':disabled'],
        feedbackIcons: faIcon,
        fields: {
            
        }
    }).on('success.form.bv',function(e){
            e.preventDefault();

            var $form = $(e.target);

            var bv = $form.data('bootstrapValidator');

            $.post($form.attr('action'), $form.serialize(), function(result) {
                if (result== true || result == 'true') {  
                    // You can reload the current location
                    layer.msg('更新成功',{icon:6,time:2000},function(){
                        $('#report-modal').modal('hide');
                        window.location.reload();
                    });
                      
                    // Or use Javascript to update your page, such as showing the account name  
                    // $('#welcome').html('Hello ' + result.username);  
                } else {  
                    // The account is not found  
                    // Show the errors  
                    layer.msg('更新失败',{icon:5,time:2000})
  
                    // Enable the submit buttons  
                    $('#before-info-form').bootstrapValidator('disableSubmitButtons', false);  
                }
            }, 'json');
    });

    $('#report-summary-form').bootstrapValidator({
        message: 'This value is not valid',
        excluded: [':disabled'],
        feedbackIcons: faIcon,
        fields: {
            
        }
    }).on('success.form.bv',function(e){
            e.preventDefault();

            var $form = $(e.target);

            var bv = $form.data('bootstrapValidator');

            $.post($form.attr('action'), $form.serialize(), function(result) {
                if (result== true || result == 'true') {  
                    // You can reload the current location
                    layer.msg('更新成功',{icon:6,time:2000},function(){
                        $('#report-modal').modal('hide');
                        window.location.reload();
                    });
                      
                    // Or use Javascript to update your page, such as showing the account name  
                    // $('#welcome').html('Hello ' + result.username);  
                } else {  
                    // The account is not found  
                    // Show the errors  
                    layer.msg('更新失败',{icon:5,time:2000})
  
                    // Enable the submit buttons  
                    $('#report-summary-form').bootstrapValidator('disableSubmitButtons', false);  
                }
            }, 'json');
    });
    
    $("#assess-date").mask('9999-99-99',{placeholder: "____-__-__"});
    $("#diagnosis-chosen-select").chosen({width:"100%"});
    $("#speech-chosen-select").chosen({width:"100%"});
})