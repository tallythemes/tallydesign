<?php if(tally_option('header_search_bar') == 'on'): ?>
<?php echo $data['before']; ?>
<div id="tally-header-search" class="<?php echo $data['class']; ?>">
	<a href="#tally-header-searchform" class="the_search_icon leanModal"><i class="fa fa-search"></i></a>
	<form role="search" method="get" id="tally-header-searchform" action="<?php echo home_url( '/' ); ?>">
		<div class="search-form-inner">
			<input type="text" value="" name="s" id="s" placeholder="<?php _e('Search', 'tally_textdomain'); ?>" />
			<input type="submit" id="searchsubmit" value="<?php _e('Search', 'tally_textdomain'); ?>" />
            <i class="fa  fa-search"></i>
		</div>
	</form>
</div>
<?php echo $data['after']; ?>
<?php endif; ?>