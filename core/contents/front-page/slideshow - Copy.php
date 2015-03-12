<?php 
if(tally_option('home_slideshow_enable') == 'on'):
  	
	$flexslider = new tally_flexslider_html(array());
	
	$slider_items = tally_option('home_slideshow_items');
?>
	<div class="tally-home-section home-slideshow">
			<?php if(tally_option('home_slideshow_description') != ''): ?>
                <div class="tally-home-section-des">
                    <div class="tally-home-section-des-inner">
                        <?php echo tally_option('home_slideshow_description'); ?>
                    </div>
                </div>
            <?php endif; ?>
            
            <?php if(is_array($slider_items)): ?>
                <?php  $flexslider->start(); ?>
                	<?php foreach($slider_items as $slider_item): ?>
                    	<?php $flexslider->in_loop_start(); ?>
                        	<div class="home-slideshow-item text-align-<?php echo $slider_item['text_align']; ?>" style="background-image:url(<?php echo $slider_item['image'] ?>); height:<?php echo tally_option('home_slideshow_height', 300); ?>px;">
                            	<div class="home-slideshow-item-inner" style="max-width:<?php echo tally_option('home_slideshow_content_width', 50); ?>%;">
                                	<h4><?php echo $slider_item['title']; ?></h4>
                                    <p><?php echo $slider_item['des']; ?></p>
                                    <a href="<?php echo $slider_item['link']; ?>" class="readmore"><?php echo $slider_item['button_text']; ?></a>
                                    <div class="clear"></div>&nbsp;
                                </div>
                            </div>
                        <?php $flexslider->in_loop_end(); ?>
                    <?php endforeach; ?>
				<?php  $flexslider->end(); ?>
            <?php endif; ?>
	</div>
<?php endif; ?>