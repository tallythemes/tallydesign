<?php
add_filter('option_tree_settings_args', 'tally_footer_ot_options');
function tally_footer_ot_options($custom_settings){
	if(tally_check() == true):
		$custom_settings['sections'][] = array( 'id' => 'footer','title' => 'Footer');
		
		$custom_settings['settings']['footer_widget_layout'] = array(
			'id'          => 'footer_widget_layout',
			'label'       => __('Footer Widget Layout', 'tally_taxdomain'),
			'desc'        => __('Select a <strong>Footer Widget</strong> layout. If you select the red cross no widget will display in footer', 'tally_taxdomain'),
			'std'         => tally_option_std('footer_widget_layout'),
			'type'        => 'radio-image',
			'section'     => 'footer',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => array(
				 array( 'label' => 'none', 'value' => 'none', 'src' => TALLY_URL.'/core/assets/images/admin/fwc-none.png'),
				 array( 'label' => '1', 'value' => '1', 'src' => TALLY_URL.'/core/assets/images/admin/footer-widgets-layout/1.jpg'),
				 array( 'label' => '2', 'value' => '2', 'src' => TALLY_URL.'/core/assets/images/admin/footer-widgets-layout/2.jpg'),
				 array( 'label' => '3', 'value' => '3', 'src' => TALLY_URL.'/core/assets/images/admin/footer-widgets-layout/3.jpg'),
				 array( 'label' => '4', 'value' => '4', 'src' => TALLY_URL.'/core/assets/images/admin/footer-widgets-layout/4.jpg'),
				 array( 'label' => '5', 'value' => '5', 'src' => TALLY_URL.'/core/assets/images/admin/footer-widgets-layout/5.jpg'),
				 array( 'label' => '6', 'value' => '6', 'src' => TALLY_URL.'/core/assets/images/admin/footer-widgets-layout/6.jpg'),
				 array( 'label' => '7', 'value' => '7', 'src' => TALLY_URL.'/core/assets/images/admin/footer-widgets-layout/7.jpg'),
				 array( 'label' => '8', 'value' => '8', 'src' => TALLY_URL.'/core/assets/images/admin/footer-widgets-layout/8.jpg'),
			)
		);
		$custom_settings['settings']['footer_layout'] = array(
			'id'          => 'footer_layout',
			'label'       => __('Enable Site Footer', 'tally_taxdomain'),
			'desc'        => __('Enable or Disable the footer of the site', 'tally_taxdomain'),
			'std'         => tally_option_std('footer_layout'),
			'type'        => 'on_off',
			'section'     => 'footer',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
		);
		
		$custom_settings['settings']['footer_copyright'] = array(
			'id'          => 'footer_copyright',
			'label'       => __('Footer Copyright Text', 'tally_taxdomain'),
			'desc'        => __('This is the copyright text of footer', 'tally_taxdomain'),
			'std'         => tally_option_std('footer_copyright'),
			'type'        => 'text',
			'section'     => 'footer',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
	elseif( (tally_check() != true ) && ( TALLY_THEME_STORE_URL != '') ):
		$custom_settings['sections'][] = array( 'id' => 'footer','title' => 'Footer');
		$custom_settings['settings']['option_footer_image_'] = array(
			'id'          => 'option_footer_image_',
			'label'       => '',
			'desc'        => '<a href="'.TALLY_THEME_STORE_URL.'" target="_blank"><img src="'.TALLY_URL.'/core/assets/images/admin/option-footer.png" /></a>',
			'std'         => '',
			'type'        => 'textblock',
			'section'     => 'footer',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
		);
	endif;
	
	return $custom_settings;
}