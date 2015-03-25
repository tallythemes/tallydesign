jQuery(window).load( function(){
	var mainDiv = jQuery('#wrapper'),
	preloader = jQuery('#tally_preloader');

	preloader.fadeOut(400, function(){
		mainDiv.delay(400).addClass('active');
	});
});


(function( $ ){
    $.fn.digita_stickyMenu = function( options ) {
		
        var $this = this,
        defaults = {
            'left' : 0,
            'top' : 0,
            'menu_offset_top' : $this.offset().top
        },
        settings = $.extend({}, defaults, options);
        $(window).on('scroll.stickyMenu', function(){
            if ($(window).scrollTop() > settings.menu_offset_top)
            { 
				$this.addClass('stickyMenu');
            }
            else
            {
				$this.removeClass('stickyMenu');
            }
        });
        return $this;
    };
})(jQuery);


jQuery(document).ready(function($) {
	
	$("#nav>div>ul").tinyNav({  active: 'current-menu-item' });
	 
	if(jQuery().fitVids) { $(".tally-fitVids, .tally-hpb-text").fitVids(); }
	
	if(jQuery().prettyPhoto){ $("a[rel^='prettyPhoto']").prettyPhoto({ deeplinking: false,  social_tools : false }); }
	
	$(".blog_entry:last").addClass("last");
	
	if(WOW){ new WOW().init(); }
	
	$('#header').digita_stickyMenu();
	
	if(jQuery().leanModal){ $(".leanModal").leanModal({ top : 200, overlay : 0.94, closeButton: ".leanModal_close" }); }
	
	$( ".tally-hpb-tabs .hpb-tabs" ).tabs();
	
});