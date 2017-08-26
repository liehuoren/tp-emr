$(document).ready(function() {
    jQuery.fn.bootstrapTable.defaults.icons = {
        paginationSwitchDown: 'demo-pli-arrow-down',
        paginationSwitchUp: 'demo-pli-arrow-up',
        refresh: 'demo-pli-repeat-2',
        toggle: 'demo-pli-layout-grid',
        columns: 'demo-pli-check',
        detailOpen: 'demo-psi-add',
        detailClose: 'demo-psi-remove'
    }
    $("#member").bootstrapTable({
        idField: 'id',
        locale: 'zh-CN',
        columns:[{
            field:'id',
            title:'ID'
        },{
            field:'name',
            title:'学员姓名'
        },{
            field:'update_time',
            title:'最后更新时间'
        },{
            field:'update_name',
            title:'最后更新者'
        },{
            field:'status',
            title:'审核状态'
        }],
        onClickRow:function(row,$element){
            window.location.href="/admin/member/read/id/"+row.id;
        }
    })

    $("#report").bootstrapTable({
        idField: 'id',
        locale: 'zh-CN',
        columns:[{
            field:'id',
            title:'ID'
        },{
            field:'name',
            title:'学员姓名'
        },{
            field:'update_time',
            title:'最后更新时间'
        },{
            field:'update_name',
            title:'最后更新者'
        },{
            field:'status',
            title:'审核状态'
        }],
        onClickRow:function(row,$element){
            window.location.href="/admin/report/edit/id/"+row.id;
        }
    })

    $("#training").bootstrapTable({
        idField: 'id',
        locale: 'zh-CN',
        columns:[{
            field:'id',
            title:'ID'
        },{
            field:'name',
            title:'学员姓名'
        },{
            field:'update_time',
            title:'最后更新时间'
        },{
            field:'update_name',
            title:'最后更新者'
        },{
            field:'status',
            title:'审核状态'
        },{
            field:'stu_id',
            title:'学员ID',
            visible: false
        }],
        onClickRow:function(row,$element){
            window.location.href="/admin/training/index/id/"+row.stu_id;
        }
    })

    $("#evaluation").bootstrapTable({
        idField: 'id',
        locale: 'zh-CN',
        columns:[{
            field:'id',
            title:'ID'
        },{
            field:'name',
            title:'学员姓名'
        },{
            field:'update_time',
            title:'最后更新时间'
        },{
            field:'update_name',
            title:'最后更新者'
        },{
            field:'status',
            title:'审核状态'
        },{
            field:'stu_id',
            title:'学员ID',
            visible: false
        }],
        onClickRow:function(row,$element){
            window.location.href="/admin/evaluation/edit/id/"+row.id;
        }
    })
})