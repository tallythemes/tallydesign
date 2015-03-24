<div class="<?php echo $block_class; ?> text-align-<?php echo tally_hp_option($the_prefix.'align'); ?> tally-hpb-text <?php echo $the_block['skin']; ?>">
	<h2 class="hpb-title"><?php echo tally_hp_option($the_prefix.'title'); ?></h2>
	<div class="hpb-content"><?php echo tally_hp_option($the_prefix.'content'); ?></div>
	<div class="hpb-buttons">
		<?php foreach(tally_hp_option($the_prefix.'buttons') as $button): ?>
			<a href="<?php echo $button['link']; ?>" target="<?php echo $button['target']; ?>" class="tally-button btn-color-<?php echo $button['color']; ?> <?php echo $button['class']; ?>"><?php echo $button['title']; ?></a>
		<?php endforeach; ?>
	</div>
</div>