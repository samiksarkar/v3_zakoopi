/**
 * Base js functions
 */

$(document).ready(function(){
    //Init jQuery Masonry layout
    init_masonry();

    //Select menu onchange
    $("#collapsed-navbar").change(function () {
        window.location = $(this).val();
    });
});


function init_masonry(){
    var $container = $('.content');

    $container.imagesLoaded( function(){
        $container.masonry({
          itemSelector: '.content li',
          isAnimated: true
        });
    });
}



$('a[data-toggle=tab]').on('shown.bs.tab', function (e) {
    $(window).trigger("resize");
});
$(window).resize(function(){
    $this = $('.content');
    $coloumn = $this.width() / 4;
    $this.masonry({ columnWidth: $coloumn, gutter: 0, itemSelector: '.content_block_row_wrap' });               
}); 






