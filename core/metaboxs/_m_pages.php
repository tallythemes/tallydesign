<?php
add_action( 'admin_init', 'tally_page_metabox_register' );
function tally_page_metabox_register() {
	
	if(tally_check() == true):
		$prefix = 'tally_';
		
		$settings = array();
		$settings[] = array(
			'id'          => 'tally_page_tab00',
			'label'       => __('Title', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => '',
			'type'        => 'tab',
			'section'     => '',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
		);
		$settings[] = array(
			'id'          => $prefix.'custom_title',
			'label'       => __('Custom Title', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => '',
			'type'        => 'text',
			'section'     => '',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
		);
		$settings[] = array(
			'id'          => $prefix.'sub_title',
			'label'       => __('Sub Title', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => '',
			'type'        => 'text',
			'section'     => '',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
		);
		
		$settings[] = array(
			'id'          => 'tally_page_tab0',
			'label'       => __('Sub-Header', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => '',
			'type'        => 'tab',
			'section'     => '',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
		);
			$settings[] = array(
				'id'          => 'tally_is_subheader',
				'label'       => __('Enable SubHeader', 'tally_taxdomain'),
				'desc'        => __('Enable or Disable SubHeader of this page', 'tally_taxdomain'),
				'std'         => '',
				'type'        => 'on_off',
				'section'     => 'branding',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
			);
		
		$settings[] = array(
			'id'          => $prefix.'subheader_text_color',
			'label'       => __('Sub-Header Text Color', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => '',
			'type'        => 'colorpicker',
			'section'     => '',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
		);
		$settings[] = array(
			'id'          => $prefix.'subheader_breadcrumbs',
			'label'       => __('Sub-Header Breadcrumbs', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => '',
			'type'        => 'on_off',
			'section'     => '',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
		);
		$settings[] = array(
			'id'          => $prefix.'subheader_bg',
			'label'       => __('Sub-Header Background', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => '',
			'type'        => 'background',
			'section'     => '',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
		);
		$settings[] = array(
			'id'          => $prefix.'subheader_custom',
			'label'       => __('Customize Subheader HTML', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => '',
			'type'        => 'textarea-simple',
			'section'     => '',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
		);
		
		$settings[] = array(
			'id'          => 'tally_page_tab2',
			'label'       => __('Comment', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => '',
			'type'        => 'tab',
			'section'     => '',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
		);
		
		$settings[] = array(
			'id'          => 'tally_is_comment',
			'label'       => __('Enable Comment Area', 'tally_taxdomain'),
			'desc'        => __('Enable or Disable comment on this page / post.', 'tally_taxdomain'),
			'std'         => '',
			'type'        => 'select',
			'section'     => 'branding',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => array(
				 array( 'label' => '', 'value' => '' ),
				 array( 'label' => 'Yes', 'value' => 'yes' ),
				 array( 'label' => 'No', 'value' => 'no'),
			)
		);		
		$settings[] = array(
			'id'          => 'tally_page_tab4',
			'label'       => __('Background', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => '',
			'type'        => 'tab',
			'section'     => '',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
		);
		$settings[] = array(
			'id'          => $prefix.'page_bg',
			'label'       => __('Page Background', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => '',
			'type'        => 'background',
			'section'     => '',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
		);
		
		
		
		$metabox = array(
			'id'        => 'tally_ot_page_metabox',
			'title'     => 'Page / Post Settings',
			'desc'      => '',
			'pages'     => apply_filters('tally_ot_page_metabox', array( 'post', 'page' )),
			'context'   => 'normal',
			'priority'  => 'high',
			'fields'    => apply_filters('tally_ot_page_metabox_options', $settings),
		);
		ot_register_meta_box( $metabox );
	
	endif;
}