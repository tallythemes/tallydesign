<div class="<?php echo $block_class; ?> thpb-contactForm <?php echo $the_block['skin']; ?>">
	<?php if(tally_hp_option($the_prefix.'title') != ''): ?><h2 class="hpb-title"><?php echo tally_hp_option($the_prefix.'title'); ?></h2><?php endif; ?>
	<?php if(tally_hp_option($the_prefix.'des') != ''): ?><div class="hpb-des"><?php echo tally_hp_option($the_prefix.'des'); ?></div><?php endif; ?>
    
    <?php 
		new sacf_simple_ajax_contact_form(array(
			'id' => $the_prefix,			
			'div_class' => tally_hp_option($the_prefix.'div_class'),
			'submit_text' => tally_hp_option($the_prefix.'submit_text'),
			'email' => tally_hp_option($the_prefix.'email'),
			'subject' => tally_hp_option($the_prefix.'subject'),
			'fields' => tally_hp_option($the_prefix.'fields'),
		));
	?>
</div>