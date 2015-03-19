<?php if(tally_option('home_videoText_enable') == 'on'): ?>
<div class="tally-home-section home-videoText">
	<div class="tally-home-section-inner">
    	<?php if(tally_option('home_videoText_description') != ''): ?>
			<div class="tally-home-section-des">
				<div class="tally-home-section-des-inner">
					<?php echo tally_option('home_videoText_description'); ?>
				</div>
			</div>
		<?php endif; ?>
        
        <?php  
			$the_video = '5';
			$the_content = '7';
			if( ( tally_option('home_videoText_video') == '' ) || ( tally_option('home_videoText_content') == '' ) ){ $the_video = '12'; $the_content = '12'; }
		?>
		<div class="col-holder">
        	<?php if( tally_option('home_videoText_video') != '' ): ?>
                <div class="col col_<?php echo $the_video; ?>">
                   <div class="tally-fitVids"><?php echo tally_option('home_videoText_video'); ?></div>
                </div>
            <?php endif; ?>
            
            <?php if( tally_option('home_videoText_content') != '' ): ?>
                <div class="col col_<?php echo $the_content; ?>">
                	<?php echo tally_option('home_videoText_content'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php endif; ?>