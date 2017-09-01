<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"D:\wamp64\www\tp-emr\public/../application/admin\view\admin\login.html";i:1502154548;s:69:"D:\wamp64\www\tp-emr\public/../application/admin\view\Admin\base.html";i:1504166977;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登录-<?php echo \think\Config::get('web_site_name'); ?></title>

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

    <!--Magic Checkbox [ OPTIONAL ]-->
    <link href="__PLUGINS__/magic-check/css/magic-check.min.css" rel="stylesheet">

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
    <script src="__PLUGINS__/layer/layer.js"></script>
    <!--=================================================-->
    
    <!--Background Image [ DEMONSTRATION ]-->
    <script src="__JS__/demo/bg-images.js"></script>

    <script src="__PLUGINS__/bootstrap-validator/bootstrapValidator.min.js"></script>
    
<script src="__JS__/admin/login.js"></script>

    <!--=================================================

    REQUIRED
    You must include this in your project.

    RECOMMENDED
    This category must be included but you may modify which plugins or components which should be included in your project.

    OPTIONAL
    Optional plugins. You may choose whether to include it in your project or not.

    DEMONSTRATION
    This is to be removed, used for demonstration purposes only. This category must not be included in your project.

    SAMPLE
    Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


    Detailed information and more samples can be found in the document.

    =================================================-->
        
</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
    <div id="container" class="cls-container">
        
        <!-- BACKGROUND IMAGE -->
        <!--===================================================-->
        <div id="bg-overlay" class="bg-img" style="background-image: url(&quot;/static/img/bg-img/bg-img-3.jpg&quot;);"></div>
        
        
<div class="cls-content">
    <div class="cls-content-sm panel">
        <div class="panel-body" style="padding-right:30px;padding-left: 30px;">
            <div class="mar-ver pad-btm">
                <h3 class="h4 mar-no">电子病历系统-登录</h3>
                <p class="text-muted">启音言语科技为您服务</p>
            </div>
            <form action="<?php echo url('admin/admin/doLogin'); ?>" class="form-horizontal" method="POST" id="login-bv-errorcnt">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="用户名\邮箱\手机号" autofocus name="username">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="密码" name="password">
                </div>
                <div class="checkbox pad-btm text-left">
                    <input id="demo-form-checkbox" class="magic-checkbox" type="checkbox" name="remember" value="1">
                    <label for="demo-form-checkbox">记住密码</label>
                </div>
                <button class="btn btn-primary btn-lg btn-block" type="submit">登录</button>
            </form>
        </div>

        <div class="pad-all">
            <a href="<?php echo url('admin/Admin/reminder'); ?>" class="btn-link mar-rgt">忘记密码？</a>
            <a href="<?php echo url('admin/Admin/register'); ?>" class="btn-link mar-lft">注册账号</a>

            <!-- <div class="media pad-top bord-top">
                <div class="pull-right">
                    <a href="#" class="pad-rgt"><i class="demo-psi-facebook icon-lg text-primary"></i></a>
                    <a href="#" class="pad-rgt"><i class="demo-psi-twitter icon-lg text-info"></i></a>
                    <a href="#" class="pad-rgt"><i class="demo-psi-google-plus icon-lg text-danger"></i></a>
                </div>
                <div class="media-body text-left">
                    Login with
                </div>
            </div> -->
        </div>
    </div>
</div>

        
        
        <!-- DEMO PURPOSE ONLY -->
        <!--===================================================-->
        <div class="demo-bg">
            <div id="demo-bg-list">
                <div class="demo-loading"><i class="psi-repeat-2"></i></div>
                <img class="demo-chg-bg bg-trans" src="__IMG__/bg-img/thumbs/bg-trns.jpg" alt="Background Image">
                <img class="demo-chg-bg" src="__IMG__/bg-img/thumbs/bg-img-1.jpg" alt="Background Image">
                <img class="demo-chg-bg" src="__IMG__/bg-img/thumbs/bg-img-2.jpg" alt="Background Image">
                <img class="demo-chg-bg active" src="__IMG__/bg-img/thumbs/bg-img-3.jpg" alt="Background Image">
                <img class="demo-chg-bg" src="__IMG__/bg-img/thumbs/bg-img-4.jpg" alt="Background Image">
                <img class="demo-chg-bg" src="__IMG__/bg-img/thumbs/bg-img-5.jpg" alt="Background Image">
                <img class="demo-chg-bg" src="__IMG__/bg-img/thumbs/bg-img-6.jpg" alt="Background Image">
                <img class="demo-chg-bg" src="__IMG__/bg-img/thumbs/bg-img-7.jpg" alt="Background Image">
            </div>
        </div>
        <!--===================================================-->
        
        
        
    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->


    </body>
    
</html>
