<?php
if(tally_option('home_quoteSlider_enable') == 'on'):

	$flexslider = new tally_flexslider_html(array('prevText' => '', 'nextText' => ''));
	$quoteSlider_items = tally_option('home_quoteSlider_items');
	if(tally_option('home_quoteSlider_image_size') != ''){
		$image_size = explode("x", tally_option('home_quoteSlider_image_size'));
	}else{
		$image_size = array(1200, 400);
	}
?>
<div class="tally-home-section home-quoteSlider hpss1 tally-flexslider-skin-1">
	<div class="tally-home-section-inner">
		<?php if(tally_option('home_quoteSlider_description') != ''): ?>
			<div class="tally-home-section-des">
				<div class="tally-home-section-des-inner">
					<?php echo tally_option('home_quoteSlider_description'); ?>
				</div>
			</div>
		<?php endif; ?>
        
        <?php if(is_array($quoteSlider_items)): ?>
			<?php  $flexslider->start(); ?>
				<?php foreach($quoteSlider_items as $quoteSlider_item): ?>
					<?php $flexslider->in_loop_start(); ?>
						<div class="home-quoteSlider-item">
							<div class="hqs-text">"<?php echo $quoteSlider_item['des']; ?>"</div>
                            <?php if(!empty($quoteSlider_item['image'])): ?>
                                <div class="hqs-image">
                                	<?php if(!empty($quoteSlider_item['link'])): ?><a href="<?php echo $quoteSlider_item['link']; ?>" target="_blank"><?php endif; ?>
                                    	<img src="<?php echo tally_image_size($quoteSlider_item['image'], $image_size[0], $image_size[1]); ?>" alt="<?php echo $quoteSlider_item['title'] ?>" height="<?php echo $image_size[1]; ?>" width="<?php echo $image_size[0]; ?>"/>
                                    <?php if(!empty($quoteSlider_item['link'])): ?></a><?php endif; ?>
                                </div>
                            <?php endif; ?>
                            <?php if(!empty($quoteSlider_item['title'])): ?>
                                <div class="hqs-name">
                                    <?php if(!empty($quoteSlider_item['link'])): ?><a href="<?php echo $quoteSlider_item['link']; ?>" target="_blank"><?php endif; ?>
                                        <?php echo $quoteSlider_item['title']; ?>
                                    <?php if(!empty($quoteSlider_item['link'])): ?></a><?php endif; ?>
                                </div>
                            <?php endif; ?>
                            <?php if(!empty($quoteSlider_item['position'])): ?>
								<div class="hqs-pogition">
									<?php echo $quoteSlider_item['position']; ?>
                                </div>
                            <?php endif; ?>
						</div>
					<?php $flexslider->in_loop_end(); ?>
				<?php endforeach; ?>
			<?php  $flexslider->end(); ?>
		<?php endif; ?>
    </div>
</div>
<?php endif; ?>