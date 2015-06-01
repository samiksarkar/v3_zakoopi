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
        <img src="<?php echo \Cake\Routing\Router::url('/bar_loader.gif'); ?>"
    </center>
    
</div>

<script type="text/javascript">
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
    appZak();
    AppAddons();
</script>