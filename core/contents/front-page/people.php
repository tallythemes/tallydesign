<?php
if(tally_option('home_infoBox_enable') == 'on'): 
$people_items = tally_option('home_people_items');
$masonry = new tally_masonry_html(array('column'=>tally_option('home_people_columns', 4), 'margin'=>tally_option('home_people_margin', 3)));
if(tally_option('home_people_image_size') != ''){
	$image_size = explode("x", tally_option('home_people_image_size'));
}else{
	$image_size = array(200, 200);
}
?>
<div class="tally-home-section home-people hpss1">
	<div class="tally-home-section-inner">
    	<?php if(tally_option('home_people_description') != ''): ?>
            <div class="tally-home-section-des">
                <div class="tally-home-section-des-inner">
                    <?php echo tally_option('home_people_description'); ?>
                </div>
            </div>
        <?php endif; ?>
        
        <?php if(is_array($people_items)): ?>
         	<div class="home-people-items">
            	<?php $masonry->start(); ?>
					<?php foreach($people_items as $people_item): ?>
                        <?php $masonry->in_loop_start(); ?>
                            <div class="home-people-item ">
                            	<a href="<?php echo $people_item['link']; ?>">
                                	<img src="<?php echo tally_image_size($people_item['image'], $image_size[0], $image_size[1]); ?>" alt="<?php echo $people_item['title']; ?>" />
                                </a>
                                <div class="hpi-des">
                                	<?php if(!empty($people_item['title'])): ?><h4><?php echo $people_item['title']; ?></h4><?php endif; ?>
                                    <?php if(!empty($people_item['subtitle'])): ?><span><?php echo $people_item['subtitle']; ?></span><?php endif; ?>
                                    <?php if(!empty($people_item['des'])): ?><p><?php echo $people_item['des']; ?></p><?php endif; ?>
                                    <div class="hpi-socia-icons">
										<?php if(!empty($people_item['facebook'])): ?>
                                            <a href="<?php echo $people_item['facebook'];?>" target="_blank" rel="nofollow" class="hpi-facebook"><i class="fa fa-facebook"></i></a>
                                        <?php endif; ?>
                                        <?php if(!empty($people_item['twitter'])): ?>
                                            <a href="<?php echo $people_item['twitter']; ?>" target="_blank" rel="nofollow" class="hpi-twitter"><i class="fa fa-twitter"></i></a>
                                        <?php endif; ?>
                                        <?php if(!empty($people_item['google'])): ?>
                                            <a href="<?php echo $people_item['google']; ?>" target="_blank" rel="nofollow" class="hpi-google"><i class="fa fa-google-plus"></i></a>
                                        <?php endif; ?>
                                        <?php if(!empty($people_item['linkedin'])): ?>
                                            <a href="<?php echo $people_item['linkedin'];?>" target="_blank" rel="nofollow" class="hpi-linkedin"><i class="fa fa-linkedin"></i></a>
                                        <?php endif; ?>
                                        <?php if(!empty($people_item['instagram'])): ?>
                                            <a href="<?php echo $people_item['instagram'];?>"target="_blank"rel="nofollow"class="hpi-instagram"><i class="fa fa-instagram"></i></a>
                                        <?php endif; ?>
                                    </div>
                                    <?php if(!empty($people_item['link'])): ?>
                                    	<a href="<?php echo $people_item['link']; ?>" class="hpi-more"><?php echo $people_item['readmore_text']; ?></a>
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
</div>
<?php endif; ?>