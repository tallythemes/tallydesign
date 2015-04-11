<div class="<?php echo $block_class; ?> thpb-contactForm <?php echo $the_block['skin']; ?>">
	<?php if(tally_hp_option($the_prefix.'title') != ''): ?><h2 class="hpb-title"><?php echo tally_hp_option($the_prefix.'title'); ?></h2><?php endif; ?>
	<?php if(tally_hp_option($the_prefix.'des') != ''): ?><div class="hpb-des"><?php echo tally_hp_option($the_prefix.'des'); ?></div><?php endif; ?>
    
    <?php new sacf_simple_ajax_contact_form; ?>
</div>