<<<<<<< HEAD
$(document).ready(function(){
	jQuery.fn.bootstrapTable.defaults.icons = {
        paginationSwitchDown: 'demo-pli-arrow-down',
        paginationSwitchUp: 'demo-pli-arrow-up',
        refresh: 'demo-pli-repeat-2',
        toggle: 'demo-pli-layout-grid',
        columns: 'demo-pli-check',
        detailOpen: 'demo-psi-add',
        detailClose: 'demo-psi-remove'
    }

    $('#train-a').bootstrapTable({
    	idField: 'id',
        locale: 'zh-CN',
    	columns: [{
            field: 'state',
            checkbox:true,
            title: 'ID'
        }, {
            field: 'id',
            title: 'ID',
            visible: false
        }, {
            field: 'training_time',
            title: '日期',
            editable: {
                type: 'date',
                format:'yyyy-mm-dd'
            }
        }, {
            field: 'content.om',
            title: '口肌',
            editable: {
                type: 'textarea'
            }
        }, {
            field: 'content.articulation',
            title: '发音',
            editable: {
                type: 'textarea'
            }
        }, {
            field: 'content.performance',
            title: '课堂表现',
            editable: {
                type: 'textarea'
            }
        }, {
            field: 't_name',
            title: '治疗师',
            editable: {
                type: 'text'
            }
        },{
            field: 'status',
            title: '状态',
            visible: false,
            
        }]

    })

    $('#train-c').bootstrapTable({
    	idField: 'id',
        locale: 'zh-CN',
    	columns: [{
            field: 'state',
            checkbox:true,
            title: 'ID'
        }, {
            field: 'id',
            title: 'ID',
            visible: false
        }, {
            field: 'training_time',
            title: '日期',
            editable: {
                type: 'date',
                format:'yyyy-mm-dd'
            }
        }, {
            field: 'content.tactile',
            title: '触觉、前庭觉、本体觉',
            editable: {
                type: 'textarea'
            }
        }, {
            field: 'content.attention',
            title: '专注力',
            editable: {
                type: 'textarea'
            }
        }, {
            field: 'content.interaction',
            title: '互动社交',
            editable: {
                type: 'textarea'
            }
        }, 
        {
            field: 'content.fine',
            title: '大小肌肉',
            editable: {
                type: 'textarea'
            }
        }, {
            field: 'content.performance',
            title: '课堂表现',
            editable: {
                type: 'textarea'
            }
        }, {
            field: 't_name',
            title: '治疗师',
            editable: {
                type: 'text'
            }
        },{
            field: 'status',
            title: '状态',
            visible: false,
            
        }]

    })

    $('#train-b').bootstrapTable({
    	idField: 'id',
        locale: 'zh-CN',
    	columns: [{
            field: 'state',
            checkbox:true,
            title: 'ID'
        }, {
            field: 'id',
            title: 'ID',
            visible: false
        }, {
            field: 'training_time',
            title: '日期',
            editable: {
                type: 'date',
                format:'yyyy-mm-dd'
            }
        }, {
            field: 'content.cp',
            title: '认知理解',
            editable: {
                type: 'textarea'
            }
        }, {
            field: 'content.ex',
            title: '语言表达',
            editable: {
                type: 'textarea',
            }
        }, {
            field: 'content.performance',
            title: '课堂表现',
            editable: {
                type: 'textarea'
            }
        }, {
            field: 't_name',
            title: '治疗师',
            editable: {
                type: 'text'
            }
        },{
            field: 'status',
            title: '状态',
            visible: false,
            
        }]

    })

    $.fn.editableform.buttons =
        '<button type="submit" class="btn btn-primary editable-submit">'+
            '<i class="fa fa-fw fa-check"></i>'+
        '</button>'+
        '<button type="button" class="btn btn-default editable-cancel">'+
            '<i class="fa fa-fw fa-times"></i>'+
        '</button>';
    $.fn.editable.defaults.url = '/admin/training/update';

    var $table = $('#train-a'),	$remove = $('#delete-row'), $status1 = $('#status-1-row'), $status0 = $('#status-0-row');

    $table.on('check.bs.table uncheck.bs.table check-all.bs.table uncheck-all.bs.table', function () {
        $remove.prop('disabled', !$table.bootstrapTable('getSelections').length);
        $status1.prop('disabled', !$table.bootstrapTable('getSelections').length);
        $status0.prop('disabled', !$table.bootstrapTable('getSelections').length);
    });

    $remove.click(function () {
        var ids = $.map($table.bootstrapTable('getSelections'), function (row) {
            return row.id;
        });
        var url = $(this).attr('data-url');
        $.post(url,{id:ids},function(res){

        });
        $table.bootstrapTable('remove', {
            field: 'id',
            values: ids
        });
        $remove.prop('disabled', true);
        $status1.prop('disabled', true);
        $status0.prop('disabled', true);
    });
    $status1.click(function () {
        var ids = $.map($table.bootstrapTable('getSelections'), function (row) {
            return row.id;
        });
        var url = $(this).attr('data-url');
        $.post(url,{id:ids,status:1},function(res){

        });
        $table.bootstrapTable('refresh', {
            field: 'id',
            values: ids
        });
        $remove.prop('disabled', true);
        $status1.prop('disabled', true);
        $status0.prop('disabled', true);
    });
    $status0.click(function () {
        var ids = $.map($table.bootstrapTable('getSelections'), function (row) {
            return row.id;
        });
        var url = $(this).attr('data-url');
        $.post(url,{id:ids,status:0},function(res){

        });
        $table.bootstrapTable('refresh', {
            field: 'id',
            values: ids
        });
        $remove.prop('disabled', true);
        $status1.prop('disabled', true);
        $status0.prop('disabled', true);
    });



    var $table_b = $('#train-b'), $remove_b = $('#delete-row-b'), $status1_b = $('#status-1-row-b'), $status0_b = $('#status-0-row-b');

    $table_b.on('check.bs.table uncheck.bs.table check-all.bs.table uncheck-all.bs.table', function () {
        $remove_b.prop('disabled', !$table_b.bootstrapTable('getSelections').length);
        $status1_b.prop('disabled', !$table_b.bootstrapTable('getSelections').length);
        $status0_b.prop('disabled', !$table_b.bootstrapTable('getSelections').length);
    });

    $remove_b.click(function () {
        var ids = $.map($table_b.bootstrapTable('getSelections'), function (row) {
            return row.id;
        });
        var url = $(this).attr('data-url');
        $.post(url,{id:ids},function(res){

        });
        $table_b.bootstrapTable('remove', {
            field: 'id',
            values: ids
        });
        $remove_b.prop('disabled', true);
        $status1_b.prop('disabled', true);
        $status0_b.prop('disabled', true);
    });
    $status1_b.click(function () {
        var ids = $.map($table_b.bootstrapTable('getSelections'), function (row) {
            return row.id;
        });
        var url = $(this).attr('data-url');
        $.post(url,{id:ids,status:1},function(res){

        });
        $table_b.bootstrapTable('refresh', {
            field: 'id',
            values: ids
        });
        $remove_b.prop('disabled', true);
        $status1_b.prop('disabled', true);
        $status0_b.prop('disabled', true);
    });
    $status0_b.click(function () {
        var ids = $.map($table_b.bootstrapTable('getSelections'), function (row) {
            return row.id;
        });
        var url = $(this).attr('data-url');
        $.post(url,{id:ids,status:0},function(res){

        });
        $table_b.bootstrapTable('refresh', {
            field: 'id',
            values: ids
        });
        $remove_b.prop('disabled', true);
        $status1_b.prop('disabled', true);
        $status0_b.prop('disabled', true);
    });




    var $table_c = $('#train-c'), $remove_c  = $('#delete-row-c'), $status1_c  = $('#status-1-row-c'), $status0_c  = $('#status-0-row-c');

    $table_c .on('check.bs.table uncheck.bs.table check-all.bs.table uncheck-all.bs.table', function () {
        $remove_c.prop('disabled', !$table_c.bootstrapTable('getSelections').length);
        $status1_c.prop('disabled', !$table_c.bootstrapTable('getSelections').length);
        $status0_c.prop('disabled', !$table_c.bootstrapTable('getSelections').length);
    });

    $remove_c.click(function () {
        var ids = $.map($table_c.bootstrapTable('getSelections'), function (row) {
            return row.id;
        });
        var url = $(this).attr('data-url');
        $.post(url,{id:ids},function(res){

        });
        $table_c.bootstrapTable('remove', {
            field: 'id',
            values: ids
        });
        $remove_c.prop('disabled', true);
        $status1_c.prop('disabled', true);
        $status0_c.prop('disabled', true);
    });
    $status1_c.click(function () {
        var ids = $.map($table_c.bootstrapTable('getSelections'), function (row) {
            return row.id;
        });
        var url = $(this).attr('data-url');
        $.post(url,{id:ids,status:1},function(res){

        });
        $table_c.bootstrapTable('refresh', {
            field: 'id',
            values: ids
        });
        $remove_c.prop('disabled', true);
        $status1_c.prop('disabled', true);
        $status0_c.prop('disabled', true);
    });
    $status0_c.click(function () {
        var ids = $.map($table_c.bootstrapTable('getSelections'), function (row) {
            return row.id;
        });
        var url = $(this).attr('data-url');
        $.post(url,{id:ids,status:0},function(res){

        });
        $table_c.bootstrapTable('refresh', {
            field: 'id',
            values: ids
        });
        $$remove_c.prop('disabled', true);
        $status1_c.prop('disabled', true);
        $status0_c.prop('disabled', true);
    });

    var faIcon = {
        valid: 'fa fa-check-circle fa-lg text-success',
        invalid: 'fa fa-times-circle fa-lg',
        validating: 'fa fa-refresh'
    }

    $('#training-a-form').bootstrapValidator({
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
            training_time: {
                container: 'tooltip',
                validators:{
                    notEmpty: {
                        message: '训练日期不能为空'
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
                        $('#training-a-form').modal('hide');
                        window.location.reload();
                    });
                      
                    // Or use Javascript to update your page, such as showing the account name  
                    // $('#welcome').html('Hello ' + result.username);  
                } else {  
                    // The account is not found  
                    // Show the errors  
                    layer.msg('更新失败',{icon:5})
  
                    // Enable the submit buttons  
                    $('#training-a-form').bootstrapValidator('disableSubmitButtons', false);  
                }
            }, 'json');
    });
    $('#training-b-form').bootstrapValidator({
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
            training_time: {
                container: 'tooltip',
                validators:{
                    notEmpty: {
                        message: '训练日期不能为空'
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
                        $('#training-b-form').modal('hide');
                        window.location.reload();
                    });
                      
                    // Or use Javascript to update your page, such as showing the account name  
                    // $('#welcome').html('Hello ' + result.username);  
                } else {  
                    // The account is not found  
                    // Show the errors  
                    layer.msg('更新失败',{icon:5})
  
                    // Enable the submit buttons  
                    $('#training-b-form').bootstrapValidator('disableSubmitButtons', false);  
                }
            }, 'json');
    });
    $('#training-c-form').bootstrapValidator({
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
            training_time: {
                container: 'tooltip',
                validators:{
                    notEmpty: {
                        message: '训练日期不能为空'
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
                        $('#training-c-form').modal('hide');
                        window.location.reload();
                    });
                      
                    // Or use Javascript to update your page, such as showing the account name  
                    // $('#welcome').html('Hello ' + result.username);  
                } else {  
                    // The account is not found  
                    // Show the errors  
                    layer.msg('更新失败',{icon:5})
  
                    // Enable the submit buttons  
                    $('#training-c-form').bootstrapValidator('disableSubmitButtons', false);  
                }
            }, 'json');
    });

    $("#training-date").mask('9999-99-99',{placeholder: "____-__-__"});
    $("#training-b-date").mask('9999-99-99',{placeholder: "____-__-__"})
    $("#training-c-date").mask('9999-99-99',{placeholder: "____-__-__"})
