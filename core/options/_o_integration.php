<?php
add_filter('option_tree_settings_args', 'tally_integration_ot_options');
function tally_integration_ot_options($custom_settings){
		$custom_settings['sections'][] = array( 'id' => 'integration','title' => 'Integration');
		
		$custom_settings['settings']['custom_css'] = array(
			'id'          => 'custom_css',
			'label'       => __('Custom CSS', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('custom_css'),
			'type'        => 'css',
			'section'     => 'integration',
			'rows'        => '5',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => 'tally-dis',
			'choices'     => '',
		);
		$custom_settings['settings']['custom_js'] = array(
			'id'          => 'custom_js',
			'label'       => __('Custom JavaScript', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('custom_js'),
			'type'        => 'javascript',
			'section'     => 'integration',
			'rows'        => '5',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => 'tally-dis',
			'choices'     => '',
		);
		$custom_settings['settings']['google_analytics'] = array(
			'id'          => 'google_analytics',
			'label'       => __('Google Analytics', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('google_analytics'),
			'type'        => 'javascript',
			'section'     => 'integration',
			'rows'        => '5',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => 'tally-dis',
			'choices'     => '',
		);
	
	return $custom_settings;
}

