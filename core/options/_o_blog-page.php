<?php
add_filter('option_tree_settings_args', 'tally_blog_page_ot_options');
function tally_blog_page_ot_options($custom_settings){
	if(tally_check() == true):
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
			'class'       => '',
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
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['blog_sidebar'] = array(
			'id'          => 'blog_sidebar',
			'label'       => __('Sidebar Layout', 'tally_taxdomain'),
			'desc'        => __('Select a sidebar layout for the blog page.', 'tally_taxdomain'),
			'std'         => tally_option_std('blog_sidebar'),
			'type'        => 'radio-image',
			'section'     => 'page_blog',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => array(
				 array( 'label' => 'Right Sidebar', 'value' => 'right', 'src' => TALLY_URL.'/core/assets/images/admin/footer-widgets-layout/2.jpg'),
				 array( 'label' => 'Left Sidebar', 'value' => 'left', 'src' => TALLY_URL.'/core/assets/images/admin/footer-widgets-layout/3.jpg'),
				 array( 'label' => 'No Sidebar', 'value' => 'no', 'src' => TALLY_URL.'/core/assets/images/admin/footer-widgets-layout/7.jpg'),
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

