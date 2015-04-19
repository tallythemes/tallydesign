<?php if(tally_option('home_textBlock2_enable') == 'on'): ?>
<div class="tally-home-section home-textBlock home-textBlock2 hpss1 htb-align-<?php echo tally_option('home_textBlock2_align'); ?>">
	<div class="tally-home-section-inner">
    	<?php if(tally_option('home_textBlock2_enable') != ''): ?>
        	<?php echo tally_option('home_textBlock2_content'); ?>
            
            <?php if(tally_option('home_textBlock2_button_link') != ''): ?>
            	<a href="<?php echo tally_option('home_textBlock2_button_link'); ?>" class="htb-more"><?php echo tally_option('home_textBlock2_button_text'); ?></a>
            <?php endif; ?>
        <?php else: ?>
        	<p>&nbsp;</p>
        <?php endif; ?>
        <div class="clear"></div>
    </div>
</div>
<?php endif; ?>