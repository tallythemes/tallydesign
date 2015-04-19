<div class="<?php echo $block_class; ?> thpb-newsletter <?php echo $the_block['skin']; ?>">
	<?php if(tally_hp_option($the_prefix.'des') != ''): ?><div class="hpb-des"><?php echo do_shortcode(tally_hp_option($the_prefix.'des')); ?></div><?php endif; ?>
    <?php if(tally_hp_option($the_prefix.'html') != ''): ?><div class="hpb-html"><?php echo do_shortcode(tally_hp_option($the_prefix.'html')); ?></div><?php endif; ?>
</div>