<?php if(tally_option('header_loginbox') == 'on'): ?>
    <?php echo $data['before']; ?>
    <div class="tally-header-loginBox <?php echo $data['class']; ?>">
    	<div class="tally-header-loginBox-inner">
		<?php if(is_user_logged_in()): ?>
        	<a class="tally-profile" href="<?php tally_option('header_profile_url'); ?>">Profile</a>
            <a class="tally-logout" href="<?php tally_option('header_logout_url'); ?>">Logout</a>
        <?php else: ?>
        	<a class="tally-register" href="<?php tally_option('header_register_url'); ?>">Register</a>
            <a class="tally-login" href="<?php tally_option('header_login_url'); ?>">Login</a>
        <?php endif; ?>
        </div>
    </div>
    <?php echo $data['after']; ?>
<?php endif; ?>