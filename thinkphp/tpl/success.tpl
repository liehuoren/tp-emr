<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>启音言语科技</title>

    <!--STYLESHEET-->
    <!--=================================================-->
    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="__CSS__/bootstrap.min.css" rel="stylesheet">

    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="__CSS__/nifty.min.css" rel="stylesheet">

    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="__CSS__/demo/nifty-demo-icons.min.css" rel="stylesheet">
    
    <!--JAVASCRIPT-->
    <!--=================================================-->
    <link href="__PLUGINS__/font-awesome/css/font-awesome.min.css" rel="stylesheet">
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
</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
    <div id="container" class="cls-container">
        <div id="bg-overlay" class="bg-img" style="background-image: url(&quot;/static/img/bg-img/bg-img-2.jpg&quot;);"></div>
        <!-- HEADER -->
        <!--===================================================-->
        
        
        <!-- CONTENT -->
        <!--===================================================-->
        <div class="cls-content">
            <div class="cls-content-sm panel">
                <div class="panel-body">
                    <?php switch ($code) {?>
                        <?php case 1:?>
                        <h2 class="text-muted h2"><i class="fa fa-check-circle-o text-success mar-rgt"></i><?php echo(strip_tags($msg));?></h2>
                        <?php break;?>
                        <?php case 0:?>
                        <h2 class="text-muted h2"><i class="fa fa-exclamation-circle text-danger mar-rgt "></i><?php echo(strip_tags($msg));?></h2>
                        <?php break;?>
                    <?php } ?>
                    <div class="pad-btm text-muted">
                        页面自动 <a id="href" class="btn-default" href="<?php echo($url);?>">跳转</a> 等待时间： <b id="wait"><?php echo($wait);?></b>
                    </div>
                    <hr class="new-section-sm bord-no">
                    <div class="pad-top"><a class="btn-default" href="/">返回主页</a></div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            (function(){
                var wait = document.getElementById('wait'),
                    href = document.getElementById('href').href;
                var interval = setInterval(function(){
                    var time = --wait.innerHTML;
                    if(time <= 0) {
                        location.href = href;
                        clearInterval(interval);
                    };
                }, 1000);
            })();
        </script>
        
    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->


        </body>
</html>
