<?php
if(tally_hp_option($the_prefix.'enable') == 'on'):
	$control_nav = tally_hp_option($the_prefix.'control_nav');
	$direction_nav = tally_hp_option($the_prefix.'direction_nav');
	if($control_nav == 'on'){ $control_nav = 'true'; }else{ $control_nav = 'false'; }
	if($direction_nav == 'on'){ $direction_nav = 'true'; }else{ $direction_nav = 'false'; }
	
	$flexslider = new tally_flexslider_html(array('prevText' => '', 'nextText' => '', 'controlNav' => $control_nav, 'directionNav' => $direction_nav,));
	if(tally_hp_option($the_prefix.'image_size') != ''){
		$image_size = explode("x", tally_hp_option($the_prefix.'image_size'));
	}else{
		$image_size = array(1200, 400);
	}
	$quoteSlider_items = tally_hp_option($the_prefix.'items');
	if(is_array($slider_items)): ?>
		<div class="<?php echo $block_class; ?> thpb-quoteSlider tally-flexslider-skin-1 <?php echo $the_block['skin']; ?>">
			<?php  $flexslider->start(); ?>
				<?php foreach($quoteSlider_items as $quoteSlider_item): ?>
					<?php $flexslider->in_loop_start(); ?>
						<div class="hpb-slider-item">
							<div class="hpb-text">"<?php echo $quoteSlider_item['des']; ?>"</div>
                            <?php if(!empty($quoteSlider_item['image'])): ?>
                                <div class="hpb-image">
                                	<?php if(!empty($quoteSlider_item['link'])): ?><a href="<?php echo $quoteSlider_item['link']; ?>" target="_blank"><?php endif; ?>
                                    	<img src="<?php echo tally_image_size($quoteSlider_item['image'], $image_size[0], $image_size[1]); ?>" alt="<?php echo $quoteSlider_item['title'] ?>" height="<?php echo $image_size[1]; ?>" width="<?php echo $image_size[0]; ?>"/>
                                    <?php if(!empty($quoteSlider_item['link'])): ?></a><?php endif; ?>
                                </div>
                            <?php endif; ?>
                            <?php if(!empty($quoteSlider_item['title'])): ?>
                                <div class="hpb-name">
                                    <?php if(!empty($quoteSlider_item['link'])): ?><a href="<?php echo $quoteSlider_item['link']; ?>" target="_blank"><?php endif; ?>
                                        <?php echo $quoteSlider_item['title']; ?>
                                    <?php if(!empty($quoteSlider_item['link'])): ?></a><?php endif; ?>
                                </div>
                            <?php endif; ?>
                            <?php if(!empty($quoteSlider_item['position'])): ?>
								<div class="hpb-pogition">
									<?php echo $quoteSlider_item['position']; ?>
                                </div>
                            <?php endif; ?>
						</div>
					<?php $flexslider->in_loop_end(); ?>
				<?php endforeach; ?>
			<?php  $flexslider->end(); ?>
		</div>
	<?php endif; ?>
<?php endif; ?>