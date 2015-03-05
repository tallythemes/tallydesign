<?php if(tally_option('header_info_text') != ''): ?>
    <?php echo $data['before']; ?>
		<?php echo tally_option('header_info_text'); ?>
    <?php echo $data['after']; ?>
<?php endif; ?>