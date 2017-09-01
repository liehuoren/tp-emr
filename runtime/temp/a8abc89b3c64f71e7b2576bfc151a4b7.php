<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:74:"D:\wamp64\www\tp-emr\public/../application/admin\view\assess\create-c.html";i:1503732557;s:70:"D:\wamp64\www\tp-emr\public/../application/admin\view\Public\base.html";i:1504166997;s:72:"D:\wamp64\www\tp-emr\public/../application/admin\view\public\header.html";i:1502359014;s:71:"D:\wamp64\www\tp-emr\public/../application/admin\view\public\aside.html";i:1502243740;s:73:"D:\wamp64\www\tp-emr\public/../application/admin\view\public\mainnav.html";i:1503561480;s:72:"D:\wamp64\www\tp-emr\public/../application/admin\view\public\footer.html";i:1502275958;s:73:"D:\wamp64\www\tp-emr\public/../application/admin\view\public\setting.html";i:1502243791;}*/ ?>
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
        <h1 class="page-header text-overflow">历史数据新增-第四页</h1>
    </div>

    <!--Breadcrumb-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <ol class="breadcrumb">
        <li><a href="<?php echo url('admin/index/index'); ?>">主页</a></li>
        <li class="active">学员管理-新增</li>
    </ol>

    <div id="page-content">
        <form action="<?php echo url('admin/assess/saveFour',['id'=>$report_id]); ?>" method="post" class="form-horizontal" id="member-form">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">新增学员信息-评估报告</h3>
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
                    <p class="bord-btm pad-ver text-main text-bold">评估报告</p>
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
                            <td colspan="2">勺子喂吃（Purees）</td>
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
                            <td colspan="4">
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
                                    <div class="col-sm-1">
                                        <select class="form-control" name="lips[closure]"><option></option><option value="1">√</option><option value="2">√×</option><option value="0">×</option></select>
                                    </div>
                                    <label class="col-sm-1 control-label">展唇</label>
                                    <div class="col-sm-1">
                                        <select class="form-control" name="lips[stretch]"><option></option><option value="1">√</option><option value="2">√×</option><option value="0">×</option></select>
                                    </div>
                                    <label class="col-sm-1 control-label">圆唇</label>
                                    <div class="col-sm-1">
                                        <select class="form-control" name="lips[round]"><option></option><option value="1">√</option><option value="2">√×</option><option value="0">×</option></select>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="8">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">合唇用压舌棒</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="lips_closure" class="form-control">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="8">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">纽扣拉力训练器</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="lips_button_pull" class="form-control">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="8">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">脆骨下唇回缩练习</label>
                                    <div class="col-sm-3">
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
    
</body>
</html>