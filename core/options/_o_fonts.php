<?php
add_filter('option_tree_settings_args', 'tally_typography_ot_options');
function tally_typography_ot_options($custom_settings){
	
	$custom_settings['sections'][] = array( 'id' => 'typography','title' => 'Typography');
	

	$custom_settings['settings']['google_font'] = array(
		'id'          => 'google_font',
		'label'       => __('Enable Google Fonts', 'tally_taxdomain'),
		'desc'        => __('Do not load morethan 3 fonts. It will slow site load speed.', 'tally_taxdomain'),
		'std'         => tally_option_std('google_font'),
		'type'        => 'google-fonts',
		'section'     => 'typography',
		'rows'        => '',
		'post_type'   => '',
		'taxonomy'    => '',
		'class'       => 'tally-dis',
	);
	$custom_settings['settings']['font_body'] = array(
		'id'          => 'font_body',
		'label'       => __('Body Font', 'tally_taxdomain'),
		'desc'        => '',
		'std'         => tally_option_std('font_body'),
		'type'        => 'typography',
		'section'     => 'typography',
		'rows'        => '',
		'post_type'   => '',
		'taxonomy'    => '',
		'class'       => 'tally-dis',
	);
	$custom_settings['settings']['font_h1'] = array(
		'id'          => 'font_h1',
		'label'       => __('H1 (heading)', 'tally_taxdomain'),
		'desc'        => '',
		'std'         => tally_option_std('font_h1'),
		'type'        => 'typography',
		'section'     => 'typography',
		'rows'        => '',
		'post_type'   => '',
		'taxonomy'    => '',
		'class'       => 'tally-dis',
	);
	$custom_settings['settings']['font_h2'] = array(
		'id'          => 'font_h2',
		'label'       => __('H2 (heading)', 'tally_taxdomain'),
		'desc'        => '',
		'std'         => tally_option_std('font_2'),
		'type'        => 'typography',
		'section'     => 'typography',
		'rows'        => '',
		'post_type'   => '',
		'taxonomy'    => '',
		'class'       => 'tally-dis',
	);
	$custom_settings['settings']['font_h3'] = array(
		'id'          => 'font_h3',
		'label'       => __('H3 (heading)', 'tally_taxdomain'),
		'desc'        => '',
		'std'         => tally_option_std('font_h3'),
		'type'        => 'typography',
		'section'     => 'typography',
		'rows'        => '',
		'post_type'   => '',
		'taxonomy'    => '',
		'class'       => 'tally-dis',
	);
	$custom_settings['settings']['font_h4'] = array(
		'id'          => 'font_h4',
		'label'       => __('H4 (heading)', 'tally_taxdomain'),
		'desc'        => '',
		'std'         => tally_option_std('font_h4'),
		'type'        => 'typography',
		'section'     => 'typography',
		'rows'        => '',
		'post_type'   => '',
		'taxonomy'    => '',
		'class'       => 'tally-dis',
	);
	$custom_settings['settings']['font_h5'] = array(
		'id'          => 'font_h5',
		'label'       => __('H5 (heading)', 'tally_taxdomain'),
		'desc'        => '',
		'std'         => tally_option_std('font_h5'),
		'type'        => 'typography',
		'section'     => 'typography',
		'rows'        => '',
		'post_type'   => '',
		'taxonomy'    => '',
		'class'       => 'tally-dis',
	)
	;$custom_settings['settings']['font_6'] = array(
		'id'          => 'font_h6',
		'label'       => __('H6 (heading)', 'tally_taxdomain'),
		'desc'        => '',
		'std'         => tally_option_std('font_h6'),
		'type'        => 'typography',
		'section'     => 'typography',
		'rows'        => '',
		'post_type'   => '',
		'taxonomy'    => '',
		'class'       => 'tally-dis',
	);
	
	return $custom_settings;
}