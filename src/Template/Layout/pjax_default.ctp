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
    $(".download-btn").click(function () {
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
