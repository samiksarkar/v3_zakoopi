<?php
use MatthiasMullie\Minify;

$minifyCss = new Minify\CSS();
$minifyJs = new Minify\JS();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?= $this->Html->charset() ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title><?= $this->fetch('title') ?></title>
        <?= $this->Html->meta('icon') ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <?php 
        // This is for minify Css
        if(!\Cake\Core\Configure::read('debug')){
            $minifyCss->add(
                WWW_ROOT . 'css'.DS.'bootstrap.min.css',
                WWW_ROOT . 'css'.DS.'style.css',
                WWW_ROOT . 'css'.DS.'media.css'
            );
            $minifyCss->minify(WWW_ROOT . 'css_cache'.DS.'bundleOne.css');
            echo $this->Html->css('/css_cache/bundleOne.css');
        }else{
            echo $this->Html->css([
                    'bootstrap.min.css',
                    'style.css',
                    'media.css'
                ]);
        }
        
        // This is for the minify js
        if(!\Cake\Core\Configure::read('debug')){
            $minifyJs->add(
                WWW_ROOT . 'js'.DS.'bootstrap.min.js',
                WWW_ROOT . 'js'.DS.'imagesloaded.3.1.8.min.js',
                WWW_ROOT . 'js'.DS.'jquery.masonry.3.2.1.min.js',
                WWW_ROOT . 'js'.DS.'base.js',
                WWW_ROOT . 'js'.DS.'jquery.bxslider.js'
                    
            );
            $minifyJs->minify(WWW_ROOT . 'js_cache'.DS.'bundleOne.js');
            echo $this->Html->script(['/js_cache/bundleOne.js','jquery.pjax']);
        }else{
            echo $this->Html->script([
                    'bootstrap.min.js',
                    'imagesloaded.3.1.8.min.js',
                    'jquery.masonry.3.2.1.min.js',
                    'base.js',
                    'jquery.bxslider.js',
                    'jquery.pjax'
                ]);
           
        }
        ?>
        
        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
        
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic' rel='stylesheet' type='text/css' />
        <!--[if gte IE 9]>
          <style type="text/css">
            .gradient {
               filter: none;
            }
          </style>
        <![endif]-->
        <script>
            var zakoopiApp = {};
        </script>
    </head>
    <body id="pjax-container">
        <div>
            <?= $this->Flash->render() ?>
        </div>
        <?= $this->fetch('content') ?>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="your-raiting-box your-header-raiting ">
                            <h3>Your rating:</h3>
                            <ul>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li class="last"><a href="#">2.5</a></li>
                                <li class="close-icon"><a class="close-icon" data-dismiss="modal" href="#"><img src="images/close-img-w.png"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer"> </div>
                </div>
            </div>
        </div>
        
        
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
        <script>
            $(document).ready(function () {
                $('.left-filter #dLabel, .filter_close').click(function () {
                    $('.dropdown-menu.filters_dropdown').toggle();
                });
                $('.click_event_menu').click(function () {
                    $('.navbar-collapse.right_menu').toggleClass('show_menu_item');
                });
            });
        </script>
        <script>
            
            zakoopiApp.marketsSlider = $('#bx-slider-markets').bxSlider({
                minSlides: 1,
                maxSlides: 4,
                slideWidth: 220,
                captions: false,
                slideMargin: 20,
                responsive: true,
                pager: false

            });
            zakoopiApp.trendsSlider = $('#bx-slider-trends').bxSlider({
                minSlides: 1,
                maxSlides: 4,
                slideWidth: 220,
                captions: false,
                slideMargin: 20,
                responsive: true,
                pager: false,
                adaptiveHeight: 'true'

            });
            $(".download-btn").click(function(){
                $("ul.app-box").slideToggle();
            }); 
            
            $(document).pjax("a", '#pjax-container');

            $('#page-loader').height($(window).height());
            $('#page-loader').width($(window).width());
            $(document).on('pjax:send', function () {
                $('#page-loader').show();
            });
            $(document).on('pjax:complete', function () {
                $('#page-loader').hide();
            });
            $(document).on('pjax:error', function (xhr, status, e) {
                $("#notifxi").notifxi('q', 'Opps! it seems a slow connection...', 'warn');
            });
            
        </script>
       
    </body>
</html>