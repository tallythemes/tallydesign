<div class="<?php echo $block_class; ?> text-align-<?php echo tally_hp_option($the_prefix.'align'); ?> thpb-contactInfo <?php echo $the_block['skin']; ?>">
	<?php if(tally_hp_option($the_prefix.'title') != ''): ?><h2 class="hpb-title"><?php echo tally_hp_option($the_prefix.'title'); ?></h2><?php endif; ?>
	<?php if(tally_hp_option($the_prefix.'des') != ''): ?><div class="hpb-des"><?php echo tally_hp_option($the_prefix.'des'); ?></div><?php endif; ?>
    
    <ul class="hpb-items">
    	<?php if(tally_hp_option($the_prefix.'address') != ''): ?>
            <li class="hpb-address">
            	<i class="fa fa-map-marker"></i><?php echo tally_hp_option($the_prefix.'address'); ?>
            </li>
        <?php endif; ?>
		<?php if(tally_hp_option($the_prefix.'email') != ''): ?>
            <li class="hpb-email">
            	<i class="fa fa-envelope-o"></i><a href="mailto:<?php echo tally_hp_option($the_prefix.'email'); ?>"><?php echo tally_hp_option($the_prefix.'email'); ?></a>
            </li>
        <?php endif; ?>
        <?php if(tally_hp_option($the_prefix.'phone') != ''): ?>
            <li class="hpb-phone">
            	<i class="fa fa-phone"></i><a href="tel:<?php echo tally_hp_option($the_prefix.'phone'); ?>"><?php echo tally_hp_option($the_prefix.'phone'); ?></a>
            </li>
        <?php endif; ?>        
    </ul>
</div>