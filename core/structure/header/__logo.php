<?php echo $data['before']; ?>
<div id="logo" class="<?php echo $data['class']; ?>">
	<?php if((tally_option('site_logo') != '') && (tally_option('site_logo') != 'n/a')): ?>
		<a href="<?php echo home_url(); ?>"><img src="<?php echo tally_option('site_logo'); ?>" alt="<?php bloginfo('name'); ?>"></a>
	<?php else: ?>
		<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
		<span><?php bloginfo( 'description' ); ?></span>
	<?php endif; ?>
</div>
<?php echo $data['after']; ?>