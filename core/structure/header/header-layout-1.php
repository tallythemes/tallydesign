<?php if(tally_is_topbar() != 'off'){ ?>
    <div id="topbar" class="<?php echo apply_filters('tally_topbar_class', ''); ?> border-<?php echo tally_option('header_layout_topbar_border'); ?>">
        <div id="topbar-inner" class="site_content_width">
            <?php tally_header_element_phone(); ?>
            <?php tally_header_element_email(); ?>
            <?php tally_header_element_socialIcons(); ?>
            <div class="clear"></div>
        </div>
    </div>
<?php } ?>

<div id="header" class="<?php echo apply_filters('tally_header_class', ''); ?> border-<?php echo tally_option('header_layout_header_border'); ?>">
	<div id="header-inner" class="site_content_width">
		
		<div class="clear"></div>
	</div>
</div>