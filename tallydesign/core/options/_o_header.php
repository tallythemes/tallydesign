<?php
add_filter('option_tree_settings_args', 'tally_header_ot_options');
function tally_header_ot_options($custom_settings){
	
	if(tally_check() == true):
		$custom_settings['sections'][] = array( 'id' => 'header','title' => 'Header');
		
		$custom_settings['settings'][] = array(
			'id'          => 'header_tab1',
			'label'       => __('Header Contents', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => '',
			'type'        => 'tab',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
		);
		$custom_settings['settings']['header_info_text'] = array(
			'id'          => 'header_info_text',
			'label'       => __('Header Info Text', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('header_info_text'),
			'type'        => 'text',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		
		$custom_settings['settings']['header_phone_number'] = array(
			'id'          => 'header_phone_number',
			'label'       => __('Header Phone Number', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('header_phone_number'),
			'type'        => 'text',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);	
		
		$custom_settings['settings']['header_email_address'] = array(
			'id'          => 'header_email_address',
			'label'       => __('Header Email Address', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('header_email_address'),
			'type'        => 'text',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		
		$custom_settings['settings']['header_social_icons'] = array(
			'id'          => 'header_social_icons',
			'label'       => __('Active Header Social Icons', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('header_social_icons'),
			'type'        => 'on_off',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		
		$custom_settings['settings']['header_woocommerce_cart'] = array(
			'id'          => 'header_woocommerce_cart',
			'label'       => __('Active Header WooCommerce Cart', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('header_woocommerce_cart'),
			'type'        => 'on_off',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		
		$custom_settings['settings']['header_wpml_menu'] = array(
			'id'          => 'header_wpml_menu',
			'label'       => __('Active Header WPML Menu', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('header_wpml_menu'),
			'type'        => 'on_off',
			'section'     => 'header',
			'rows'        => '4',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		
		$custom_settings['settings']['header_advertisment_code'] = array(
			'id'          => 'header_advertisment_code',
			'label'       => __('Header Advertisment Code', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('header_advertisment_code'),
			'type'        => 'textarea-simple',
			'section'     => 'header',
			'rows'        => '5',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		
		$custom_settings['settings']['header_search_bar'] = array(
			'id'          => 'header_search_bar',
			'label'       => __('Active Header Search bar', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('header_search_bar'),
			'type'        => 'on_off',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		
		$custom_settings['settings']['header_loginbox'] = array(
			'id'          => 'header_loginbox',
			'label'       => __('Enable Login Box', 'tally_taxdomain'),
			'desc'        => __('include the full URL including <code>http://</code>', 'tally_taxdomain'),
			'std'         => tally_option_std('header_loginbox'),
			'type'        => 'on_off',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		
		$custom_settings['settings']['header_register_url'] = array(
			'id'          => 'header_register_url',
			'label'       => __('Register Page URL', 'tally_taxdomain'),
			'desc'        => __('include the full URL including <code>http://</code>', 'tally_taxdomain'),
			'std'         => tally_option_std('header_register_url'),
			'type'        => 'text',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
			'condition'   => 'header_loginbox:is(on)',
		);
		
		$custom_settings['settings']['header_login_url'] = array(
			'id'          => 'header_login_url',
			'label'       => __('Login Page URL', 'tally_taxdomain'),
			'desc'        => __('include the full URL including <code>http://</code>', 'tally_taxdomain'),
			'std'         => tally_option_std('header_login_url'),
			'type'        => 'text',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
			'condition'   => 'header_loginbox:is(on)',
		);
		
		$custom_settings['settings']['header_logout_url'] = array(
			'id'          => 'header_logout_url',
			'label'       => __('Logout Page URL', 'tally_taxdomain'),
			'desc'        => __('include the full URL including <code>http://</code>', 'tally_taxdomain'),
			'std'         => tally_option_std('header_login_url'),
			'type'        => 'text',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
			'condition'   => 'header_loginbox:is(on)',
		);
		
		$custom_settings['settings']['header_profile_url'] = array(
			'id'          => 'header_profile_url',
			'label'       => __('Profile Page URL', 'tally_taxdomain'),
			'desc'        => __('include the full URL including <code>http://</code>', 'tally_taxdomain'),
			'std'         => tally_option_std('header_login_url'),
			'type'        => 'text',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
			'condition'   => 'header_loginbox:is(on)',
		);
		
		
		$custom_settings['settings'][] = array(
			'id'          => 'header_tab2',
			'label'       => __('Advance Settings', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => '',
			'type'        => 'tab',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
		);
		$custom_settings['settings']['enable_header_sticky'] = array(
			'id'          => 'enable_header_sticky',
			'label'       => __('Enable Header sticky', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('enable_header_sticky'),
			'type'        => 'on_off',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
		);
		
		$custom_settings['settings']['header_height'] = array(
			'id'          => 'header_height',
			'label'       => __('Header height', 'tally_taxdomain'),
			'desc'        => __('This is the height of the site header <strong>Example: <code>52px</code></strong>', 'tally_taxdomain'),
			'std'         => tally_option_std('header_height'),
			'type'        => 'text',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['header_menu_top_margin'] = array(
			'id'          => 'header_menu_top_margin',
			'label'       => __('Top margin of the menu', 'tally_taxdomain'),
			'desc'        => __('This is the top margin of the header menu <strong>Example: <code>10px</code></strong>', 'tally_taxdomain'),
			'std'         => tally_option_std('header_menu_top_margin'),
			'type'        => 'text',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['header_logo_top_margin'] = array(
			'id'          => 'header_logo_top_margin',
			'label'       => __('Top margin of the Logo', 'tally_taxdomain'),
			'desc'        => __('This is the top margin of the header Logo <strong>Example: <code>52px</code></strong>', 'tally_taxdomain'),
			'std'         => tally_option_std('header_logo_top_margin'),
			'type'        => 'text',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		
		$custom_settings['settings']['is_topbar'] = array(
			'id'          => 'is_topbar',
			'label'       => __('Enable TopBar Area', 'tally_taxdomain'),
			'desc'        => __('Enable or Disable TopBar of the site', 'tally_taxdomain'),
			'std'         => tally_option_std('is_topbar'),
			'type'        => 'on_off',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
		);
		
		$custom_settings['settings'][] = array(
			'id'          => 'header_tab3',
			'label'       => __('Color & Background', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => '',
			'type'        => 'tab',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
		);
		
		$custom_settings['settings']['header_text_color'] = array(
			'id'          => 'header_text_color',
			'label'       => __('Header Text Color', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('header_text_color'),
			'type'        => 'colorpicker',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['header_link_color'] = array(
			'id'          => 'header_link_color',
			'label'       => __('Header Link Color', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('header_link_color'),
			'type'        => 'link-color',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['header_border_color'] = array(
			'id'          => 'header_border_color',
			'label'       => __('Header Border Color', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('header_border_color'),
			'type'        => 'colorpicker',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['header_bg'] = array(
			'id'          => 'header_bg',
			'label'       => __('Header Background', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('header_bg'),
			'type'        => 'background',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		
		$custom_settings['settings']['header_topbar_text_color'] = array(
			'id'          => 'header_topbar_text_color',
			'label'       => __('Topbar Text Color', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('header_topbar_text_color'),
			'type'        => 'colorpicker',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['header_topbar_link_color'] = array(
			'id'          => 'header_topbar_link_color',
			'label'       => __('Header Topbar Link Color', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('header_topbar_link_color'),
			'type'        => 'link-color',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['header_topbar_border_color'] = array(
			'id'          => 'header_topbar_border_color',
			'label'       => __('Header Topbar Border Color', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('header_topbar_border_color'),
			'type'        => 'colorpicker',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['header_topbar_bg'] = array(
			'id'          => 'header_topbar_bg',
			'label'       => __('Topbar Background', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('header_topbar_bg'),
			'type'        => 'background',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		
		$custom_settings['settings'][] = array(
			'id'          => 'header_tab4',
			'label'       => __('Navigation Color', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => '',
			'type'        => 'tab',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
		);
		$custom_settings['settings']['nav_text_color'] = array(
			'id'          => 'nav_text_color',
			'label'       => __('Text color', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('nav_text_color'),
			'type'        => 'colorpicker',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['nav_border_color'] = array(
			'id'          => 'nav_border_color',
			'label'       => __('Border Color', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('nav_border_color'),
			'type'        => 'colorpicker',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['nav_bg_color'] = array(
			'id'          => 'nav_bg_color',
			'label'       => __('Background Color', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('nav_bg_color'),
			'type'        => 'colorpicker',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		
		$custom_settings['settings']['nav_text_hover_color'] = array(
			'id'          => 'nav_text_hover_color',
			'label'       => __('Text Hover color', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('nav_text_hover_color'),
			'type'        => 'colorpicker',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['nav_border_hover_color'] = array(
			'id'          => 'nav_border_hover_color',
			'label'       => __('Border Hover Color', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('nav_border_hover_color'),
			'type'        => 'colorpicker',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['nav_bg_hover_color'] = array(
			'id'          => 'nav_bg_hover_color',
			'label'       => __('Background Hover Color', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('nav_bg_hover_color'),
			'type'        => 'colorpicker',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		
		
		$custom_settings['settings']['nav_sub_text_color'] = array(
			'id'          => 'nav_sub_text_color',
			'label'       => __('Sub-Nav Text color', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('nav_sub_text_color'),
			'type'        => 'colorpicker',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['nav_sub_border_color'] = array(
			'id'          => 'nav_sub_border_color',
			'label'       => __('Sub-Nav Border Color', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('nav_sub_border_color'),
			'type'        => 'colorpicker',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['nav_sub_bg_color'] = array(
			'id'          => 'nav_sub_bg_color',
			'label'       => __('Sub-Nav Background Color', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('nav_sub_bg_color'),
			'type'        => 'colorpicker',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		
		$custom_settings['settings']['nav_sub_text_hover_color'] = array(
			'id'          => 'nav_sub_text_hover_color',
			'label'       => __('Sub-Nav Text Hover color', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('nav_sub_text_hover_color'),
			'type'        => 'colorpicker',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['nav_sub_border_hover_color'] = array(
			'id'          => 'nav_sub_border_hover_color',
			'label'       => __('Sub-Nav Border Hover Color', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('nav_sub_border_hover_color'),
			'type'        => 'colorpicker',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['nav_sub_bg_hover_color'] = array(
			'id'          => 'nav_sub_bg_hover_color',
			'label'       => __('Sub-Nav Background Hover Color', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('nav_sub_bg_hover_color'),
			'type'        => 'colorpicker',
			'section'     => 'header',
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