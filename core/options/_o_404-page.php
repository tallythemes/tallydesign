<?php
add_filter('option_tree_settings_args', 'tally_404_page_ot_options');
function tally_404_page_ot_options($custom_settings){
	$custom_settings['sections'][] = array( 'id' => 'page_404','title' => '404 Page');
		
	$custom_settings['settings']['page_404_heading'] = array(
		'id'          => 'page_404_heading',
		'label'       => __('Heading', 'tally_taxdomain'),
		'desc'        => __('Write a heading for the 404 not found page', 'tally_taxdomain'),
		'std'         => tally_option_std('page_404_heading'),
		'type'        => 'text',
		'section'     => 'page_404',
		'rows'        => '',
		'post_type'   => '',
		'taxonomy'    => '',
		'class'       => 'tally-dis',
		'choices'     => '',
	);
	$custom_settings['settings']['page_404_description'] = array(
		'id'          => 'page_404_description',
		'label'       => __('Description', 'tally_taxdomain'),
		'desc'        => __('Write a description that will show below the heading', 'tally_taxdomain'),
		'std'         => tally_option_std('page_404_description'),
		'type'        => 'textarea',
		'section'     => 'page_404',
		'rows'        => '',
		'post_type'   => '',
		'taxonomy'    => '',
		'class'       => 'tally-dis',
		'choices'     => '',
	);
	$custom_settings['settings']['page_404_search'] = array(
		'id'          => 'page_404_search',
		'label'       => __('Enable Search Box', 'tally_taxdomain'),
		'desc'        => __('If you select <strong>On</strong> a search box will display below the description.', 'tally_taxdomain'),
		'std'         => tally_option_std('page_404_search'),
		'type'        => 'on_off',
		'section'     => 'page_404',
		'rows'        => '',
		'post_type'   => '',
		'taxonomy'    => '',
		'class'       => 'tally-dis',
		'choices'     => '',
	);
	
	return $custom_settings;
}

