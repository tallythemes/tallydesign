<?php echo $data['before']; ?>
<nav id="primary-menu" class="<?php echo $data['class']; ?>" role="navigation">
	<?php wp_nav_menu( array('theme_location'=>'main_menu') ); ?>
</nav>
<?php echo $data['after']; ?>