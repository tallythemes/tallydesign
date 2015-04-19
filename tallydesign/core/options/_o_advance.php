<?php
add_filter('option_tree_settings_args', 'tally_advance_ot_options');
function tally_advance_ot_options($custom_settings){
	
	if( defined('TALLY_THEME_DEV_SETTINGS') ):
		$custom_settings['sections'][] = array( 'id' => 'advance','title' => 'Advance');
		
		$custom_settings['settings']['adv_subheader_layout'] = array(
			'id'          => 'adv_subheader_layout',
			'label'       => __('Subheader Layout', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('adv_subheader_layout'),
			'type'        => 'select',
			'section'     => 'advance',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => array( 
				array('value' => 'default','label' => 'default','src' => ''),
				array('value' => 'one','label' => 'One','src' => ''),
				array('value' => 'two','label' => 'Two','src' => '')
			),
		);
		
		$custom_settings['settings']['site_layout'] = array(
			'id'          => 'site_layout',
			'label'       => __('Site Layout', 'tally_taxdomain'),
			'desc'        => __('Select the Site layout to <strong>Full Width</strong> or <strong>Box Layout</strong>', 'tally_taxdomain'),
			'std'         => tally_option_std('site_layout'),
			'type'        => 'radio-image',
			'section'     => 'layout',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => array(
				 array( 'label' => 'Full Width', 'value' => 'full', 'src' => TALLY_URL.'/core/assets/images/admin/full-width-layout.png'),
				 array( 'label' => 'Box', 'value' => 'box', 'src' => TALLY_URL.'/core/assets/images/admin/box-layout.png'),
			)
		);
	endif;
	
	return $custom_settings;
}