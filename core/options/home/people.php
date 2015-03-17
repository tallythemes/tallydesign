<?php
$home_people_prefix = 'home_people_';
$custom_settings['settings'][] = array(
	'id'          => 'home_tab_ipeople',
	'label'       => __('People', 'tally_taxdomain'),
	'desc'        => '',
	'std'         => '',
	'type'        => 'tab',
	'section'     => 'home',
	'rows'        => '',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
);
$custom_settings['settings'][] = array(
	'id'          => $home_people_prefix.'enable',
	'label'       => __('Enable People Section', 'tally_taxdomain'),
	'desc'        => '',
	'std'         => tally_option_std($home_people_prefix.'enable'),
	'type'        => 'on_off',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
);

$custom_settings['settings'][] = array(
	'id'          => $home_people_prefix.'description',
	'label'       => __('Section Description', 'tally_taxdomain'),
	'desc'        => '',
	'std'         => tally_option_std($home_people_prefix.'description'),
	'type'        => 'textarea',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
	'condition'   => $home_people_prefix.'enable:is(on)',
);
$custom_settings['settings'][] = array(
	'id'          => $home_people_prefix.'items',
	'label'       => __('People Items', 'tally_taxdomain'),
	'desc'        => __('Add or edit info People items.', 'tally_taxdomain'),
	'std'         => tally_option_std($home_people_prefix.'items'),
	'type'        => 'list-item',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => 'tally-home-people',
	'choices'     => '',
	'condition'   => $home_people_prefix.'enable:is(on)',
	'settings'    => array(
		array(
			'id'          => 'subtitle',
			'label'       => __('Sub Title', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => '',
			'type'        => 'text',
			'section'     => '',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		),
		array(
			'id'          => 'des',
			'label'       => __('Description', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => '',
			'type'        => 'textarea-simple',
			'section'     => '',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		),
		array(
			'id'          => 'image',
			'label'       => __('Image', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => '',
			'type'        => 'upload',
			'section'     => '',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		),
		array(
			'id'          => 'link',
			'label'       => __('Link', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => '',
			'type'        => 'text',
			'section'     => '',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		),
		array(
			'id'          => 'readmore_text',
			'label'       => __('ReadMore Text', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => '',
			'type'        => 'text',
			'section'     => '',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		),
		array(
			'id'          => 'facebook',
			'label'       => __('Facebook', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => '',
			'type'        => 'text',
			'section'     => '',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		),
		array(
			'id'          => 'twitter',
			'label'       => __('Twitter', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => '',
			'type'        => 'text',
			'section'     => '',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		),
		array(
			'id'          => 'google',
			'label'       => __('Google Plus', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => '',
			'type'        => 'text',
			'section'     => '',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		),
		array(
			'id'          => 'linkedin',
			'label'       => __('Linkedin', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => '',
			'type'        => 'text',
			'section'     => '',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		),
		array(
			'id'          => 'instagram',
			'label'       => __('Instagram', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => '',
			'type'        => 'text',
			'section'     => '',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		),
	)
);
$custom_settings['settings'][] = array(
	'id'          => $home_people_prefix.'columns',
	'label'       => __('Columns', 'tally_taxdomain'),
	'desc'        => __('It can be 2, 3, 4, 5, or 6 columns', 'tally_taxdomain'),
	'std'         => tally_option_std($home_people_prefix.'columns'),
	'type'        => 'text',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => 'tally-home-people',
	'choices'     => '',
	'condition'   => $home_people_prefix.'enable:is(on)',
);
$custom_settings['settings'][] = array(
	'id'          => $home_people_prefix.'margin',
	'label'       => __('Column Margin', 'tally_taxdomain'),
	'desc'        => __('Margin of the columns. It can be 1, 2 or 3', 'tally_taxdomain'),
	'std'         => tally_option_std($home_people_prefix.'margin'),
	'type'        => 'text',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => 'tally-home-people',
	'choices'     => '',
	'condition'   => $home_people_prefix.'enable:is(on)',
);
$custom_settings['settings'][] = array(
	'id'          => $home_people_prefix.'image_size',
	'label'       => __('Image Size', 'tally_taxdomain'),
	'desc'        => __('Example: <strong>200x200</strong>', 'tally_taxdomain'),
	'std'         => tally_option_std($home_people_prefix.'image_size'),
	'type'        => 'text',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => 'tally-home-people',
	'choices'     => '',
	'condition'   => $home_people_prefix.'enable:is(on)',
);


$custom_settings['settings'][] = array(
	'id'          => $home_people_prefix.'padding',
	'label'       => __('Section Padding', 'tally_taxdomain'),
	'desc'        => __('Add <strong>TOP</strong> and <strong>Bottom</strong> padding only.', 'tally_taxdomain'),
	'std'         => tally_option_std($home_people_prefix.'padding'),
	'type'        => 'spacing',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
	'condition'   => $home_people_prefix.'enable:is(on)',
);
$custom_settings['settings'][] = array(
	'id'          => $home_people_prefix.'text_color',
	'label'       => __('Text Color', 'tally_taxdomain'),
	'desc'        => __('This will change the normal text color of the elements.', 'tally_taxdomain'),
	'std'         => tally_option_std($home_people_prefix.'text_color'),
	'type'        => 'colorpicker',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
	'condition'   => $home_people_prefix.'enable:is(on)',
);
$custom_settings['settings'][] = array(
	'id'          => $home_people_prefix.'heading_color',
	'label'       => __('Heading Color', 'tally_taxdomain'),
	'desc'        => __('Content headings color. This will change the color of h1, h2, h3, h4, h5 and h6.', 'tally_taxdomain'),
	'std'         => tally_option_std($home_people_prefix.'heading_color'),
	'type'        => 'colorpicker',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
	'condition'   => $home_people_prefix.'enable:is(on)',
);
$custom_settings['settings'][] = array(
	'id'          => $home_people_prefix.'border_color',
	'label'       => __('Border Color', 'tally_taxdomain'),
	'desc'        => __('Border color of the section..', 'tally_taxdomain'),
	'std'         => tally_option_std($home_people_prefix.'border_color'),
	'type'        => 'colorpicker',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
	'condition'   => $home_people_prefix.'enable:is(on)',
);
$custom_settings['settings'][] = array(
	'id'          => $home_people_prefix.'border_inner_color',
	'label'       => __('Inner Border Color', 'tally_taxdomain'),
	'desc'        => __('Border color of inner elements of the section.', 'tally_taxdomain'),
	'std'         => tally_option_std($home_people_prefix.'border_inner_color'),
	'type'        => 'colorpicker',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
	'condition'   => $home_people_prefix.'enable:is(on)',
);
$custom_settings['settings'][] = array(
	'id'          => $home_people_prefix.'_innerbg',
	'label'       => __('Inner Background Color', 'tally_taxdomain'),
	'desc'        => __('This is the inner background of the elements.', 'tally_taxdomain'),
	'std'         => tally_option_std($home_people_prefix.'_innerbg'),
	'type'        => 'colorpicker',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
	'condition'   => $home_people_prefix.'enable:is(on)',
);
$custom_settings['settings'][] = array(
	'id'          => $home_people_prefix.'bg',
	'label'       => __('Section Background', 'tally_taxdomain'),
	'desc'        => __('This is Background of the Section.', 'tally_taxdomain'),
	'std'         => tally_option_std($home_people_prefix.'padding'),
	'type'        => 'background',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
	'condition'   => $home_people_prefix.'enable:is(on)',
);