<?php if(tally_hp_option($the_prefix.'enable') == 'on'): ?>
	<div class="">
    	<h2 class=""><?php echo tally_hp_option($the_prefix.'title'); ?></h2>
        <div class=""><?php echo tally_hp_option($the_prefix.'content'); ?></div>
        <div class="">
        	<?php foreach(tally_hp_option($the_prefix.'buttons') as $button): ?>
            	<a href="<?php echo $button['link']; ?>" target="<?php echo $button['target']; ?>" class="tally-button btn-color-<?php echo $button['color']; ?> <?php echo $button['class']; ?>"><?php echo $button['title']; ?></a>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>