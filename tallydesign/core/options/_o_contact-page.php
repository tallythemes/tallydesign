<?php
add_filter('option_tree_settings_args', 'tally_contact_page_ot_options');
function tally_contact_page_ot_options($custom_settings){
	if(tally_check() == true):
		$custom_settings['sections'][] = array( 'id' => 'page_contact','title' => 'Contact Page');
		
		$custom_settings['settings']['contact_description'] = array(
			'id'          => 'contact_description',
			'label'       => __('Contact Form Title', 'tally_taxdomain'),
			'desc'        => __('This description will display above the contact form.', 'tally_taxdomain'),
			'std'         => tally_option_std('contact_description'),
			'type'        => 'textarea',
			'section'     => 'page_contact',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['contact_email'] = array(
			'id'          => 'contact_email',
			'label'       => __('Email Address', 'tally_taxdomain'),
			'desc'        => __('All email via contact from will send to this address.', 'tally_taxdomain'),
			'std'         => tally_option_std('contact_email'),
			'type'        => 'text',
			'section'     => 'page_contact',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['contact_infol'] = array(
			'id'          => 'contact_info_email',
			'label'       => __('Contact Info', 'tally_taxdomain'),
			'desc'        => __('Additional Contact Info.', 'tally_taxdomain'),
			'std'         => tally_option_std('page_contact_email'),
			'type'        => 'list-item',
			'section'     => 'page_contact',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
			'settings'    => array(
				array(
					'id'          => 'info',
					'label'       => __('Info', 'tally_taxdomain'),
					'desc'        => '',
					'std'         => '',
					'type'        => 'textarea-simple',
					'section'     => '',
					'rows'        => '2',
					'post_type'   => '',
					'taxonomy'    => '',
					'class'       => '',
					'choices'     => '',
				),
				array(
					'id'          => 'icon',
					'label'       => __('Icon', 'tally_taxdomain'),
					'desc'        => '',
					'std'         => '',
					'type'        => 'text',
					'section'     => '',
					'rows'        => '2',
					'post_type'   => '',
					'taxonomy'    => '',
					'class'       => '',
					'choices'     => '',
				)
			)
		);
	elseif( (tally_check() != true ) && ( TALLY_THEME_STORE_URL != '') ):
		$custom_settings['sections'][] = array( 'id' => 'integration','title' => 'Integration');
		$custom_settings['settings']['option_integration_image_'] = array(
			'id'          => 'option_integration_image_',
			'label'       => '',
			'desc'        => '<a href="'.TALLY_THEME_STORE_URL.'" target="_blank"><img src="'.TALLY_URL.'/core/assets/images/admin/option-integration.png" /></a>',
			'std'         => '',
			'type'        => 'textblock',
			'section'     => 'integration',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
		);
	endif;
	
	return $custom_settings;
}

