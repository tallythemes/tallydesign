<?php
add_filter('option_tree_settings_args', 'tally_subheader_ot_options');
function tally_subheader_ot_options($custom_settings){
	
	if(tally_check() == true):
		$custom_settings['sections'][] = array( 'id' => 'subheader','title' => 'Sub-Header');
		
		$custom_settings['settings'][] = array(
			'id'          => 'subheader_tab1',
			'label'       => __('Sub Header', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => '',
			'type'        => 'tab',
			'section'     => 'subheader',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
		);
		$custom_settings['settings']['subheader_enable_breadcrumbs'] = array(
			'id'          => 'subheader_enable_breadcrumbs',
			'label'       => __('Enabal Breadcrumbs', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('subheader_enable_breadcrumbs'),
			'type'        => 'on_off',
			'section'     => 'subheader',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['subheader_enable_subtitle'] = array(
			'id'          => 'subheader_enable_subtitle',
			'label'       => __('Enabal Subtitle', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('subheader_enable_subtitle'),
			'type'        => 'on_off',
			'section'     => 'subheader',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['subheader_top_padding'] = array(
			'id'          => 'subheader_top_padding',
			'label'       => __('Top Padding', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('subheader_top_padding'),
			'type'        => 'text',
			'section'     => 'subheader',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['subheader_bottom_padding'] = array(
			'id'          => 'subheader_bottom_padding',
			'label'       => __('Bottom Padding', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('subheader_bottom_padding'),
			'type'        => 'text',
			'section'     => 'subheader',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['subheader_html'] = array(
			'id'          => 'subheader_html',
			'label'       => __('Customize Subheader HTML', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('subheader_html'),
			'type'        => 'textarea-simple',
			'section'     => 'subheader',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings'][] = array(
			'id'          => 'subheader_tab2',
			'label'       => __('Color & Background', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => '',
			'type'        => 'tab',
			'section'     => 'subheader',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
		);
		$custom_settings['settings']['subheader_title_color'] = array(
			'id'          => 'subheader_title_color',
			'label'       => __('Title Color', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('subheader_title_color'),
			'type'        => 'colorpicker',
			'section'     => 'subheader',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['subheader_subtitle_color'] = array(
			'id'          => 'subheader_subtitle_color',
			'label'       => __('Sub-Title Color', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('subheader_subtitle_color'),
			'type'        => 'colorpicker',
			'section'     => 'subheader',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['subheader_breadcrumbs_color'] = array(
			'id'          => 'subheader_breadcrumbs_color',
			'label'       => __('Breadcrumbs Color', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('subheader_breadcrumbs_color'),
			'type'        => 'colorpicker',
			'section'     => 'subheader',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['subheader_breadcrumbs_active_color'] = array(
			'id'          => 'subheader_breadcrumbs_active_color',
			'label'       => __('Breadcrumbs Active Color', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('subheader_breadcrumbs_active_color'),
			'type'        => 'colorpicker',
			'section'     => 'subheader',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['subheader_breadcrumbs_divider_color'] = array(
			'id'          => 'subheader_breadcrumbs_divider_color',
			'label'       => __('Breadcrumbs Divider Color', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('subheader_breadcrumbs_divider_color'),
			'type'        => 'colorpicker',
			'section'     => 'subheader',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['subheader_border_color'] = array(
			'id'          => 'subheader_border_color',
			'label'       => __('Border Color', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('subheader_border_color'),
			'type'        => 'colorpicker',
			'section'     => 'subheader',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['subheader_bg'] = array(
			'id'          => 'subheader_bg',
			'label'       => __('Background', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('subheader_bg'),
			'type'        => 'background',
			'section'     => 'subheader',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		
	elseif( (tally_check() != true ) && ( TALLY_THEME_STORE_URL != '') ):
		$custom_settings['sections'][] = array( 'id' => 'header','title' => 'Header');
		$custom_settings['settings']['option_header_image_'] = array(
			'id'          => 'option_header_image_',
			'label'       => '',
			'desc'        => '<a href="'.TALLY_THEME_STORE_URL.'" target="_blank"><img src="'.TALLY_URL.'/core/assets/images/admin/option-header.png" /></a>',
			'std'         => '',
			'type'        => 'textblock',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
		);
	endif;
	
	
	return $custom_settings;
}