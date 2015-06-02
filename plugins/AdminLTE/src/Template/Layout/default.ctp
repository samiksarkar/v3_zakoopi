<?php
    use MatthiasMullie\Minify;
    $this_dir = \Cake\Core\Plugin::path('AdminLTE') .'webroot';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
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
        <?= $this->Html->css('/dist/css/skins/_all-skins.min'); ?>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php
        if(true){
            $minifyJs = new Minify\JS();
            $minifyJs->add(
                $this_dir.'/plugins/jQuery/jQuery-2.1.4.min.js',
                $this_dir.'/bootstrap/js/bootstrap.js',
//                $this_dir.'/js/jquery.pjax.js',
                $this_dir.'/plugins/slimScroll/jquery.slimscroll.js',
                $this_dir.'/plugins/fastclick/fastclick.js',
                $this_dir.'/dist/js/app.js',
                $this_dir.'/plugins/sparkline/jquery.sparkline.min.js',
                $this_dir.'/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
                $this_dir.'/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
                $this_dir.'/plugins/chartjs/Chart.min.js',
                $this_dir.'/dist/js/pages/dashboard2.js',
                $this_dir.'/dist/js/demo.js'
            );
            $rnd = '9ei';
            $minifyJs->minify($this_dir.'/js_cache/bundleOne-'.$rnd.'.js');
            echo $this->Html->script(['/js_cache/bundleOne-'.$rnd,'jquery.pjax']);
        }else{
            echo $this->Html->script(['/plugins/jQuery/jQuery-2.1.4.min',
                '/bootstrap/js/bootstrap.min',
                'jquery.pjax',
                '/plugins/slimScroll/jquery.slimscroll.min',
                '/plugins/fastclick/fastclick.min',
                '/dist/js/app',
                '/plugins/sparkline/jquery.sparkline.min',
                '/plugins/jvectormap/jquery-jvectormap-1.2.2.min',
                '/plugins/jvectormap/jquery-jvectormap-world-mill-en',
                '/plugins/chartjs/Chart.min',
                '/dist/js/pages/dashboard2',
                '/dist/js/demo'
            ]);
        }
        ?>
        <?= $this->fetch('meta') ?>
<?= $this->fetch('css') ?>
<?= $this->fetch('script') ?>

    </head>
    <body class="skin-blue sidebar-mini" id="pjax-container">
        <!-- Site wrapper -->
        <div class="wrapper">

<?= $this->element('header'); ?>

            <!-- =============================================== -->

            <!-- Left side column. contains the sidebar -->
<?= $this->element('left-sidebar'); ?>

            <!-- =============================================== -->

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
<?= $this->fetch('title'); ?>
                        <small><?= $this->fetch('status'); ?></small>
                    </h1>
                    <!--            <ol class="breadcrumb">-->
                    <!--                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>-->
                    <!--                <li><a href="#">Examples</a></li>-->
                    <!--                <li class="active">Blank page</li>-->
                    <!--            </ol>-->
                    <p class="pull-right">
<?= $this->Flash->render() ?>
                    </p>
                </section>

                <!-- Main content -->
                <section class="content">

<?= $this->fetch('content'); ?>

                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->

            <?= $this->element('footer'); ?>

            <!-- Control Sidebar -->
<?= $this->element('control-sidebar'); ?>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class='control-sidebar-bg'></div>
        </div><!-- ./wrapper -->
        <div style="position: fixed; z-index: 100000; background: rgba(40,40,40,0.7); top: 0; left: 0; display: none;" id="page-loader">

            <br />
            <br />
            <br />
            <br />
            <br />
            <center>
                <img src="<?php echo \Cake\Routing\Router::url('/bar_loader.gif'); ?>" />
            </center>

        </div>
        <script type="text/javascript">
            appZak();
            AppAddons();

            $.pjax.defaults.timeout = 3600;

            $(document).pjax('a', '#pjax-container');

            $('#page-loader').height($(window).height());
            $('#page-loader').width($(window).width());
            $(document).on('pjax:send', function () {
                $('#page-loader').show();
            });
            $(document).on('pjax:complete', function () {
                $('#page-loader').hide();
            });
            $(document).on('pjax:error', function (xhr, status, e) {
                alert(e);
            });
        </script>
    </body>
</html>