<?php if(tally_option('home_textBlock5_enable') == 'on'): ?>
<div class="tally-home-section home-textBlock home-textBlock5 hpss1 htb-align-<?php echo tally_option('home_textBlock5_align'); ?>">
	<div class="tally-home-section-inner">
    	<?php if(tally_option('home_textBlock5_enable') != ''): ?>
        	<?php echo tally_option('home_textBlock5_content'); ?>
            
            <?php if(tally_option('home_textBlock5_button_link') != ''): ?>
            	<a href="<?php echo tally_option('home_textBlock5_button_link'); ?>" class="htb-more"><?php echo tally_option('home_textBlock5_button_text'); ?></a>
            <?php endif; ?>
        <?php else: ?>
        	<p>&nbsp;</p>
        <?php endif; ?>
        <div class="clear"></div>
    </div>
</div>
<?php endif; ?>