<?php
$flexslider = new tally_flexslider_html(array('prevText' => '', 'nextText' => ''));
	if(tally_option('home_slideshow_image_size') != ''){
		$image_size = explode("x", tally_option('home_slideshow_image_size'));
	}else{
		$image_size = array(1200, 400);
	}
$slider_items = tally_hp_option($the_prefix.'items');
 if(is_array($slider_items)): ?>
	<?php  $flexslider->start(); ?>
		<?php foreach($slider_items as $slider_item): ?>
			<?php $flexslider->in_loop_start(); ?>
				<div class="home-slideshow-item">
					<div class="home-slidesho-image">
						<img src="<?php echo tally_image_size($slider_item['image'], $image_size[0], $image_size[1]); ?>" alt="<?php echo $slider_item['title'] ?>" height="<?php echo $image_size[1]; ?>" width="<?php echo $image_size[0]; ?>"/>
					</div>
					<div class="home-slideshow-caption text-align-<?php echo $slider_item['text_align']; ?>">
						<div class="home-slideshow-caption-inner">
							<h4 style="color: <?php echo $slider_item['heading_color']; ?>!important;"><?php echo $slider_item['title']; ?></h4>
							<p style="color: <?php echo $slider_item['text_color']; ?>;"><?php echo $slider_item['des']; ?></p>
							<a href="<?php echo $slider_item['link']; ?>" class="readmore button-color-<?php echo $slider_item['button_color']; ?>">
								<?php echo $slider_item['button_text']; ?>
							</a>
							<div class="clear"></div>&nbsp;
						</div>
					</div>
				</div>
			<?php $flexslider->in_loop_end(); ?>
		<?php endforeach; ?>
	<?php  $flexslider->end(); ?>
<?php endif; ?>