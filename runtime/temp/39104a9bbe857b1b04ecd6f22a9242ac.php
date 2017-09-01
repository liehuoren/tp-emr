<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:74:"D:\wamp64\www\tp-emr\public/../application/admin\view\assess\create-a.html";i:1503645401;s:70:"D:\wamp64\www\tp-emr\public/../application/admin\view\Public\base.html";i:1504166997;s:72:"D:\wamp64\www\tp-emr\public/../application/admin\view\public\header.html";i:1502359014;s:71:"D:\wamp64\www\tp-emr\public/../application/admin\view\public\aside.html";i:1502243740;s:73:"D:\wamp64\www\tp-emr\public/../application/admin\view\public\mainnav.html";i:1503561480;s:72:"D:\wamp64\www\tp-emr\public/../application/admin\view\public\footer.html";i:1502275958;s:73:"D:\wamp64\www\tp-emr\public/../application/admin\view\public\setting.html";i:1502243791;}*/ ?>
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
<script src="__JS__/assess/createtwo.js"></script>

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
        <h1 class="page-header text-overflow">历史数据新增-第二页</h1>
    </div>

    <!--Breadcrumb-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <ol class="breadcrumb">
        <li><a href="<?php echo url('admin/index/index'); ?>">主页</a></li>
        <li class="active">学员管理-新增</li>
    </ol>

    <div id="page-content">
        <form action="<?php echo url('admin/assess/saveTwo',['id'=>$info['id']]); ?>" method="post" class="form-horizontal" id="member-form">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">新增学员评估报告</h3>
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
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">评估师姓名</label>
                            <div class="col-lg-7">
                                <input type="text" class="form-control" name="t_name">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">评估日期</label>
                            <div class="col-lg-7">
                                <input type="text" class="form-control" id="assess-date" name="assess_time">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">医学临床症状</label>
                            <div class="col-lg-7">
                                <?php echo widget('diagnosis/index'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">言语问题</label>
                            <div class="col-lg-7">
                                <?php echo widget('problem/index'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">高危因素及既往史</label>
                            <div class="col-lg-9">
                                <div class="checkbox">
                                    <!-- Inline Checkboxes -->
                                    <?php if(is_array($history) || $history instanceof \think\Collection || $history instanceof \think\Paginator): $i = 0; $__LIST__ = $history;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <input id="history-checkbox-<?php echo $key; ?>" class="magic-checkbox" type="checkbox" name="history[checked][]" value="<?php echo $vo['id']; ?>">
                                    <label for="history-checkbox-<?php echo $key; ?>"><?php echo $vo['cn_name']; ?>（<?php echo $vo['en_name']; ?>）</label>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                    <input id="history-checkbox-other" class="magic-checkbox" type="checkbox" name="history[other]" value="1">
                                    <label for="history-checkbox-other">其它</label>
                                    <input type="text" class="form-control hidden" name="history_other" placeholder="其它" >
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
                </div>
                <p class="bord-btm pad-ver text-main text-bold">听觉反应</p>
                <div class="row">
                    <div class="col-sm-8">
                        <?php if(is_array($auditory) || $auditory instanceof \think\Collection || $auditory instanceof \think\Paginator): $i = 0; $__LIST__ = $auditory;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <div class="form-group" style="margin-left: 15px;"> 
                                <div class="col-sm-1">
                                    <select class="form-control" name="report_b[auditory][]"><option></option><option value="1">√</option><option value="2">√×</option><option value="0">×</option></select>
                                </div>
                                <label class="col-sm-10 control-label text-left"><?php echo $vo['cn_name']; ?>&nbsp;<?php echo $vo['en_name']; ?></label> 
                            </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
                <p class="bord-btm pad-ver text-main text-bold">视觉反应</p>
                <div class="row">
                    <div class="col-sm-8">
                        <?php if(is_array($visual) || $visual instanceof \think\Collection || $visual instanceof \think\Paginator): $i = 0; $__LIST__ = $visual;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <div class="form-group" style="margin-left: 15px;"> 
                                <div class="col-sm-1">
                                    <select class="form-control" name="report_b[visual][]"><option></option><option value="1">√</option><option value="2">√×</option><option value="0">×</option></select>
                                </div>
                                <?php if($vo['id'] == '4'): ?>
                                    <label class="col-sm-2 control-label"><?php echo $vo['cn_name']; ?>&nbsp;<?php echo $vo['en_name']; ?></label>
                                    <label class="col-sm-2 control-label">左右&nbsp;Left/right</label>
                                    <div class="col-sm-2">
                                        <input class="form-control" name="report_b[visual_left]">
                                    </div>
                                    <label class="col-sm-2 control-label">上下&nbsp;Up/down</label>
                                    <div class="col-sm-2">
                                        <input class="form-control" name="report_b[visual_up]">
                                    </div>
                                <?php else: ?>
                                    <label class="col-sm-10 control-label text-left"><?php echo $vo['cn_name']; ?>&nbsp;<?php echo $vo['en_name']; ?></label> 
                                <?php endif; ?>
                            </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
                <input type="hidden" name="report_b[version]" value="1">
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
                                            <select class="form-control" name="report_c[<?php echo $v['field_name']; ?>]"><option></option><option value="1">√</option><option value="2">√×</option><option value="0">×</option></select>
                                        </div>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </div>
                            </div>
                            
                        </td>
                    </tr>
                    <?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
                </table>
                <p class="bord-btm pad-ver text-main text-bold">其他备注：</p>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td colspan="12">
                                <textarea name="report_c[content]" class="form-control" rows="6"></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <input type="hidden" name="report_c[version]" value="1">
                <p class="bord-btm pad-ver text-main text-bold">言语发展情况</p>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            
                            <div class="col-lg-7">
                                <div class="input-group mar-btm">
                                    <span class="input-group-addon">呀呀学语：</span>
                                    <input type="text" class="form-control" name="babbling">
                                    <span class="input-group-addon">月</span>
                                </div>
                                <div class="input-group mar-btm">
                                    <span class="input-group-addon">第一个词汇：</span>
                                    <input type="text" class="form-control" name="first_word">
                                    <span class="input-group-addon">岁</span>
                                </div>
                                <div class="input-group mar-btm">
                                    <span class="input-group-addon">两个词汇组合：</span>
                                    <input type="text" class="form-control" name="phrase">
                                    <span class="input-group-addon">岁</span>
                                </div>
                                <div class="form-group pad-ver">
                                    <label class="col-md-6 control-label">原来开始说话了，却突然停止说话了</label>
                                    <div class="col-md-6">
                                        <div class="radio">
                
                                            <!-- Inline radio buttons -->
                                            <input id="is-stop" class="magic-radio" type="radio" name="is_stop" value="1">
                                            <label for="is-stop">是</label>
                                            <input id="is-stop2" class="magic-radio" type="radio" name="is_stop">
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