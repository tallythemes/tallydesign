<?php
if(tally_option('home_infoBox_enable') == 'on'): 
$info_items = tally_option('home_infoBox_items');
$masonry = new tally_masonry_html(array('column'=>tally_option('home_infoBox_column', 4), 'margin'=>tally_option('home_infoBox_margin', 3)));
$infoBox_item_count = 1;
?>
<div class="tally-home-section home-infoBox hpss1">
	<div class="tally-home-section-inner">
    	<?php if(tally_option('home_infoBox_description') != ''): ?>
            <div class="tally-home-section-des">
                <div class="tally-home-section-des-inner">
                    <?php echo tally_option('home_infoBox_description'); ?>
                </div>
            </div>
        <?php endif; ?>
        
         <?php if(is_array($info_items)): ?>
         	<div class="home-infoBox-items">
            	<?php $masonry->start(); ?>
					<?php foreach($info_items as $info_item): ?>
                        <?php $masonry->in_loop_start(); ?>
                            <div class="home-infobox-item home-infoBox-item-<?php echo $infoBox_item_count; ?>">
                            	<?php if( $info_item['link'] != ''): ?><a href="<?php echo $info_item['link']; ?>"><?php endif; ?>
                                    <div class="hibi-icon">
                                        <i class="fa <?php echo $info_item['icon']; ?>"></i>
                                    </div>
                                    <div class="hibi-description">
                                        <h4><?php echo $info_item['title']; ?></h4>
                                        <p><?php echo $info_item['des']; ?></p>
                                    </div>
                                <?php if( $info_item['link'] != ''): ?></a><?php endif; ?>
                            </div>
                        <?php $masonry->in_loop_end(); ?>
                    <?php $infoBox_item_count++; endforeach; ?>
                <?php $masonry->end(); ?>
            </div>
         <?php endif; ?>
    </div>
</div>
<?php endif; ?>