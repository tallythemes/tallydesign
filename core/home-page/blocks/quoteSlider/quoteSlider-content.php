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
	$slider_items = tally_hp_option($the_prefix.'items');
	if(is_array($slider_items)): ?>
		<div class="home-slideshow tally-flexslider-skin-1">
			<?php  $flexslider->start(); ?>
				<?php foreach($slider_items as $slider_item): ?>
					<?php $flexslider->in_loop_start(); ?>
						<div class="home-slideshow-item">
							<div class="home-slidesho-image">
								<img src="<?php echo tally_image_size($slider_item['image'], $image_size[0], $image_size[1]); ?>" alt="<?php echo $slider_item['title'] ?>" height="<?php echo $image_size[1]; ?>" width="<?php echo $image_size[0]; ?>"/>
							</div>
							<div class="home-slideshow-caption text-align-<?php echo $slider_item['text_align']; ?>">
								<div class="home-slideshow-caption-inner">
									<?php if($slider_item['title'] != ''): ?>
										<h4 style="color: <?php echo $slider_item['heading_color']; ?>!important;">
											<?php echo $slider_item['title']; ?>
										</h4>
									<?php endif; ?>
									<?php if($slider_item['des'] != ''): ?>
										<p style="color: <?php echo $slider_item['text_color']; ?>;"><?php echo $slider_item['des']; ?></p>
									<?php endif; ?>
									<?php if(($slider_item['link'] != '') && ($slider_item['button_text'] != '')): ?>
										<a href="<?php echo $slider_item['link']; ?>" class="tally-button btn-color-<?php echo $slider_item['button_color']; ?>">
											<?php echo $slider_item['button_text']; ?>
										</a>
									<?php endif; ?>
									<div class="clear" style="height:0;"></div>&nbsp;
								</div>
							</div>
						</div>
					<?php $flexslider->in_loop_end(); ?>
				<?php endforeach; ?>
			<?php  $flexslider->end(); ?>
		</div>
	<?php endif; ?>
<?php endif; ?>