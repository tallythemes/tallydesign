<?php
if(tally_hp_option($the_prefix.'enable') == 'on'):

	$masonry = new tally_masonry_html(array('column'=>tally_hp_option($the_prefix.'column', 4), 'margin'=>tally_hp_option($the_prefix.'margin', 3)));
	$imageGallery_item_count = 1;
	if(tally_hp_option($the_prefix.'image_size') != ''){
		$image_size = explode("x", tally_hp_option($the_prefix.'image_size'));
	}else{
		$image_size = array(1200, 400);
	}
	
	$attachments = explode( ',', tally_hp_option($the_prefix.'gallery') );
	
	if(is_array($attachments) && !empty($attachments)): ?>
		<div class="<?php echo $block_class; ?> thpb-imageGallery <?php echo $the_block['skin']; ?>">
			<?php $masonry->start(); ?>
				<?php foreach($attachments as $attachment): ?>
					<?php $masonry->in_loop_start(); ?>
                    	<?php
							$link_class = 'magnificPopup-child';
							$link_icon_class = 'fa-search-plus';
							$link = NULL;
							$image_url = '';
							$image_caption = NULL;
							
							$attachment_query = new WP_Query(array('post_type'=>'attachment', 'posts_per_page'=>1, 'p'=>$attachment));
							if ( $attachment_query->have_posts() ) {
								while ( $attachment_query->have_posts() ) { $attachment_query->the_post();
									$link = $attachment_query->post->guid;
									$image_url = $attachment_query->post->guid;
									$image_caption = $attachment_query->post->post_excerpt;
								}
							}
							
						?>
                        <a href="<?php echo $link; ?>" title="<?php echo $image_caption; ?>" class="<?php echo $link_class; ?>">
                            <img src="<?php echo tally_image_size($image_url, $image_size[0], $image_size[1], true); ?>" width="<?php echo $image_size[0]; ?>" height="<?php echo $image_size[1]; ?>" alt="<?php echo $image_caption; ?>"  />
                         	<span><i class="fa <?php echo $link_icon_class; ?>"></i></span>
						</a>
					<?php $masonry->in_loop_end(); ?>
				<?php $imageGallery_item_count++; endforeach; ?>
			<?php $masonry->end(); ?>
		</div>
	<?php endif; ?>
    
<?php endif; ?>