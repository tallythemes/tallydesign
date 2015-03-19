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
	 
	if(jQuery().fitVids) { $(".tally-fitVids").fitVids(); }
	
	if(jQuery().prettyPhoto){ $("a[rel^='prettyPhoto']").prettyPhoto({ deeplinking: false,  social_tools : false }); }
	
	$(".blog_entry:last").addClass("last");
	
	if(WOW){ new WOW().init(); }
	
	$('#header').digita_stickyMenu();
	
	if(jQuery().leanModal){ $(".leanModal").leanModal({ top : 200, overlay : 0.94, closeButton: ".leanModal_close" }); }
	
});


/**
 * Responsive Video Embeds
 *
 * Create and maintained by Kevin Leary, www.kevinleary.net, WordPress development in Boston, MA
 */(function(e){var t={config:{container:e(".rve"),selector:"object, embed, iframe"},init:function(n){t.config.container.length>0&&e(window).on("resize load",t.resize)},resize:function(){e(t.config.selector,t.config.container).each(function(){var t=e(this),n=t.parent().width(),r=Math.round(n*.5625);t.attr("height",r);t.attr("width",n)})}};t.init()})(jQuery);