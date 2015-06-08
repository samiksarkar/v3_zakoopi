/**
 * Base js functions
 */

$(document).ready(function(){
    //Init jQuery Masonry layout
    init_masonry();


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




$(document).ready(function(){
    //Init jQuery Masonry layout
    init_masonrynew();


});
function init_masonrynew(){
    var $container = $('.masonrybox ');

    $container.imagesLoaded( function(){
        $container.masonry({
          itemSelector: '.masonrybox li.item',
          isAnimated: true
        });
    });
}


$('a[data-toggle=tab]').on('shown.bs.tab', function (e) {
    $(window).trigger("resize");
});
$(window).resize(function(){
    $this = $('.masonrybox');
    $coloumn = $this.width() / 4;
    $this.masonry({ columnWidth: $coloumn, gutter: 0, itemSelector: '.content_block_row_wrap' });               
}); 




	$(document).ready(function(){

		$('.left-filter #dLabel, .filter_close').click(function(){

			$('.dropdown-menu.filters_dropdown').toggle();

			});

		

		$('.click_event_menu').click(function(){

			$('.navbar-collapse.right_menu').toggleClass('show_menu_item');

		});
		});




