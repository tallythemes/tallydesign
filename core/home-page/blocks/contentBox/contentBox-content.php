<?php
if(tally_hp_option($the_prefix.'enable') == 'on'):

	$contentBox_items = tally_hp_option($the_prefix.'items');
	$masonry = new tally_masonry_html(array('column'=>tally_hp_option($the_prefix.'column', 4), 'margin'=>tally_hp_option($the_prefix.'margin', 3)));
	$contentBox_items_count = 1;
	
	if(tally_hp_option($the_prefix.'image_size') != ''){
		$image_size = explode("x", tally_hp_option($the_prefix.'image_size'));
	}else{
		$image_size = array(200, 200);
	}
		
	if(is_array($contentBox_items)): ?>
		<div class="<?php echo $block_class; ?> thpb-contentBox <?php echo $the_block['skin']; ?>">
			<?php $masonry->start(); ?>
				<?php foreach($contentBox_items as $contentBox_item): ?>
					<?php $masonry->in_loop_start(); ?>
						<div class="hpb-contentBox-item hpb-contentBox-item-<?php echo $contentBox_items_count; ?> <?php echo $contentBox_item['class']; ?>">
                        
                        	<?php if($contentBox_item['link'] != ''): ?><a href="<?php echo $contentBox_item['link']; ?>"><?php endif; ?>
								<?php if($contentBox_item['image'] != ''): ?>
                                	<img src="<?php echo tally_image_size($contentBox_item['image'],$image_size[0],$image_size[1]); ?>" alt="<?php echo $contentBox_item['title'];?>"/>
                                <?php endif; ?>
                            <?php if($contentBox_item['link'] != ''): ?></a><?php endif; ?>
                            
                            <?php if( ($contentBox_item['title'] != '') || ($contentBox_item['des'] != '') ): ?>
                                <div class="hpb-content">
                                    <?php if($contentBox_item['title'] != ''): ?><h4 class="hpb-title"><?php echo $contentBox_item['title']; ?></h4><?php endif; ?>
                                    <?php if($contentBox_item['des'] != ''): ?><div class="hpb-des"><?php echo $contentBox_item['des']; ?></div><?php endif; ?>
                                    <?php if(($contentBox_item['link'] != '') && ($contentBox_item['link_text'] != '')): ?>
                                        <a href="<?php echo $contentBox_item['link']; ?>" class="hpb-more"><?php echo $contentBox_item['link_text']; ?></a>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                            
						</div>
					<?php $masonry->in_loop_end(); ?>
				<?php $contentBox_items_count++; endforeach; ?>
			<?php $masonry->end(); ?>
		</div>
	<?php endif; ?>
    
<?php endif; ?>