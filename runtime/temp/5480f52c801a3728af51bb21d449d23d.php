<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:68:"D:\wamp64\www\tp-emr\public/../application/admin\view\user\edit.html";i:1503452862;s:70:"D:\wamp64\www\tp-emr\public/../application/admin\view\Public\base.html";i:1504166997;s:72:"D:\wamp64\www\tp-emr\public/../application/admin\view\public\header.html";i:1502359014;s:71:"D:\wamp64\www\tp-emr\public/../application/admin\view\public\aside.html";i:1502243740;s:73:"D:\wamp64\www\tp-emr\public/../application/admin\view\public\mainnav.html";i:1503561480;s:72:"D:\wamp64\www\tp-emr\public/../application/admin\view\public\footer.html";i:1502275958;s:73:"D:\wamp64\www\tp-emr\public/../application/admin\view\public\setting.html";i:1502243791;}*/ ?>
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

    
<!--Switchery [ OPTIONAL ]-->
<link href="__PLUGINS__/switchery/switchery.min.css" rel="stylesheet">
<!--Bootstrap Select [ OPTIONAL ]-->
<link href="__PLUGINS__/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
<!--Bootstrap Tags Input [ OPTIONAL ]-->
<link href="__PLUGINS__/bootstrap-tagsinput/bootstrap-tagsinput.min.css" rel="stylesheet">
<!--Chosen [ OPTIONAL ]-->
<link href="__PLUGINS__/chosen/chosen.min.css" rel="stylesheet">
<!--noUiSlider [ OPTIONAL ]-->
<link href="__PLUGINS__/noUiSlider/nouislider.min.css" rel="stylesheet">
<!--Select2 [ OPTIONAL ]-->
<link href="__PLUGINS__/select2/css/select2.min.css" rel="stylesheet">
<!--Bootstrap Timepicker [ OPTIONAL ]-->
<link href="__PLUGINS__/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
<!--Bootstrap Datepicker [ OPTIONAL ]-->
<link href="__PLUGINS__/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
<!--Magic Checkbox [ OPTIONAL ]-->
<link href="__PLUGINS__/magic-check/css/magic-check.min.css" rel="stylesheet">

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

    
<!--Switchery [ OPTIONAL ]-->
<script src="__PLUGINS__/switchery/switchery.min.js"></script>
<!--Bootstrap Select [ OPTIONAL ]-->
<script src="__PLUGINS__/bootstrap-select/bootstrap-select.min.js"></script>
<!--Bootstrap Tags Input [ OPTIONAL ]-->
<script src="__PLUGINS__/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
<!--Chosen [ OPTIONAL ]-->
<script src="__PLUGINS__/chosen/chosen.jquery.min.js"></script>
<!--noUiSlider [ OPTIONAL ]-->
<script src="__PLUGINS__/noUiSlider/nouislider.min.js"></script>
<!--Select2 [ OPTIONAL ]-->
<script src="__PLUGINS__/select2/js/select2.min.js"></script>
<!--Bootstrap Timepicker [ OPTIONAL ]-->
<script src="__PLUGINS__/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
<!--Bootstrap Datepicker [ OPTIONAL ]-->
<script src="__PLUGINS__/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<!--Summernote [ OPTIONAL ]-->
<script src="__PLUGINS__/mask/jquery.mask.min.js"></script>
<script src="__JS__/admin/profile.js"></script>

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
        <h1 class="page-header text-overflow">用户管理</h1>
    </div>

    <!--Breadcrumb-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <ol class="breadcrumb">
        <li><a href="<?php echo url('admin/index/index'); ?>">主页</a></li>
        <li><a href="<?php echo url('admin/user/index'); ?>">用户管理</a></li>
        <li class="active">个人信息-编辑</li>
    </ol>

    <div id="page-content">
        <div class="fixed-fluid">
            <div class="fixed-sm-200 fixed-lg-250 pull-sm-left">
                <div class="panel">
                    <!-- Simple profile -->
                    <div class="text-center pad-all bord-btm">
                        <div class="pad-ver">
                            <img src="<?php echo $info['profile']['avatar']; ?>" class="img-lg img-border img-circle" alt="Profile Picture">
                        </div>
                        <h4 class="text-lg text-overflow mar-no"><?php echo $info['profile']['fullname']; ?></h4>
        
                    </div>
                    <p class="text-semibold text-main pad-all mar-no">基本信息</p>
                    <ul class="list-group bg-trans text-sm pad-btm">
        
                        <!-- Profile Details -->
                        <li class="list-group-item list-item-sm text-primary text-semibold">
                            邮箱： <?php echo $info['email']; ?>
                        </li>
                        <li class="list-group-item list-item-sm text-primary text-semibold"> 
                            手机号： <?php echo $info['mobile']; ?>
                        </li>
                        <li class="list-group-item list-item-sm text-primary text-semibold"> 
                            年龄： <?php echo birthday($info['profile']['birthday']); ?>
                        </li>
                        <li class="list-group-item list-item-sm text-primary text-semibold"> 
                            所在中心： <?php echo $info['profile']['centers']['name']; ?>
                        </li>
                    </ul>
                    
                </div>
            </div>
            <div class="fluid">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-control pull-left">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#demo-tabs-box-1" data-toggle="tab">基本信息</a></li>
                                
                            </ul>
                        </div>
                        <h3 class="panel-title invisible">a</h3>
                    </div>
                    
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="demo-tabs-box-1">
                            <form action="<?php echo url('admin/user/doEdit',['id'=>$info['id']]); ?>" method="post" class="form-horizontal">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">昵称</label>
                                            <div class="col-lg-7">
                                                <input type="text" class="form-control" name="nickname" placeholder="" value="<?php echo $info['profile']['nickname']; ?>">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">姓名</label>
                                            <div class="col-lg-7">
                                                <input type="text" class="form-control" name="fullname" placeholder="" value="<?php echo $info['profile']['fullname']; ?>">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">出生年月日</label>
                                            <div class="col-lg-7 input-group date">
                                                <input type="text" class="form-control" id="birthday" name="birthday" placeholder="" value="<?php echo $info['profile']['birthday']; ?>">
                                                <span class="input-group-addon"><i class="demo-pli-calendar-4"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">性别</label>
                                            <div class="col-lg-7">
                                                <div class="radio">
                                                    <!-- Inline radio buttons -->
                                                    <input id="form-sex1" class="magic-radio" type="radio" name="sex" value="1" <?php if($userself['profile']['sex'] == '男'): ?>checked<?php endif; ?>>
                                                    <label for="form-sex1">男</label>
                        
                                                    <input id="form-sex2" class="magic-radio" type="radio" name="sex" value="2" <?php if($userself['profile']['sex'] == '女'): ?>checked<?php endif; ?>>
                                                    <label for="form-sex2">女</label>

                                                    <input id="form-sex0" class="magic-radio" type="radio" name="sex" value="0" <?php if($userself['profile']['sex'] == '未知'): ?>checked<?php endif; ?>>
                                                    <label for="form-sex0">未知</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <?php echo widget('City/index',['pid'=>$info['profile']['pos_province'],'cid'=>$info['profile']['pos_city'],'did'=>$info['profile']['pos_district']]); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">详细地址</label>
                                            <div class="col-lg-7">
                                                <input type="text" class="form-control" name="address" placeholder="" value="<?php echo $info['profile']['address']; ?>">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">所在中心</label>
                                            <div class="col-lg-7">
                                                <?php echo widget('center/index',['centers_id'=>$info['profile']['centers']['id']]); ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">用户状态</label>
                                            <div class="col-lg-7">
                                            <select name="status" class="form-control">
                                                <option value="-1" <?php if($info['status'] == '-1'): ?>selected<?php endif; ?>>已删除</option>
                                                <option value="0" <?php if($info['status'] == '0'): ?>selected<?php endif; ?>>已禁用</option>
                                                <option value="1" <?php if($info['status'] == '1'): ?>selected<?php endif; ?>>已启用</option>
                                                <option value="2" <?php if($info['status'] == '2'): ?>selected<?php endif; ?>>未审核</option>
                                            </select>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">用户角色</label>
                                            <div class="col-lg-7">
                                                <select name="role" class="form-control">
                                                    <?php if(is_array($role) || $role instanceof \think\Collection || $role instanceof \think\Paginator): $i = 0; $__LIST__ = $role;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                                    <option value="<?php echo $vo['id']; ?>" <?php if($info['roles']['0']['id'] == $vo['id']): ?>selected<?php endif; ?>><?php echo $vo['name']; ?></option>
                                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">注册时间</label>
                                            <div class="col-lg-7">
                                                <p class="form-control-static"><?php echo $info['reg_time']; ?></p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">注册IP</label>
                                            <div class="col-lg-7">
                                                <p class="form-control-static"><?php echo $info['reg_ip']; ?></p>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">登录时间</label>
                                            <div class="col-lg-7">
                                                <p class="form-control-static"><?php echo $info['last_login_time']; ?></p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">登录IP</label>
                                            <div class="col-lg-7">
                                                <p class="form-control-static"><?php echo $info['last_login_ip']; ?></p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="panel-footer">
                                    <div class="row">
                                        <div class="col-sm-7 col-sm-offset-1">
                                            <button class="btn btn-mint" type="submit">更新</button>
                                            <a href="<?php echo url('admin/user/index'); ?>" class="btn btn-info"> 返回</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                            
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
    
</body>
</html>