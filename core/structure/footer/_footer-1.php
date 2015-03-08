<div id="footer" class="tally-footer-1">
	<div id="footer-inner" class="site_content_width">
    	<div class="copy_text align-left fe-skin-1">
			<?php echo apply_filters('tally_footer_copyright_text', tally_option('footer_copyright', 'Powered by <a href="'.esc_url('http://wordpress.org/').'" target="_blank" title="A Semantic Personal Publishing Platform" rel="generator">WordPress</a> | Design by <a href="'.esc_url('http://tallythemes.com/').'" target="_blank" rel="designer">TallyThemes</a>')) ?>
        </div>
        
        <div class="footer_menu align-right fe-skin-1">
        	<?php wp_nav_menu( array('theme_location'=>'footer_menu') ); ?>
        </div>
        <div class="clear"></div>
    </div>
</div>