<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:73:"D:\wamp64\www\tp-emr\public/../application/admin\view\admin\register.html";i:1504576605;s:69:"D:\wamp64\www\tp-emr\public/../application/admin\view\Admin\base.html";i:1504166977;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>注册-<?php echo \think\Config::get('web_site_name'); ?></title>

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
    
<script src="__PLUGINS__/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<script src="__JS__/admin/register.js"></script>

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
    <div class="cls-content-lg panel" style="width:800px;">
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <hr class="new-section-sm bord-no">
                    <h4 class="text-main pad-btm bord-btm">注册新的账号</h4>
                    <div class="panel" style="border:0px;box-shadow: none">
                        <!-- Circular Form Wizard -->
                        <!--===================================================-->
                        <div id="register-bv-wz">
                            <div class="wz-heading pad-ver">
            
                                <!--Progress bar-->
                                <div class="progress progress-xs progress-light-base">
                                    <div class="progress-bar progress-bar-primary"></div>
                                </div>
            
                                <!--Nav-->
                                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                <ul class="wz-nav-off">
                                    <li class="col-xs-3">
                                        <a data-toggle="tab" href="#demo-bv-tab1" title="登录账户" class="add-tooltip">
                                            <div class="icon-wrap icon-wrap-sm bg-gray">
                                                <i class="wz-icon demo-pli-information icon-lg"></i>
                                                <i class="wz-icon-done demo-pli-like icon-lg"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="col-xs-3">
                                        <a data-toggle="tab" href="#demo-bv-tab2" title="个人信息" class="add-tooltip">
                                            <div class="icon-wrap icon-wrap-sm bg-gray">
                                                <i class="wz-icon demo-pli-male icon-lg"></i>
                                                <i class="wz-icon-done demo-pli-like icon-lg"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="col-xs-3">
                                        <a data-toggle="tab" href="#demo-bv-tab3" title="密码设置" class="add-tooltip">
                                            <div class="icon-wrap icon-wrap-sm bg-gray">
                                                <i class="wz-icon demo-pli-home icon-lg"></i>
                                                <i class="wz-icon-done demo-pli-like icon-lg"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="col-xs-3">
                                        <a data-toggle="tab" href="#demo-bv-tab4" title="完成" class="add-tooltip">
                                            <div class="icon-wrap icon-wrap-sm bg-gray">
                                                <i class="wz-icon demo-pli-medal-2 icon-lg"></i>
                                                <i class="wz-icon-done demo-pli-like icon-lg"></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
            
                            <!--Form-->
                            <form class="form-horizontal" id="register-bv-wz-form" method="post" action="<?php echo url('admin/Admin/doRegister'); ?>">
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <!--First tab-->
                                        <div id="demo-bv-tab1" class="tab-pane">
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">邮箱地址</label>
                                                <div class="col-lg-7">
                                                    <input type="hidden" name="type" value="2">
                                                    <input type="email" class="form-control" name="email" placeholder="请输入您的邮箱地址作为登录账号">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">验证码</label>
                                                <div class="col-lg-7 input-group mar-btm">
                                                    <input type="text" class="form-control" name="verify" placeholder="请输入验证码">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-mint" id="getverify" type="button">发送验证码</button>
                                                    </span>
                                                </div>
                                            </div>
                                            
                                        </div>
            
                                        <!--Second tab-->
                                        <div id="demo-bv-tab2" class="tab-pane fade">
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">昵称</label>
                                                <div class="col-lg-7">
                                                    <input type="text" placeholder="请输入昵称" name="nickname" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">真实姓名</label>
                                                <div class="col-lg-7">
                                                    <input type="text" placeholder="请输入真实姓名" name="fullname" class="form-control">
                                                </div>
                                            </div>
                                        </div>
            
                                        <!--Third tab-->
                                        <div id="demo-bv-tab3" class="tab-pane">
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">密码设置</label>
                                                <div class="col-lg-7">
                                                    <input type="password" placeholder="请输入登录密码（不少于6位字符）" name="password" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">密码确认</label>
                                                <div class="col-lg-7">
                                                    <input type="password" placeholder="请再次输入您的密码" name="rpassword" class="form-control">
                                                </div>
                                            </div>
                                        </div>
            
                                        <!--Fourth tab-->
                                        <div id="demo-bv-tab4" class="tab-pane  mar-btm text-center">
                                            <h4>欢迎</h4>
                                            <p>点击“注册”按钮即可注册您的账号，稍后会为您开通相对应的权限，请注意查看您的邮箱，如若等待较长时间请联系系统管理员：web@ostspeech.com</p>
                                        </div>
            
                                    </div>
                                </div>
            
                                <!--Footer button-->
                                <div class="panel-footer text-right">
                                    <div class="box-inline">
                                        <button type="button" class="previous btn btn-primary">上一步</button>
                                        <button type="button" class="next btn btn-primary">下一步</button>
                                        <button type="submit" class="finish btn btn-warning" disabled>注册</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--===================================================-->
                        <!-- End Circular Form Wizard -->
            
                    </div>
                </div>
            </div>
                
        </div>
        <div class="pad-all">
            已经有账号 ? <a href="login.html" class="btn-link mar-rgt">登录</a>

            <div class="media pad-top bord-top">
                <div class="pull-right">
                    <a href="#" class="pad-rgt" title="暂未开通"><i class="demo-psi-facebook icon-lg text-primary"></i></a>
                    <a href="#" class="pad-rgt" title="暂未开通"><i class="demo-psi-twitter icon-lg text-info"></i></a>
                    <a href="#" class="pad-rgt" title="暂未开通"><i class="demo-psi-google-plus icon-lg text-danger"></i></a>
                </div>
                <div class="media-body text-left text-muted">
                    登录
                </div>
            </div>
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
    
<script type="text/javascript">

    $("#getverify").click(function () {
        var $this = $(this);
        $this.attr('disabled',true);
        var bootstrapValidator = $("#register-bv-wz-form").data('bootstrapValidator');  
        var error = bootstrapValidator.isValidField('email');
        if(error==false){
            layer.msg('账号不能为空');
            return false;
        }
        
        
        var email= $this.parents('.tab-pane').find('[name="email"]').val();
        
        

        $.post("<?php echo url('admin/admin/sendVerify'); ?>", {account: email}, function (res) {
            if (res.status) {
                DecTime.obj = $this;
                DecTime.time = "60";
                
                DecTime.dec_time();

                layer.msg('验证码已成功发送至您的邮箱', {icon: 6});
            }
            else {
                layer.msg(res.info, {icon: 5});
                $this.attr('disabled',false);
            }
            
        })
    })

    var DecTime = {
            obj:0,
            time:0,
            dec_time : function(){
                if(this.time > 0){
                    this.obj.text(this.time--+'S')
                    setTimeout("DecTime.dec_time()",1000)
                }else{
                    this.obj.text("发送验证码")
                    this.obj.attr('disabled',false)
                }

            }
        }

</script>
    

</html>
