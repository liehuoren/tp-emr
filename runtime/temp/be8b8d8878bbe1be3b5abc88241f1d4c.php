<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:70:"D:\wamp64\www\tp-emr\public/../application/admin\view\member\edit.html";i:1503414355;s:70:"D:\wamp64\www\tp-emr\public/../application/admin\view\Public\base.html";i:1504166997;s:72:"D:\wamp64\www\tp-emr\public/../application/admin\view\public\header.html";i:1502359014;s:71:"D:\wamp64\www\tp-emr\public/../application/admin\view\public\aside.html";i:1502243740;s:73:"D:\wamp64\www\tp-emr\public/../application/admin\view\public\mainnav.html";i:1503561480;s:72:"D:\wamp64\www\tp-emr\public/../application/admin\view\public\footer.html";i:1502275958;s:73:"D:\wamp64\www\tp-emr\public/../application/admin\view\public\setting.html";i:1502243791;}*/ ?>
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
<script src="__JS__/member/member.js"></script>

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
        <h1 class="page-header text-overflow">信息修改</h1>
    </div>

    <!--Breadcrumb-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <ol class="breadcrumb">
        <li><a href="<?php echo url('admin/index/index'); ?>">主页</a></li>
        <li><a href="<?php echo url('admin/member/index'); ?>">学员库</a></li>
        <li class="active">学员管理-信息修改</li>
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
                        <a href="#" class="list-group-item">
                            <span class="text-main">建档日期：</span><?php echo $info['reg_time']; ?>
                        </a>
                        <a href="#" class="list-group-item">
                            <span class="text-main">最近修改日期：</span><?php echo $info['update_time']; ?>
                        </a>
                        <a href="#" class="list-group-item">
                            <span class="text-main">最近修改人：</span><?php echo $info['update_name']; ?>
                        </a>
                        <a href="#" class="list-group-item">
                            <span class="text-main">状态：</span><?php echo $info['status']; ?>
                            <span class="badge badge-<?php echo $info['status_class']; ?> badge-icon badge-fw pull-right"></span>
                        </a>
                        
                    </div>
                    <p class="text-semibold text-main pad-all mar-no">病历信息</p>
                    <div class="list-group bg-trans pad-btm bord-btm">
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
                <form action="<?php echo url('admin/member/update',['id'=>$info['id']]); ?>" method="post" class="form-horizontal" id="member-form">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-control">
                            <a href="javascript:void(0)" class="btn" onclick="location.reload()"><i class="demo-psi-repeat-2 icon-fw"></i> </a>
                                
                            <div class="btn-group">
                                <button data-toggle="dropdown" class="dropdown-toggle btn" aria-expanded="false">
                                    <i class="caret"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="<?php echo url('admin/member/read',['id'=>$info['id']]); ?>">查看</a></li>
                                    <li><a href="<?php echo url('admin/member/setStatus',['id'=>$info['id'],'status'=>1]); ?>">通过审核</a></li>
                                    <li><a href="<?php echo url('admin/member/setStatus',['id'=>$info['id'],'status'=>0]); ?>">未通过审核</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo url('admin/member/delete',['id'=>$info['id']]); ?>">删除</a></li>
                                </ul>
                            </div>
                        </div>
                        <h3 class="panel-title">信息修改</h3>
                    </div> 
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">学员姓名</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="form-control" name="name" placeholder="" value="<?php echo $info['name']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">出生日期</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="form-control" id="birth-date" name="birthday" value="<?php echo $info['birthday']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">性别</label>
                                    <div class="col-lg-7">
                                        <div class="radio">
                                            <!-- Inline radio buttons -->
                                            <input id="form-sex0" class="magic-radio" type="radio" name="sex" value="0" <?php if($info['sex'] == '未知'): ?>checked<?php endif; ?>>
                                            <label for="form-sex0">未知</label>
                                            <input id="form-sex1" class="magic-radio" type="radio" name="sex" value="1" <?php if($info['sex'] == '男'): ?>checked<?php endif; ?>>
                                            <label for="form-sex1">男</label>
                
                                            <input id="form-sex2" class="magic-radio" type="radio" name="sex" value="2" <?php if($info['sex'] == '女'): ?>checked<?php endif; ?>>
                                            <label for="form-sex2">女</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">所在校区</label>
                                    <div class="col-lg-7">
                                        <?php echo widget('center/index',['centers_id'=>$info['centers']['id']]); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">医学临床症状</label>
                                    <div class="col-lg-7">
                                        <?php echo widget('diagnosis/index',['dia_id'=>$info['diagnosis']]); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">言语问题</label>
                                    <div class="col-lg-7">
                                        <?php echo widget('problem/index',['pro_id'=>$info['problem']]); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">渠道来源</label>
                                    <div class="col-lg-7">
                                        <select id="underway-chosen-select" tabindex="1" name="first_under" aria-hidden="true" class="form-control">
                                            <option></option>
                                            <?php if(is_array($underway) || $underway instanceof \think\Collection || $underway instanceof \think\Paginator): $i = 0; $__LIST__ = $underway;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                                <option value="<?php echo $vo['id']; ?>" <?php if($info['first_under'] == $vo['id']): ?>selected<?php endif; ?>><?php echo $vo['name']; ?></option>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">首次联系方式</label>
                                    <div class="col-lg-7">
                                        <select data-placeholder="请选择.." id="touchway-chosen-select" tabindex="1" name="first_touch" class="form-control">
                                            <option></option>
                                            <?php if(is_array($touchway) || $touchway instanceof \think\Collection || $touchway instanceof \think\Paginator): $i = 0; $__LIST__ = $touchway;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                                <option value="<?php echo $vo['id']; ?>" <?php if($info['first_touch'] == $vo['id']): ?>selected<?php endif; ?>><?php echo $vo['name']; ?></option>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">语言种类</label>
                                    <div class="col-lg-7 input-group date">
                                        <input type="text" class="form-control" name="language" value="<?php echo $info['language']; ?>">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">建档填写日期</label>
                                    <div class="col-lg-7 input-group date">
                                        <input type="text" class="form-control" id="reg-date" name="reg_time" value="<?php echo $info['reg_time']; ?>">
                                        <span class="input-group-addon"><i class="demo-pli-calendar-4"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">手机</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="form-control" placeholder="" name="mobile" value="<?php echo $info['mobile']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">电话</label>
                                    <div class="col-lg-7 input-group date">
                                        <input type="text" class="form-control" name="phone" value="<?php echo $info['phone']; ?>">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">QQ</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="form-control" name="qq" placeholder="" value="<?php echo $info['qq']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">微信</label>
                                    <div class="col-lg-7 input-group date">
                                        <input type="text" class="form-control" name="weixin" value="<?php echo $info['weixin']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <?php echo widget('City/index',['pid'=>$info['pos_province'],'cid'=>$info['pos_city'],'did'=>$info['pos_district']]); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">详细住址</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="form-control" name="address" placeholder="" value="<?php echo $info['address']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">备注</label>
                                    <div class="col-lg-9">
                                        <textarea id="others-textarea-input" rows="9" class="form-control" placeholder="" name="others"><?php echo $info['others']; ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">高危因素及既往史</label>
                                    <div class="col-lg-9">
                                        <div class="checkbox">
                                            <!-- Inline Checkboxes -->
                                            <?php if(is_array($history) || $history instanceof \think\Collection || $history instanceof \think\Paginator): $k = 0; $__LIST__ = $history;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                                            <input id="history-checkbox-<?php echo $k; ?>" class="magic-checkbox" type="checkbox" name="history[checked][]" value="<?php echo $vo['id']; ?>" <?php if(in_array(($vo['id']), is_array($info['extends']['base']['history']['checked'])?$info['extends']['base']['history']['checked']:explode(',',$info['extends']['base']['history']['checked']))): ?>checked<?php endif; ?>>
                                            <label for="history-checkbox-<?php echo $k; ?>"><?php echo $vo['cn_name']; ?>（<?php echo $vo['en_name']; ?>）</label>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                            <input id="history-checkbox-other" class="magic-checkbox" type="checkbox" name="history[other]" value="1" <?php if($info['extends']['base']['history']['other'] == '1'): ?>checked<?php endif; ?>>
                                            <label for="history-checkbox-other">其它</label>
                                            <input type="text" class="form-control <?php if($info['extends']['base']['history']['other'] == '0'): ?>hidden<?php endif; ?>" name="history_other" placeholder="其它" value="<?php echo $info['extends']['base']['history']['other_text']; ?>">
                                        </div>
                                        
                                        <script type="text/javascript">
                                            $(function(){
                                                $('#history-checkbox-other').change(function(){
                                                    if($(this).is(':checked')){
                                                        $('[name=history_other]').removeClass("hidden");
                                                    }else{
                                                        $('[name=history_other]').addClass("hidden");
                                                    }
                                                });
                                            })
                                        </script>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">目前发音能力</label>
                                    <div class="col-lg-9">
                                        <div class="checkbox">
                                            <!-- Inline Checkboxes -->
                                            <?php if(is_array($ability) || $ability instanceof \think\Collection || $ability instanceof \think\Paginator): $i = 0; $__LIST__ = $ability;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                            <input id="ability-checkbox-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="ability[]" value="<?php echo $vo['id']; ?>" <?php if(in_array(($vo['id']), is_array($info['extends']['base']['ability']['checked'])?$info['extends']['base']['ability']['checked']:explode(',',$info['extends']['base']['ability']['checked']))): ?>checked<?php endif; ?>>
                                            <label for="ability-checkbox-<?php echo $key; ?>"><?php echo $vo['cn_name']; ?>（<?php echo $vo['en_name']; ?>）</label>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </div>
                                        <input type="text" class="form-control" name="ability_other" placeholder="其它" value="<?php echo $info['extends']['base']['ability']['other_text']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">最担忧的问题是什么？</label>
                                    <div class="col-lg-9">
                                        <textarea id="concern-textarea-input" rows="9" class="form-control" placeholder="" name="main_concern"><?php echo $info['extends']['base']['main_concern']; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">现阶段康复情况</label>
                                    <div class="col-lg-9">
                                        <textarea id="present-textarea-input" rows="9" class="form-control" placeholder="" name="present_speech"><?php echo $info['extends']['base']['present_speech']; ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">言语发展情况</label>
                                    <div class="col-lg-7">
                                        <div class="input-group mar-btm">
                                            <span class="input-group-addon">呀呀学语：</span>
                                            <input type="text" class="form-control" name="babbling" value="<?php echo $info['extends']['base']['development']['babbling']; ?>">
                                            <span class="input-group-addon">月</span>
                                        </div>
                                        <div class="input-group mar-btm">
                                            <span class="input-group-addon">第一个词汇：</span>
                                            <input type="text" class="form-control" name="first_word" value="<?php echo $info['extends']['base']['development']['first_word']; ?>">
                                            <span class="input-group-addon">岁</span>
                                        </div>
                                        <div class="input-group mar-btm">
                                            <span class="input-group-addon">两个词汇组合：</span>
                                            <input type="text" class="form-control" name="phrase" value="<?php echo $info['extends']['base']['development']['phrase']; ?>">
                                            <span class="input-group-addon">岁</span>
                                        </div>
                                        <div class="form-group pad-ver">
                                            <label class="col-md-6 control-label">原来开始说话了，却突然停止说话了</label>
                                            <div class="col-md-6">
                                                <div class="radio">
                        
                                                    <!-- Inline radio buttons -->
                                                    <input id="is-stop" class="magic-radio" type="radio" name="is_stop" value="1" <?php if($info['extends']['base']['development']['is_stop'] == '1'): ?>checked<?php endif; ?>>
                                                    <label for="is-stop">是</label>
                                                    <input id="is-stop2" class="magic-radio" type="radio" name="is_stop" <?php if($info['extends']['base']['development']['is_stop'] == '0'): ?>checked<?php endif; ?>>
                                                    <label for="is-stop2" value="0">否</label>
                        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-sm-7 col-sm-offset-4">
                                    <button class="btn btn-primary" type="submit">更新</button>
                                    <a href="<?php echo url('admin/member/read',['id'=>$info['id']]); ?>" class="btn btn-info"> 返回</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
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
    
</body>
</html>