<?php
add_filter('option_tree_settings_args', 'tally_blog_page_ot_options');
function tally_blog_page_ot_options($custom_settings){

	$custom_settings['sections'][] = array( 'id' => 'page_blog','title' => 'Blog Page');
	
	$custom_settings['settings']['blog_limit'] = array(
		'id'          => 'blog_limit',
		'label'       => __('Blog Post Limit', 'tally_taxdomain'),
		'desc'        => __('How many post you want to display per page.', 'tally_taxdomain'),
		'std'         => tally_option_std('blog_limit'),
		'type'        => 'text',
		'section'     => 'page_blog',
		'rows'        => '',
		'post_type'   => '',
		'taxonomy'    => '',
		'class'       => 'tally-dis',
		'choices'     => '',
	);
	$custom_settings['settings']['blog_cat'] = array(
		'id'          => 'blog_cat',
		'label'       => __('Post Cayegory', 'tally_taxdomain'),
		'desc'        => __('How many post you want to display per page.', 'tally_taxdomain'),
		'std'         => tally_option_std('blog_cat'),
		'type'        => 'category-select',
		'section'     => 'page_blog',
		'rows'        => '',
		'post_type'   => '',
		'taxonomy'    => '',
		'class'       => 'tally-dis',
		'choices'     => '',
	);

	
	return $custom_settings;
}

