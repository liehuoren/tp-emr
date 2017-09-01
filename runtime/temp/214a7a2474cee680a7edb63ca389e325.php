<?php if (!defined('THINK_PATH')) exit(); /*a:28:{s:70:"D:\wamp64\www\tp-emr\public/../application/admin\view\report\edit.html";i:1503985386;s:70:"D:\wamp64\www\tp-emr\public/../application/admin\view\Public\base.html";i:1504166997;s:72:"D:\wamp64\www\tp-emr\public/../application/admin\view\public\header.html";i:1502359014;s:75:"D:\wamp64\www\tp-emr\public/../application/admin\view\report\info-base.html";i:1503043366;s:74:"D:\wamp64\www\tp-emr\public/../application/admin\view\report\report-a.html";i:1503732643;s:78:"D:\wamp64\www\tp-emr\public/../application/admin\view\report\report-a-add.html";i:1503732591;s:74:"D:\wamp64\www\tp-emr\public/../application/admin\view\report\report-b.html";i:1503642504;s:78:"D:\wamp64\www\tp-emr\public/../application/admin\view\report\report-b-add.html";i:1503641435;s:74:"D:\wamp64\www\tp-emr\public/../application/admin\view\report\report-c.html";i:1503642530;s:78:"D:\wamp64\www\tp-emr\public/../application/admin\view\report\report-c-add.html";i:1503641441;s:74:"D:\wamp64\www\tp-emr\public/../application/admin\view\report\report-d.html";i:1503544884;s:78:"D:\wamp64\www\tp-emr\public/../application/admin\view\report\report-d-add.html";i:1503544876;s:74:"D:\wamp64\www\tp-emr\public/../application/admin\view\report\report-e.html";i:1503732686;s:78:"D:\wamp64\www\tp-emr\public/../application/admin\view\report\report-e-add.html";i:1503544894;s:77:"D:\wamp64\www\tp-emr\public/../application/admin\view\report\before-info.html";i:1503544735;s:81:"D:\wamp64\www\tp-emr\public/../application/admin\view\report\before-info-add.html";i:1503574135;s:79:"D:\wamp64\www\tp-emr\public/../application/admin\view\report\training-plan.html";i:1503545237;s:81:"D:\wamp64\www\tp-emr\public/../application/admin\view\report\training-plan-2.html";i:1503545224;s:83:"D:\wamp64\www\tp-emr\public/../application/admin\view\report\training-plan-add.html";i:1503544476;s:85:"D:\wamp64\www\tp-emr\public/../application/admin\view\report\training-plan-add-2.html";i:1503547933;s:73:"D:\wamp64\www\tp-emr\public/../application/admin\view\report\summary.html";i:1503558336;s:77:"D:\wamp64\www\tp-emr\public/../application/admin\view\report\summary-add.html";i:1503557560;s:72:"D:\wamp64\www\tp-emr\public/../application/admin\view\report\course.html";i:1504001761;s:76:"D:\wamp64\www\tp-emr\public/../application/admin\view\report\course-add.html";i:1504000607;s:71:"D:\wamp64\www\tp-emr\public/../application/admin\view\public\aside.html";i:1502243740;s:73:"D:\wamp64\www\tp-emr\public/../application/admin\view\public\mainnav.html";i:1503561480;s:72:"D:\wamp64\www\tp-emr\public/../application/admin\view\public\footer.html";i:1502275958;s:73:"D:\wamp64\www\tp-emr\public/../application/admin\view\public\setting.html";i:1502243791;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>电子病历——启音言语科技</title>
    
    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ]-->

    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="__CSS__/bootstrap.min.css" rel="stylesheet">

    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="__CSS__/nifty.min.css" rel="stylesheet">

    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="__CSS__/demo/nifty-demo-icons.min.css" rel="stylesheet">

    <!--Demo [ DEMONSTRATION ]-->
    <link href="__CSS__/demo/nifty-demo.min.css" rel="stylesheet">
 
    <!--Font Awesome [ OPTIONAL ]-->
    <link href="__PLUGINS__/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!--Magic Checkbox [ OPTIONAL ]-->
    <link href="__PLUGINS__/magic-check/css/magic-check.min.css" rel="stylesheet">

    
<!--Chosen [ OPTIONAL ]-->
<link href="__PLUGINS__/chosen/chosen.min.css" rel="stylesheet">
<link href="__PLUGINS__/bootstrap-validator/bootstrapValidator.min.css" rel="stylesheet">

    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="__PLUGINS__/pace/pace.min.css" rel="stylesheet">
    <script src="__PLUGINS__/pace/pace.min.js"></script>

    <!--jQuery [ REQUIRED ]-->
    <script src="__JS__/jquery-2.2.4.min.js"></script>

    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="__JS__/bootstrap.min.js"></script>

    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="__JS__/nifty.min.js"></script>

    <!--=================================================-->
    
    <!--Demo script [ DEMONSTRATION ]-->
    <script src="__JS__/demo/nifty-demo.min.js"></script>
    <script src="__PLUGINS__/layer/layer.js"></script>
    <!--Morris.js [ OPTIONAL ]-->

    <script src="__PLUGINS__/morris-js/raphael-js/raphael.min.js"></script>

    <!--Sparkline [ OPTIONAL ]-->
    <script src="__PLUGINS__/sparkline/jquery.sparkline.min.js"></script>
    <script src="__JS__/common.js"></script>

    <!--Specify page [ SAMPLE ]-->

    
<!--Chosen [ OPTIONAL ]-->
<script src="__PLUGINS__/chosen/chosen.jquery.min.js"></script>
<script src="__PLUGINS__/bootstrap-validator/bootstrapValidator.min.js"></script>
<script src="__PLUGINS__/mask/jquery.mask.min.js"></script>
<script src="__JS__/report/report-edit.js"></script>

</head>
<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
<body>
    <div id="container" class="effect aside-float aside-bright mainnav-lg navbar-fixed">
        
        <!--NAVBAR-->
        <!--===================================================-->
        <header id="navbar">
    <div id="navbar-container" class="boxed">

        <!--Brand logo & name-->
        <!--================================-->
        <div class="navbar-header">
            <a href="<?php echo url('admin/index/index'); ?>" class="navbar-brand">
                <img src="__IMG__/logo.png" alt="Nifty Logo" class="brand-icon">
                <div class="brand-title">
                    <span class="brand-text">启音言语科技</span>
                </div>
            </a>
        </div>
        <!--================================-->
        <!--End brand logo & name-->

        <!--Navbar Dropdown-->
        <!--================================-->
        <div class="navbar-content clearfix">
            <ul class="nav navbar-top-links pull-left">

                <!--Navigation toogle button-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <li class="tgl-menu-btn">
                    <a class="mainnav-toggle" href="#">
                        <i class="demo-pli-view-list"></i>
                    </a>
                </li>
                
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End mega dropdown-->

            </ul>
            <ul class="nav navbar-top-links pull-right">

                <!--Language selector-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                
                <!--User dropdown-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <li id="dropdown-user" class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                        <span class="pull-right">
                            <!--<img class="img-circle img-user media-object" src="__IMG__/profile/1.png" alt="Profile Picture">-->
                            <i class="demo-pli-male ic-user"></i>
                        </span>
                        <div class="username hidden-xs"><?php echo $userself['profile']['fullname']; ?></div>
                    </a>


                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right panel-default">

                        <!-- User dropdown menu -->
                        <ul class="head-list">
                            <li>
                                <a href="<?php echo url('admin/index/profile'); ?>">
                                    <i class="demo-pli-male icon-lg icon-fw"></i> 个人信息
                                </a>
                            </li>
                        </ul>

                        <!-- Dropdown footer -->
                        <div class="pad-all text-right">
                            <a href="<?php echo url('admin/admin/logout'); ?>" class="btn btn-primary">
                                <i class="demo-pli-unlock"></i> 退出登录
                            </a>
                        </div>
                    </div>
                </li>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End user dropdown-->
            </ul>
        </div>
        <!--================================-->
        <!--End Navbar Dropdown-->

    </div>
</header>
        
        <!--===================================================-->
        <!--END NAVBAR-->

        <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            
            
<div id="content-container">
    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id="page-title">
        <h1 class="page-header text-overflow">评估报告</h1>
    </div>

    <!--Breadcrumb-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <ol class="breadcrumb">
        <li><a href="<?php echo url('admin/index/index'); ?>">主页</a></li>
        <li><a href="<?php echo url('admin/member/index'); ?>">学员库</a></li>
        <li class="active">学员报告——<?php echo $info['name']; ?></li>
    </ol>
    <div id="page-content">
        <div class="fixed-fluid">
            <div class="fixed-sm-200 fixed-lg-250 pull-sm-left">
                <div class="panel">
                    <div class="text-center pad-all bord-btm">
                        <div class="pad-ver">
                            <img src="<?php echo $info['avatar']; ?>" class="img-lg img-border img-circle" alt="Profile Picture">
                        </div>
                        <h4 class="text-lg text-overflow mar-no"><?php echo $info['name']; ?></h4>
                        <p class="text-sm text-muted"><?php echo $info['uuid']; ?></p>
                        
                    </div>
                    <p class="text-semibold text-main pad-all mar-no">基本信息</p>
                    <div class="list-group bg-trans pad-btm bord-btm">
                        <a href="#" class="list-group-item ">
                            <span class="text-main">性别：</span><?php echo $info['sex']; ?>
                        </a>
                        <a href="#" class="list-group-item">
                            <span class="text-main">出生日期：</span><?php echo $info['birthday']; ?>
                        </a>
                        <a href="#" class="list-group-item">
                            <span class="text-main">年龄：</span><?php echo birthday($info['birthday']); ?>
                        </a>
                        
                    </div>
                    <p class="text-semibold text-main pad-all mar-no">其他信息</p>
                    <div class="list-group bg-trans pad-btm bord-btm">
                        <a href="<?php echo url('admin/member/read',['id'=>$info['id']]); ?>" class="list-group-item ">
                            <i class="demo-pli-file icon-lg icon-fw"></i>
                            基础信息
                        </a>
                        <a href="<?php echo url('admin/report/index',['id'=>$info['id']]); ?>" class="list-group-item ">
                            <i class="demo-pli-file icon-lg icon-fw"></i>
                            评估报告
                        </a>
                        <a href="<?php echo url('admin/training/index',['id'=>$info['id']]); ?>" class="list-group-item">
                            <i class="demo-pli-file icon-lg icon-fw"></i>
                            训练记录
                        </a>
                        <a href="<?php echo url('admin/evaluation/index',['id'=>$info['id']]); ?>" class="list-group-item">
                            <i class="demo-pli-file icon-lg icon-fw"></i>
                            阶段评估
                        </a>
                    </div>
                </div>
            </div>
            <div class="fluid">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-control">
                            <a href="javascript:void(0)" class="btn" onclick="location.reload()"><i class="demo-psi-repeat-2 icon-fw"></i> </a>
                                
                            <div class="btn-group">
                                <button data-toggle="dropdown" class="dropdown-toggle btn" aria-expanded="false">
                                    <i class="caret"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="<?php echo url('admin/report/index',['id'=>$info['id']]); ?>">返回</a></li>
                                    <li><a href="<?php echo url('admin/report/setStatus',['id'=>$report['id'],'status'=>1]); ?>">通过审核</a></li>
                                    <li><a href="<?php echo url('admin/report/setStatus',['id'=>$report['id'],'status'=>0]); ?>">未通过审核</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo url('admin/report/delete',['id'=>$report['id']]); ?>">删除</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="panel-control pull-left">
                            <ul class="nav nav-tabs" id="myTab">
                                <li class="active"><a href="#tab-1" >基本信息</a></li>
                                <li><a href="#tab-2">口肌发音评估</a></li>
                                <li><a href="#tab-3">语言理解表达能力评估</a></li>
                                <li><a href="#tab-4">感统、大小肌肉评估</a></li>
                                <li><a href="#tab-5">专注力评估</a></li>
                                <li><a href="#tab-6">社交行为评估</a></li>
                                <li><a href="#tab-7">授课前了解事项</a></li>
                                <li><a href="#tab-8">训练方案</a></li>
                                <li><a href="#tab-9">评估情况</a></li>
                                <li><a href="#tab-10">课程安排</a></li>
                            </ul>
                        </div>
                        <h3 class="panel-title invisible">a</h3>
                    </div>
                    
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="tab-1">
                                <form action="<?php echo url('admin/report/updateBase',['id'=>$report['id']]); ?>" method="post" class="form-horizontal" id="base-info-form">
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label class="col-lg-3 control-label">学员姓名</label>
                <div class="col-lg-7">
                    <input type="text" class="form-control" placeholder="" value="<?php echo $info['name']; ?>" disabled>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label class="col-lg-3 control-label">出生日期</label>
                <div class="col-lg-7 input-group date">
                    <input type="text" class="form-control" id="birth-date" value="<?php echo $info['birthday']; ?>" disabled>
                    <span class="input-group-addon"><i class="demo-pli-calendar-4"></i></span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label class="col-lg-3 control-label">评估时间</label>
                <div class="col-lg-7  input-group date">
                    <input type="text" class="form-control" id="assess-date" name="assess_time" value="<?php echo $report['assess_time']; ?>">
                    <span class="input-group-addon"><i class="demo-pli-calendar-4"></i></span>

                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label class="col-lg-3 control-label">评估专家</label>
                <div class="col-lg-7">
                    <input type="text" class="form-control" name="t_name" value="<?php echo $report['t_name']; ?>">
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label class="col-lg-3 control-label">医学临床症状</label>
                <div class="col-lg-7">
                    <?php echo widget('diagnosis/index',['dia_id'=>$report['diagnosis']]); ?>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label class="col-lg-3 control-label">言语问题</label>
                <div class="col-lg-7">
                    <?php echo widget('problem/index',['pro_id'=>$report['problem']]); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label class="col-lg-3 control-label">评估地址</label>
                <div class="col-lg-7  input-group date">
                    <input type="text" class="form-control" name="assess_address" value="<?php echo $report['assess_address']; ?>">
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label class="col-lg-3 control-label">最后修改时间：</label>
                <div class="col-lg-7">
                    <p class="form-control-static"><?php echo $report['update_time']; ?></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label class="col-lg-3 control-label">最后修改人：</label>
                <div class="col-lg-7">
                    <p class="form-control-static"><?php echo $report['update_name']; ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label class="col-lg-3 control-label">审核状态：</label>
                <div class="col-lg-7">
                    <p class="form-control-static"><?php echo $report['status']; ?></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label class="col-lg-3 control-label">审核人：</label>
                <div class="col-lg-7">
                    <p class="form-control-static"><?php echo $report['check_name']; ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-footer">
        <div class="row">
            <div class="col-sm-7 col-sm-offset-1">
                <button class="btn btn-mint" type="submit">保存</button>
            </div>
        </div>
    </div>
</form>
                            </div>
                            <div class="tab-pane fade" id="tab-2">
                                <?php if(!(empty($report['report_a']) || (($report['report_a'] instanceof \think\Collection || $report['report_a'] instanceof \think\Paginator ) && $report['report_a']->isEmpty()))): ?>
                                    <form class="form-horizontal" action="<?php echo url('admin/report/updateReportA',['id'=>$report['id']]); ?>" method="post" id="report-a-form">
    <p class="text-semibold text-main pad-all mar-no">口肌及喂吃-OM</p>
    <table class="table table-bordered">
        <tbody>
            <tr>
                <td colspan="2" class="col-lg-2 text-center" >01 口腔敏感度（Oral Sensitivity）</td>
                <td colspan="10" class="col-lg-10"><div class="checkbox">
                        <!-- Inline Checkboxes -->

                        <input id="oral-checkbox-1" class="magic-checkbox" type="checkbox" name="sensitivity[]" <?php if(in_array((1), is_array($report['report_a']['om']['oral_sensitivity'])?$report['report_a']['om']['oral_sensitivity']:explode(',',$report['report_a']['om']['oral_sensitivity']))): ?>checked<?php endif; ?> value="1" >
                        <label for="oral-checkbox-1">高敏感</label>
                        <input id="oral-checkbox-2" class="magic-checkbox" type="checkbox" name="sensitivity[]" <?php if(in_array((2), is_array($report['report_a']['om']['oral_sensitivity'])?$report['report_a']['om']['oral_sensitivity']:explode(',',$report['report_a']['om']['oral_sensitivity']))): ?>checked<?php endif; ?> value="2">
                        <label for="oral-checkbox-2">低敏感</label>
                        <input id="oral-checkbox-3" class="magic-checkbox" type="checkbox" name="sensitivity[]" <?php if(in_array((3), is_array($report['report_a']['om']['oral_sensitivity'])?$report['report_a']['om']['oral_sensitivity']:explode(',',$report['report_a']['om']['oral_sensitivity']))): ?>checked<?php endif; ?> value="3">
                        <label for="oral-checkbox-3">混合</label>
                        <input id="oral-checkbox-4" class="magic-checkbox" type="checkbox" name="sensitivity[]" <?php if(in_array((4), is_array($report['report_a']['om']['oral_sensitivity'])?$report['report_a']['om']['oral_sensitivity']:explode(',',$report['report_a']['om']['oral_sensitivity']))): ?>checked<?php endif; ?> value="4">
                        <label for="oral-checkbox-4">波动</label>
                        <input id="oral-checkbox-5" class="magic-checkbox" type="checkbox" name="sensitivity[]" <?php if(in_array((5), is_array($report['report_a']['om']['oral_sensitivity'])?$report['report_a']['om']['oral_sensitivity']:explode(',',$report['report_a']['om']['oral_sensitivity']))): ?>checked<?php endif; ?> value="5">
                        <label for="oral-checkbox-5">防御</label>
                        <input id="oral-checkbox-6" class="magic-checkbox" type="checkbox" name="sensitivity[]" <?php if(in_array((6), is_array($report['report_a']['om']['oral_sensitivity'])?$report['report_a']['om']['oral_sensitivity']:explode(',',$report['report_a']['om']['oral_sensitivity']))): ?>checked<?php endif; ?> value="6">
                        <label for="oral-checkbox-6">正常</label>
                    </div></td>
            </tr>
            <tr>
                <td colspan="2" rowspan="6" class="text-center">02 喂吃（Feeding）</td>
                <td colspan="2">勺子喂吃（Purees）</td>
                <td colspan="8">
                    <div class="form-group">
                        <label class="col-sm-1 control-label">侧面</label>
                        <div class="col-sm-2">
                            <select class="form-control" name="purees_side"><option></option><option value="1" <?php if($report['report_a']['om']['feeding']['purees']['side'] == '1'): ?>selected<?php endif; ?>>√</option><option value="2" <?php if($report['report_a']['om']['feeding']['purees']['side'] == '2'): ?>selected<?php endif; ?>>√×</option><option value="0" <?php if($report['report_a']['om']['feeding']['purees']['side'] == '0'): ?>selected<?php endif; ?>>×</option></select>
                        </div>
                        <label class="col-sm-1 control-label">正面</label>
                        <div class="col-sm-2">
                            <select class="form-control" name="purees_front"><option></option><option value="1" <?php if($report['report_a']['om']['feeding']['purees']['front'] == '1'): ?>selected<?php endif; ?>>√</option><option value="2" <?php if($report['report_a']['om']['feeding']['purees']['front'] == '2'): ?>selected<?php endif; ?>>√×</option><option value="0" <?php if($report['report_a']['om']['feeding']['purees']['front'] == '0'): ?>selected<?php endif; ?>>×</option></select>
                        </div>
                        <label class="col-sm-1 control-label">啜饮</label>
                        <div class="col-sm-2">
                            <select class="form-control" name="purees_slurping"><option></option><option value="1" <?php if($report['report_a']['om']['feeding']['purees']['slurping'] == '1'): ?>selected<?php endif; ?>>√</option><option value="2" <?php if($report['report_a']['om']['feeding']['purees']['slurping'] == '2'): ?>selected<?php endif; ?>>√×</option><option value="0" <?php if($report['report_a']['om']['feeding']['purees']['slurping'] == '0'): ?>selected<?php endif; ?>>×</option></select>
                        </div>
                        <div class="checkbox col-sm-3">
                            <input id="purees-checkbox-1" class="magic-checkbox" type="checkbox" name="purees_unable" value="1" <?php if($report['report_a']['om']['feeding']['purees']['unable'] == '1'): ?>checked<?php endif; ?>>
                            <label for="purees-checkbox-1">不可以</label>
                        </div>
                    </div>
                    
                </td>
            </tr>
            <tr>
                <td colspan="2">饼干（Slow Feed）</td>
                <td colspan="8">
                    <div class="form-group">
                        <label class="col-sm-1 control-label">左边</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="slow_feed[left]" value="<?php echo $report['report_a']['om']['feeding']['slow_feed']['left']; ?>">
                        </div>
                        <label class="col-sm-1 control-label">右边</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="slow_feed[right]" value="<?php echo $report['report_a']['om']['feeding']['slow_feed']['right']; ?>">
                        </div>
                        <div class="checkbox col-sm-3">
                            <input id="slow-feed-checkbox-1" class="magic-checkbox" type="checkbox" name="slow_feed_unable" value="1" <?php if($report['report_a']['om']['feeding']['slow_feed']['unable'] == '1'): ?>checked<?php endif; ?>>
                            <label for="slow-feed-checkbox-1">不可以</label>
                        </div>
                    </div>
                    
                </td>
            </tr>
            <tr>
                <td colspan="2" rowspan="3">水/果汁（Straw Drinking）</td>
                <td colspan="8">
                    <div class="form-group">
                        <label class="col-sm-1 control-label">奶瓶</label>
                        <div class="col-sm-2">
                            <select class="form-control" name="milk_bottle"><option></option><option value="1" <?php if($report['report_a']['om']['feeding']['straw_drinking']['milk_bottle'] == '1'): ?>selected<?php endif; ?>>√</option><option value="2" <?php if($report['report_a']['om']['feeding']['straw_drinking']['milk_bottle'] == '2'): ?>selected<?php endif; ?>>√×</option><option value="0" <?php if($report['report_a']['om']['feeding']['straw_drinking']['milk_bottle'] == '0'): ?>selected<?php endif; ?>>×</option></select>
                        </div>
                        <label class="col-sm-1 control-label">母乳</label>
                        <div class="col-sm-2">
                            <select class="form-control" name="breast_feeding"><option></option><option value="1" <?php if($report['report_a']['om']['feeding']['straw_drinking']['breast_feeding'] == '1'): ?>selected<?php endif; ?>>√</option><option value="2" <?php if($report['report_a']['om']['feeding']['straw_drinking']['breast_feeding'] == '2'): ?>selected<?php endif; ?>>√×</option><option value="0" <?php if($report['report_a']['om']['feeding']['straw_drinking']['breast_feeding'] == '0'): ?>selected<?php endif; ?>>×</option></select>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="8">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">小熊瓶</label>
                        <div class="col-sm-2">
                            <select class="form-control" name="bear_bottle"><option></option><option value="1" <?php if($report['report_a']['om']['feeding']['straw_drinking']['bear_bottle'] == '1'): ?>selected<?php endif; ?>>√</option><option value="2" <?php if($report['report_a']['om']['feeding']['straw_drinking']['bear_bottle'] == '2'): ?>selected<?php endif; ?>>√×</option><option value="0" <?php if($report['report_a']['om']['feeding']['straw_drinking']['bear_bottle'] == '0'): ?>selected<?php endif; ?>>×</option></select>
                        </div>
                        <label class="col-sm-1 control-label">吸管</label>
                        <div class="col-sm-2">
                            <input type="text" name="straw_num" class="form-control" value="<?php echo $report['report_a']['om']['feeding']['straw_drinking']['straw']; ?>">
                        </div>
                        <div class="checkbox col-sm-3">
                            <input id="straw-checkbox-1" class="magic-checkbox" type="checkbox" name="straw_unable" value="1" <?php if($report['report_a']['om']['feeding']['straw_drinking']['unable'] == '1'): ?>checked<?php endif; ?>>
                            <label for="straw-checkbox-1">不可以</label>
                        </div>
                    </div>
                    
                </td>
            </tr>
            <tr>
                <td colspan="8">
                    <label class="col-sm-2 control-label">剪口杯</label>
                    <div class="radio">
                        <!-- Inline radio buttons -->
                        <input id="cup-drinking" class="magic-radio" type="radio" name="cup_drinking" value="1" <?php if($report['report_a']['om']['feeding']['straw_drinking']['cup_drinking'] == '1'): ?>checked<?php endif; ?>>
                        <label for="cup-drinking">可以</label>
                        <input id="cup-drinking1" class="magic-radio" type="radio" name="cup_drinking" value="0">
                        <label for="cup-drinking1" <?php if($report['report_a']['om']['feeding']['straw_drinking']['cup_drinking'] == '0'): ?>checked<?php endif; ?>>不可以</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">酸奶（Thickened Liquids）</td>
                <td colspan="8">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">吸管</label>
                        <div class="col-sm-2">
                            <select class="form-control" name="liquids_straw"><option></option><option value="A" <?php if($report['report_a']['om']['feeding']['thickened_liquids']['straw'] == 'A'): ?>selected<?php endif; ?>>A</option><option value="B" <?php if($report['report_a']['om']['feeding']['thickened_liquids']['straw'] == 'B'): ?>selected<?php endif; ?>>B</option><option value="C" <?php if($report['report_a']['om']['feeding']['thickened_liquids']['straw'] == 'C'): ?>selected<?php endif; ?>>C</option><option value="D" <?php if($report['report_a']['om']['feeding']['thickened_liquids']['straw'] == 'D'): ?>selected<?php endif; ?>>D</option><option value="0" <?php if($report['report_a']['om']['feeding']['thickened_liquids']['straw'] == '0'): ?>selected<?php endif; ?>>不可以</option></select>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2" rowspan="2" class="text-center">03 气息（Airflow）</td>
                <td colspan="2">泡泡（Bubble）</td>
                <td colspan="8">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">层次</label>
                        <div class="col-sm-2">
                            <input type="text" name="bubble_step" class="form-control" value="<?php echo $report['report_a']['om']['airflow']['bubble']['step']; ?>">
                        </div>
                        <label class="col-sm-2 control-label" >次数</label>
                        <div class="col-sm-2">
                            <input type="text" name="bubble_times" class="form-control" value="<?php echo $report['report_a']['om']['airflow']['bubble']['times']; ?>">
                        </div>
                        <div class="checkbox col-sm-3">
                            <input id="bubble-checkbox-1" class="magic-checkbox" type="checkbox" name="bubble_unable" value="1" <?php if($report['report_a']['om']['airflow']['bubble']['unable'] == '1'): ?>checked<?php endif; ?>>
                            <label for="bubble-checkbox-1">不可以</label>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">笛子（Horn）</td>
                <td colspan="8">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">笛子（号）</label>
                        <div class="col-sm-2">
                            <input type="text" name="horn_num" class="form-control" value="<?php echo $report['report_a']['om']['airflow']['horn']['num']; ?>">
                        </div>
                        <label class="col-sm-2 control-label">次数</label>
                        <div class="col-sm-2">
                            <input type="text" name="horn_times" class="form-control" value="<?php echo $report['report_a']['om']['airflow']['horn']['times']; ?>">
                        </div>
                        <div class="checkbox col-sm-3">
                            <input id="horn-checkbox-1" class="magic-checkbox" type="checkbox" name="horn_unable" value="1" <?php if($report['report_a']['om']['airflow']['horn']['unable'] == '1'): ?>checked<?php endif; ?>>
                            <label for="horn-checkbox-1" >不可以</label>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2" rowspan="6" class="text-center">04 下颚稳定性（Jaw Stability）</td>
                <td colspan="8">
                    <div class="form-group">
                        
                        <label class="col-sm-2 control-label">手指套</label>
                        <div class="col-sm-3">
                            <input type="text" name="finger_sleeve" class="form-control" value="<?php echo $report['report_a']['om']['jaw_stability']['finger_sleeve']; ?>">
                        </div>
                        <label class="col-sm-3 control-label">牙胶振动棒</label>
                        <div class="col-sm-3">
                            <input type="text" name="z_vibe" class="form-control" value="<?php echo $report['report_a']['om']['jaw_stability']['z_vibe']; ?>">
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="8">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">1#咬牙胶</label>
                        <label class="col-sm-1 control-label">左</label>
                        <div class="col-sm-2">
                            <input type="text" name="chewy_tube[1][left]" class="form-control" value="<?php echo $report['report_a']['om']['jaw_stability']['chewy_tube_1']['left']; ?>">
                        </div>
                        <label class="col-sm-1 control-label">右</label>
                        <div class="col-sm-2">
                            <input type="text" name="chewy_tube[1][right]" class="form-control" value="<?php echo $report['report_a']['om']['jaw_stability']['chewy_tube_1']['right']; ?>">
                        </div>
                        <label class="col-sm-1 control-label">双咬</label>
                        <div class="col-sm-2">
                            <input type="text" name="chewy_tube[1][both]" class="form-control" value="<?php echo $report['report_a']['om']['jaw_stability']['chewy_tube_1']['both']; ?>">
                        </div>
                        
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="8">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">2#咬牙胶</label>
                        <label class="col-sm-1 control-label">左</label>
                        <div class="col-sm-2">
                            <input type="text" name="chewy_tube[2][left]" class="form-control" value="<?php echo $report['report_a']['om']['jaw_stability']['chewy_tube_2']['left']; ?>">
                        </div>
                        <label class="col-sm-1 control-label">右</label>
                        <div class="col-sm-2">
                            <input type="text" name="chewy_tube[2][right]" class="form-control" value="<?php echo $report['report_a']['om']['jaw_stability']['chewy_tube_2']['right']; ?>">
                        </div>
                        <label class="col-sm-1 control-label">双咬</label>
                        <div class="col-sm-2">
                            <input type="text" name="chewy_tube[2][both]" class="form-control" value="<?php echo $report['report_a']['om']['jaw_stability']['chewy_tube_2']['both']; ?>">
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="8">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">3#咬牙胶</label>
                        <label class="col-sm-1 control-label">左</label>
                        <div class="col-sm-2">
                            <input type="text" name="chewy_tube[3][left]" class="form-control" value="<?php echo $report['report_a']['om']['jaw_stability']['chewy_tube_3']['left']; ?>">
                        </div>
                        <label class="col-sm-1 control-label">右</label>
                        <div class="col-sm-2">
                            <input type="text" name="chewy_tube[3][right]" class="form-control" value="<?php echo $report['report_a']['om']['jaw_stability']['chewy_tube_3']['right']; ?>">
                        </div>
                        <label class="col-sm-1 control-label">双咬</label>
                        <div class="col-sm-2">
                            <input type="text" name="chewy_tube[3][both]" class="form-control" value="<?php echo $report['report_a']['om']['jaw_stability']['chewy_tube_3']['both']; ?>">
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="8">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">4#咬牙胶</label>
                        <label class="col-sm-1 control-label">左</label>
                        <div class="col-sm-2">
                            <input type="text" name="chewy_tube[4][left]" class="form-control" value="<?php echo $report['report_a']['om']['jaw_stability']['chewy_tube_4']['left']; ?>">
                        </div>
                        <label class="col-sm-1 control-label">右</label>
                        <div class="col-sm-2">
                            <input type="text" name="chewy_tube[4][right]" class="form-control" value="<?php echo $report['report_a']['om']['jaw_stability']['chewy_tube_4']['right']; ?>">
                        </div>
                        <label class="col-sm-1 control-label">双咬</label>
                        <div class="col-sm-2">
                            <input type="text" name="chewy_tube[4][both]" class="form-control" value="<?php echo $report['report_a']['om']['jaw_stability']['chewy_tube_4']['both']; ?>"> 
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="8">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">5#咬牙胶</label>
                        <label class="col-sm-1 control-label">左</label>
                        <div class="col-sm-2">
                            <input type="text" name="chewy_tube[5][left]" class="form-control" value="<?php echo $report['report_a']['om']['jaw_stability']['chewy_tube_5']['left']; ?>">
                        </div>
                        <label class="col-sm-1 control-label">右</label>
                        <div class="col-sm-2">
                            <input type="text" name="chewy_tube[5][right]" class="form-control" value="<?php echo $report['report_a']['om']['jaw_stability']['chewy_tube_5']['right']; ?>">
                        </div>
                        <label class="col-sm-1 control-label">双咬</label>
                        <div class="col-sm-2">
                            <input type="text" name="chewy_tube[5][both]" class="form-control" value="<?php echo $report['report_a']['om']['jaw_stability']['chewy_tube_5']['both']; ?>">
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2" rowspan="4" class="text-center">05 唇（Lips）</td>
                <td colspan="4" >
                    <div class="radio">
                        <input id="lips-radio-1" class="magic-radio" type="radio" name="lips_radio" value="2" <?php if($report['report_a']['om']['lips']['radios'] == '2'): ?>checked<?php endif; ?>>
                        <label for="lips-radio-1">好</label>
                        <input id="lips-radio-2" class="magic-radio" type="radio" name="lips_radio" value="1" <?php if($report['report_a']['om']['lips']['radios'] == '1'): ?>checked<?php endif; ?>>
                        <label for="lips-radio-2" >一般</label>
                        <input id="lips-radio-3" class="magic-radio" type="radio" name="lips_radio" value="0" <?php if($report['report_a']['om']['lips']['radios'] == '0'): ?>checked<?php endif; ?>>
                        <label for="lips-radio-3" >不好</label>
                    </div>
                </td>
                <td colspan="4">
                    <div class="form-group">
                        <label class="col-sm-1 control-label">合唇</label>
                        <div class="col-sm-2">
                            <select class="form-control" name="lips[closure]"><option></option><option value="1" <?php if(isset($report['report_a']['om']['lips']['closures'])): if($report['report_a']['om']['lips']['closures'] == '1'): ?>selected<?php endif; endif; ?>>√</option><option value="2" <?php if(isset($report['report_a']['om']['lips']['closures'])): if($report['report_a']['om']['lips']['closures'] == '2'): ?>selected<?php endif; endif; ?>>√×</option><option value="0" <?php if(isset($report['report_a']['om']['lips']['closures'])): if($report['report_a']['om']['lips']['closures'] == '0'): ?>selected<?php endif; endif; ?>>×</option></select>
                        </div>
                        <label class="col-sm-1 control-label">展唇</label>
                        <div class="col-sm-2">
                            <select class="form-control" name="lips[stretch]"><option></option><option value="1" <?php if(isset($report['report_a']['om']['lips']['stretch'])): if($report['report_a']['om']['lips']['stretch'] == '1'): ?>selected<?php endif; endif; ?>>√</option><option value="2" <?php if(isset($report['report_a']['om']['lips']['stretch'])): if($report['report_a']['om']['lips']['stretch'] == '2'): ?>selected<?php endif; endif; ?>>√×</option><option value="0" <?php if(isset($report['report_a']['om']['lips']['stretch'])): if($report['report_a']['om']['lips']['stretch'] == '0'): ?>selected<?php endif; endif; ?>>×</option></select>
                        </div>
                        <label class="col-sm-1 control-label">圆唇</label>
                        <div class="col-sm-2">
                            <select class="form-control" name="lips[round]"><option></option><option value="1" <?php if(isset($report['report_a']['om']['lips']['round'])): if($report['report_a']['om']['lips']['round'] == '1'): ?>selected<?php endif; endif; ?>>√</option><option value="2" <?php if(isset($report['report_a']['om']['lips']['round'])): if($report['report_a']['om']['lips']['round'] == '2'): ?>selected<?php endif; endif; ?>>√×</option><option value="0" <?php if(isset($report['report_a']['om']['lips']['round'])): if($report['report_a']['om']['lips']['round'] == '0'): ?>selected<?php endif; endif; ?>>×</option></select>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="8">
                    <div class="form-group">
                        <label class="col-sm-4 control-label">合唇用压舌棒</label>
                        <div class="col-sm-3">
                            <input type="text" name="lips_closure" class="form-control" value="<?php echo $report['report_a']['om']['lips']['closure']; ?>">
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="8">
                    <div class="form-group">
                        <label class="col-sm-4 control-label">纽扣拉力训练器</label>
                        <div class="col-sm-3">
                            <input type="text" name="lips_button_pull" class="form-control" value="<?php echo $report['report_a']['om']['lips']['button_pull']; ?>">
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="8">
                    <div class="form-group">
                        <label class="col-sm-4 control-label">脆骨下唇回缩练习</label>
                        <div class="col-sm-3">
                            <input type="text" name="lips_retraction" class="form-control" value="<?php echo $report['report_a']['om']['lips']['retraction']; ?>">
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2" rowspan="5" class="text-center">06 舌灵活性（Tongue Flexibility）</td>
                <td colspan="8" rowspan="2">
                    <div class="form-group">
                        <label class="col-sm-1 control-label">前伸</label>
                        <div class="col-sm-1">
                            <select class="form-control" name="tongue_protrusion"><option></option><option value="1" <?php if($report['report_a']['om']['tongue_flexibility']['protrusion'] == '1'): ?>selected<?php endif; ?>>√</option><option value="2" <?php if($report['report_a']['om']['tongue_flexibility']['protrusion'] == '2'): ?>selected<?php endif; ?>>√×</option><option value="0" <?php if($report['report_a']['om']['tongue_flexibility']['protrusion'] == '0'): ?>selected<?php endif; ?>>×</option></select>
                        </div>
                        <label class="col-sm-1 control-label">回缩</label>
                        <div class="col-sm-1">
                            <select class="form-control" name="tongue_retraction"><option></option><option value="1" <?php if($report['report_a']['om']['tongue_flexibility']['retraction'] == '1'): ?>selected<?php endif; ?>>√</option><option value="2" <?php if($report['report_a']['om']['tongue_flexibility']['retraction'] == '2'): ?>selected<?php endif; ?>>√×</option><option value="0" <?php if($report['report_a']['om']['tongue_flexibility']['retraction'] == '0'): ?>selected<?php endif; ?>>×</option></select>
                        </div>
                        <label class="col-sm-1 control-label">左</label>
                        <div class="col-sm-1">
                            <select class="form-control" name="tongue_left"><option></option><option value="1" <?php if($report['report_a']['om']['tongue_flexibility']['left'] == '1'): ?>selected<?php endif; ?>>√</option><option value="2" <?php if($report['report_a']['om']['tongue_flexibility']['left'] == '2'): ?>selected<?php endif; ?>>√×</option><option value="0" <?php if($report['report_a']['om']['tongue_flexibility']['left'] == '0'): ?>selected<?php endif; ?>>×</option></select>
                        </div>
                        <label class="col-sm-1 control-label">右</label>
                        <div class="col-sm-1">
                            <select class="form-control" name="tongue_right"><option></option><option value="1" <?php if($report['report_a']['om']['tongue_flexibility']['right'] == '1'): ?>selected<?php endif; ?>>√</option><option value="2" <?php if($report['report_a']['om']['tongue_flexibility']['right'] == '2'): ?>selected<?php endif; ?>>√×</option><option value="0" <?php if($report['report_a']['om']['tongue_flexibility']['right'] == '0'): ?>selected<?php endif; ?>>×</option></select>
                        </div>
                        <label class="col-sm-1 control-label">上</label>
                        <div class="col-sm-1">
                            <select class="form-control" name="tongue_elevation"><option></option><option value="1" <?php if($report['report_a']['om']['tongue_flexibility']['elevation'] == '1'): ?>selected<?php endif; ?>>√</option><option value="2" <?php if($report['report_a']['om']['tongue_flexibility']['elevation'] == '2'): ?>selected<?php endif; ?>>√×</option><option value="0" <?php if($report['report_a']['om']['tongue_flexibility']['elevation'] == '0'): ?>selected<?php endif; ?>>×</option></select>
                        </div>
                        <label class="col-sm-1 control-label">下</label>
                        <div class="col-sm-1">
                            <select class="form-control" name="tongue_depression"><option></option><option value="1" <?php if($report['report_a']['om']['tongue_flexibility']['depression'] == '1'): ?>selected<?php endif; ?>>√</option><option value="2" <?php if($report['report_a']['om']['tongue_flexibility']['depression'] == '2'): ?>selected<?php endif; ?>>√×</option><option value="0" <?php if($report['report_a']['om']['tongue_flexibility']['depression'] == '0'): ?>selected<?php endif; ?>>×</option></select>
                        </div>

                    </div>
                </td>
            </tr>
            <tr></tr>
            <tr>
                <td colspan="8">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">前伸/回缩舌尖训练器（月牙形）</label>
                        <div class="col-sm-4">
                            <input type="text" name="tongue_a" class="form-control" value="<?php echo $report['report_a']['om']['tongue_flexibility']['content_a']; ?>">
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="8">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">舌尖两侧转移训练</label>
                        <div class="col-sm-4">
                            <input type="text" name="tongue_b" class="form-control" value="<?php echo $report['report_a']['om']['tongue_flexibility']['content_b']; ?>">
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="8">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">舌尖提升/下压训练</label>
                        <div class="col-sm-4">
                            <input type="text" name="tongue_c" class="form-control" value="<?php echo $report['report_a']['om']['tongue_flexibility']['content_c']; ?>">
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="text-center">07 吞咽（Swallowing）</td>
                <td colspan="8">
                    <div class="radio">
                        <!-- Inline radio buttons -->
                        <input id="swallowing-radio" class="magic-radio" type="radio" name="swallowing" value="2" <?php if($report['report_a']['om']['swallowing'] == '2'): ?>checked<?php endif; ?>>
                        <label for="swallowing-radio">好</label>
                        <input id="swallowing-radio1" class="magic-radio" type="radio" name="swallowing" value="1" <?php if($report['report_a']['om']['swallowing'] == '1'): ?>checked<?php endif; ?>>
                        <label for="swallowing-radio1">一般</label>
                        <input id="swallowing-radio2" class="magic-radio" type="radio" name="swallowing" value="0" <?php if($report['report_a']['om']['swallowing'] == '0'): ?>checked<?php endif; ?>>
                        <label for="swallowing-radio2">不好</label>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <p class="text-semibold text-main pad-all mar-no">发音测试-SP</p>
    <table class="table table-bordered">
        <tbody>
            <tr>
                <td rowspan="6" colspan="2" class="text-center" style="vertical-align: middle">检测能发哪些音</td>
                <td colspan="5">声母</td>
                <td colspan="5">韵母</td>
            </tr>
            <tr>
                <td colspan="5">
                    <div class="checkbox">
                        <?php if(is_array($initials) || $initials instanceof \think\Collection || $initials instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($initials) ? array_slice($initials,0,4, true) : $initials->slice(0,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <input id="initials-checkbox-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="initials[can][]" value="<?php echo $vo['name']; ?>" <?php if(in_array(($vo['name']), is_array($report['report_a']['sp']['existing_syllables']['initials'])?$report['report_a']['sp']['existing_syllables']['initials']:explode(',',$report['report_a']['sp']['existing_syllables']['initials']))): ?>checked<?php endif; ?>>
                        <label for="initials-checkbox-<?php echo $key; ?>"><?php echo $vo['name']; ?></label>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </td>
                <td colspan="5">
                    <div class="checkbox">
                        <?php if(is_array($finals) || $finals instanceof \think\Collection || $finals instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($finals) ? array_slice($finals,0,5, true) : $finals->slice(0,5, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <input id="finals-checkbox-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="finals[can][]" value="<?php echo $vo['name']; ?>" <?php if(in_array(($vo['name']), is_array($report['report_a']['sp']['existing_syllables']['finals'])?$report['report_a']['sp']['existing_syllables']['finals']:explode(',',$report['report_a']['sp']['existing_syllables']['finals']))): ?>checked<?php endif; ?>>
                        <label for="finals-checkbox-<?php echo $key; ?>"><?php echo $vo['name']; ?></label>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <div class="checkbox">
                        <?php if(is_array($initials) || $initials instanceof \think\Collection || $initials instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($initials) ? array_slice($initials,4,4, true) : $initials->slice(4,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <input id="initials-checkbox-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="initials[can][]" value="<?php echo $vo['name']; ?>" <?php if(in_array(($vo['name']), is_array($report['report_a']['sp']['existing_syllables']['initials'])?$report['report_a']['sp']['existing_syllables']['initials']:explode(',',$report['report_a']['sp']['existing_syllables']['initials']))): ?>checked<?php endif; ?>>
                        <label for="initials-checkbox-<?php echo $key; ?>"><?php echo $vo['name']; ?></label>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </td>
                <td colspan="5">
                    <div class="checkbox">
                        <?php if(is_array($finals) || $finals instanceof \think\Collection || $finals instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($finals) ? array_slice($finals,5,3, true) : $finals->slice(5,3, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <input id="finals-checkbox-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="finals[can][]" value="<?php echo $vo['name']; ?>" <?php if(in_array(($vo['name']), is_array($report['report_a']['sp']['existing_syllables']['finals'])?$report['report_a']['sp']['existing_syllables']['finals']:explode(',',$report['report_a']['sp']['existing_syllables']['finals']))): ?>checked<?php endif; ?>>
                        <label for="finals-checkbox-<?php echo $key; ?>"><?php echo $vo['name']; ?></label>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="5"">
                    <div class="checkbox">
                        <?php if(is_array($initials) || $initials instanceof \think\Collection || $initials instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($initials) ? array_slice($initials,8,7, true) : $initials->slice(8,7, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <input id="initials-checkbox-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="initials[can][]" value="<?php echo $vo['name']; ?>" <?php if(in_array(($vo['name']), is_array($report['report_a']['sp']['existing_syllables']['initials'])?$report['report_a']['sp']['existing_syllables']['initials']:explode(',',$report['report_a']['sp']['existing_syllables']['initials']))): ?>checked<?php endif; ?>>
                        <label for="initials-checkbox-<?php echo $key; ?>"><?php echo $vo['name']; ?></label>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </td>
                <td colspan="5">
                    <div class="checkbox">
                        <?php if(is_array($finals) || $finals instanceof \think\Collection || $finals instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($finals) ? array_slice($finals,8,3, true) : $finals->slice(8,3, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <input id="finals-checkbox-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="finals[can][]" value="<?php echo $vo['name']; ?>" <?php if(in_array(($vo['name']), is_array($report['report_a']['sp']['existing_syllables']['finals'])?$report['report_a']['sp']['existing_syllables']['finals']:explode(',',$report['report_a']['sp']['existing_syllables']['finals']))): ?>checked<?php endif; ?>>
                        <label for="finals-checkbox-<?php echo $key; ?>"><?php echo $vo['name']; ?></label>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <div class="checkbox">
                        <?php if(is_array($initials) || $initials instanceof \think\Collection || $initials instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($initials) ? array_slice($initials,15,3, true) : $initials->slice(15,3, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <input id="initials-checkbox-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="initials[can][]" value="<?php echo $vo['name']; ?>" <?php if(in_array(($vo['name']), is_array($report['report_a']['sp']['existing_syllables']['initials'])?$report['report_a']['sp']['existing_syllables']['initials']:explode(',',$report['report_a']['sp']['existing_syllables']['initials']))): ?>checked<?php endif; ?>>
                        <label for="initials-checkbox-<?php echo $key; ?>"><?php echo $vo['name']; ?></label>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </td>
                <td colspan="5">
                    <div class="checkbox">
                        <?php if(is_array($finals) || $finals instanceof \think\Collection || $finals instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($finals) ? array_slice($finals,11,5, true) : $finals->slice(11,5, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <input id="finals-checkbox-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="finals[can][]" value="<?php echo $vo['name']; ?>" <?php if(in_array(($vo['name']), is_array($report['report_a']['sp']['existing_syllables']['finals'])?$report['report_a']['sp']['existing_syllables']['finals']:explode(',',$report['report_a']['sp']['existing_syllables']['finals']))): ?>checked<?php endif; ?>>
                        <label for="finals-checkbox-<?php echo $key; ?>"><?php echo $vo['name']; ?></label>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <div class="checkbox">
                        <?php if(is_array($initials) || $initials instanceof \think\Collection || $initials instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($initials) ? array_slice($initials,18,3, true) : $initials->slice(18,3, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <input id="initials-checkbox-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="initials[can][]" value="<?php echo $vo['name']; ?>" <?php if(in_array(($vo['name']), is_array($report['report_a']['sp']['existing_syllables']['initials'])?$report['report_a']['sp']['existing_syllables']['initials']:explode(',',$report['report_a']['sp']['existing_syllables']['initials']))): ?>checked<?php endif; ?>>
                        <label for="initials-checkbox-<?php echo $key; ?>"><?php echo $vo['name']; ?></label>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </td>
                <td colspan="5">
                    <div class="checkbox">
                        <?php if(is_array($finals) || $finals instanceof \think\Collection || $finals instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($finals) ? array_slice($finals,16,4, true) : $finals->slice(16,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <input id="finals-checkbox-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="finals[can][]" value="<?php echo $vo['name']; ?>" <?php if(in_array(($vo['name']), is_array($report['report_a']['sp']['existing_syllables']['finals'])?$report['report_a']['sp']['existing_syllables']['finals']:explode(',',$report['report_a']['sp']['existing_syllables']['finals']))): ?>checked<?php endif; ?>>
                        <label for="finals-checkbox-<?php echo $key; ?>"><?php echo $vo['name']; ?></label>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        
                    </div>
                </td>
            </tr>
            
            <tr>
                <td rowspan="6" colspan="2" class="text-center" style="vertical-align: middle">发音清晰度检测不清晰、不能发</td>
                <td colspan="5">声母</td>
                <td colspan="5">韵母</td>
            </tr>
            <tr>
                <td colspan="5">
                    <div class="checkbox">
                        <?php if(is_array($initials) || $initials instanceof \think\Collection || $initials instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($initials) ? array_slice($initials,0,4, true) : $initials->slice(0,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <input id="initials-checkbox1-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="initials[cannot][]" value="<?php echo $vo['name']; ?>" <?php if(in_array(($vo['name']), is_array($report['report_a']['sp']['not_clear_syllables']['initials'])?$report['report_a']['sp']['not_clear_syllables']['initials']:explode(',',$report['report_a']['sp']['not_clear_syllables']['initials']))): ?>checked<?php endif; ?>>
                        <label for="initials-checkbox1-<?php echo $key; ?>"><?php echo $vo['name']; ?></label>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </td>
                <td colspan="5">
                    <div class="checkbox">
                        <?php if(is_array($finals) || $finals instanceof \think\Collection || $finals instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($finals) ? array_slice($finals,0,5, true) : $finals->slice(0,5, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <input id="finals-checkbox1-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="finals[cannot][]" value="<?php echo $vo['name']; ?>" <?php if(in_array(($vo['name']), is_array($report['report_a']['sp']['not_clear_syllables']['finals'])?$report['report_a']['sp']['not_clear_syllables']['finals']:explode(',',$report['report_a']['sp']['not_clear_syllables']['finals']))): ?>checked<?php endif; ?>>
                        <label for="finals-checkbox1-<?php echo $key; ?>"><?php echo $vo['name']; ?></label>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <div class="checkbox">
                        <?php if(is_array($initials) || $initials instanceof \think\Collection || $initials instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($initials) ? array_slice($initials,4,4, true) : $initials->slice(4,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <input id="initials-checkbox1-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="initials[cannot][]" value="<?php echo $vo['name']; ?>" <?php if(in_array(($vo['name']), is_array($report['report_a']['sp']['not_clear_syllables']['initials'])?$report['report_a']['sp']['not_clear_syllables']['initials']:explode(',',$report['report_a']['sp']['not_clear_syllables']['initials']))): ?>checked<?php endif; ?>>
                        <label for="initials-checkbox1-<?php echo $key; ?>"><?php echo $vo['name']; ?></label>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </td>
                <td colspan="5">
                    <div class="checkbox">
                        <?php if(is_array($finals) || $finals instanceof \think\Collection || $finals instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($finals) ? array_slice($finals,5,3, true) : $finals->slice(5,3, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <input id="finals-checkbox1-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="finals[cannot][]" value="<?php echo $vo['name']; ?>" <?php if(in_array(($vo['name']), is_array($report['report_a']['sp']['not_clear_syllables']['finals'])?$report['report_a']['sp']['not_clear_syllables']['finals']:explode(',',$report['report_a']['sp']['not_clear_syllables']['finals']))): ?>checked<?php endif; ?>>
                        <label for="finals-checkbox1-<?php echo $key; ?>"><?php echo $vo['name']; ?></label>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="5"">
                    <div class="checkbox">
                        <?php if(is_array($initials) || $initials instanceof \think\Collection || $initials instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($initials) ? array_slice($initials,8,7, true) : $initials->slice(8,7, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <input id="initials-checkbox1-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="initials[cannot][]" value="<?php echo $vo['name']; ?>" <?php if(in_array(($vo['name']), is_array($report['report_a']['sp']['not_clear_syllables']['initials'])?$report['report_a']['sp']['not_clear_syllables']['initials']:explode(',',$report['report_a']['sp']['not_clear_syllables']['initials']))): ?>checked<?php endif; ?>>
                        <label for="initials-checkbox1-<?php echo $key; ?>"><?php echo $vo['name']; ?></label>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </td>
                <td colspan="5">
                    <div class="checkbox">
                        <?php if(is_array($finals) || $finals instanceof \think\Collection || $finals instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($finals) ? array_slice($finals,8,3, true) : $finals->slice(8,3, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <input id="finals-checkbox1-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="finals[cannot][]" value="<?php echo $vo['name']; ?>" <?php if(in_array(($vo['name']), is_array($report['report_a']['sp']['not_clear_syllables']['finals'])?$report['report_a']['sp']['not_clear_syllables']['finals']:explode(',',$report['report_a']['sp']['not_clear_syllables']['finals']))): ?>checked<?php endif; ?>>
                        <label for="finals-checkbox1-<?php echo $key; ?>"><?php echo $vo['name']; ?></label>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <div class="checkbox">
                        <?php if(is_array($initials) || $initials instanceof \think\Collection || $initials instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($initials) ? array_slice($initials,15,3, true) : $initials->slice(15,3, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <input id="initials-checkbox1-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="initials[cannot][]" value="<?php echo $vo['name']; ?>" <?php if(in_array(($vo['name']), is_array($report['report_a']['sp']['not_clear_syllables']['initials'])?$report['report_a']['sp']['not_clear_syllables']['initials']:explode(',',$report['report_a']['sp']['not_clear_syllables']['initials']))): ?>checked<?php endif; ?>>
                        <label for="initials-checkbox1-<?php echo $key; ?>"><?php echo $vo['name']; ?></label>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </td>
                <td colspan="5">
                    <div class="checkbox">
                        <?php if(is_array($finals) || $finals instanceof \think\Collection || $finals instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($finals) ? array_slice($finals,11,5, true) : $finals->slice(11,5, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <input id="finals-checkbox1-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="finals[cannot][]" value="<?php echo $vo['name']; ?>" <?php if(in_array(($vo['name']), is_array($report['report_a']['sp']['not_clear_syllables']['finals'])?$report['report_a']['sp']['not_clear_syllables']['finals']:explode(',',$report['report_a']['sp']['not_clear_syllables']['finals']))): ?>checked<?php endif; ?>>
                        <label for="finals-checkbox1-<?php echo $key; ?>"><?php echo $vo['name']; ?></label>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <div class="checkbox">
                        <?php if(is_array($initials) || $initials instanceof \think\Collection || $initials instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($initials) ? array_slice($initials,18,3, true) : $initials->slice(18,3, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <input id="initials-checkbox1-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="initials[cannot][]" value="<?php echo $vo['name']; ?>" <?php if(in_array(($vo['name']), is_array($report['report_a']['sp']['not_clear_syllables']['initials'])?$report['report_a']['sp']['not_clear_syllables']['initials']:explode(',',$report['report_a']['sp']['not_clear_syllables']['initials']))): ?>checked<?php endif; ?>>
                        <label for="initials-checkbox1-<?php echo $key; ?>"><?php echo $vo['name']; ?></label>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </td>
                <td colspan="5">
                    <div class="checkbox">
                        <?php if(is_array($finals) || $finals instanceof \think\Collection || $finals instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($finals) ? array_slice($finals,16,4, true) : $finals->slice(16,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <input id="finals-checkbox1-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="finals[cannot][]" value="<?php echo $vo['name']; ?>" <?php if(in_array(($vo['name']), is_array($report['report_a']['sp']['not_clear_syllables']['finals'])?$report['report_a']['sp']['not_clear_syllables']['finals']:explode(',',$report['report_a']['sp']['not_clear_syllables']['finals']))): ?>checked<?php endif; ?>>
                        <label for="finals-checkbox1-<?php echo $key; ?>"><?php echo $vo['name']; ?></label>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        
                    </div>
                </td>
            </tr>
            
            <tr>
                <td colspan="2" class="text-center">能发的叠音和词组</td>
                <td colspan="10" >
                    <textarea class="form-control" name="sp_content"><?php echo $report['report_a']['sp']['content']; ?></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="text-center">口鼻分离麦克风测试</td>
                <td colspan="10">
                    <div class="form-group">
                        <label class="col-sm-1 control-label">声线</label>
                        <div class="col-sm-2">
                            <input type="text" name="sp_voice" class="form-control" value="<?php echo $report['report_a']['sp']['nasality']['voice']; ?>">
                        </div>
                        <label class="col-sm-1 control-label">声调</label>
                        <div class="col-sm-2">
                            <input type="text" name="sp_tone" class="form-control" value="<?php echo $report['report_a']['sp']['nasality']['tone']; ?>">
                        </div>
                        <label class="col-sm-1 control-label">音量</label>
                        <div class="col-sm-2">
                            <input type="text" name="sp_volume" class="form-control" value="<?php echo $report['report_a']['sp']['nasality']['volume']; ?>">
                        </div>
                        <label class="col-sm-1 control-label">鼻音测试</label>
                        <div class="col-sm-2">
                            <input type="text" name="sp_nasality" class="form-control" value="<?php echo $report['report_a']['sp']['nasality']['nasality']; ?>">
                        </div>
                    </div>
                </td>
            </tr>

            
        </tbody>
    </table>
    <p class="text-semibold text-main pad-all mar-no">口肌发音评估小结-Summary of OMP Evaluation</p>
    <table class="table table-bordered">
        <tbody>

            <tr>
                <td colspan="12">
                    <textarea name="content" class="form-control" rows="6"><?php echo $report['report_a']['content']; ?></textarea>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="panel-footer">
        <div class="row">
            <div class="col-sm-7 col-sm-offset-1">
                <input type="hidden" name="version" value="1">
                <button class="btn btn-mint" type="submit">保存</button>
            </div>
        </div>
    </div>
</form>
                                <?php else: ?>
                                    <div class="row">
                                        <div class="col-sm-12">
                                        <p class="text-center">该学员暂无评估记录</p>
                                        <button data-target="#report-a-modal" data-toggle="modal" class="btn btn-block btn-primary">新增</button>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="report-a-modal" role="dialog" tabindex="-1" aria-labelledby="report-a-modal" aria-hidden="true">
    <div class="modal-dialog" style="width: 1000px;">
        <div class="modal-content">

            <!--Modal header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                <h4 class="modal-title">新增口肌发音评估报告</h4>
            </div>

            <!--Modal body-->
            <form class="form-horizontal" action="<?php echo url('admin/report/updateReportA',['id'=>$report['id']]); ?>" method="post" id="report-a-form">
            <div class="modal-body">
                <p class="text-semibold text-main pad-all mar-no">口肌及喂吃-OM</p>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td colspan="2" class="col-lg-2 text-center" >01 口腔敏感度（Oral Sensitivity）</td>
                            <td colspan="10" class="col-lg-10"><div class="checkbox">
                                    <!-- Inline Checkboxes -->
                                    <input id="oral-checkbox-1" class="magic-checkbox" type="checkbox" name="sensitivity[]" value="1">
                                    <label for="oral-checkbox-1">高敏感</label>
                                    <input id="oral-checkbox-2" class="magic-checkbox" type="checkbox" name="sensitivity[]" value="2">
                                    <label for="oral-checkbox-2">低敏感</label>
                                    <input id="oral-checkbox-3" class="magic-checkbox" type="checkbox" name="sensitivity[]" value="3">
                                    <label for="oral-checkbox-3">混合</label>
                                    <input id="oral-checkbox-4" class="magic-checkbox" type="checkbox" name="sensitivity[]" value="4">
                                    <label for="oral-checkbox-4">波动</label>
                                    <input id="oral-checkbox-5" class="magic-checkbox" type="checkbox" name="sensitivity[]" value="5">
                                    <label for="oral-checkbox-5">防御</label>
                                    <input id="oral-checkbox-6" class="magic-checkbox" type="checkbox" name="sensitivity[]" value="6">
                                    <label for="oral-checkbox-6">正常</label>
                                </div></td>
                        </tr>
                        <tr>
                            <td colspan="2" rowspan="6"  class="text-center">02 喂吃（Feeding）</td>
                            <td colspan="2" width="15%">勺子喂吃（Purees）</td>
                            <td colspan="8">
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">侧面</label>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="purees_side"><option></option><option value="1">√</option><option value="2">√×</option><option value="0">×</option></select>
                                    </div>
                                    <label class="col-sm-1 control-label">正面</label>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="purees_front"><option></option><option value="1">√</option><option value="2">√×</option><option value="0">×</option></select>
                                    </div>
                                    <label class="col-sm-1 control-label">啜饮</label>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="purees_slurping"><option></option><option value="1">√</option><option value="2">√×</option><option value="0">×</option></select>
                                    </div>
                                    <div class="checkbox col-sm-3">
                                        <input id="purees-checkbox-1" class="magic-checkbox" type="checkbox" name="purees_unable" value="1">
                                        <label for="purees-checkbox-1">不可以</label>
                                    </div>
                                </div>
                                
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">饼干（Slow Feed）</td>
                            <td colspan="8">
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">左边</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" name="slow_feed[left]">
                                    </div>
                                    <label class="col-sm-1 control-label">右边</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" name="slow_feed[right]">
                                    </div>
                                    <div class="checkbox col-sm-3">
                                        <input id="slow-feed-checkbox-1" class="magic-checkbox" type="checkbox" name="slow_feed_unable" value="1">
                                        <label for="slow-feed-checkbox-1">不可以</label>
                                    </div>
                                </div>
                                
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" rowspan="3">水/果汁（Straw Drinking）</td>
                            <td colspan="8">
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">奶瓶</label>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="milk_bottle"><option></option><option value="1">√</option><option value="2">√×</option><option value="0">×</option></select>
                                    </div>
                                    <label class="col-sm-1 control-label">母乳</label>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="breast_feeding"><option></option><option value="1">√</option><option value="2">√×</option><option value="0">×</option></select>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="8">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">小熊瓶</label>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="bear_bottle"><option></option><option value="1">√</option><option value="2">√×</option><option value="0">×</option></select>
                                    </div>
                                    <label class="col-sm-1 control-label">吸管</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="straw_num" class="form-control">
                                    </div>
                                    <div class="checkbox col-sm-3">
                                        <input id="straw-checkbox-1" class="magic-checkbox" type="checkbox" name="straw_unable" value="1">
                                        <label for="straw-checkbox-1">不可以</label>
                                    </div>
                                </div>
                                
                            </td>
                        </tr>
                        <tr>
                            <td colspan="8">
                                <label class="col-sm-2 control-label">剪口杯</label>
                                <div class="radio">
                                    <!-- Inline radio buttons -->
                                    <input id="cup-drinking" class="magic-radio" type="radio" name="cup_drinking" value="1">
                                    <label for="cup-drinking">可以</label>
                                    <input id="cup-drinking1" class="magic-radio" type="radio" name="cup_drinking" value="0">
                                    <label for="cup-drinking1" >不可以</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">酸奶（Thickened Liquids）</td>
                            <td colspan="8">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">吸管</label>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="liquids_straw"><option></option><option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option><option value="0">不可以</option></select>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" rowspan="2" class="text-center">03 气息（Airflow）</td>
                            <td colspan="2">泡泡（Bubble）</td>
                            <td colspan="8">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">层次</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="bubble_step" class="form-control">
                                    </div>
                                    <label class="col-sm-2 control-label">次数</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="bubble_times" class="form-control">
                                    </div>
                                    <div class="checkbox col-sm-3">
                                        <input id="bubble-checkbox-1" class="magic-checkbox" type="checkbox" name="bubble_unable" value="1">
                                        <label for="bubble-checkbox-1">不可以</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">笛子（Horn）</td>
                            <td colspan="8">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">笛子（号）</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="horn_num" class="form-control">
                                    </div>
                                    <label class="col-sm-2 control-label">次数</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="horn_times" class="form-control">
                                    </div>
                                    <div class="checkbox col-sm-3">
                                        <input id="horn-checkbox-1" class="magic-checkbox" type="checkbox" name="horn_unable" value="1">
                                        <label for="horn-checkbox-1">不可以</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" rowspan="6" class="text-center">04 下颚稳定性（Jaw Stability）</td>
                            <td colspan="8">
                                <div class="form-group">
                                    
                                    <label class="col-sm-2 control-label">手指套</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="finger_sleeve" class="form-control">
                                    </div>
                                    <label class="col-sm-3 control-label">牙胶振动棒</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="z_vibe" class="form-control">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="8">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">1#咬牙胶</label>
                                    <label class="col-sm-1 control-label">左</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="chewy_tube[1][left]" class="form-control">
                                    </div>
                                    <label class="col-sm-1 control-label">右</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="chewy_tube[1][right]" class="form-control">
                                    </div>
                                    <label class="col-sm-1 control-label">双咬</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="chewy_tube[1][both]" class="form-control">
                                    </div>
                                    
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="8">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">2#咬牙胶</label>
                                    <label class="col-sm-1 control-label">左</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="chewy_tube[2][left]" class="form-control">
                                    </div>
                                    <label class="col-sm-1 control-label">右</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="chewy_tube[2][right]" class="form-control">
                                    </div>
                                    <label class="col-sm-1 control-label">双咬</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="chewy_tube[2][both]" class="form-control">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="8">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">3#咬牙胶</label>
                                    <label class="col-sm-1 control-label">左</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="chewy_tube[3][left]" class="form-control">
                                    </div>
                                    <label class="col-sm-1 control-label">右</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="chewy_tube[3][right]" class="form-control">
                                    </div>
                                    <label class="col-sm-1 control-label">双咬</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="chewy_tube[3][both]" class="form-control">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="8">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">4#咬牙胶</label>
                                    <label class="col-sm-1 control-label">左</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="chewy_tube[4][left]" class="form-control">
                                    </div>
                                    <label class="col-sm-1 control-label">右</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="chewy_tube[4][right]" class="form-control">
                                    </div>
                                    <label class="col-sm-1 control-label">双咬</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="chewy_tube[4][both]" class="form-control">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="8">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">5#咬牙胶</label>
                                    <label class="col-sm-1 control-label">左</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="chewy_tube[5][left]" class="form-control">
                                    </div>
                                    <label class="col-sm-1 control-label">右</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="chewy_tube[5][right]" class="form-control">
                                    </div>
                                    <label class="col-sm-1 control-label">双咬</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="chewy_tube[5][both]" class="form-control">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" rowspan="4" class="text-center">05 唇（Lips）</td>
                            <td colspan="4" width="30%">
                                <div class="radio">
                                    <input id="lips-radio-1" class="magic-radio" type="radio" name="lips_radio" value="2">
                                    <label for="lips-radio-1">好</label>
                                    <input id="lips-radio-2" class="magic-radio" type="radio" name="lips_radio" value="1">
                                    <label for="lips-radio-2">一般</label>
                                    <input id="lips-radio-3" class="magic-radio" type="radio" name="lips_radio" value="0">
                                    <label for="lips-radio-3">不好</label>
                                </div>
                            </td>
                            <td colspan="4">
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">合唇</label>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="lips[closure]"><option></option><option value="1">√</option><option value="2">√×</option><option value="0">×</option></select>
                                    </div>
                                    <label class="col-sm-1 control-label">展唇</label>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="lips[stretch]"><option></option><option value="1">√</option><option value="2">√×</option><option value="0">×</option></select>
                                    </div>
                                    <label class="col-sm-1 control-label">圆唇</label>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="lips[round]"><option></option><option value="1">√</option><option value="2">√×</option><option value="0">×</option></select>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="8">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">合唇用压舌棒</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="lips_closure" class="form-control">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="8">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">纽扣拉力训练器</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="lips_button_pull" class="form-control">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="8">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">脆骨下唇回缩练习</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="lips_retraction" class="form-control">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" rowspan="5" class="text-center">06 舌灵活性（Tongue Flexibility）</td>
                            <td colspan="8" rowspan="2">
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">前伸</label>
                                    <div class="col-sm-1">
                                        <select class="form-control" name="tongue_protrusion"><option></option><option value="1">√</option><option value="2">√×</option><option value="0">×</option></select>
                                    </div>
                                    <label class="col-sm-1 control-label">回缩</label>
                                    <div class="col-sm-1">
                                        <select class="form-control" name="tongue_retraction"><option></option><option value="1">√</option><option value="2">√×</option><option value="0">×</option></select>
                                    </div>
                                    <label class="col-sm-1 control-label">左</label>
                                    <div class="col-sm-1">
                                        <select class="form-control" name="tongue_left"><option></option><option value="1">√</option><option value="2">√×</option><option value="0">×</option></select>
                                    </div>
                                    <label class="col-sm-1 control-label">右</label>
                                    <div class="col-sm-1">
                                        <select class="form-control" name="tongue_right"><option></option><option value="1">√</option><option value="2">√×</option><option value="0">×</option></select>
                                    </div>
                                    <label class="col-sm-1 control-label">上</label>
                                    <div class="col-sm-1">
                                        <select class="form-control" name="tongue_elevation"><option></option><option value="1">√</option><option value="2">√×</option><option value="0">×</option></select>
                                    </div>
                                    <label class="col-sm-1 control-label">下</label>
                                    <div class="col-sm-1">
                                        <select class="form-control" name="tongue_depression"><option></option><option value="1">√</option><option value="2">√×</option><option value="0">×</option></select>
                                    </div>

                                </div>
                            </td>
                        </tr>
                        <tr></tr>
                        <tr>
                            <td colspan="8">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">前伸/回缩舌尖训练器（月牙形）</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="tongue_a" class="form-control">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="8">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">舌尖两侧转移训练</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="tongue_b" class="form-control">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="8">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">舌尖提升/下压训练</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="tongue_c" class="form-control">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-center">07 吞咽（Swallowing）</td>
                            <td colspan="8">
                                <div class="radio">
                                    <!-- Inline radio buttons -->
                                    <input id="swallowing-radio" class="magic-radio" type="radio" name="swallowing" value="2">
                                    <label for="swallowing-radio">好</label>
                                    <input id="swallowing-radio1" class="magic-radio" type="radio" name="swallowing" value="1">
                                    <label for="swallowing-radio1">一般</label>
                                    <input id="swallowing-radio2" class="magic-radio" type="radio" name="swallowing" value="0">
                                    <label for="swallowing-radio2">不好</label>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p class="text-semibold text-main pad-all mar-no">发音测试-SP</p>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td rowspan="6" colspan="2" class="text-center" style="vertical-align: middle">检测能发哪些音</td>
                            <td colspan="5">声母</td>
                            <td colspan="5">韵母</td>
                        </tr>
                        <tr>
                            <td colspan="5">
                                <div class="checkbox">
                                    <?php if(is_array($initials) || $initials instanceof \think\Collection || $initials instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($initials) ? array_slice($initials,0,4, true) : $initials->slice(0,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <input id="initials-checkbox-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="initials[can][]" value="<?php echo $vo['name']; ?>">
                                    <label for="initials-checkbox-<?php echo $key; ?>"><?php echo $vo['name']; ?></label>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </td>
                            <td colspan="5">
                                <div class="checkbox">
                                    <?php if(is_array($finals) || $finals instanceof \think\Collection || $finals instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($finals) ? array_slice($finals,0,5, true) : $finals->slice(0,5, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <input id="finals-checkbox-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="finals[can][]" value="<?php echo $vo['name']; ?>">
                                    <label for="finals-checkbox-<?php echo $key; ?>"><?php echo $vo['name']; ?></label>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                    
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5">
                                <div class="checkbox">
                                    <?php if(is_array($initials) || $initials instanceof \think\Collection || $initials instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($initials) ? array_slice($initials,4,4, true) : $initials->slice(4,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <input id="initials-checkbox-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="initials[can][]" value="<?php echo $vo['name']; ?>">
                                    <label for="initials-checkbox-<?php echo $key; ?>"><?php echo $vo['name']; ?></label>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </td>
                            <td colspan="5">
                                <div class="checkbox">
                                    <?php if(is_array($finals) || $finals instanceof \think\Collection || $finals instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($finals) ? array_slice($finals,5,3, true) : $finals->slice(5,3, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <input id="finals-checkbox-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="finals[can][]" value="<?php echo $vo['name']; ?>">
                                    <label for="finals-checkbox-<?php echo $key; ?>"><?php echo $vo['name']; ?></label>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                    
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5"">
                                <div class="checkbox">
                                    <?php if(is_array($initials) || $initials instanceof \think\Collection || $initials instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($initials) ? array_slice($initials,8,7, true) : $initials->slice(8,7, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <input id="initials-checkbox-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="initials[can][]" value="<?php echo $vo['name']; ?>">
                                    <label for="initials-checkbox-<?php echo $key; ?>"><?php echo $vo['name']; ?></label>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </td>
                            <td colspan="5">
                                <div class="checkbox">
                                    <?php if(is_array($finals) || $finals instanceof \think\Collection || $finals instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($finals) ? array_slice($finals,8,3, true) : $finals->slice(8,3, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <input id="finals-checkbox-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="finals[can][]" value="<?php echo $vo['name']; ?>">
                                    <label for="finals-checkbox-<?php echo $key; ?>"><?php echo $vo['name']; ?></label>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                    
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5">
                                <div class="checkbox">
                                    <?php if(is_array($initials) || $initials instanceof \think\Collection || $initials instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($initials) ? array_slice($initials,15,3, true) : $initials->slice(15,3, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <input id="initials-checkbox-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="initials[can][]" value="<?php echo $vo['name']; ?>">
                                    <label for="initials-checkbox-<?php echo $key; ?>"><?php echo $vo['name']; ?></label>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </td>
                            <td colspan="5">
                                <div class="checkbox">
                                    <?php if(is_array($finals) || $finals instanceof \think\Collection || $finals instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($finals) ? array_slice($finals,11,5, true) : $finals->slice(11,5, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <input id="finals-checkbox-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="finals[can][]" value="<?php echo $vo['name']; ?>">
                                    <label for="finals-checkbox-<?php echo $key; ?>"><?php echo $vo['name']; ?></label>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                    
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5">
                                <div class="checkbox">
                                    <?php if(is_array($initials) || $initials instanceof \think\Collection || $initials instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($initials) ? array_slice($initials,18,3, true) : $initials->slice(18,3, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <input id="initials-checkbox-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="initials[can][]" value="<?php echo $vo['name']; ?>">
                                    <label for="initials-checkbox-<?php echo $key; ?>"><?php echo $vo['name']; ?></label>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </td>
                            <td colspan="5">
                                <div class="checkbox">
                                    <?php if(is_array($finals) || $finals instanceof \think\Collection || $finals instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($finals) ? array_slice($finals,16,4, true) : $finals->slice(16,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <input id="finals-checkbox-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="finals[can][]" value="<?php echo $vo['name']; ?>">
                                    <label for="finals-checkbox-<?php echo $key; ?>"><?php echo $vo['name']; ?></label>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                    
                                </div>
                            </td>
                        </tr>
                        
                        <tr>
                            <td rowspan="6" colspan="2" class="text-center" style="vertical-align: middle">发音清晰度检测不清晰、不能发</td>
                            <td colspan="5">声母</td>
                            <td colspan="5">韵母</td>
                        </tr>
                        <tr>
                            <td colspan="5">
                                <div class="checkbox">
                                    <?php if(is_array($initials) || $initials instanceof \think\Collection || $initials instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($initials) ? array_slice($initials,0,4, true) : $initials->slice(0,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <input id="initials-checkbox1-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="initials[cannot][]" value="<?php echo $vo['name']; ?>">
                                    <label for="initials-checkbox1-<?php echo $key; ?>"><?php echo $vo['name']; ?></label>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </td>
                            <td colspan="5">
                                <div class="checkbox">
                                    <?php if(is_array($finals) || $finals instanceof \think\Collection || $finals instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($finals) ? array_slice($finals,0,5, true) : $finals->slice(0,5, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <input id="finals-checkbox1-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="finals[cannot][]" value="<?php echo $vo['name']; ?>">
                                    <label for="finals-checkbox1-<?php echo $key; ?>"><?php echo $vo['name']; ?></label>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                    
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5">
                                <div class="checkbox">
                                    <?php if(is_array($initials) || $initials instanceof \think\Collection || $initials instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($initials) ? array_slice($initials,4,4, true) : $initials->slice(4,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <input id="initials-checkbox1-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="initials[cannot][]" value="<?php echo $vo['name']; ?>">
                                    <label for="initials-checkbox1-<?php echo $key; ?>"><?php echo $vo['name']; ?></label>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </td>
                            <td colspan="5">
                                <div class="checkbox">
                                    <?php if(is_array($finals) || $finals instanceof \think\Collection || $finals instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($finals) ? array_slice($finals,5,3, true) : $finals->slice(5,3, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <input id="finals-checkbox1-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="finals[cannot][]" value="<?php echo $vo['name']; ?>">
                                    <label for="finals-checkbox1-<?php echo $key; ?>"><?php echo $vo['name']; ?></label>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                    
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5"">
                                <div class="checkbox">
                                    <?php if(is_array($initials) || $initials instanceof \think\Collection || $initials instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($initials) ? array_slice($initials,8,7, true) : $initials->slice(8,7, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <input id="initials-checkbox1-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="initials[cannot][]" value="<?php echo $vo['name']; ?>">
                                    <label for="initials-checkbox1-<?php echo $key; ?>"><?php echo $vo['name']; ?></label>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </td>
                            <td colspan="5">
                                <div class="checkbox">
                                    <?php if(is_array($finals) || $finals instanceof \think\Collection || $finals instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($finals) ? array_slice($finals,8,3, true) : $finals->slice(8,3, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <input id="finals-checkbox1-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="finals[cannot][]" value="<?php echo $vo['name']; ?>">
                                    <label for="finals-checkbox1-<?php echo $key; ?>"><?php echo $vo['name']; ?></label>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                    
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5">
                                <div class="checkbox">
                                    <?php if(is_array($initials) || $initials instanceof \think\Collection || $initials instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($initials) ? array_slice($initials,15,3, true) : $initials->slice(15,3, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <input id="initials-checkbox1-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="initials[cannot][]" value="<?php echo $vo['name']; ?>">
                                    <label for="initials-checkbox1-<?php echo $key; ?>"><?php echo $vo['name']; ?></label>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </td>
                            <td colspan="5">
                                <div class="checkbox">
                                    <?php if(is_array($finals) || $finals instanceof \think\Collection || $finals instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($finals) ? array_slice($finals,11,5, true) : $finals->slice(11,5, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <input id="finals-checkbox1-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="finals[cannot][]" value="<?php echo $vo['name']; ?>">
                                    <label for="finals-checkbox1-<?php echo $key; ?>"><?php echo $vo['name']; ?></label>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                    
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5">
                                <div class="checkbox">
                                    <?php if(is_array($initials) || $initials instanceof \think\Collection || $initials instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($initials) ? array_slice($initials,18,3, true) : $initials->slice(18,3, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <input id="initials-checkbox1-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="initials[cannot][]" value="<?php echo $vo['name']; ?>">
                                    <label for="initials-checkbox1-<?php echo $key; ?>"><?php echo $vo['name']; ?></label>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </td>
                            <td colspan="5">
                                <div class="checkbox">
                                    <?php if(is_array($finals) || $finals instanceof \think\Collection || $finals instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($finals) ? array_slice($finals,16,4, true) : $finals->slice(16,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <input id="finals-checkbox1-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="finals[cannot][]" value="<?php echo $vo['name']; ?>">
                                    <label for="finals-checkbox1-<?php echo $key; ?>"><?php echo $vo['name']; ?></label>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                    
                                </div>
                            </td>
                        </tr>
                        
                        <tr>
                            <td colspan="2" class="text-center">能发的叠音和词组</td>
                            <td colspan="10" >
                                <textarea class="form-control" name="sp_content"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-center">口鼻分离麦克风测试</td>
                            <td colspan="10">
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">声线</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="sp_voice" class="form-control">
                                    </div>
                                    <label class="col-sm-1 control-label">声调</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="sp_tone" class="form-control">
                                    </div>
                                    <label class="col-sm-1 control-label">音量</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="sp_volume" class="form-control">
                                    </div>
                                    <label class="col-sm-1 control-label">鼻音测试</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="sp_nasality" class="form-control">
                                    </div>
                                </div>
                            </td>
                        </tr>

                        
                    </tbody>
                </table>
                <p class="text-semibold text-main pad-all mar-no">口肌发音评估小结-Summary of OMP Evaluation</p>
                <table class="table table-bordered">
                    <tbody>

                        <tr>
                            <td colspan="12">
                                <textarea name="content" class="form-control" rows="6"></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!--Modal footer-->
            <div class="modal-footer">
                <input type="hidden" name="version" value="1">
                <button data-dismiss="modal" class="btn btn-default" type="button">关闭</button>
                <button class="btn btn-primary" type="submit">保存</button>
            </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    
</script>
                                <?php endif; ?>
                            </div>
                            <div class="tab-pane fade" id="tab-3">
                                <?php if(!(empty($report['report_b']) || (($report['report_b'] instanceof \think\Collection || $report['report_b'] instanceof \think\Paginator ) && $report['report_b']->isEmpty()))): ?>
                                    <form class="form-horizontal" action="<?php echo url('admin/report/updateReportB',['id'=>$report['id']]); ?>" method="post" id="report-b-form">
    <p class="text-semibold text-main pad-all mar-no">基本反应</p>
    <table class="table table-bordered">
        <tr>
            <td class="text-center">听觉反应（Auditory）</td>
            <td>
                <?php if(is_array($auditory) || $auditory instanceof \think\Collection || $auditory instanceof \think\Paginator): $i = 0; $__LIST__ = $auditory;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <div class="form-group" style="margin-left: 15px;"> 
                        <div class="col-sm-1">
                            <select class="form-control" name="auditory[]"><option></option><option value="1" <?php if($report['report_b']['auditory'][$key] == '1'): ?>selected<?php endif; ?>>√</option><option value="2" <?php if($report['report_b']['auditory'][$key] == '2'): ?>selected<?php endif; ?>>√×</option><option value="0" <?php if($report['report_b']['auditory'][$key] == '0'): ?>selected<?php endif; ?>>×</option></select>
                        </div>
                        <label class="col-sm-10 control-label text-left"><?php echo $vo['cn_name']; ?>&nbsp;<?php echo $vo['en_name']; ?></label> 
                    </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </td>
        </tr>
        <tr>
            <td class="text-center">视觉反应（Visual）</td>
            <td>
                 
                <?php if(is_array($visual) || $visual instanceof \think\Collection || $visual instanceof \think\Paginator): $i = 0; $__LIST__ = $visual;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <div class="form-group" style="margin-left: 15px;"> 
                        <div class="col-sm-1">
                            <select class="form-control" name="visual[]"><option></option><option value="1" <?php if($report['report_b']['visual'][$key] == '1'): ?>selected<?php endif; ?>>√</option><option value="2" <?php if($report['report_b']['visual'][$key] == '2'): ?>selected<?php endif; ?>>√×</option><option value="0" <?php if($report['report_b']['visual'][$key] == '0'): ?>selected<?php endif; ?>>×</option></select>
                        </div>
                        <?php if($vo['id'] == '4'): ?>
                            <label class="col-sm-2 control-label"><?php echo $vo['cn_name']; ?>&nbsp;<?php echo $vo['en_name']; ?></label>
                            <label class="col-sm-2 control-label">左右&nbsp;Left/right</label>
                            <div class="col-sm-2">
                                <input class="form-control" name="visual_left" value="<?php echo $report['report_b']['visual_left']; ?>">
                            </div>
                            <label class="col-sm-2 control-label">上下&nbsp;Up/down</label>
                            <div class="col-sm-2">
                                <input class="form-control" name="visual_up" value="<?php echo $report['report_b']['visual_up']; ?>">
                            </div>
                            
                        <?php else: ?>
                            <label class="col-sm-10 control-label text-left"><?php echo $vo['cn_name']; ?>&nbsp;<?php echo $vo['en_name']; ?></label> 
                        <?php endif; ?>
                    </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                
            </td>
        </tr>
    </table>

    <table class="table table-bordered">
        
        <?php if(is_array($expressions) || $expressions instanceof \think\Collection || $expressions instanceof \think\Paginator): $ko = 0; $__LIST__ = $expressions;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($ko % 2 );++$ko;if(is_array($vo) || $vo instanceof \think\Collection || $vo instanceof \think\Paginator): $k = 0; $__LIST__ = $vo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;if(is_array($v) || $v instanceof \think\Collection || $v instanceof \think\Paginator): $kk = 0; $__LIST__ = $v;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($kk % 2 );++$kk;if(isset($vv['0']['cn_name'])): ?>
                        <tr>
                            <?php if(($k == 1) AND ($kk == 1)): ?>
                                <td colspan="1" <?php if($ko == '1'): ?>rowspan="17"<?php else: ?>rowspan="9"<?php endif; ?> width="8%"><?php echo $vo['en_name']; ?>&nbsp;<?php echo $vo['cn_name']; ?></td>
                            <?php endif; if($kk == '1'): ?>
                                <td colspan="2" <?php if($k == '6'): ?>rowspan="2<?php else: ?>rowspan="3"<?php endif; ?> width="10%"><?php echo $v['cn_name']; ?>&nbsp;<?php echo $v['en_name']; ?></td>
                            <?php endif; ?>
                            <td colspan="1"><?php echo strtoupper($key); ?></td>
                            <td colspan="8">
                                <div class="form-group">
                                    <?php if(is_array($vv) || $vv instanceof \think\Collection || $vv instanceof \think\Paginator): $i = 0; $__LIST__ = $vv;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vs): $mod = ($i % 2 );++$i;?>
                                        <label class="col-sm-1 control-label"><?php echo $vs['cn_name']; ?></label>
                                        <div class="col-sm-1">
                                            <select class="form-control" name="<?php echo $vs['field_name']; ?>"><option></option><option value="1" <?php if(isset($report['report_b'][$vs['field_name']])): if($report['report_b'][$vs['field_name']] == '1'): ?>selected<?php endif; endif; ?>>√</option><option value="2" <?php if(isset($report['report_b'][$vs['field_name']])): if($report['report_b'][$vs['field_name']] == '2'): ?>selected<?php endif; endif; ?>>√×</option><option value="0" <?php if(isset($report['report_b'][$vs['field_name']])): if($report['report_b'][$vs['field_name']] == '0'): ?>selected<?php endif; endif; ?>>×</option></select>
                                        </div>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </td>
                        </tr>
                    <?php endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
    </table>

    <p class="text-semibold text-main pad-all mar-no">语言理解表达能力评估小结</p>
    <table class="table table-bordered">
        <tbody>

            <tr>
                <td colspan="12">
                    <textarea name="content" class="form-control" rows="6"><?php if(isset($report['report_b']['content'])): ?><?php echo $report['report_b']['content']; endif; ?></textarea>
                </td>
            </tr>
        </tbody>
    </table>
                    
    <div class="panel-footer">
        <div class="row">
            <div class="col-sm-7 col-sm-offset-1">
                <input type="hidden" name="version" value="1">
                <button class="btn btn-mint" type="submit">保存</button>
            </div>
        </div>
    </div>
</form>
                                <?php else: ?>
                                    <div class="row">
                                        <div class="col-sm-12">
                                        <p class="text-center">该学员暂无评估记录</p>
                                        <button data-target="#report-b-modal" data-toggle="modal" class="btn btn-block btn-primary">新增</button>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="report-b-modal" role="dialog" tabindex="-1" aria-labelledby="report-b-modal" aria-hidden="true">
    <div class="modal-dialog" style="width: 1200px;">
        <div class="modal-content">

            <!--Modal header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                <h4 class="modal-title">新增语言理解表达能力评估报告</h4>
            </div>

            <!--Modal body-->
            <form class="form-horizontal" action="<?php echo url('admin/report/updateReportB',['id'=>$report['id']]); ?>" method="post" id="report-b-form">
            <div class="modal-body">
                <p class="text-semibold text-main pad-all mar-no">基本反应</p>
                <table class="table table-bordered">
                    <tr>
                        <td class="text-center">听觉反应（Auditory）</td>
                        <td>
                            <?php if(is_array($auditory) || $auditory instanceof \think\Collection || $auditory instanceof \think\Paginator): $i = 0; $__LIST__ = $auditory;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <div class="form-group" style="margin-left: 15px;"> 
                                    <div class="col-sm-1">
                                        <select class="form-control" name="auditory[]"><option></option><option value="1">√</option><option value="2">√×</option><option value="0">×</option></select>
                                    </div>
                                    <label class="col-sm-10 control-label text-left"><?php echo $vo['cn_name']; ?>&nbsp;<?php echo $vo['en_name']; ?></label> 
                                </div>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">视觉反应（Visual）</td>
                        <td>
                             
                            <?php if(is_array($visual) || $visual instanceof \think\Collection || $visual instanceof \think\Paginator): $i = 0; $__LIST__ = $visual;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <div class="form-group" style="margin-left: 15px;"> 
                                    <div class="col-sm-1">
                                        <select class="form-control" name="visual[]"><option></option><option value="1">√</option><option value="2">√×</option><option value="0">×</option></select>
                                    </div>
                                    <?php if($vo['id'] == '4'): ?>
                                        <label class="col-sm-2 control-label"><?php echo $vo['cn_name']; ?>&nbsp;<?php echo $vo['en_name']; ?></label>
                                        <label class="col-sm-2 control-label">左右&nbsp;Left/right</label>
                                        <div class="col-sm-2">
                                            <input class="form-control" name="visual_left">
                                        </div>
                                        <label class="col-sm-2 control-label">上下&nbsp;Up/down</label>
                                        <div class="col-sm-2">
                                            <input class="form-control" name="visual_up">
                                        </div>
                                        
                                    <?php else: ?>
                                        <label class="col-sm-10 control-label text-left"><?php echo $vo['cn_name']; ?>&nbsp;<?php echo $vo['en_name']; ?></label> 
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                            
                        </td>
                    </tr>
                </table>

                <table class="table table-bordered">
                    
                    <?php if(is_array($expressions) || $expressions instanceof \think\Collection || $expressions instanceof \think\Paginator): $ko = 0; $__LIST__ = $expressions;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($ko % 2 );++$ko;if(is_array($vo) || $vo instanceof \think\Collection || $vo instanceof \think\Paginator): $k = 0; $__LIST__ = $vo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;if(is_array($v) || $v instanceof \think\Collection || $v instanceof \think\Paginator): $kk = 0; $__LIST__ = $v;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($kk % 2 );++$kk;if(isset($vv['0']['cn_name'])): ?>
                                    <tr>
                                        <?php if(($k == 1) AND ($kk == 1)): ?>
                                            <td colspan="1" <?php if($ko == '1'): ?>rowspan="17"<?php else: ?>rowspan="9"<?php endif; ?> width="8%"><?php echo $vo['en_name']; ?>&nbsp;<?php echo $vo['cn_name']; ?></td>
                                        <?php endif; if($kk == '1'): ?>
                                            <td colspan="2" <?php if($k == '6'): ?>rowspan="2<?php else: ?>rowspan="3"<?php endif; ?> width="10%"><?php echo $v['cn_name']; ?>&nbsp;<?php echo $v['en_name']; ?></td>
                                        <?php endif; ?>
                                        <td colspan="1"><?php echo strtoupper($key); ?></td>
                                        <td colspan="8">
                                            <div class="form-group">
                                                <?php if(is_array($vv) || $vv instanceof \think\Collection || $vv instanceof \think\Paginator): $i = 0; $__LIST__ = $vv;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vs): $mod = ($i % 2 );++$i;?>
                                                    <label class="col-sm-1 control-label"><?php echo $vs['cn_name']; ?></label>
                                                    <div class="col-sm-1">
                                                        <select class="form-control" name="<?php echo $vs['field_name']; ?>"><option></option><option value="1">√</option><option value="2">√×</option><option value="0">×</option></select>
                                                    </div>
                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
                </table>

                <p class="text-semibold text-main pad-all mar-no">语言理解表达能力评估小结</p>
                <table class="table table-bordered">
                    <tbody>

                        <tr>
                            <td colspan="12">
                                <textarea name="content" class="form-control" rows="6"></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
                    
            </div>

            <!--Modal footer-->
            <div class="modal-footer">
                <input type="hidden" name="version" value="1">
                <button data-dismiss="modal" class="btn btn-default" type="button">关闭</button>
                <button class="btn btn-primary" type="submit">保存</button>
            </div>
            </form>
                
        </div>
    </div>
</div>
<script type="text/javascript">
    
</script>
                                <?php endif; ?>
                            </div>
                            <div class="tab-pane fade" id="tab-4">
                                <?php if(!(empty($report['report_c']) || (($report['report_c'] instanceof \think\Collection || $report['report_c'] instanceof \think\Paginator ) && $report['report_c']->isEmpty()))): ?>
                                    <form class="form-horizontal" action="<?php echo url('admin/report/updateReportC',['id'=>$report['id']]); ?>" method="post" id="report-c-form">
    <p class="text-semibold text-main pad-all mar-no">基本反应</p>
        <table class="table table-bordered">
        <?php if(is_array($summary) || $summary instanceof \think\Collection || $summary instanceof \think\Paginator): $ko = 0; $__LIST__ = $summary;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($ko % 2 );++$ko;if(is_array($vo['_child']) || $vo['_child'] instanceof \think\Collection || $vo['_child'] instanceof \think\Paginator): $kk = 0; $__LIST__ = $vo['_child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($kk % 2 );++$kk;?>
            <tr>
                <?php if($kk == '1'): ?><td rowspan="<?php echo count($vo['_child']); ?>" width="10%"><?php echo $vo['cn_name']; ?></td><?php endif; ?>
                <td>
                    <?php if(!(empty($vv['en_name']) || (($vv['en_name'] instanceof \think\Collection || $vv['en_name'] instanceof \think\Paginator ) && $vv['en_name']->isEmpty()))): ?><label class="col-sm-1 control-label text-left"><?php echo $vv['cn_name']; ?>：</label><?php endif; ?>
                    <div class="row">
                        <div class="col-sm-10">
                            <div class="form-group" style="margin-left: 15px;">
                                <?php if(is_array($vv['_child']) || $vv['_child'] instanceof \think\Collection || $vv['_child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vv['_child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?> 
                                <label class="col-sm-1 control-label text-right"><?php echo $v['cn_name']; ?></label>
                                <div class="col-sm-1">
                                    <select class="form-control" name="<?php echo $v['field_name']; ?>"><option></option><option value="1" <?php if($report['report_c'][$v['field_name']] == '1'): ?>selected<?php endif; ?>>√</option><option value="2" <?php if($report['report_c'][$v['field_name']] == '2'): ?>selected<?php endif; ?>>√×</option><option value="0" <?php if($report['report_c'][$v['field_name']] == '0'): ?>selected<?php endif; ?>>×</option></select>
                                </div>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
        </table>


    <p class="text-semibold text-main pad-all mar-no">感统、大小肌肉评估小结</p>
    <table class="table table-bordered">
        <tbody>

            <tr>
                <td colspan="12">
                    <textarea name="content" class="form-control" rows="6"><?php if(isset($report['report_c']['content'])): ?><?php echo $report['report_c']['content']; endif; ?></textarea>
                </td>
            </tr>
        </tbody>
    </table>
                    
    <div class="panel-footer">
        <div class="row">
            <div class="col-sm-7 col-sm-offset-1">
                <input type="hidden" name="version" value="1">
                <button class="btn btn-mint" type="submit">保存</button>
            </div>
        </div>
    </div>
</form>
                                <?php else: ?>
                                    <div class="row">
                                        <div class="col-sm-12">
                                        <p class="text-center">该学员暂无评估记录</p>
                                        <button data-target="#report-c-modal" data-toggle="modal" class="btn btn-block btn-primary">新增</button>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="report-c-modal" role="dialog" tabindex="-1" aria-labelledby="report-c-modal" aria-hidden="true">
    <div class="modal-dialog" style="width: 1200px;">
        <div class="modal-content">

            <!--Modal header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                <h4 class="modal-title">新增感统、大小肌肉评估报告</h4>
            </div>

            <!--Modal body-->
            <form class="form-horizontal" action="<?php echo url('admin/report/updateReportC',['id'=>$report['id']]); ?>" method="post" id="report-c-form">
            <div class="modal-body">
                <p class="text-semibold text-main pad-all mar-no">基本反应</p>
                <table class="table table-bordered">
                <?php if(is_array($summary) || $summary instanceof \think\Collection || $summary instanceof \think\Paginator): $ko = 0; $__LIST__ = $summary;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($ko % 2 );++$ko;if(is_array($vo['_child']) || $vo['_child'] instanceof \think\Collection || $vo['_child'] instanceof \think\Paginator): $kk = 0; $__LIST__ = $vo['_child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($kk % 2 );++$kk;?>
                    <tr>
                        <?php if($kk == '1'): ?><td rowspan="<?php echo count($vo['_child']); ?>" width="10%"><?php echo $vo['cn_name']; ?></td><?php endif; ?>
                        <td>
                            <?php if(!(empty($vv['en_name']) || (($vv['en_name'] instanceof \think\Collection || $vv['en_name'] instanceof \think\Paginator ) && $vv['en_name']->isEmpty()))): ?><label class="col-sm-1 control-label text-left"><?php echo $vv['cn_name']; ?>：</label><?php endif; ?>
                            <div class="row">
                                <div class="col-sm-10">
                                    <div class="form-group" style="margin-left: 15px;">
                                        <?php if(is_array($vv['_child']) || $vv['_child'] instanceof \think\Collection || $vv['_child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vv['_child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?> 
                                        <label class="col-sm-1 control-label text-right"><?php echo $v['cn_name']; ?></label>
                                        <div class="col-sm-1">
                                            <select class="form-control" name="<?php echo $v['field_name']; ?>"><option></option><option value="1">√</option><option value="2">√×</option><option value="0">×</option></select>
                                        </div>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </div>
                            </div>
                            
                        </td>
                    </tr>
                    <?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
                </table>

                <p class="text-semibold text-main pad-all mar-no">感统、大小肌肉评估小结</p>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td colspan="12">
                                <textarea name="content" class="form-control" rows="6"></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
                    
            </div>

            <!--Modal footer-->
            <div class="modal-footer">
                <input type="hidden" name="version" value="1">
                <button data-dismiss="modal" class="btn btn-default" type="button">关闭</button>
                <button class="btn btn-primary" type="submit">保存</button>
            </div>
            </form>
                
        </div>
    </div>
</div>
<script type="text/javascript">
    
</script>
                                <?php endif; ?>
                            </div>
                            <div class="tab-pane fade" id="tab-5">
                                <?php if(!(empty($report['report_d']) || (($report['report_d'] instanceof \think\Collection || $report['report_d'] instanceof \think\Paginator ) && $report['report_d']->isEmpty()))): ?>
                                    <form class="form-horizontal" action="<?php echo url('admin/report/updateReportD',['id'=>$report['id']]); ?>" method="post" id="report-d-form">
    <div class="row">
        <div class="col-sm-6">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">A组表现</th>
                            <th>经常-always</th>
                            <th>偶有-sometimes</th>
                            <th>无-never</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(is_array($attentionlist) || $attentionlist instanceof \think\Collection || $attentionlist instanceof \think\Paginator): $i = 0; $__LIST__ = $attentionlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['groups'] == '1'): $val=2; ?>
                        <tr>
                            <td class="text-left"><?php echo $vo['cn_name']; ?><br><?php echo $vo['en_name']; ?></td>
                            <?php $__FOR_START_20893__=1;$__FOR_END_20893__=4;for($i=$__FOR_START_20893__;$i < $__FOR_END_20893__;$i+=1){ ?>
                            <td><input id="radio<?php echo $vo['id']; ?>-<?php echo $i; ?>" class="magic-radio" type="radio" name="radio[<?php echo $vo['id']; ?>]" value="<?php echo $val--; ?>" <?php if(isset($report['report_d']['radio'][$vo['id']])): if($report['report_d']['radio'][$vo['id']] == $val+1): ?>checked<?php endif; endif; ?>>
                                <label for="radio<?php echo $vo['id']; ?>-<?php echo $i; ?>"></label></td>
                            <?php } ?>
                            
                        </tr>
                        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">B组表现</th>
                            <th>经常-always</th>
                            <th>偶有-sometimes</th>
                            <th>无-never</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(is_array($attentionlist) || $attentionlist instanceof \think\Collection || $attentionlist instanceof \think\Paginator): $i = 0; $__LIST__ = $attentionlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['groups'] == '2'): $val=2; ?>
                        <tr>
                            <td class="text-left"><?php echo $vo['cn_name']; ?><br><?php echo $vo['en_name']; ?></td>
                            <?php $__FOR_START_30836__=1;$__FOR_END_30836__=4;for($i=$__FOR_START_30836__;$i < $__FOR_END_30836__;$i+=1){ ?>
                            <td><input id="radio<?php echo $vo['id']; ?>-<?php echo $i; ?>" class="magic-radio" type="radio" name="radio[<?php echo $vo['id']; ?>]" value="<?php echo $val--; ?>" <?php if(isset($report['report_d']['radio'][$vo['id']])): if($report['report_d']['radio'][$vo['id']] == $val+1): ?>checked<?php endif; endif; ?>>
                                <label for="radio<?php echo $vo['id']; ?>-<?php echo $i; ?>"></label></td>
                            <?php } ?>
                        </tr>
                        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <p class="bord-btm pad-ver text-main text-bold">评估总结</p>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                
                <div class="col-lg-12">
                    <textarea id="others-textarea-input" rows="9" class="form-control" placeholder="" name="content"><?php echo $report['report_d']['content']; ?></textarea>
                </div>
            </div>
            
        </div>
    </div>
    <div class="panel-footer">
        <div class="row">
            <div class="col-sm-12 text-center">
                <input type="hidden" name="version" value="1">
                <button class="btn btn-mint" type="submit">保存</button>
            </div>
        </div>
    </div>
</form>
<script type="text/javascript">
    
</script>
                                <?php else: ?>
                                    <div class="row">
                                        <div class="col-sm-12">
                                        <p class="text-center">该学员暂无评估记录</p>
                                        <button data-target="#report-d-modal" data-toggle="modal" class="btn btn-block btn-primary">新增</button>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="report-d-modal" role="dialog" tabindex="-1" aria-labelledby="report-d-modal" aria-hidden="true">
    <div class="modal-dialog" style="width: 1000px;">
        <div class="modal-content">

            <!--Modal header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                <h4 class="modal-title">新增专注力评估报告</h4>
            </div>

            <!--Modal body-->
            <form class="form-horizontal" action="<?php echo url('admin/report/updateReportD',['id'=>$report['id']]); ?>" method="post" id="report-d-form">
            <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">A组表现</th>
                                            <th>经常-always</th>
                                            <th>偶有-sometimes</th>
                                            <th>无-never</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(is_array($attentionlist) || $attentionlist instanceof \think\Collection || $attentionlist instanceof \think\Paginator): $i = 0; $__LIST__ = $attentionlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['groups'] == '1'): $val=2; ?>
                                        <tr>
                                            <td class="text-left"><?php echo $vo['cn_name']; ?><br><?php echo $vo['en_name']; ?></td>
                                            <?php $__FOR_START_10311__=1;$__FOR_END_10311__=4;for($i=$__FOR_START_10311__;$i < $__FOR_END_10311__;$i+=1){ ?>
                                            <td><input id="radio<?php echo $vo['id']; ?>-<?php echo $i; ?>" class="magic-radio" type="radio" name="radio[<?php echo $vo['id']; ?>]" value="<?php echo $val--; ?>">
                                                <label for="radio<?php echo $vo['id']; ?>-<?php echo $i; ?>"></label></td>
                                            <?php } ?>
                                            
                                        </tr>
                                        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">B组表现</th>
                                            <th>经常-always</th>
                                            <th>偶有-sometimes</th>
                                            <th>无-never</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(is_array($attentionlist) || $attentionlist instanceof \think\Collection || $attentionlist instanceof \think\Paginator): $i = 0; $__LIST__ = $attentionlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['groups'] == '2'): $val=2; ?>
                                        <tr>
                                            <td class="text-left"><?php echo $vo['cn_name']; ?><br><?php echo $vo['en_name']; ?></td>
                                            <?php $__FOR_START_14214__=1;$__FOR_END_14214__=4;for($i=$__FOR_START_14214__;$i < $__FOR_END_14214__;$i+=1){ ?>
                                            <td><input id="radio<?php echo $vo['id']; ?>-<?php echo $i; ?>" class="magic-radio" type="radio" name="radio[<?php echo $vo['id']; ?>]" value="<?php echo $val--; ?>">
                                                <label for="radio<?php echo $vo['id']; ?>-<?php echo $i; ?>"></label></td>
                                            <?php } ?>
                                        </tr>
                                        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <p class="bord-btm pad-ver text-main text-bold">评估总结</p>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <textarea id="others-textarea-input" rows="9" class="form-control" placeholder="" name="content"></textarea>
                                </div>
                            </div>
                            
                        </div>
                    </div>
            </div>

            <!--Modal footer-->
            <div class="modal-footer">
                <input type="hidden" name="version" value="1">
                <button data-dismiss="modal" class="btn btn-default" type="button">关闭</button>
                <button class="btn btn-primary" type="submit">保存</button>
            </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    
</script>
                                <?php endif; ?>
                            </div>
                            <div class="tab-pane fade" id="tab-6">
                                 <?php if(!(empty($report['report_e']) || (($report['report_e'] instanceof \think\Collection || $report['report_e'] instanceof \think\Paginator ) && $report['report_e']->isEmpty()))): ?>
                                    <form class="form-horizontal" action="<?php echo url('admin/report/updateReportE',['id'=>$report['id']]); ?>" method="post" id="report-e-form">
    <div class="row">
        <div class="col-sm-6">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center"></th>
                            <th>经常-always</th>
                            <th>偶有-sometimes</th>
                            <th>无-never</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(is_array($sociallist) || $sociallist instanceof \think\Collection || $sociallist instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($sociallist) ? array_slice($sociallist,0,8, true) : $sociallist->slice(0,8, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;$val=2; ?>
                        <tr>
                            <td class="text-left"><?php echo $vo['cn_name']; ?><br><?php echo $vo['en_name']; ?></td>
                            <?php $__FOR_START_4193__=1;$__FOR_END_4193__=4;for($i=$__FOR_START_4193__;$i < $__FOR_END_4193__;$i+=1){ ?>
                            <td><input id="sradio<?php echo $vo['id']; ?>-<?php echo $i; ?>" class="magic-radio" type="radio" name="radio[<?php echo $vo['id']; ?>]" value="<?php echo $val--; ?>" <?php if(isset($report['report_e']['radio'][$vo['id']])): if($report['report_e']['radio'][$vo['id']] == $val+1): ?>checked<?php endif; endif; ?>>
                            <label for="sradio<?php echo $vo['id']; ?>-<?php echo $i; ?>"></label></td>
                            <?php } ?>
                            
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center"></th>
                            <th>经常-always</th>
                            <th>偶有-sometimes</th>
                            <th>无-never</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(is_array($sociallist) || $sociallist instanceof \think\Collection || $sociallist instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($sociallist) ? array_slice($sociallist,8,8, true) : $sociallist->slice(8,8, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;$val=2; ?>
                        <tr>
                            <td class="text-left"><?php echo $vo['cn_name']; ?><br><?php echo $vo['en_name']; ?></td>
                            <?php $__FOR_START_10184__=1;$__FOR_END_10184__=4;for($i=$__FOR_START_10184__;$i < $__FOR_END_10184__;$i+=1){ ?>
                            <td><input id="sradio<?php echo $vo['id']; ?>-<?php echo $i; ?>" class="magic-radio" type="radio" name="radio[<?php echo $vo['id']; ?>]" value="<?php echo $val--; ?>" <?php if(isset($report['report_e']['radio'][$vo['id']])): if($report['report_e']['radio'][$vo['id']] == $val+1): ?>checked<?php endif; endif; ?>>
                                <label for="sradio<?php echo $vo['id']; ?>-<?php echo $i; ?>"></label></td>
                            <?php } ?>
                            
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <p class="bord-btm pad-ver text-main text-bold">评估总结</p>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                
                <div class="col-lg-12">
                    <textarea id="others-textarea-input" rows="9" class="form-control" placeholder="" name="content"><?php echo (isset($report['report_e']['content']) && ($report['report_e']['content'] !== '')?$report['report_e']['content']:""); ?></textarea>
                </div>
            </div>
            
        </div>
    </div>
    <div class="panel-footer">
        <div class="row">
            <div class="col-sm-12 text-center">
                <input type="hidden" name="version" value="1">
                <button class="btn btn-mint" type="submit">保存</button>
            </div>
        </div>
    </div>
</form>
<script type="text/javascript">
    
</script>
                                <?php else: ?>
                                    <div class="row">
                                        <div class="col-sm-12">
                                        <p class="text-center">该学员暂无评估记录</p>
                                        <button data-target="#report-e-modal" data-toggle="modal" class="btn btn-block btn-primary">新增</button>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="report-e-modal" role="dialog" tabindex="-1" aria-labelledby="report-e-modal" aria-hidden="true">
    <div class="modal-dialog" style="width: 1000px;">
        <div class="modal-content">

            <!--Modal header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                <h4 class="modal-title">新增社交行为评估报告</h4>
            </div>

            <!--Modal body-->
            <form class="form-horizontal" action="<?php echo url('admin/report/updateReportE',['id'=>$report['id']]); ?>" method="post" id="report-e-form">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center"></th>
                                        <th>经常-always</th>
                                        <th>偶有-sometimes</th>
                                        <th>无-never</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(is_array($sociallist) || $sociallist instanceof \think\Collection || $sociallist instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($sociallist) ? array_slice($sociallist,0,8, true) : $sociallist->slice(0,8, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;$val=2; ?>
                                    <tr>
                                        <td class="text-left"><?php echo $vo['cn_name']; ?><br><?php echo $vo['en_name']; ?></td>
                                        <?php $__FOR_START_28779__=1;$__FOR_END_28779__=4;for($i=$__FOR_START_28779__;$i < $__FOR_END_28779__;$i+=1){ ?>
                                        <td><input id="sradio<?php echo $vo['id']; ?>-<?php echo $i; ?>" class="magic-radio" type="radio" name="radio[<?php echo $vo['id']; ?>]" value="<?php echo $val--; ?>">
                                            <label for="sradio<?php echo $vo['id']; ?>-<?php echo $i; ?>"></label></td>
                                        <?php } ?>
                                        
                                    </tr>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center"></th>
                                        <th>经常-always</th>
                                        <th>偶有-sometimes</th>
                                        <th>无-never</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(is_array($sociallist) || $sociallist instanceof \think\Collection || $sociallist instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($sociallist) ? array_slice($sociallist,8,8, true) : $sociallist->slice(8,8, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;$val=2; ?>
                                    <tr>
                                        <td class="text-left"><?php echo $vo['cn_name']; ?><br><?php echo $vo['en_name']; ?></td>
                                        <?php $__FOR_START_14778__=1;$__FOR_END_14778__=4;for($i=$__FOR_START_14778__;$i < $__FOR_END_14778__;$i+=1){ ?>
                                        <td><input id="sradio<?php echo $vo['id']; ?>-<?php echo $i; ?>" class="magic-radio" type="radio" name="radio[<?php echo $vo['id']; ?>]" value="<?php echo $val--; ?>">
                                            <label for="sradio<?php echo $vo['id']; ?>-<?php echo $i; ?>"></label></td>
                                        <?php } ?>
                                        
                                    </tr>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <p class="bord-btm pad-ver text-main text-bold">评估总结</p>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            
                            <div class="col-lg-12">
                                <textarea id="others-textarea-input" rows="9" class="form-control" placeholder="" name="content"></textarea>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            <!--Modal footer-->
            <div class="modal-footer">
                <input type="hidden" name="version" value="1">
                <button data-dismiss="modal" class="btn btn-default" type="button">关闭</button>
                <button class="btn btn-primary" type="submit">保存</button>
            </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    
</script>
                                <?php endif; ?>
                            </div>
                            <div class="tab-pane fade" id="tab-7">
                                <?php if(!(empty($report['before_info']) || (($report['before_info'] instanceof \think\Collection || $report['before_info'] instanceof \think\Paginator ) && $report['before_info']->isEmpty()))): ?>
                                    <form class="form-horizontal" action="<?php echo url('admin/report/updateBefore',['id'=>$report['id']]); ?>" method="post" id="before-info-form">
    <p class="bord-btm pad-ver text-main text-bold">评估时孩子状况-child's performance during the assessment</p>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <textarea id="others-textarea-input" rows="9" class="form-control" placeholder="" name="content_performance"><?php echo (isset($report['before_info']['content_performance']) && ($report['before_info']['content_performance'] !== '')?$report['before_info']['content_performance']:""); ?></textarea>
            </div>
        </div>
    </div>

    <p class="bord-btm pad-ver text-main text-bold">特别喜好（玩具或食物）-Favorite toys and food</p>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <textarea id="others-textarea-input" rows="9" class="form-control" placeholder="" name="content_favorite"><?php echo (isset($report['before_info']['content_favorite']) && ($report['before_info']['content_favorite'] !== '')?$report['before_info']['content_favorite']:""); ?></textarea>
            </div>
        </div>
    </div>

    <p class="bord-btm pad-ver text-main text-bold">家长最关心的问题-What are parents' main concerns?</p>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <textarea id="others-textarea-input" rows="9" class="form-control" placeholder="" name="content_main"><?php echo (isset($report['before_info']['content_main']) && ($report['before_info']['content_main'] !== '')?$report['before_info']['content_main']:""); ?></textarea>
            </div>
        </div>
    </div>

    <p class="bord-btm pad-ver text-main text-bold">特别注意事项-Notes</p>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <textarea id="others-textarea-input" rows="9" class="form-control" placeholder="" name="content_notes"><?php echo (isset($report['before_info']['content_notes']) && ($report['before_info']['content_notes'] !== '')?$report['before_info']['content_notes']:""); ?></textarea>
            </div>
        </div>
    </div>

    <p class="bord-btm pad-ver text-main text-bold">第一阶段(1st stage)：</p>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <textarea id="others-textarea-input" rows="9" class="form-control" placeholder="" name="content_1_stage"><?php echo (isset($report['before_info']['content_1_stage']) && ($report['before_info']['content_1_stage'] !== '')?$report['before_info']['content_1_stage']:""); ?></textarea>
            </div>
        </div>
    </div>

    <p class="bord-btm pad-ver text-main text-bold">第二阶段(2nd stage)：</p>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <textarea id="others-textarea-input" rows="9" class="form-control" placeholder="" name="content_2_stage"><?php echo (isset($report['before_info']['content_2_stage']) && ($report['before_info']['content_2_stage'] !== '')?$report['before_info']['content_2_stage']:""); ?></textarea>
            </div>
        </div>
    </div>
    <div class="panel-footer">
        <div class="row">
            <div class="col-sm-12 text-center">
                <input type="hidden" name="version" value="1">
                <button class="btn btn-mint" type="submit">保存</button>
            </div>
        </div>
    </div>
</form>
                                <?php else: ?>
                                    <div class="row">
                                        <div class="col-sm-12">
                                        <p class="text-center">该学员暂无此评估记录</p>
                                        <button data-target="#report-before-info-model" data-toggle="modal" class="btn btn-block btn-primary">新增</button>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="report-before-info-model" role="dialog" tabindex="-1" aria-labelledby="report-before-info-model" aria-hidden="true">
    <div class="modal-dialog" style="width: 1000px;">
        <div class="modal-content">

            <!--Modal header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                <h4 class="modal-title">新增授课前了解事项</h4>
            </div>

            <!--Modal body-->
            <form class="form-horizontal" action="<?php echo url('admin/report/updateBefore',['id'=>$report['id']]); ?>" method="post" id="before-info-form">
            <div class="modal-body">
                <p class="bord-btm pad-ver text-main text-bold">评估时孩子状况-child's performance during the assessment</p>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10">
                                <textarea rows="9" class="form-control" placeholder="" name="content_performance"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <p class="bord-btm pad-ver text-main text-bold">特别喜好（玩具或食物）-Favorite toys and food</p>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10">
                                <textarea rows="9" class="form-control" placeholder="" name="content_favorite"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <p class="bord-btm pad-ver text-main text-bold">家长最关心的问题-What are parents' main concerns?</p>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10">
                                <textarea rows="9" class="form-control" placeholder="" name="content_main"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <p class="bord-btm pad-ver text-main text-bold">特别注意事项-Notes</p>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10">
                                <textarea rows="9" class="form-control" placeholder="" name="content_notes"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <p class="bord-btm pad-ver text-main text-bold">第一阶段(1st stage)：</p>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10">
                                <textarea rows="9" class="form-control" placeholder="" name="content_1_stage"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <p class="bord-btm pad-ver text-main text-bold">第二阶段(2nd stage)：</p>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10">
                                <textarea id="others-textarea-input" rows="9" class="form-control" placeholder="" name="content_2_stage"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Modal footer-->
            <div class="modal-footer">
                <input type="hidden" name="version" value="1">
                <button data-dismiss="modal" class="btn btn-default" type="button">关闭</button>
                <button class="btn btn-primary" type="submit">保存</button>
            </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    
</script>
                                <?php endif; ?>
                            </div>
                            <div class="tab-pane fade" id="tab-8">
                                <?php if(!(empty($report['training_plan']) || (($report['training_plan'] instanceof \think\Collection || $report['training_plan'] instanceof \think\Paginator ) && $report['training_plan']->isEmpty()))): if($report['training_plan']['version'] == '1'): ?>
                                    <form class="form-horizontal" action="<?php echo url('admin/report/updatePlan',['id'=>$report['id']]); ?>" method="post" id="report-training-plan">
    <p class="bord-btm pad-ver text-main text-bold">A 口肌发音  Oral Motor Pronunciation</p>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <textarea id="others-textarea-input" rows="9" class="form-control" placeholder="" name="content_a"><?php echo (isset($report['training_plan']['content_a']) && ($report['training_plan']['content_a'] !== '')?$report['training_plan']['content_a']:""); ?></textarea>
            </div>
        </div>
    </div>

    <p class="bord-btm pad-ver text-main text-bold">B 理解认知、逻辑表达  Cognitive comprehension,Logic Expression</p>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <textarea id="others-textarea-input" rows="9" class="form-control" placeholder="" name="content_b"><?php echo (isset($report['training_plan']['content_b']) && ($report['training_plan']['content_b'] !== '')?$report['training_plan']['content_b']:""); ?></textarea>
            </div>
        </div>
    </div>

    <p class="bord-btm pad-ver text-main text-bold">C 大小肌肉、感统、专注力  Gross and Fine Motor, Sensory, Attention</p>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <textarea id="others-textarea-input" rows="9" class="form-control" placeholder="" name="content_c"><?php echo (isset($report['training_plan']['content_c']) && ($report['training_plan']['content_c'] !== '')?$report['training_plan']['content_c']:""); ?></textarea>
            </div>
        </div>
    </div>

    <p class="bord-btm pad-ver text-main text-bold">STAR 课程</p>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <textarea id="others-textarea-input" rows="9" class="form-control" placeholder="" name="content_star"><?php echo (isset($report['training_plan']['content_star']) && ($report['training_plan']['content_star'] !== '')?$report['training_plan']['content_star']:""); ?></textarea>
            </div>
        </div>
    </div>
    <div class="panel-footer">
        <div class="row">
            <div class="col-sm-12 text-center">
                <input type="hidden" name="version" value="2">
                <button class="btn btn-mint" type="submit">更新</button>
            </div>
        </div>
    </div>
</form>
                                    <?php endif; if($report['training_plan']['version'] == '2'): ?>
                                    <form class="form-horizontal" action="<?php echo url('admin/report/updatePlan',['id'=>$report['id']]); ?>" method="post" id="report-training-plan">
    <p class="bord-btm pad-ver text-main text-bold">训练方案</p>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label class="col-lg-2 control-label">口肌发音</label>
                <div class="col-lg-7">
                    <textarea rows="9" class="form-control" placeholder="" name="content_a"><?php echo (isset($report['training_plan']['content_a']) && ($report['training_plan']['content_a'] !== '')?$report['training_plan']['content_a']:""); ?></textarea>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label class="col-lg-2 control-label">视听反应B5</label>
                <div class="col-lg-7">
                    <textarea rows="9" class="form-control" placeholder="" name="content_b5"><?php echo (isset($report['training_plan']['content_b5']) && ($report['training_plan']['content_b5'] !== '')?$report['training_plan']['content_b5']:""); ?></textarea>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label class="col-lg-2 control-label">运动表达B2</label>
                <div class="col-lg-7">
                    <textarea rows="9" class="form-control" placeholder="" name="content_b2"><?php echo (isset($report['training_plan']['content_b2']) && ($report['training_plan']['content_b2'] !== '')?$report['training_plan']['content_b2']:""); ?></textarea>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label class="col-lg-2 control-label">理解认知、逻辑表达B1</label>
                <div class="col-lg-7">
                    <textarea rows="9" class="form-control" placeholder="" name="content_b1"><?php echo (isset($report['training_plan']['content_b1']) && ($report['training_plan']['content_b1'] !== '')?$report['training_plan']['content_b1']:""); ?></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label class="col-lg-2 control-label">专注力B3</label>
                <div class="col-lg-7">
                    <textarea rows="9" class="form-control" placeholder="" name="content_b3"><?php echo (isset($report['training_plan']['content_b3']) && ($report['training_plan']['content_b3'] !== '')?$report['training_plan']['content_b3']:""); ?></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label class="col-lg-2 control-label">社交行为小组课B4</label>
                <div class="col-lg-7">
                    <textarea rows="9" class="form-control" placeholder="" name="content_b4"><?php echo (isset($report['training_plan']['content_b4']) && ($report['training_plan']['content_b4'] !== '')?$report['training_plan']['content_b4']:""); ?></textarea>
                </div>
            </div>
        </div>
    </div>
    <p class="bord-btm pad-ver text-main text-bold">目前需要配合的家庭训练方法</p>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <div class="col-lg-10">
                    <textarea rows="9" class="form-control" placeholder="" name="content_home"><?php echo (isset($report['training_plan']['content_home']) && ($report['training_plan']['content_home'] !== '')?$report['training_plan']['content_home']:""); ?></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-footer">
        <div class="row">
            <div class="col-sm-12 text-center">
                <input type="hidden" name="version" value="2">
                <button class="btn btn-mint" type="submit">更新</button>
            </div>
        </div>
    </div>
</form>
                                    <?php endif; else: ?>
                                    <div class="row">
                                        <div class="col-sm-12 dropup">
                                        <p class="text-center">该学员暂无评估记录</p>
                                        <button class="btn btn-block btn-primary dropdown-toggle" data-toggle="dropdown" type="button" aria-expanded="false">新增<i class="dropdown-caret"></i></button>
                                            <ul class="dropdown-menu dropdown-menu-right" style="position: initial;">
                                                <li class="dropdown-header">模板选择</li>
                                                <li><a href="#" data-target="#report-plan-modal " data-toggle="modal">模板一</a></li>
                                                <li><a href="#" data-target="#report-plan-modal-2" data-toggle="modal">模板二</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="report-plan-modal" role="dialog" tabindex="-1" aria-labelledby="report-plan-modal" aria-hidden="true">
    <div class="modal-dialog" style="width: 1000px;">
        <div class="modal-content">

            <!--Modal header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                <h4 class="modal-title">新增训练方案</h4>
            </div>

            <!--Modal body-->
            <form class="form-horizontal" action="<?php echo url('admin/report/updatePlan',['id'=>$report['id']]); ?>" method="post" id="report-training-plan">
            <div class="modal-body">
                <p class="bord-btm pad-ver text-main text-bold">A 口肌发音  Oral Motor Pronunciation</p>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10">
                                <textarea rows="9" class="form-control" placeholder="" name="content_a"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <p class="bord-btm pad-ver text-main text-bold">B 理解认知、逻辑表达  Cognitive comprehension,Logic Expression</p>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10">
                                <textarea rows="9" class="form-control" placeholder="" name="content_b"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <p class="bord-btm pad-ver text-main text-bold">C 大小肌肉、感统、专注力  Gross and Fine Motor, Sensory, Attention</p>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10">
                                 <textarea rows="9" class="form-control" placeholder="" name="content_c"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <p class="bord-btm pad-ver text-main text-bold">STAR 课程</p>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10">
                                <textarea rows="9" class="form-control" placeholder="" name="content_star"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Modal footer-->
            <div class="modal-footer">
                <input type="hidden" name="version" value="1">
                <button data-dismiss="modal" class="btn btn-default" type="button">关闭</button>
                <button class="btn btn-primary" type="submit">保存</button>
            </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    
</script>
                                    <div class="modal fade" id="report-plan-modal-2" role="dialog" tabindex="-1" aria-labelledby="report-plan-modal-2" aria-hidden="true">
    <div class="modal-dialog" style="width: 1000px;">
        <div class="modal-content">

            <!--Modal header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                <h4 class="modal-title">新增训练方案</h4>
            </div>

            <!--Modal body-->
            <form class="form-horizontal" action="<?php echo url('admin/report/updatePlan',['id'=>$report['id']]); ?>" method="post" id="report-training-plan-2">
            <div class="modal-body">
                <p class="bord-btm pad-ver text-main text-bold">训练方案</p>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="col-lg-2 control-label">口肌发音</label>
                            <div class="col-lg-7">
                                <textarea rows="9" class="form-control" placeholder="" name="content_a"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="col-lg-2 control-label">视听反应B5</label>
                            <div class="col-lg-7">
                                <textarea rows="9" class="form-control" placeholder="" name="content_b5"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="col-lg-2 control-label">运动表达B2</label>
                            <div class="col-lg-7">
                                <textarea rows="9" class="form-control" placeholder="" name="content_b2"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="col-lg-2 control-label">理解认知、逻辑表达B1</label>
                            <div class="col-lg-7">
                                <textarea rows="9" class="form-control" placeholder="" name="content_b1"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="col-lg-2 control-label">专注力B3</label>
                            <div class="col-lg-7">
                                <textarea rows="9" class="form-control" placeholder="" name="content_b3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="col-lg-2 control-label">社交行为小组课B4</label>
                            <div class="col-lg-7">
                                <textarea rows="9" class="form-control" placeholder="" name="content_b4"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="bord-btm pad-ver text-main text-bold">目前需要配合的家庭训练方法</p>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="col-lg-10">
                                <textarea rows="9" class="form-control" placeholder="" name="content_home"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Modal footer-->
            <div class="modal-footer">
                <input type="hidden" name="version" value="2">
                <button data-dismiss="modal" class="btn btn-default" type="button">关闭</button>
                <button class="btn btn-primary" type="submit">保存</button>
            </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    
</script>
                                <?php endif; ?>
                            </div>
                            <div class="tab-pane fade" id="tab-9">
                                <?php if(!(empty($report['summary']) || (($report['summary'] instanceof \think\Collection || $report['summary'] instanceof \think\Paginator ) && $report['summary']->isEmpty()))): ?>
                                    <form class="form-horizontal" action="<?php echo url('admin/report/updateSummary',['id'=>$report['id']]); ?>" method="post" id="report-summary-form">
    <table class="table table-bordered">
        <tr>
            <td class="text-center media-middle">项目</td>
            <td colspan="6" class="text-center">评估情况</td>
        </tr>
        <tr>
            <td rowspan="8" class="text-center" style="vertical-align:middle;">言语能力</td>
            <td rowspan="2" class="text-center" style="vertical-align:middle;">项目</td>
            <td colspan="6" class="text-center">程度</td>
        </tr>
        <tr class="text-center">
            <td>正常</td>
            <td>轻度</td>
            <td>中度</td>
            <td>严重</td>
            <td>重度</td>
        </tr>
        <tr>
            <td>感知觉</td>
            <?php $__FOR_START_10981__=0;$__FOR_END_10981__=5;for($i=$__FOR_START_10981__;$i < $__FOR_END_10981__;$i+=1){ ?>
            <td class="text-center"><input id="sensory-<?php echo $i; ?>" class="magic-radio" type="radio" name="sensory" value="<?php echo $i; ?>" <?php if(isset($report['summary']['sensory'])): if($report['summary']['sensory'] == $i): ?>checked<?php endif; endif; ?>><label for="sensory-<?php echo $i; ?>"></label></td>
            <?php } ?>
        </tr>
        <tr>
            <td>口肌</td>
            <?php $__FOR_START_18908__=0;$__FOR_END_18908__=5;for($i=$__FOR_START_18908__;$i < $__FOR_END_18908__;$i+=1){ ?>
            <td class="text-center"><input id="oral-motor-<?php echo $i; ?>" class="magic-radio" type="radio" name="oral_motor" value="<?php echo $i; ?>" <?php if(isset($report['summary']['oral_motor'])): if($report['summary']['oral_motor'] == $i): ?>checked<?php endif; endif; ?>><label for="oral-motor-<?php echo $i; ?>"></label></td>
            <?php } ?>
        </tr>
        <tr>
            <td>行为</td>
            <?php $__FOR_START_15951__=0;$__FOR_END_15951__=5;for($i=$__FOR_START_15951__;$i < $__FOR_END_15951__;$i+=1){ ?>
            <td class="text-center"><input id="behavior-<?php echo $i; ?>" class="magic-radio" type="radio" name="behavior" value="<?php echo $i; ?>" <?php if(isset($report['summary']['behavior'])): if($report['summary']['behavior'] == $i): ?>checked<?php endif; endif; ?>><label for="behavior-<?php echo $i; ?>"></label></td>
            <?php } ?>
        </tr>
        <tr>
            <td>接受性语言</td>
            <?php $__FOR_START_16558__=0;$__FOR_END_16558__=5;for($i=$__FOR_START_16558__;$i < $__FOR_END_16558__;$i+=1){ ?>
            <td class="text-center"><input id="receptive-<?php echo $i; ?>" class="magic-radio" type="radio" name="receptive" value="<?php echo $i; ?>" <?php if(isset($report['summary']['receptive'])): if($report['summary']['receptive'] == $i): ?>checked<?php endif; endif; ?>><label for="receptive-<?php echo $i; ?>"></label></td>
            <?php } ?>
        </tr>
        <tr>
            <td>表达</td>
            <?php $__FOR_START_25897__=0;$__FOR_END_25897__=5;for($i=$__FOR_START_25897__;$i < $__FOR_END_25897__;$i+=1){ ?>
            <td class="text-center"><input id="expressive-<?php echo $i; ?>" class="magic-radio" type="radio" name="expressive" value="<?php echo $i; ?>" <?php if(isset($report['summary']['expressive'])): if($report['summary']['expressive'] == $i): ?>checked<?php endif; endif; ?>><label for="expressive-<?php echo $i; ?>"></label></td>
            <?php } ?>
        </tr>
        <tr>
            <td>运用/社交</td>
            <?php $__FOR_START_12976__=0;$__FOR_END_12976__=5;for($i=$__FOR_START_12976__;$i < $__FOR_END_12976__;$i+=1){ ?>
            <td class="text-center"><input id="social-<?php echo $i; ?>" class="magic-radio" type="radio" name="social" value="<?php echo $i; ?>" <?php if(isset($report['summary']['social'])): if($report['summary']['social'] == $i): ?>checked<?php endif; endif; ?>><label for="social-<?php echo $i; ?>"></label></td>
            <?php } ?>
        </tr>
        <tr>
            <td rowspan="5" class="text-center" style="vertical-align:middle;">其他能力</td>
            <td>视听反应能力</td>
            <?php $__FOR_START_13811__=0;$__FOR_END_13811__=5;for($i=$__FOR_START_13811__;$i < $__FOR_END_13811__;$i+=1){ ?>
            <td class="text-center"><input id="visual-<?php echo $i; ?>" class="magic-radio" type="radio" name="visual" value="<?php echo $i; ?>" <?php if(isset($report['summary']['visual'])): if($report['summary']['visual'] == $i): ?>checked<?php endif; endif; ?>><label for="visual-<?php echo $i; ?>"></label></td>
            <?php } ?>
        </tr>
        <tr>
            <td>听觉反应能力</td>
            <?php $__FOR_START_98__=0;$__FOR_END_98__=5;for($i=$__FOR_START_98__;$i < $__FOR_END_98__;$i+=1){ ?>
            <td class="text-center"><input id="auditory-<?php echo $i; ?>" class="magic-radio" type="radio" name="auditory" value="<?php echo $i; ?>" <?php if(isset($report['summary']['auditory'])): if($report['summary']['auditory'] == $i): ?>checked<?php endif; endif; ?>><label for="auditory-<?php echo $i; ?>"></label></td>
            <?php } ?>
        </tr>
        <tr>
            <td>大肌肉能力</td>
            <?php $__FOR_START_17197__=0;$__FOR_END_17197__=5;for($i=$__FOR_START_17197__;$i < $__FOR_END_17197__;$i+=1){ ?>
            <td class="text-center"><input id="gross-motor-<?php echo $i; ?>" class="magic-radio" type="radio" name="gross_motor" value="<?php echo $i; ?>" <?php if(isset($report['summary']['gross_motor'])): if($report['summary']['gross_motor'] == $i): ?>checked<?php endif; endif; ?>><label for="gross-motor-<?php echo $i; ?>"></label></td>
            <?php } ?>
        </tr>
        <tr>
            <td>小肌肉能力</td>
            <?php $__FOR_START_30276__=0;$__FOR_END_30276__=5;for($i=$__FOR_START_30276__;$i < $__FOR_END_30276__;$i+=1){ ?>
            <td class="text-center"><input id="fine-motor-<?php echo $i; ?>" class="magic-radio" type="radio" name="fine_motor" value="<?php echo $i; ?>" <?php if(isset($report['summary']['fine_motor'])): if($report['summary']['fine_motor'] == $i): ?>checked<?php endif; endif; ?>><label for="fine-motor-<?php echo $i; ?>"></label></td>
            <?php } ?>
        </tr>
        <tr>
            <td>专注力</td>
            <?php $__FOR_START_15191__=0;$__FOR_END_15191__=5;for($i=$__FOR_START_15191__;$i < $__FOR_END_15191__;$i+=1){ ?>
            <td class="text-center"><input id="attentiveness-<?php echo $i; ?>" class="magic-radio" type="radio" name="attentiveness" value="<?php echo $i; ?>" <?php if(isset($report['summary']['attentiveness'])): if($report['summary']['attentiveness'] == $i): ?>checked<?php endif; endif; ?>><label for="attentiveness-<?php echo $i; ?>"></label></td>
            <?php } ?>
        </tr>
    </table>

    <div class="panel-footer">
        <div class="row">
            <div class="col-sm-7 col-sm-offset-1">
                <input type="hidden" name="version" value="1">
                <button class="btn btn-mint" type="submit">保存</button>
            </div>
        </div>
    </div>
</form>
                                <?php else: ?>
                                    <div class="row">
                                        <div class="col-sm-12">
                                        <p class="text-center">该学员暂无此评估记录</p>
                                        <button data-target="#report-summary-model" data-toggle="modal" class="btn btn-block btn-primary">新增</button>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="report-summary-model" role="dialog" tabindex="-1" aria-labelledby="report-summary-model" aria-hidden="true">
    <div class="modal-dialog" style="width: 1200px;">
        <div class="modal-content">

            <!--Modal header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                <h4 class="modal-title">新增评估报告</h4>
            </div>

            <!--Modal body-->
            <form class="form-horizontal" action="<?php echo url('admin/report/updateSummary',['id'=>$report['id']]); ?>" method="post" id="report-summary-form">
            <div class="modal-body">
                <table class="table table-bordered">
                    <tr>
                        <td class="text-center media-middle">项目</td>
                        <td colspan="6" class="text-center">评估情况</td>
                    </tr>
                    <tr>
                        <td rowspan="8" class="text-center" style="vertical-align:middle;">言语能力</td>
                        <td rowspan="2" class="text-center" style="vertical-align:middle;">项目</td>
                        <td colspan="6" class="text-center">程度</td>
                    </tr>
                    <tr class="text-center">
                        <td>正常</td>
                        <td>轻度</td>
                        <td>中度</td>
                        <td>严重</td>
                        <td>重度</td>
                    </tr>
                    <tr>
                        <td>感知觉</td>
                        <?php $__FOR_START_27862__=0;$__FOR_END_27862__=5;for($i=$__FOR_START_27862__;$i < $__FOR_END_27862__;$i+=1){ ?>
                        <td class="text-center"><input id="sensory-<?php echo $i; ?>" class="magic-radio" type="radio" name="sensory" value="<?php echo $i; ?>"><label for="sensory-<?php echo $i; ?>"></label></td>
                        <?php } ?>
                    </tr>
                    <tr>
                        <td>口肌</td>
                        <?php $__FOR_START_2289__=0;$__FOR_END_2289__=5;for($i=$__FOR_START_2289__;$i < $__FOR_END_2289__;$i+=1){ ?>
                        <td class="text-center"><input id="oral-motor-<?php echo $i; ?>" class="magic-radio" type="radio" name="oral_motor" value="<?php echo $i; ?>"><label for="oral-motor-<?php echo $i; ?>"></label></td>
                        <?php } ?>
                    </tr>
                    <tr>
                        <td>行为</td>
                        <?php $__FOR_START_26776__=0;$__FOR_END_26776__=5;for($i=$__FOR_START_26776__;$i < $__FOR_END_26776__;$i+=1){ ?>
                        <td class="text-center"><input id="behavior-<?php echo $i; ?>" class="magic-radio" type="radio" name="behavior" value="<?php echo $i; ?>"><label for="behavior-<?php echo $i; ?>"></label></td>
                        <?php } ?>
                    </tr>
                    <tr>
                        <td>接受性语言</td>
                        <?php $__FOR_START_29307__=0;$__FOR_END_29307__=5;for($i=$__FOR_START_29307__;$i < $__FOR_END_29307__;$i+=1){ ?>
                        <td class="text-center"><input id="receptive-<?php echo $i; ?>" class="magic-radio" type="radio" name="receptive" value="<?php echo $i; ?>"><label for="receptive-<?php echo $i; ?>"></label></td>
                        <?php } ?>
                    </tr>
                    <tr>
                        <td>表达</td>
                        <?php $__FOR_START_14858__=0;$__FOR_END_14858__=5;for($i=$__FOR_START_14858__;$i < $__FOR_END_14858__;$i+=1){ ?>
                        <td class="text-center"><input id="expressive-<?php echo $i; ?>" class="magic-radio" type="radio" name="expressive" value="<?php echo $i; ?>"><label for="expressive-<?php echo $i; ?>"></label></td>
                        <?php } ?>
                    </tr>
                    <tr>
                        <td>运用/社交</td>
                        <?php $__FOR_START_14965__=0;$__FOR_END_14965__=5;for($i=$__FOR_START_14965__;$i < $__FOR_END_14965__;$i+=1){ ?>
                        <td class="text-center"><input id="social-<?php echo $i; ?>" class="magic-radio" type="radio" name="social" value="<?php echo $i; ?>"><label for="social-<?php echo $i; ?>"></label></td>
                        <?php } ?>
                    </tr>
                    <tr>
                        <td rowspan="5" class="text-center" style="vertical-align:middle;">其他能力</td>
                        <td>视听反应能力</td>
                        <?php $__FOR_START_7596__=0;$__FOR_END_7596__=5;for($i=$__FOR_START_7596__;$i < $__FOR_END_7596__;$i+=1){ ?>
                        <td class="text-center"><input id="visual-<?php echo $i; ?>" class="magic-radio" type="radio" name="visual" value="<?php echo $i; ?>"><label for="visual-<?php echo $i; ?>"></label></td>
                        <?php } ?>
                    </tr>
                    <tr>
                        <td>听觉反应能力</td>
                        <?php $__FOR_START_16223__=0;$__FOR_END_16223__=5;for($i=$__FOR_START_16223__;$i < $__FOR_END_16223__;$i+=1){ ?>
                        <td class="text-center"><input id="auditory-<?php echo $i; ?>" class="magic-radio" type="radio" name="auditory" value="<?php echo $i; ?>"><label for="auditory-<?php echo $i; ?>"></label></td>
                        <?php } ?>
                    </tr>
                    <tr>
                        <td>大肌肉能力</td>
                        <?php $__FOR_START_23550__=0;$__FOR_END_23550__=5;for($i=$__FOR_START_23550__;$i < $__FOR_END_23550__;$i+=1){ ?>
                        <td class="text-center"><input id="gross-motor-<?php echo $i; ?>" class="magic-radio" type="radio" name="gross_motor" value="<?php echo $i; ?>"><label for="gross-motor-<?php echo $i; ?>"></label></td>
                        <?php } ?>
                    </tr>
                    <tr>
                        <td>小肌肉能力</td>
                        <?php $__FOR_START_7097__=0;$__FOR_END_7097__=5;for($i=$__FOR_START_7097__;$i < $__FOR_END_7097__;$i+=1){ ?>
                        <td class="text-center"><input id="fine-motor-<?php echo $i; ?>" class="magic-radio" type="radio" name="fine_motor" value="<?php echo $i; ?>"><label for="fine-motor-<?php echo $i; ?>"></label></td>
                        <?php } ?>
                    </tr>
                    <tr>
                        <td>专注力</td>
                        <?php $__FOR_START_27008__=0;$__FOR_END_27008__=5;for($i=$__FOR_START_27008__;$i < $__FOR_END_27008__;$i+=1){ ?>
                        <td class="text-center"><input id="attentiveness-<?php echo $i; ?>" class="magic-radio" type="radio" name="attentiveness" value="<?php echo $i; ?>"><label for="attentiveness-<?php echo $i; ?>"></label></td>
                        <?php } ?>
                    </tr>
                </table>
                    
            </div>

            <!--Modal footer-->
            <div class="modal-footer">
                <input type="hidden" name="version" value="1">
                <button data-dismiss="modal" class="btn btn-default" type="button">关闭</button>
                <button class="btn btn-primary" type="submit">保存</button>
            </div>
            </form>
                
        </div>
    </div>
</div>

                                <?php endif; ?>
                            </div>
                            <div class="tab-pane fade" id="tab-10">
                                <?php if(!(empty($report['course']) || (($report['course'] instanceof \think\Collection || $report['course'] instanceof \think\Paginator ) && $report['course']->isEmpty()))): ?>
                                    <form class="form-horizontal" action="<?php echo url('admin/report/updateCourse',['id'=>$report['id']]); ?>" method="post" id="course-form">

    <p class="bord-btm pad-ver text-main text-bold">课程安排</p>
    
            
                <table class="table table-bordered">
                    <thead>
                        <tr >
                            <th rowspan="2" class="text-center">项目</th>
                            <th colspan="2" class="text-center">A</th>
                            <th colspan="2" class="text-center">B1</th>
                            <th class="text-center">B2</th>
                            <th class="text-center">B3</th>
                            <th class="text-center">B4</th>
                            <th class="text-center">B5</th>
                        </tr>
                        <tr class="text-center">
                            <th class="text-center">口肌</th>
                            <th class="text-center">发音</th>
                            <th class="text-center">认知理解</th>
                            <th class="text-center">语言表达</th>
                            <th class="text-center">触觉、前庭、本体、大小肌肉</th>
                            <th class="text-center">专注力</th>
                            <th class="text-center">社交行为</th>
                            <th class="text-center">视听觉</th>
                        </tr>

                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td >上课形式</td>
                            <td colspan="2">
                                <div class="checkbox">
                                    <input id="A-checkbox-1" class="magic-checkbox" type="checkbox" name="a_form_of_training[group]" value="1" <?php if(isset($report['course']['a_form_of_training']['group'])): ?>checked<?php endif; ?>>
                                    <label for="A-checkbox-1">小组</label>
                                </div>
                                <div class="checkbox">    
                                    <input id="A-checkbox-2" class="magic-checkbox" type="checkbox" name="a_form_of_training[individual]" value="1" <?php if(isset($report['course']['a_form_of_training']['individual'])): ?>checked<?php endif; ?>>
                                    <label for="A-checkbox-2">一对一</label>
                                </div>
                                <div class="checkbox">    
                                    <input id="A-checkbox-3" class="magic-checkbox" type="checkbox" name="a_form_of_training[two]" value="1" <?php if(isset($report['course']['a_form_of_training']['two'])): ?>checked<?php endif; ?>>
                                    <label for="A-checkbox-3">多对一</label>
                                </div>
                                <div class="input-group" style="margin:10px auto;">
                                    <input type="text" class="form-control" name="a_form_of_training_times_week" style="width:50px" value="<?php echo $report['course']['a_form_of_training_times_week']; ?>">
                                    <span class="input-group-addon">节\周</span>
                                </div>
                            </td>
                            <td colspan="2">
                                <div class="checkbox">
                                    <input id="B1-checkbox-1" class="magic-checkbox" type="checkbox" name="b1_form_of_training[group]" value="1" <?php if(isset($report['course']['b1_form_of_training']['group'])): ?>checked<?php endif; ?>>
                                    <label for="B1-checkbox-1">小组</label>
                                </div>
                                <div class="checkbox">    
                                    <input id="B1-checkbox-2" class="magic-checkbox" type="checkbox" name="b1_form_of_training[individual]" value="1" <?php if(isset($report['course']['b1_form_of_training']['individual'])): ?>checked<?php endif; ?>>
                                    <label for="B1-checkbox-2">一对一</label>
                                </div>
                                <div class="checkbox">    
                                    <input id="B1-checkbox-3" class="magic-checkbox" type="checkbox" name="b1_form_of_training[two]" value="1" <?php if(isset($report['course']['b1_form_of_training']['two'])): ?>checked<?php endif; ?>>
                                    <label for="B1-checkbox-3">多对一</label>
                                </div>
                                <div class="input-group" style="margin:10px auto;">
                                    <input type="text" class="form-control" name="b1_form_of_training_times_week" style="width:50px" value="<?php echo $report['course']['b1_form_of_training_times_week']; ?>">
                                    <span class="input-group-addon">节\周</span>
                                </div>
                            </td>
                            <td >
                                <div class="checkbox">
                                    <input id="b2-checkbox-1" class="magic-checkbox" type="checkbox" name="b2_form_of_training[group]" value="1" <?php if(isset($report['course']['b2_form_of_training']['group'])): ?>checked<?php endif; ?>>
                                    <label for="b2-checkbox-1">小组</label>
                                </div>
                                <div class="checkbox">    
                                    <input id="B2-checkbox-2" class="magic-checkbox" type="checkbox" name="b2_form_of_training[individual]" value="1" <?php if(isset($report['course']['b2_form_of_training']['individual'])): ?>checked<?php endif; ?>>
                                    <label for="B2-checkbox-2">一对一</label>
                                </div>
                                <div class="checkbox">    
                                    <input id="B2-checkbox-3" class="magic-checkbox" type="checkbox" name="b2_form_of_training[two]" value="1" <?php if(isset($report['course']['b2_form_of_training']['two'])): ?>checked<?php endif; ?>>
                                    <label for="B2-checkbox-3">多对一</label>
                                </div>
                                <div class="input-group" style="margin:10px auto;width:120px">
                                    <input type="text" class="form-control" name="b2_form_of_training_times_week" value="<?php echo $report['course']['b2_form_of_training_times_week']; ?>">
                                    <span class="input-group-addon">节\周</span>
                                </div>
                            </td>
                            <td>
                                <div class="checkbox">
                                    <input id="b3-checkbox-1" class="magic-checkbox" type="checkbox" name="b3_form_of_training[group]" value="1" <?php if(isset($report['course']['b3_form_of_training']['group'])): ?>checked<?php endif; ?>>
                                    <label for="b3-checkbox-1">小组</label>
                                </div>
                                <div class="checkbox">    
                                    <input id="B3-checkbox-2" class="magic-checkbox" type="checkbox" name="b3_form_of_training[individual]" value="1" <?php if(isset($report['course']['b3_form_of_training']['individual'])): ?>checked<?php endif; ?>>
                                    <label for="B3-checkbox-2">一对一</label>
                                </div>
                                <div class="checkbox">    
                                    <input id="B3-checkbox-3" class="magic-checkbox" type="checkbox" name="b3_form_of_training[two]" value="1" <?php if(isset($report['course']['b3_form_of_training']['two'])): ?>checked<?php endif; ?>>
                                    <label for="B3-checkbox-3">多对一</label>
                                </div>
                                <div class="input-group" style="margin:10px auto;width:120px">
                                    <input type="text" class="form-control" name="b3_form_of_training_times_week" value="<?php echo $report['course']['b3_form_of_training_times_week']; ?>">
                                    <span class="input-group-addon">节\周</span>
                                </div>
                            </td>
                            <td>
                                <div class="checkbox">
                                    <input id="b4-checkbox-1" class="magic-checkbox" type="checkbox" name="b4_form_of_training[group]" value="1" <?php if(isset($report['course']['b4_form_of_training']['group'])): ?>checked<?php endif; ?>>
                                    <label for="b4-checkbox-1">小组</label>
                                </div>
                                <div class="checkbox">    
                                    <input id="B4-checkbox-2" class="magic-checkbox" type="checkbox" name="b4_form_of_training[individual]" value="1" <?php if(isset($report['course']['b4_form_of_training']['individual'])): ?>checked<?php endif; ?>>
                                    <label for="B4-checkbox-2">一对一</label>
                                </div>
                                <div class="checkbox">    
                                    <input id="B4-checkbox-3" class="magic-checkbox" type="checkbox" name="b4_form_of_training[two]" value="1" <?php if(isset($report['course']['b4_form_of_training']['two'])): ?>checked<?php endif; ?>>
                                    <label for="B4-checkbox-3">多对一</label>
                                </div>
                                <div class="input-group" style="margin:10px auto;width:120px">
                                    <input type="text" class="form-control" name="b4_form_of_training_times_week" value="<?php echo $report['course']['b4_form_of_training_times_week']; ?>">
                                    <span class="input-group-addon">节\周</span>
                                </div>
                            </td>
                            <td>
                                <div class="checkbox">
                                    <input id="b5-checkbox-1" class="magic-checkbox" type="checkbox" name="b5_form_of_training[group]" value="1" <?php if(isset($report['course']['b5_form_of_training']['group'])): ?>checked<?php endif; ?>>
                                    <label for="b5-checkbox-1">小组</label>
                                </div>
                                <div class="checkbox">    
                                    <input id="B5-checkbox-2" class="magic-checkbox" type="checkbox" name="b5_form_of_training[individual]" value="1" <?php if(isset($report['course']['b5_form_of_training']['individual'])): ?>checked<?php endif; ?>>
                                    <label for="B5-checkbox-2">一对一</label>
                                </div>
                                <div class="checkbox">    
                                    <input id="B5-checkbox-3" class="magic-checkbox" type="checkbox" name="b5_form_of_training[two]" value="1" <?php if(isset($report['course']['b5_form_of_training']['two'])): ?>checked<?php endif; ?>>
                                    <label for="B5-checkbox-3">多对一</label>
                                </div>
                                <div class="input-group" style="margin:10px auto;width:120px">
                                    <input type="text" class="form-control" name="b5_form_of_training_times_week" value="<?php echo $report['course']['b5_form_of_training_times_week']; ?>">
                                    <span class="input-group-addon">节\周</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">时间安排（需3~5个工作日）</td>
                            <td colspan="8">
                                <div class="input-group" style="">
                                    <span class="input-group-addon">每周</span>
                                    <input type="text" class="form-control" name="days_per_week" value="<?php echo $report['course']['days_per_week']; ?>">
                                    <span class="input-group-addon">天</span>

                                    <span class="input-group-addon" >每天</span>
                                    <input type="text" class="form-control" name="classes_per_day" value="<?php echo $report['course']['classes_per_day']; ?>">
                                    <span class="input-group-addon">节</span>
                                </div>
                                <p class="pad-ver">预计上课时间：</p>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">周</span>
                                            <input type="text" class="form-control" name="planed_schedule[1][name]" value="<?php echo $report['course']['planed_schedule']['1']['name']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="checkbox">
                                            <input id="planed-checkbox-1" class="magic-checkbox" type="checkbox" name="planed_schedule[1][mor]" value="1" <?php if(isset($report['course']['planed_schedule']['1']['mor'])): ?>checked<?php endif; ?>>
                                            <label for="planed-checkbox-1">上午</label>
                                            <input id="planed-checkbox-2" class="magic-checkbox" type="checkbox" name="planed_schedule[1][afternoon]" value="1" <?php if(isset($report['course']['planed_schedule']['1']['afternoon'])): ?>checked<?php endif; ?>>
                                            <label for="planed-checkbox-2">下午</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">周</span>
                                            <input type="text" class="form-control" name="planed_schedule[2][name]" value="<?php echo $report['course']['planed_schedule']['2']['name']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="checkbox">
                                            <input id="planed-checkbox-3" class="magic-checkbox" type="checkbox" name="planed_schedule[2][mor]" value="1" <?php if(isset($report['course']['planed_schedule']['2']['mor'])): ?>checked<?php endif; ?>>
                                            <label for="planed-checkbox-3">上午</label>
                                            <input id="planed-checkbox-4" class="magic-checkbox" type="checkbox" name="planed_schedule[2][afternoon]" value="1" <?php if(isset($report['course']['planed_schedule']['2']['afternoon'])): ?>checked<?php endif; ?>>
                                            <label for="planed-checkbox-4">下午</label>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">周</span>
                                            <input type="text" class="form-control" name="planed_schedule[3][name]" value="<?php echo $report['course']['planed_schedule']['3']['name']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="checkbox">
                                            <input id="planed-checkbox-5" class="magic-checkbox" type="checkbox" name="planed_schedule[3][mor]" value="1" <?php if(isset($report['course']['planed_schedule']['3']['mor'])): ?>checked<?php endif; ?>>
                                            <label for="planed-checkbox-5">上午</label>
                                            <input id="planed-checkbox-6" class="magic-checkbox" type="checkbox" name="planed_schedule[3][afternoon]" value="1" <?php if(isset($report['course']['planed_schedule']['3']['afternoon'])): ?>checked<?php endif; ?>>
                                            <label for="planed-checkbox-6">下午</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">周</span>
                                            <input type="text" class="form-control" name="planed_schedule[4][name]" value="<?php echo $report['course']['planed_schedule']['4']['name']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="checkbox">
                                            <input id="planed-checkbox-7" class="magic-checkbox" type="checkbox" name="planed_schedule[4][mor]" value="1" <?php if(isset($report['course']['planed_schedule']['4']['mor'])): ?>checked<?php endif; ?>>
                                            <label for="planed-checkbox-7">上午</label>
                                            <input id="planed-checkbox-8" class="magic-checkbox" type="checkbox" name="planed_schedule[4][afternoon]" value="1" <?php if(isset($report['course']['planed_schedule']['4']['afternoon'])): ?>checked<?php endif; ?>>
                                            <label for="planed-checkbox-8">下午</label>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">本阶段需要</td>
                            <td colspan="8">
                                <?php if(is_array($report['course']['current_needs']) || $report['course']['current_needs'] instanceof \think\Collection || $report['course']['current_needs'] instanceof \think\Paginator): $i = 0; $__LIST__ = $report['course']['current_needs'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="current_needs[<?php echo $key; ?>][name]" value="<?php echo $vo['name']; ?>">
                                    <span class="input-group-addon">课</span>
                                    <input type="text" class="form-control" name="current_needs[<?php echo $key; ?>][sessions]" value="<?php echo $vo['sessions']; ?>">
                                    <span class="input-group-addon">节</span>
                                    <input type="text" class="form-control" name="current_needs[<?php echo $key; ?>][type]" value="<?php echo $vo['type']; ?>">
                                    <span class="input-group-addon">形式</span>
                                    <input type="text" class="form-control" name="current_needs[<?php echo $key; ?>][level]" value="<?php echo $vo['level']; ?>">
                                    <span class="input-group-addon">级别</span>
                                </div>
                                <br>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td>情况备注</td>
                            <td colspan="8">
                                <textarea class="form-control" name="notes"><?php echo $report['course']['notes']; ?></textarea>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td>评估后客户反馈</td>
                            <td colspan="8">
                                <textarea class="form-control" name="feedback"><?php echo $report['course']['feedback']; ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="9">
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">开始上课日期</label>
                                    <div class="col-lg-3">
                                        <input type="text" class="form-control" id="start-date" name="start_date" <?php if(!(empty($report['course']['start_date']) || (($report['course']['start_date'] instanceof \think\Collection || $report['course']['start_date'] instanceof \think\Paginator ) && $report['course']['start_date']->isEmpty()))): ?>value="<?php echo date('Y-m-d',$report['course']['start_date']); ?>"<?php endif; ?>>
                                    </div>

                                    <label class="col-lg-2 control-label">结课日期</label>
                                    <div class="col-lg-3">
                                        <input type="text" class="form-control" id="end-date" name="end_date" <?php if(!(empty($report['course']['end_date']) || (($report['course']['end_date'] instanceof \think\Collection || $report['course']['end_date'] instanceof \think\Paginator ) && $report['course']['end_date']->isEmpty()))): ?>value="<?php echo date('Y-m-d',$report['course']['end_date']); ?>"<?php endif; ?>>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            
        

            <!--Modal footer-->
    <div class="panel-footer">
        <div class="row">
            <div class="col-sm-12 text-center">
                <input type="hidden" name="version" value="1">
                <button class="btn btn-mint" type="submit">更新</button>
            </div>
        </div>
        
    </div>
</form>
                                <?php else: ?>
                                    <div class="row">
                                        <div class="col-sm-12">
                                        <p class="text-center">该学员暂无此评估记录</p>
                                        <button data-target="#report-course-model" data-toggle="modal" class="btn btn-block btn-primary">新增</button>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="report-course-model" role="dialog" tabindex="-1" aria-labelledby="report-course-model" aria-hidden="true">
    <div class="modal-dialog" style="width: 1200px;">
        <div class="modal-content">

            <!--Modal header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                <h4 class="modal-title">新增课程安排</h4>
            </div>

            <!--Modal body-->
            <form class="form-horizontal" action="<?php echo url('admin/report/updateCourse',['id'=>$report['id']]); ?>" method="post" id="course-form">
            <div class="modal-body">
                <p class="bord-btm pad-ver text-main text-bold">课程安排</p>
                <div class="row">
                    <div class="col-sm-12">
                        
                        <table class="table table-bordered">
                            <thead>
                                <tr >
                                    <th rowspan="2" class="text-center">项目</th>
                                    <th colspan="2" class="text-center">A</th>
                                    <th colspan="2" class="text-center">B1</th>
                                    <th class="text-center">B2</th>
                                    <th class="text-center">B3</th>
                                    <th class="text-center">B4</th>
                                    <th class="text-center">B5</th>
                                </tr>
                                <tr class="text-center">
                                    <th class="text-center">口肌</th>
                                    <th class="text-center">发音</th>
                                    <th class="text-center">认知理解</th>
                                    <th class="text-center">语言表达</th>
                                    <th class="text-center">触觉、前庭、本体、大小肌肉</th>
                                    <th class="text-center">专注力</th>
                                    <th class="text-center">社交行为</th>
                                    <th class="text-center">视听觉</th>
                                </tr>

                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td >上课形式</td>
                                    <td colspan="2">
                                        <div class="checkbox">
                                            <input id="A-checkbox-1" class="magic-checkbox" type="checkbox" name="a_form_of_training[group]" value="1">
                                            <label for="A-checkbox-1">小组</label>
                                        </div>
                                        <div class="checkbox">    
                                            <input id="A-checkbox-2" class="magic-checkbox" type="checkbox" name="a_form_of_training[individual]" value="2">
                                            <label for="A-checkbox-2">一对一</label>
                                        </div>
                                        <div class="checkbox">    
                                            <input id="A-checkbox-3" class="magic-checkbox" type="checkbox" name="a_form_of_training[two]" value="3">
                                            <label for="A-checkbox-3">多对一</label>
                                        </div>
                                        <div class="input-group" style="margin:10px auto;">
                                            <input type="text" class="form-control" name="a_form_of_training_times_week" style="width:50px">
                                            <span class="input-group-addon">节\周</span>
                                        </div>
                                    </td>
                                    <td colspan="2">
                                        <div class="checkbox">
                                            <input id="B1-checkbox-1" class="magic-checkbox" type="checkbox" name="b1_form_of_training[group]" value="1">
                                            <label for="B1-checkbox-1">小组</label>
                                        </div>
                                        <div class="checkbox">    
                                            <input id="B1-checkbox-2" class="magic-checkbox" type="checkbox" name="b1_form_of_training[individual]" value="2">
                                            <label for="B1-checkbox-2">一对一</label>
                                        </div>
                                        <div class="checkbox">    
                                            <input id="B1-checkbox-3" class="magic-checkbox" type="checkbox" name="b1_form_of_training[two]" value="3">
                                            <label for="B1-checkbox-3">多对一</label>
                                        </div>
                                        <div class="input-group" style="margin:10px auto;">
                                            <input type="text" class="form-control" name="b1_form_of_training_times_week" style="width:50px">
                                            <span class="input-group-addon">节\周</span>
                                        </div>
                                    </td>
                                    <td >
                                        <div class="checkbox">
                                            <input id="b2-checkbox-1" class="magic-checkbox" type="checkbox" name="b2_form_of_training[group]" value="1">
                                            <label for="b2-checkbox-1">小组</label>
                                        </div>
                                        <div class="checkbox">    
                                            <input id="B2-checkbox-2" class="magic-checkbox" type="checkbox" name="b2_form_of_training[individual]" value="2">
                                            <label for="B2-checkbox-2">一对一</label>
                                        </div>
                                        <div class="checkbox">    
                                            <input id="B2-checkbox-3" class="magic-checkbox" type="checkbox" name="b2_form_of_training[two]" value="3">
                                            <label for="B2-checkbox-3">多对一</label>
                                        </div>
                                        <div class="input-group" style="margin:10px auto;width:120px">
                                            <input type="text" class="form-control" name="b2_form_of_training_times_week" style="">
                                            <span class="input-group-addon">节\周</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkbox">
                                            <input id="b3-checkbox-1" class="magic-checkbox" type="checkbox" name="b3_form_of_training[group]" value="1">
                                            <label for="b3-checkbox-1">小组</label>
                                        </div>
                                        <div class="checkbox">    
                                            <input id="B3-checkbox-2" class="magic-checkbox" type="checkbox" name="b3_form_of_training[individual]" value="2">
                                            <label for="B3-checkbox-2">一对一</label>
                                        </div>
                                        <div class="checkbox">    
                                            <input id="B3-checkbox-3" class="magic-checkbox" type="checkbox" name="b3_form_of_training[two]" value="3">
                                            <label for="B3-checkbox-3">多对一</label>
                                        </div>
                                        <div class="input-group" style="margin:10px auto;width:120px">
                                            <input type="text" class="form-control" name="b3_form_of_training_times_week" style="">
                                            <span class="input-group-addon">节\周</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkbox">
                                            <input id="b4-checkbox-1" class="magic-checkbox" type="checkbox" name="b4_form_of_training[group]" value="1">
                                            <label for="b4-checkbox-1">小组</label>
                                        </div>
                                        <div class="checkbox">    
                                            <input id="B4-checkbox-2" class="magic-checkbox" type="checkbox" name="b4_form_of_training[individual]" value="2">
                                            <label for="B4-checkbox-2">一对一</label>
                                        </div>
                                        <div class="checkbox">    
                                            <input id="B4-checkbox-3" class="magic-checkbox" type="checkbox" name="b4_form_of_training[two]" value="3">
                                            <label for="B4-checkbox-3">多对一</label>
                                        </div>
                                        <div class="input-group" style="margin:10px auto;width:120px">
                                            <input type="text" class="form-control" name="b4_form_of_training_times_week" style="">
                                            <span class="input-group-addon">节\周</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkbox">
                                            <input id="b5-checkbox-1" class="magic-checkbox" type="checkbox" name="b5_form_of_training[group]" value="1">
                                            <label for="b5-checkbox-1">小组</label>
                                        </div>
                                        <div class="checkbox">    
                                            <input id="B5-checkbox-2" class="magic-checkbox" type="checkbox" name="b5_form_of_training[individual]" value="2">
                                            <label for="B5-checkbox-2">一对一</label>
                                        </div>
                                        <div class="checkbox">    
                                            <input id="B5-checkbox-3" class="magic-checkbox" type="checkbox" name="b5_form_of_training[two]" value="3">
                                            <label for="B5-checkbox-3">多对一</label>
                                        </div>
                                        <div class="input-group" style="margin:10px auto;width:120px">
                                            <input type="text" class="form-control" name="b5_form_of_training_times_week" style="">
                                            <span class="input-group-addon">节\周</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">时间安排（需3~5个工作日）</td>
                                    <td colspan="8">
                                        <div class="input-group" style="">
                                            <span class="input-group-addon">每周</span>
                                            <input type="text" class="form-control" name="days_per_week" style="">
                                            <span class="input-group-addon">天</span>

                                            <span class="input-group-addon" >每天</span>
                                            <input type="text" class="form-control" name="classes_per_day" style="">
                                            <span class="input-group-addon">节</span>
                                        </div>
                                        <p class="pad-ver">预计上课时间：</p>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="input-group">
                                                    <span class="input-group-addon">周</span>
                                                    <input type="text" class="form-control" name="planed_schedule[1][name]" style="">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="checkbox">
                                                    <input id="planed-checkbox-1" class="magic-checkbox" type="checkbox" name="planed_schedule[1][mor]" value="1">
                                                    <label for="planed-checkbox-1">上午</label>
                                                    <input id="planed-checkbox-2" class="magic-checkbox" type="checkbox" name="planed_schedule[1][afternoon]" value="1">
                                                    <label for="planed-checkbox-2">下午</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="input-group">
                                                    <span class="input-group-addon">周</span>
                                                    <input type="text" class="form-control" name="planed_schedule[2][name]" style="">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="checkbox">
                                                    <input id="planed-checkbox-3" class="magic-checkbox" type="checkbox" name="planed_schedule[2][mor]" value="1">
                                                    <label for="planed-checkbox-3">上午</label>
                                                    <input id="planed-checkbox-4" class="magic-checkbox" type="checkbox" name="planed_schedule[2][afternoon]" value="1">
                                                    <label for="planed-checkbox-4">下午</label>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="input-group">
                                                    <span class="input-group-addon">周</span>
                                                    <input type="text" class="form-control" name="planed_schedule[3][name]" style="">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="checkbox">
                                                    <input id="planed-checkbox-5" class="magic-checkbox" type="checkbox" name="planed_schedule[3][mor]" value="1">
                                                    <label for="planed-checkbox-5">上午</label>
                                                    <input id="planed-checkbox-6" class="magic-checkbox" type="checkbox" name="planed_schedule[3][afternoon]" value="1">
                                                    <label for="planed-checkbox-6">下午</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="input-group">
                                                    <span class="input-group-addon">周</span>
                                                    <input type="text" class="form-control" name="planed_schedule[4][name]" style="">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="checkbox">
                                                    <input id="planed-checkbox-7" class="magic-checkbox" type="checkbox" name="planed_schedule[4][mor]" value="1">
                                                    <label for="planed-checkbox-7">上午</label>
                                                    <input id="planed-checkbox-8" class="magic-checkbox" type="checkbox" name="planed_schedule[4][afternoon]" value="1">
                                                    <label for="planed-checkbox-8">下午</label>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">本阶段需要</td>
                                    <td colspan="8">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="current_needs[1][name]" style="">
                                            <span class="input-group-addon">课</span>
                                            <input type="text" class="form-control" name="current_needs[1][sessions]" style="">
                                            <span class="input-group-addon">节</span>
                                            <input type="text" class="form-control" name="current_needs[1][type]" style="">
                                            <span class="input-group-addon">形式</span>
                                            <input type="text" class="form-control" name="current_needs[1][level]" style="">
                                            <span class="input-group-addon">级别</span>
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="current_needs[2][name]" style="">
                                            <span class="input-group-addon">课</span>
                                            <input type="text" class="form-control" name="current_needs[2][sessions]" style="">
                                            <span class="input-group-addon">节</span>
                                            <input type="text" class="form-control" name="current_needs[2][type]" style="">
                                            <span class="input-group-addon">形式</span>
                                            <input type="text" class="form-control" name="current_needs[2][level]" style="">
                                            <span class="input-group-addon">级别</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>情况备注</td>
                                    <td colspan="8">
                                        <textarea class="form-control" name="notes"></textarea>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>评估后客户反馈</td>
                                    <td colspan="8">
                                        <textarea class="form-control" name="feedback"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="9">
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">开始上课日期</label>
                                            <div class="col-lg-3">
                                                <input type="text" class="form-control" id="start-date" name="start_date">
                                            </div>

                                            <label class="col-lg-2 control-label">结课日期</label>
                                            <div class="col-lg-3">
                                                <input type="text" class="form-control" id="end-date" name="end_date">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>

            <!--Modal footer-->
            <div class="modal-footer">
                <input type="hidden" name="version" value="1">
                <button data-dismiss="modal" class="btn btn-default" type="button">关闭</button>
                <button class="btn btn-primary" type="submit">保存</button>
            </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    
</script>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

            <!--===================================================-->
            <!--END CONTENT CONTAINER-->
            
            <!--ASIDE-->
            <!--===================================================-->
            
            

            <!--===================================================-->
            <!--END ASIDE-->
      
            <!--MAIN NAVIGATION-->
            <!--===================================================-->
            <nav id="mainnav-container">
    <div id="mainnav">

        <!--Menu-->
        <!--================================-->
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">

                    <!--Profile Widget-->
                    <!--================================-->
                    <div id="mainnav-profile" class="mainnav-profile">
                        <div class="profile-wrap">
                            <div class="pad-btm">
                                <img class="img-circle img-sm img-border" src="<?php echo $userself['profile']['avatar']; ?>" alt="Profile Picture">
                            </div>
                            <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                <span class="pull-right dropdown-toggle">
                                    <i class="dropdown-caret"></i>
                                </span>
                                <p class="mnp-name"><?php echo $userself['profile']['nickname']; ?></p>
                                <span class="mnp-desc"><?php echo $userself['email']; ?></span>
                            </a>
                        </div>
                        <div id="profile-nav" class="collapse list-group bg-trans">
                            <a href="<?php echo url('admin/user/profile'); ?>" class="list-group-item">
                                <i class="demo-pli-male icon-lg icon-fw"></i> 个人信息
                            </a>
                            <a href="<?php echo url('admin/admin/logout'); ?>" class="list-group-item">
                                <i class="demo-pli-unlock icon-lg icon-fw"></i> 退出登录
                            </a>
                        </div>
                    </div>

                    <ul id="mainnav-menu" class="list-group">
            
                        <!--Category name-->
                        <li class="list-header">菜单</li>
            
                        <!--Menu list item-->
                        <li>
                            <a href="<?php echo url('admin/index/index'); ?>">
                                <i class="demo-psi-home"></i>
                                <span class="menu-title">
                                    <strong>个人主页</strong>
                                </span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="<?php echo url('admin/assess/createOne'); ?>">
                                <i class="demo-psi-pen-5"></i>
                                <span class="menu-title">
                                    <strong>历史数据增加</strong>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo url('admin/member/create'); ?>">
                                <i class="demo-psi-pen-5"></i>
                                <span class="menu-title">
                                    <strong>新增学员</strong>
                                </span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo url('admin/member/index'); ?>">
                                <i class="demo-psi-pen-5"></i>
                                <span class="menu-title">
                                    <strong>学员库</strong>
                                </span>
                            </a>
                        </li>
                        <?php if(in_array(($userself['roles']['0']['id']), explode(',',"1"))): ?>
                        <li>
                            <a href="#">
                                <i class="demo-psi-gear-2"></i>
                                <span class="menu-title">
                                    <strong>网站管理</strong>
                                </span>
                                <i class="arrow"></i>
                            </a>
                            <ul class="collapse">
                                <li><a href="<?php echo url('admin/role/index'); ?>">权限角色</a></li>
                                <li><a href="<?php echo url('admin/user/indexGroup'); ?>">管理小组</a></li>
                                <li><a href="<?php echo url('admin/user/index'); ?>">用户管理</a></li>
                                <li><a href="<?php echo url('admin/config/log'); ?>">网站日志</a></li>
                            </ul>
                        </li>
                        <?php endif; ?>
                                          
                    <!--================================-->
                    <!--End widget-->

                </div>
            </div>
        </div>
        <!--================================-->
        <!--End menu-->
        <script type="text/javascript">
            highlight_subnav("<?php echo url(\think\Request::instance()->module().'/'.\think\Request::instance()->controller().'/'.\think\Request::instance()->action(),\think\Request::instance()->get()); ?>")
        </script>
    </div>
</nav>
            <!--===================================================-->
            <!--END MAIN NAVIGATION-->

        </div>

        <!-- FOOTER -->
        <!--===================================================-->
        <footer id="footer">

    <!-- Visible when footer positions are fixed -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="show-fixed pull-right">
        You have <a href="#" class="text-bold text-main"><span class="label label-danger">3</span> pending action.</a>
    </div>


    <!-- Visible when footer positions are static -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="hide-fixed pull-right pad-rgt">
        <?php echo ceil(THINK_START_MEM/1024); ?>KB of <strong>8G内存</strong> 被占用.
    </div>

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- Remove the class "show-fixed" and "hide-fixed" to make the content always appears. -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

    <p class="pad-lft">&#0169; 2017 启音言语康复科技（深圳）有限公司</p>

</footer>
        
        <!--===================================================-->
        <!-- END FOOTER -->

        <!-- SCROLL PAGE BUTTON -->
        <!--===================================================-->
        <button class="scroll-top btn">
            <i class="pci-chevron chevron-up"></i>
        </button>
        <!--===================================================-->

    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->

    <!-- SETTINGS - DEMO PURPOSE ONLY -->
    <!--===================================================-->
    
    
    <!--===================================================-->
    <!-- END SETTINGS -->
    
<script type="text/javascript">
$(function(){
    // Javascript to enable link to tab
    var url = document.location.toString();
    if (url.match('#')) {
        $('#myTab a[href="#'+url.split('#')[1]+'"]').tab('show') ;
    }
    // Change hash for page-reload
    $('#myTab a').on('shown.bs.tab', function (e) {
        window.location.hash = e.target.hash;
    }); 
    $('#myTab a').click(function (e) {
      $(this).tab('show');
    });
})
    
</script>

</body>
</html>