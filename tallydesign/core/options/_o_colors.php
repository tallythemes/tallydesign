<?php
add_filter('option_tree_settings_args', 'tally_color_ot_options');
function tally_color_ot_options($custom_settings){
	
	if(tally_check() == true):
		$custom_settings['sections'][] = array( 'id' => 'color','title' => 'Color Option');
		
		$custom_settings['settings']['primary_color'] = array(
			'id'          => 'primary_color',
			'label'       => __('Primary Color', 'tally_taxdomain'),
			'desc'        => __('This is the accent color of the site.', 'tally_taxdomain'),
			'std'         => tally_option_std('primary_color'),
			'type'        => 'colorpicker',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['secondary_color'] = array(
			'id'          => 'secondary_color',
			'label'       => __('Secondary Color', 'tally_taxdomain'),
			'desc'        => __('This is the secondary accent color of the site.', 'tally_taxdomain'),
			'std'         => tally_option_std('secondary_color'),
			'type'        => 'colorpicker',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		
		
		
		$custom_settings['settings']['color_headings'] = array(
			'id'          => 'color_headings',
			'label'       => __('Headings Color', 'tally_taxdomain'),
			'desc'        => __('Color of the article headings. Mostly H1, H2, H3, H4, H5, H6', 'tally_taxdomain'),
			'std'         => tally_option_std('color_headings'),
			'type'        => 'colorpicker',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['color_subheadings'] = array(
			'id'          => 'color_subheadings',
			'label'       => __('Sub-Headings Color', 'tally_taxdomain'),
			'desc'        => __('Color of the article Sub-headings or Sub-Titles. Mostly H1, H2, H3, H4, H5, H6', 'tally_taxdomain'),
			'std'         => tally_option_std('color_subheadings'),
			'type'        => 'colorpicker',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['color_text'] = array(
			'id'          => 'color_text',
			'label'       => __('Text Color', 'tally_taxdomain'),
			'desc'        => __('Normal Text color of the site.', 'tally_taxdomain'),
			'std'         => tally_option_std('color_text'),
			'type'        => 'colorpicker',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['color_meta'] = array(
			'id'          => 'color_meta',
			'label'       => __('Meta Text Color', 'tally_taxdomain'),
			'desc'        => __('This color will change the meta text color.', 'tally_taxdomain'),
			'std'         => tally_option_std('color_meta'),
			'type'        => 'colorpicker',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['color_border'] = array(
			'id'          => 'color_border',
			'label'       => __('Border Color', 'tally_taxdomain'),
			'desc'        => __('All border color of the site will change bu changing this color.', 'tally_taxdomain'),
			'std'         => tally_option_std('color_border'),
			'type'        => 'colorpicker',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['color_border2'] = array(
			'id'          => 'color_border2',
			'label'       => __('Border Alt Color', 'tally_taxdomain'),
			'desc'        => __('This is the alternative border color of the site.', 'tally_taxdomain'),
			'std'         => tally_option_std('color_border2'),
			'type'        => 'colorpicker',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['color_link'] = array(
			'id'          => 'color_link',
			'label'       => __('Links Color', 'tally_taxdomain'),
			'desc'        => __('From here you can change link color, link hover color, active color, visited color and fouse colors.', 'tally_taxdomain'),
			'std'         => tally_option_std('color_link'),
			'type'        => 'link-color',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['color_inner_bg'] = array(
			'id'          => 'color_inner_bg',
			'label'       => __('Inner Background Color', 'tally_taxdomain'),
			'desc'        => __('Some time some advance content need additional background color this color will use there.', 'tally_taxdomain'),
			'std'         => tally_option_std('color_inner_bg'),
			'type'        => 'colorpicker',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['color_content_bg'] = array(
			'id'          => 'color_content_bg',
			'label'       => __('Content Background', 'tally_taxdomain'),
			'desc'        => __('It is the background of the content section.', 'tally_taxdomain'),
			'std'         => tally_option_std('color_content_bg'),
			'type'        => 'background',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		
		$custom_settings['settings']['site_background'] = array(
			'id'          => 'site_background',
			'label'       => __('Site Body Background', 'tally_taxdomain'),
			'desc'        => __('This background will show if you use the box layout of the site.', 'tally_taxdomain'),
			'std'         => tally_option_std('site_background'),
			'type'        => 'background',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		
	elseif( (tally_check() != true ) && ( TALLY_THEME_STORE_URL != '') ):
		$custom_settings['sections'][] = array( 'id' => 'color','title' => 'Color Option');
		$custom_settings['settings']['option_color_image_'] = array(
			'id'          => 'option_color_image_',
			'label'       => '',
			'desc'        => '<a href="'.TALLY_THEME_STORE_URL.'" target="_blank"><img src="'.TALLY_URL.'/core/assets/images/admin/option-color.png" /></a>',
			'std'         => '',
			'type'        => 'textblock',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
		);
	endif;
	
	return $custom_settings;
}