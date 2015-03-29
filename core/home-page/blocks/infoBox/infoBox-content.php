<?php
if(tally_hp_option($the_prefix.'enable') == 'on'):

	$infobox_items = tally_hp_option($the_prefix.'items');
	$masonry = new tally_masonry_html(array('column'=>tally_hp_option($the_prefix.'column', 4), 'margin'=>tally_hp_option($the_prefix.'margin', 3)));
	$infoBox_item_count = 1;
	
	if(is_array($infobox_items)): ?>
		<div class="<?php echo $block_class; ?> thpb-infobox <?php echo $the_block['skin']; ?>">
			<?php $masonry->start(); ?>
				<?php foreach($infobox_items as $infobox_item): ?>
					<?php $masonry->in_loop_start(); ?>
						<div class="thpb-infobox-item thpb-infobox-item-<?php echo $infoBox_item_count; ?>">
							<?php if( $infobox_item['link'] != ''): ?><a href="<?php echo $infobox_item['link']; ?>"><?php endif; ?>
								<div class="hibi-icon"><i class="fa <?php echo $infobox_item['icon']; ?>"></i></div>
								<div class="hibi-description">
									<h4><?php echo $infobox_item['title']; ?></h4>
                                    <p><?php echo $infobox_item['des']; ?></p>
								</div>
							<?php if( $infobox_item['link'] != ''): ?></a><?php endif; ?>
						</div>
					<?php $masonry->in_loop_end(); ?>
				<?php $infoBox_item_count++; endforeach; ?>
			<?php $masonry->end(); ?>
		</div>
	<?php endif; ?>
    
<?php endif; ?>