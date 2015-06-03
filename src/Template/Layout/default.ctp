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

        <?php 
        if(!\Cake\Core\Configure::read('debug')){
            $minifyCss->add(
                WWW_ROOT . 'css'.DS.'bootstrap.min.css',
                WWW_ROOT . 'css'.DS.'style.css',
                WWW_ROOT . 'css'.DS.'media.css'
            );
            $minifyCss->minify(WWW_ROOT . 'css_cache'.DS.'bundleOne.css');
            echo $this->Html->css('/css_cache/bundleOne.css');
        }else{
            echo $this->Html->css('bootstrap.min.css');
            echo $this->Html->css('style.css');
            echo $this->Html->css('media.css');
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
    </head>
    <body>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed-->
        <script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/imagesloaded.3.1.8.min.js"></script>
        <script src="js/jquery.masonry.3.2.1.min.js"></script>
        <script src="js/base.js" type="text/javascript"></script>
        <script src="js/base.js" type="text/javascript"></script>
        <script src="js/jquery.bxslider.js" type="text/javascript"></script>
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
            $('.bxslider').bxSlider({
                minSlides: 1,
                maxSlides: 4,
                slideWidth: 220,
                captions: true,
                slideMargin: 20,
                responsive: true,
                pager: false

            });
        </script>
        <script>
            $('.bxslider1').bxSlider({
                minSlides: 1,
                maxSlides: 4,
                slideWidth: 220,
                captions: true,
                slideMargin: 20,
                responsive: true,
                pager: false,
                adaptiveHeight: 'true'

            });
        </script>
    </body>
</html>