=======
$(document).ready(function(){
	jQuery.fn.bootstrapTable.defaults.icons = {
        paginationSwitchDown: 'demo-pli-arrow-down',
        paginationSwitchUp: 'demo-pli-arrow-up',
        refresh: 'demo-pli-repeat-2',
        toggle: 'demo-pli-layout-grid',
        columns: 'demo-pli-check',
        detailOpen: 'demo-psi-add',
        detailClose: 'demo-psi-remove'
    }

    $('#train-a').bootstrapTable({
    	idField: 'id',
        locale: 'zh-CN',
    	columns: [{
            field: 'state',
            checkbox:true,
            title: 'ID'
        }, {
            field: 'id',
            title: 'ID',
            visible: false
        }, {
            field: 'training_time',
            title: '日期',
            editable: {
                type: 'date',
                format:'yyyy-mm-dd'
            }
        }, {
            field: 'content.om',
            title: '口肌',
            editable: {
                type: 'textarea'
            }
        }, {
            field: 'content.articulation',
            title: '发音',
            editable: {
                type: 'textarea'
            }
        }, {
            field: 'content.performance',
            title: '课堂表现',
            editable: {
                type: 'textarea'
            }
        }, {
            field: 't_name',
            title: '治疗师',
            editable: {
                type: 'text'
            }
        },{
            field: 'status',
            title: '状态',
            visible: false,
            
        }]

    })

    $('#train-c').bootstrapTable({
    	idField: 'id',
        locale: 'zh-CN',
    	columns: [{
            field: 'state',
            checkbox:true,
            title: 'ID'
        }, {
            field: 'id',
            title: 'ID',
            visible: false
        }, {
            field: 'training_time',
            title: '日期',
            editable: {
                type: 'date',
                format:'yyyy-mm-dd'
            }
        }, {
            field: 'content.tactile',
            title: '触觉、前庭觉、本体觉',
            editable: {
                type: 'textarea'
            }
        }, {
            field: 'content.attention',
            title: '专注力',
            editable: {
                type: 'textarea'
            }
        }, {
            field: 'content.interaction',
            title: '互动社交',
            editable: {
                type: 'textarea'
            }
        }, 
        {
            field: 'content.fine',
            title: '大小肌肉',
            editable: {
                type: 'textarea'
            }
        }, {
            field: 'content.performance',
            title: '课堂表现',
            editable: {
                type: 'textarea'
            }
        }, {
            field: 't_name',
            title: '治疗师',
            editable: {
                type: 'text'
            }
        },{
            field: 'status',
            title: '状态',
            visible: false,
            
        }]

    })

    $('#train-b').bootstrapTable({
    	idField: 'id',
        locale: 'zh-CN',
    	columns: [{
            field: 'state',
            checkbox:true,
            title: 'ID'
        }, {
            field: 'id',
            title: 'ID',
            visible: false
        }, {
            field: 'training_time',
            title: '日期',
            editable: {
                type: 'date',
                format:'yyyy-mm-dd'
            }
        }, {
            field: 'content.cp',
            title: '认知理解',
            editable: {
                type: 'textarea'
            }
        }, {
            field: 'content.ex',
            title: '语言表达',
            editable: {
                type: 'textarea',
            }
        }, {
            field: 'content.performance',
            title: '课堂表现',
            editable: {
                type: 'textarea'
            }
        }, {
            field: 't_name',
            title: '治疗师',
            editable: {
                type: 'text'
            }
        },{
            field: 'status',
            title: '状态',
            visible: false,
            
        }]

    })

    $.fn.editableform.buttons =
        '<button type="submit" class="btn btn-primary editable-submit">'+
            '<i class="fa fa-fw fa-check"></i>'+
        '</button>'+
        '<button type="button" class="btn btn-default editable-cancel">'+
            '<i class="fa fa-fw fa-times"></i>'+
        '</button>';
    $.fn.editable.defaults.url = '/admin/training/update';

    var $table = $('#train-a'),	$remove = $('#delete-row'), $status1 = $('#status-1-row'), $status0 = $('#status-0-row');

    $table.on('check.bs.table uncheck.bs.table check-all.bs.table uncheck-all.bs.table', function () {
        $remove.prop('disabled', !$table.bootstrapTable('getSelections').length);
        $status1.prop('disabled', !$table.bootstrapTable('getSelections').length);
        $status0.prop('disabled', !$table.bootstrapTable('getSelections').length);
    });

    $remove.click(function () {
        var ids = $.map($table.bootstrapTable('getSelections'), function (row) {
            return row.id;
        });
        var url = $(this).attr('data-url');
        $.post(url,{id:ids},function(res){

        });
        $table.bootstrapTable('remove', {
            field: 'id',
            values: ids
        });
        $remove.prop('disabled', true);
        $status1.prop('disabled', true);
        $status0.prop('disabled', true);
    });
    $status1.click(function () {
        var ids = $.map($table.bootstrapTable('getSelections'), function (row) {
            return row.id;
        });
        var url = $(this).attr('data-url');
        $.post(url,{id:ids,status:1},function(res){

        });
        $table.bootstrapTable('refresh', {
            field: 'id',
            values: ids
        });
        $remove.prop('disabled', true);
        $status1.prop('disabled', true);
        $status0.prop('disabled', true);
    });
    $status0.click(function () {
        var ids = $.map($table.bootstrapTable('getSelections'), function (row) {
            return row.id;
        });
        var url = $(this).attr('data-url');
        $.post(url,{id:ids,status:0},function(res){

        });
        $table.bootstrapTable('refresh', {
            field: 'id',
            values: ids
        });
        $remove.prop('disabled', true);
        $status1.prop('disabled', true);
        $status0.prop('disabled', true);
    });



    var $table_b = $('#train-b'), $remove_b = $('#delete-row-b'), $status1_b = $('#status-1-row-b'), $status0_b = $('#status-0-row-b');

    $table_b.on('check.bs.table uncheck.bs.table check-all.bs.table uncheck-all.bs.table', function () {
        $remove_b.prop('disabled', !$table_b.bootstrapTable('getSelections').length);
        $status1_b.prop('disabled', !$table_b.bootstrapTable('getSelections').length);
        $status0_b.prop('disabled', !$table_b.bootstrapTable('getSelections').length);
    });

    $remove_b.click(function () {
        var ids = $.map($table_b.bootstrapTable('getSelections'), function (row) {
            return row.id;
        });
        var url = $(this).attr('data-url');
        $.post(url,{id:ids},function(res){

        });
        $table_b.bootstrapTable('remove', {
            field: 'id',
            values: ids
        });
        $remove_b.prop('disabled', true);
        $status1_b.prop('disabled', true);
        $status0_b.prop('disabled', true);
    });
    $status1_b.click(function () {
        var ids = $.map($table_b.bootstrapTable('getSelections'), function (row) {
            return row.id;
        });
        var url = $(this).attr('data-url');
        $.post(url,{id:ids,status:1},function(res){

        });
        $table_b.bootstrapTable('refresh', {
            field: 'id',
            values: ids
        });
        $remove_b.prop('disabled', true);
        $status1_b.prop('disabled', true);
        $status0_b.prop('disabled', true);
    });
    $status0_b.click(function () {
        var ids = $.map($table_b.bootstrapTable('getSelections'), function (row) {
            return row.id;
        });
        var url = $(this).attr('data-url');
        $.post(url,{id:ids,status:0},function(res){

        });
        $table_b.bootstrapTable('refresh', {
            field: 'id',
            values: ids
        });
        $remove_b.prop('disabled', true);
        $status1_b.prop('disabled', true);
        $status0_b.prop('disabled', true);
    });




    var $table_c = $('#train-c'), $remove_c  = $('#delete-row-c'), $status1_c  = $('#status-1-row-c'), $status0_c  = $('#status-0-row-c');

    $table_c .on('check.bs.table uncheck.bs.table check-all.bs.table uncheck-all.bs.table', function () {
        $remove_c.prop('disabled', !$table_c.bootstrapTable('getSelections').length);
        $status1_c.prop('disabled', !$table_c.bootstrapTable('getSelections').length);
        $status0_c.prop('disabled', !$table_c.bootstrapTable('getSelections').length);
    });

    $remove_c.click(function () {
        var ids = $.map($table_c.bootstrapTable('getSelections'), function (row) {
            return row.id;
        });
        var url = $(this).attr('data-url');
        $.post(url,{id:ids},function(res){

        });
        $table_c.bootstrapTable('remove', {
            field: 'id',
            values: ids
        });
        $remove_c.prop('disabled', true);
        $status1_c.prop('disabled', true);
        $status0_c.prop('disabled', true);
    });
    $status1_c.click(function () {
        var ids = $.map($table_c.bootstrapTable('getSelections'), function (row) {
            return row.id;
        });
        var url = $(this).attr('data-url');
        $.post(url,{id:ids,status:1},function(res){

        });
        $table_c.bootstrapTable('refresh', {
            field: 'id',
            values: ids
        });
        $remove_c.prop('disabled', true);
        $status1_c.prop('disabled', true);
        $status0_c.prop('disabled', true);
    });
    $status0_c.click(function () {
        var ids = $.map($table_c.bootstrapTable('getSelections'), function (row) {
            return row.id;
        });
        var url = $(this).attr('data-url');
        $.post(url,{id:ids,status:0},function(res){

        });
        $table_c.bootstrapTable('refresh', {
            field: 'id',
            values: ids
        });
        $$remove_c.prop('disabled', true);
        $status1_c.prop('disabled', true);
        $status0_c.prop('disabled', true);
    });

    var faIcon = {
        valid: 'fa fa-check-circle fa-lg text-success',
        invalid: 'fa fa-times-circle fa-lg',
        validating: 'fa fa-refresh'
    }

    $('#training-a-form').bootstrapValidator({
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
            training_time: {
                container: 'tooltip',
                validators:{
                    notEmpty: {
                        message: '训练日期不能为空'
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
                        $('#training-a-form').modal('hide');
                        window.location.reload();
                    });
                      
                    // Or use Javascript to update your page, such as showing the account name  
                    // $('#welcome').html('Hello ' + result.username);  
                } else {  
                    // The account is not found  
                    // Show the errors  
                    layer.msg('更新失败',{icon:5})
  
                    // Enable the submit buttons  
                    $('#training-a-form').bootstrapValidator('disableSubmitButtons', false);  
                }
            }, 'json');
    });
    $('#training-b-form').bootstrapValidator({
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
            training_time: {
                container: 'tooltip',
                validators:{
                    notEmpty: {
                        message: '训练日期不能为空'
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
                        $('#training-b-form').modal('hide');
                        window.location.reload();
                    });
                      
                    // Or use Javascript to update your page, such as showing the account name  
                    // $('#welcome').html('Hello ' + result.username);  
                } else {  
                    // The account is not found  
                    // Show the errors  
                    layer.msg('更新失败',{icon:5})
  
                    // Enable the submit buttons  
                    $('#training-b-form').bootstrapValidator('disableSubmitButtons', false);  
                }
            }, 'json');
    });
    $('#training-c-form').bootstrapValidator({
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
            training_time: {
                container: 'tooltip',
                validators:{
                    notEmpty: {
                        message: '训练日期不能为空'
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
                        $('#training-c-form').modal('hide');
                        window.location.reload();
                    });
                      
                    // Or use Javascript to update your page, such as showing the account name  
                    // $('#welcome').html('Hello ' + result.username);  
                } else {  
                    // The account is not found  
                    // Show the errors  
                    layer.msg('更新失败',{icon:5})
  
                    // Enable the submit buttons  
                    $('#training-c-form').bootstrapValidator('disableSubmitButtons', false);  
                }
            }, 'json');
    });

    $("#training-date").mask('9999-99-99',{placeholder: "____-__-__"});
    $("#training-b-date").mask('9999-99-99',{placeholder: "____-__-__"})
    $("#training-c-date").mask('9999-99-99',{placeholder: "____-__-__"})
>>>>>>> 167bbffb22afb6112c63cb1c93c2905c2cdb6cef
});