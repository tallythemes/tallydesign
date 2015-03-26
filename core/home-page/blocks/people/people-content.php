<?php
if(tally_hp_option($the_prefix.'enable') == 'on'):
$people_items = tally_hp_option($the_prefix.'items');
$masonry = new tally_masonry_html(array('column'=>tally_hp_option($the_prefix.'columns', 4), 'margin'=>tally_hp_option($the_prefix.'column_margin', 3)));
if(tally_hp_option($the_prefix.'image_size') != ''){
	$image_size = explode("x", tally_hp_option($the_prefix.'image_size'));
}else{
	$image_size = array(200, 200);
}
?>
<div class="<?php echo $block_class; ?> thpb-people <?php echo $the_block['skin']; ?>">
	<?php if(is_array($people_items)): ?>
		<div class="hpb-people-items">
           	<?php $masonry->start(); ?>
				<?php foreach($people_items as $people_item): ?>
					<?php $masonry->in_loop_start(); ?>
						<div class="hpb-people-item ">
                           	<a href="<?php echo $people_item['link']; ?>">
                               	<img src="<?php echo tally_image_size($people_item['image'], $image_size[0], $image_size[1]); ?>" alt="<?php echo $people_item['title']; ?>" />
							</a>
							<div class="hpb-des">
								<?php if(!empty($people_item['title'])): ?><h4><?php echo $people_item['title']; ?></h4><?php endif; ?>
                                <?php if(!empty($people_item['subtitle'])): ?><span><?php echo $people_item['subtitle']; ?></span><?php endif; ?>
								<?php if(!empty($people_item['des'])): ?><p><?php echo $people_item['des']; ?></p><?php endif; ?>
								<div class="hpb-icons">
									<?php if(!empty($people_item['facebook'])): ?>
										<a href="<?php echo $people_item['facebook'];?>" target="_blank" rel="nofollow" class="hpb-facebook"><i class="fa fa-facebook"></i></a>
                                    <?php endif; ?>
                                    <?php if(!empty($people_item['twitter'])): ?>
										<a href="<?php echo $people_item['twitter']; ?>" target="_blank" rel="nofollow" class="hpb-twitter"><i class="fa fa-twitter"></i></a>
									<?php endif; ?>
									<?php if(!empty($people_item['google'])): ?>
										<a href="<?php echo $people_item['google']; ?>" target="_blank" rel="nofollow" class="hpb-google"><i class="fa fa-google-plus"></i></a>
									<?php endif; ?>
									<?php if(!empty($people_item['linkedin'])): ?>
										<a href="<?php echo $people_item['linkedin'];?>" target="_blank" rel="nofollow" class="hpb-linkedin"><i class="fa fa-linkedin"></i></a>
									<?php endif; ?>
									<?php if(!empty($people_item['instagram'])): ?>
										<a href="<?php echo $people_item['instagram'];?>"target="_blank"rel="nofollow"class="hpb-instagram"><i class="fa fa-instagram"></i></a>
									<?php endif; ?>
                                    </div>
                                    <?php if(!empty($people_item['link'])): ?>
                                    	<a href="<?php echo $people_item['link']; ?>" class="hpb-more"><?php echo $people_item['link_text']; ?></a>
									<?php endif; ?>
								</div>
							<div class="clear"></div>
						</div>
					<?php $masonry->in_loop_end(); ?>
				<?php endforeach; ?>
			<?php $masonry->end(); ?>
		</div>
	<?php endif; ?>
</div>
<?php endif; ?>