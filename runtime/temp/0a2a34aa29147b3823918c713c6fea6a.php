<?php if (!defined('THINK_PATH')) exit(); /*a:8:{s:71:"D:\wamp64\www\tp-emr\public/../application/admin\view\report\index.html";i:1503624375;s:70:"D:\wamp64\www\tp-emr\public/../application/admin\view\Public\base.html";i:1504166997;s:72:"D:\wamp64\www\tp-emr\public/../application/admin\view\public\header.html";i:1502359014;s:79:"D:\wamp64\www\tp-emr\public/../application/admin\view\report\info-base-add.html";i:1503624267;s:71:"D:\wamp64\www\tp-emr\public/../application/admin\view\public\aside.html";i:1502243740;s:73:"D:\wamp64\www\tp-emr\public/../application/admin\view\public\mainnav.html";i:1503561480;s:72:"D:\wamp64\www\tp-emr\public/../application/admin\view\public\footer.html";i:1502275958;s:73:"D:\wamp64\www\tp-emr\public/../application/admin\view\public\setting.html";i:1502243791;}*/ ?>
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
<script src="__JS__/report/report.js"></script>

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
                    <p class="text-semibold text-main pad-all mar-no">其它信息</p>
                    <div class="list-group bg-trans pad-btm bord-btm">
                        <a href="<?php echo url('admin/member/read',['id'=>$info['id']]); ?>" class="list-group-item ">
                            <i class="demo-pli-file icon-lg icon-fw"></i>
                            基本信息
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
                        <h3 class="panel-title">学员评估报告</h3>
                    </div>
                    <div class="panel-body">
                        <?php if(empty($reports) || (($reports instanceof \think\Collection || $reports instanceof \think\Paginator ) && $reports->isEmpty())): ?>
                            <div class="row">
                                <div class="col-sm-12">
                                <p class="text-center">该学员暂无评估记录</p>
                                <button data-target="#report-modal" data-toggle="modal" class="btn btn-block btn-primary">新增</button>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="panel-group">
                                <?php if(is_array($reports) || $reports instanceof \think\Collection || $reports instanceof \think\Paginator): $i = 0; $__LIST__ = $reports;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="panel-control">
                                                <button class="btn btn-default collapsed" data-target="#panel-collapse-<?php echo $key; ?>" data-toggle="collapse" aria-expanded="false">更多<i class="demo-pli-arrow-down"></i></button>
                                            </div>
                                            <h5 class="panel-title"><?php echo $vo['assess_time']; ?>-<?php echo $vo['t_name']; ?></h5>
                                        </div>
                                        <div id="panel-collapse-<?php echo $key; ?>" class="collapse" aria-expanded="false" style="height:0px;">
                                            <div class="panel-body">
                                                <div class="text-right">
                                                    <a href="<?php echo url('admin/report/edit',['id'=>$vo['id']]); ?>" class="btn btn-primary">查看详细</a>
                                                    <a href="<?php echo url('admin/report/edit',['id'=>$vo['id']]); ?>" class="btn btn-primary">续写病历</a>
                                                </div>
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td width="20%"><strong>评估师：</strong></td>
                                                            <td><?php echo $vo['t_name']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="20%"><strong>评估时间：</strong></td>
                                                            <td><?php echo $vo['assess_time']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="20%"><strong>评估地址：</strong></td>
                                                            <td><?php echo $vo['assess_address']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="20%"><strong>医学临床症状：</strong></td>
                                                            <td><?php echo $vo['diagnosis_text']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="20%"><strong>言语问题：</strong></td>
                                                            <td><?php echo $vo['problem_text']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="20%"><strong>最近修改人：</strong></td>
                                                            <td><?php echo $vo['update_name']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="20%"><strong>最近修改时间：</strong></td>
                                                            <td><?php echo $vo['update_time']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="20%"><strong>状态信息：</strong></td>
                                                            <td><?php echo $vo['status']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="20%"><strong>审核人：</strong></td>
                                                            <td><?php echo $vo['check_name']; ?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                
                            </div>
                            <div class="row">
                                <button data-target="#report-modal" data-toggle="modal" class="btn btn-block btn-default">新增病历报告</button>
                            </div>
                            
                        <?php endif; ?>
                        <div class="modal fade" id="report-modal" role="dialog" tabindex="-1" aria-labelledby="report-modal" aria-hidden="true">
    <div class="modal-dialog" style="width: 800px;">
        <div class="modal-content">

            <!--Modal header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                <h4 class="modal-title">新增评估报告</h4>
            </div>

            <!--Modal body-->
            <form class="form-horizontal" action="<?php echo url('admin/report/save'); ?>" method="post" id="base-info-form">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-lg-4 control-label">学员姓名</label>
                            <div class="col-lg-7">
                                <input type="hidden" name="stu_id" value="<?php echo $info['id']; ?>">
                                <input type="text" class="form-control" placeholder="" value="<?php echo $info['name']; ?>" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-lg-4 control-label">年龄</label>
                            <div class="col-lg-7">
                                <input type="text" class="form-control" placeholder="" value="<?php echo birthday($info['birthday']); ?>" disabled>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-lg-4 control-label">评估师姓名</label>
                            <div class="col-lg-7">
                                <input type="text" class="form-control" placeholder="" name="t_name">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-lg-4 control-label">评估时间</label>
                            <div class="col-lg-7">
                                <input type="text" id="assess-date" class="form-control" placeholder="" name="assess_time">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="col-lg-2 control-label">评估地址</label>
                            <div class="col-lg-8">
                                <textarea class="form-control" name="assess_address"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-lg-4 control-label">医学临床症状</label>
                            <div class="col-lg-7">
                                <?php echo widget('diagnosis/index'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-lg-4 control-label">言语问题</label>
                            <div class="col-lg-7">
                                <?php echo widget('problem/index'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Modal footer-->
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">关闭</button>
                <button class="btn btn-primary" type="submit">保存</button>
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