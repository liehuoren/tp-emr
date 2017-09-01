<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:70:"D:\wamp64\www\tp-emr\public/../application/admin\view\member\read.html";i:1503414344;s:70:"D:\wamp64\www\tp-emr\public/../application/admin\view\Public\base.html";i:1504166997;s:72:"D:\wamp64\www\tp-emr\public/../application/admin\view\public\header.html";i:1502359014;s:71:"D:\wamp64\www\tp-emr\public/../application/admin\view\public\aside.html";i:1502243740;s:73:"D:\wamp64\www\tp-emr\public/../application/admin\view\public\mainnav.html";i:1503561480;s:72:"D:\wamp64\www\tp-emr\public/../application/admin\view\public\footer.html";i:1502275958;s:73:"D:\wamp64\www\tp-emr\public/../application/admin\view\public\setting.html";i:1502243791;}*/ ?>
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
        <h1 class="page-header text-overflow">查看学员</h1>
    </div>

    <!--Breadcrumb-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <ol class="breadcrumb">
        <li><a href="<?php echo url('admin/index/index'); ?>">主页</a></li>
        <li><a href="<?php echo url('admin/member/index'); ?>">学员库</a></li>
        <li class="active">学员基本信息</li>
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
                        <a href="#" class="list-group-item">
                            <span class="text-main">审核人：</span><?php echo $info['check_name']; ?>
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
                <div class="panel" id="panel-ref">
                    <div class="panel-heading">
                        <div class="panel-control">
                            <a href="javascript:void(0)" class="btn" onclick="location.reload()"><i class="demo-psi-repeat-2 icon-fw"></i> </a>
                                
                            <div class="btn-group">
                                <button data-toggle="dropdown" class="dropdown-toggle btn" aria-expanded="false">
                                    <i class="caret"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="<?php echo url('admin/member/edit',['id'=>$info['id']]); ?>">修改</a></li>
                                    <li><a href="<?php echo url('admin/member/setStatus',['id'=>$info['id'],'status'=>1]); ?>">通过审核</a></li>
                                    <li><a href="<?php echo url('admin/member/setStatus',['id'=>$info['id'],'status'=>0]); ?>">未通过审核</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo url('admin/member/delete',['id'=>$info['id']]); ?>">删除</a></li>
                                </ul>
                            </div>
                        </div>
                        <h3 class="panel-title">基本信息</h3>
                    </div> 
                    <div class="panel-body">
                        <table class="table table-hover table-vcenter">
                            <thead>
                                <tr>
                                    <th width="100%" colspan="2">基本信息</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td width="40%"><strong>姓名：</strong><?php echo $info['name']; ?></td>
                                    <td width="60%"><strong>性别：</strong><?php echo $info['sex']; ?></td>
                                </tr>
                                <tr>
                                    <td width="40%"><strong>出生日期：</strong><?php echo $info['birthday']; ?></td>
                                    <td width="60%"><strong>年龄：</strong><?php echo birthday($info['birthday']); ?></td>
                                </tr>
                                <tr>
                                    <td width="40%"><strong>所在校区：</strong><?php echo $info['centers']['name']; ?></td>
                                    <td width="60%"><strong>是否缴费：</strong><?php echo $info['is_pay']; ?></td>
                                </tr>
                                <tr>
                                    <td width="40%"><strong>语言种类：</strong><?php echo $info['language']; ?></td>
                                    <td width="60%"><strong>建档日期：</strong><?php echo $info['reg_time']; ?></td>
                                </tr>
                                <tr>
                                    <td width="40%"><strong>医学临床症状：</strong><?php echo $info['diagnosis_text']; ?></td>
                                    <td width="60%"><strong>言语问题：</strong><?php echo $info['problem_text']; ?></td>
                                </tr>
                                <tr>
                                    <td width="40%"><strong>渠道来源：</strong><?php echo $info['first_under_text']; ?></td>
                                    <td width="60%"><strong>首次联系方式：</strong><?php echo $info['first_touch_text']; ?></td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table table-hover table-vcenter">
                            <thead>
                                <tr>
                                    <th width="100%" colspan="2">联系方式及地址</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td width="40%"><strong>联系手机：</strong><?php echo $info['mobile']; ?></td>
                                    <td width="60%"><strong>家庭电话：</strong><?php echo $info['phone']; ?></td>
                                </tr>
                                <tr>
                                    <td width="40%"><strong>QQ：</strong><?php echo $info['qq']; ?></td>
                                    <td width="60%"><strong>微信：</strong><?php echo $info['weixin']; ?></td>
                                </tr>
                                <tr>
                                    <td width="100%" colspan="2"><strong>家庭地址：</strong><?php echo $info['pos_province']['name']; ?><?php echo $info['pos_city']['name']; ?><?php echo $info['pos_district']['name']; ?><?php echo $info['address']; ?></td>
                                </tr>
                                <tr>
                                    <td width="100%" colspan="2"><strong>备注：</strong><?php echo $info['others']; ?></td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table table-hover table-vcenter">
                            <thead>
                                <tr>
                                    <th width="100%" colspan="2">基本情况</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td width="40%"><strong>高危因素及既往史：</strong><?php echo $info['history_text']; ?></td>
                                    <td width="60%"><strong>目前发音能力：</strong><?php echo $info['ability_text']; ?></td>
                                </tr>
                                <tr>
                                    <td width="100%" colspan="2"><strong>最担忧问题：</strong><?php echo $info['extends']['base']['main_concern']; ?></td>
                                </tr>
                                <tr>
                                    <td width="100%" colspan="2"><strong>现阶段康复情况：</strong><?php echo $info['extends']['base']['present_speech']; ?></td>
                                </tr>
                                <tr>
                                    <td width="40%" ><strong>呀呀学语：</strong><?php echo $info['extends']['base']['development']['babbling']; ?>月</td>
                                    <td width="60%" ><strong>第一个词汇：</strong><?php echo $info['extends']['base']['development']['first_word']; ?>岁</td>
                                </tr>
                                <tr>
                                    <td width="40%" ><strong>两个词汇组合：</strong><?php echo $info['extends']['base']['development']['phrase']; ?>岁</td>
                                    <td width="60%" ><strong>原来开始说话了，却突然停止说话了：</strong><?php echo !empty($info['extends']['base']['development']['is_stop'])?'是':'否'; ?></td>
                                </tr>
                            </tbody>
                        </table>

                        

                        
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