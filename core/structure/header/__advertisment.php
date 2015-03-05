<?php if(tally_option('header_advertisment_code') != ''): ?>
    <?php echo $data['before']; ?>
		<?php echo tally_option('header_advertisment_code'); ?>
    <?php echo $data['after']; ?>
<?php endif; ?>