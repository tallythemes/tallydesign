<?php if(tally_option('header_email_address') != ''): ?>
	<?php echo $data['before']; ?>
        <?php echo $data['prefix']; ?>
        <?php if($data['link'] == true): ?><a href="mailto:<?php echo tally_option('header_email_address'); ?>"><?php endif; ?>
            <?php echo tally_option('header_email_address'); ?>
        <?php if($data['link'] == true): ?></a><?php endif; ?>
    <?php echo $data['after']; ?>
<?php endif; ?>