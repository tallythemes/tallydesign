<div id="tally-header-1">
	<?php if(tally_is_topbar() != 'off'){ ?>
        <div id="topbar" class="<?php echo apply_filters('tally_topbar_class', ''); ?>">
            <div id="topbar-inner" class="site_content_width">
                <?php tally_header_element_phone(); ?>
                <?php tally_header_element_email(); ?>
                <?php tally_header_element_socialIcons(array('class'=>'he-skin1')); ?>
                <div class="clear"></div>
            </div>
        </div>
    <?php } ?>
    
    <div id="header" class="<?php echo apply_filters('tally_header_class', ''); ?>">
        <div id="header-inner" class="site_content_width">
            <?php tally_header_element_logo(); ?>
            <?php tally_header_element_loginBox(array('class'=>'he-skin1')); ?>
            <?php tally_header_element_search(array('class'=>'he-skin1')); ?>
            <?php tally_header_element_MenuPrimary(array('class'=>'he-skin1')); ?>
            <div class="clear"></div>
        </div>
    </div>
</div>