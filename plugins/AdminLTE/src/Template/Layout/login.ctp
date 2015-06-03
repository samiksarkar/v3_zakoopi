<?php
use MatthiasMullie\Minify;
$minifyCss = new Minify\CSS();
$minifyJs = new Minify\JS();
$minifyCss->add(file_get_contents("https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css"));
$minifyCss->add(file_get_contents('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.css'));
//$minifyCss->minify('bundleOne.css');
?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <title><?= $this->fetch('title') ?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <?= $this->Html->meta('icon') ?>

        <!-- Bootstrap 3.3.4 -->
        <?= $this->Html->css('/bootstrap/css/bootstrap.min'); ?>

        <!-- Font Awesome Icons -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <?= $this->Html->css('/dist/css/AdminLTE.min'); ?>

        <!-- AdminLTE Skins. Choose a skin from the css/skins 
             folder instead of downloading all of them to reduce the load. -->
        <?= $this->Html->css([
            '/dist/css/skins/_all-skins.min',
            '/plugins/iCheck/square/blue'
        ]); ?>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>
    <body class="login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="<?= Cake\Routing\Router::url('/') ?>">
                    <?= $this->Html->image('logo-dark.png'); ?>
                </a>
            </div><!-- /.login-logo -->
            <div class="login-box-body">
                <?= $this->fetch('content'); ?>

<!--                <p class="login-box-msg">Sign in to start your session</p>
                <form action="../../index2.html" method="post">
                    <div class="form-group has-feedback">
                        <input type="email" class="form-control" placeholder="Email"/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Password"/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">    
                            <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox"> Remember Me
                                </label>
                            </div>                        
                        </div> /.col 
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div> /.col 
                    </div>
                </form>

                <div class="social-auth-links text-center">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
                    <a href="#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
                </div> /.social-auth-links 

                <a href="#">I forgot my password</a><br>
                <a href="register.html" class="text-center">Register a new membership</a>-->

            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->

        <?= $this->Html->script(['/plugins/jQuery/jQuery-2.1.4.min', '/bootstrap/js/bootstrap.min', '/plugins/iCheck/icheck.min']) ?>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
    </body>
</html>