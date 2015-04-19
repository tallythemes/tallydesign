<?php if(tally_option('header_phone_number') != ''): ?>
	<?php echo $data['before']; ?>
        <?php echo $data['prefix']; ?>
        <?php if($data['link'] == true): ?><a href="tel:<?php echo tally_option('header_phone_number'); ?>"><?php endif; ?>
            <?php echo tally_option('header_phone_number'); ?>
        <?php if($data['link'] == true): ?></a><?php endif; ?>
    <?php echo $data['after']; ?>
<?php endif; ?>