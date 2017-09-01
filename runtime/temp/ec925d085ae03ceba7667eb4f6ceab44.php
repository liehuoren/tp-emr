<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:74:"D:\wamp64\www\tp-emr\public/../application/admin\view\assess\create-g.html";i:1504000639;s:70:"D:\wamp64\www\tp-emr\public/../application/admin\view\Public\base.html";i:1504166997;s:72:"D:\wamp64\www\tp-emr\public/../application/admin\view\public\header.html";i:1502359014;s:71:"D:\wamp64\www\tp-emr\public/../application/admin\view\public\aside.html";i:1502243740;s:73:"D:\wamp64\www\tp-emr\public/../application/admin\view\public\mainnav.html";i:1503561480;s:72:"D:\wamp64\www\tp-emr\public/../application/admin\view\public\footer.html";i:1502275958;s:73:"D:\wamp64\www\tp-emr\public/../application/admin\view\public\setting.html";i:1502243791;}*/ ?>
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
        <h1 class="page-header text-overflow">历史数据新增-第八页</h1>
    </div>

    <!--Breadcrumb-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <ol class="breadcrumb">
        <li><a href="<?php echo url('admin/index/index'); ?>">主页</a></li>
        <li class="active">学员管理-新增</li>
    </ol>

    <div id="page-content">
        <form action="<?php echo url('admin/assess/saveEight',['id'=>$report_id]); ?>" method="post" class="form-horizontal" id="member-form">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">新增学员信息-课程安排</h3>
            </div> 
            <div class="panel-body">
                <p class="bord-btm pad-ver text-main text-bold">基本资料</p>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">学员姓名</label>
                            <div class="col-lg-7">
                                <input type="hidden" name="stu_id" value="<?php echo $info['id']; ?>">
                                <input type="text" class="form-control" placeholder="" value="<?php echo $info['name']; ?>" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">性别</label>
                            <div class="col-lg-7">
                                <input type="text" class="form-control" placeholder="" value="<?php echo $info['sex']; ?>" disabled>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">出生日期</label>
                            <div class="col-lg-7">
                                <input type="text" class="form-control" id="birth-date" value="<?php echo $info['birthday']; ?>" disabled>
                            </div>
                        </div>
                    </div>
                </div>
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

                <div class="panel-footer">
                    <div class="row">
                        <div class="col-sm-7 col-sm-offset-4">
                            <input type="hidden" name="version" value="1">
                            <button class="btn btn-primary" type="submit">保存并下一步</button>
                            <a href="javascript:;" onclick="location.reload()" class="btn btn-info"> 重置</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
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
    $('#start-date').mask('9999-99-99',{placeholder: "____-__-__"});
    $('#end-date').mask('9999-99-99',{placeholder: "____-__-__"});
</script>

</body>
</html>