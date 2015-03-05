<?php if(tally_option('header_loginbox') == 'on'): ?>
    <?php echo $data['before']; ?>
		<?php if(is_user_logged_in()): ?>
        	<a href=""></a>
            <a href=""></a>
        <?php else: ?>
        	<a href=""></a>
            <a href=""></a>
        <?php endif; ?>
    <?php echo $data['after']; ?>
<?php endif; ?>