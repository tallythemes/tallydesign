<center>
	<font style="font-size:100px; line-height:100px;">404</font>
	<h2><?php echo tally_option('page_404_heading', __( 'This is somewhat embarrassing, isn&rsquo;t it?', 'tally_taxdomain' )); ?></h2>
	<div><?php echo tally_option('page_404_description', __( 'It looks like nothing was found at this location. Maybe try a search?', 'tally_taxdomain' )); ?></div>
	<?php if(tally_option('page_404_search', 'on') == 'on'){ get_search_form(); } ?>
</center>