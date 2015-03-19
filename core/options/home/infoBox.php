<?php
$home_infoBox_prefix = 'home_infoBox_';
$custom_settings['settings'][] = array(
	'id'          => 'home_tab_infoBox',
	'label'       => __('InfoBox', 'tally_taxdomain'),
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
	'id'          => $home_infoBox_prefix.'enable',
	'label'       => __('Enable InfoBox Section', 'tally_taxdomain'),
	'desc'        => '',
	'std'         => tally_option_std($home_infoBox_prefix.'enable'),
	'type'        => 'on_off',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
);

$custom_settings['settings'][] = array(
	'id'          => $home_infoBox_prefix.'description',
	'label'       => __('Section Description', 'tally_taxdomain'),
	'desc'        => '',
	'std'         => tally_option_std($home_infoBox_prefix.'description'),
	'type'        => 'textarea',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
	'condition'   => $home_infoBox_prefix.'enable:is(on)',
);
$custom_settings['settings'][] = array(
	'id'          => $home_infoBox_prefix.'items',
	'label'       => __('Box Items', 'tally_taxdomain'),
	'desc'        => __('Add or edit info box items.', 'tally_taxdomain'),
	'std'         => tally_option_std($home_infoBox_prefix.'items'),
	'type'        => 'list-item',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
	'condition'   => $home_infoBox_prefix.'enable:is(on)',
	'settings'    => array(
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
			'id'          => 'icon',
			'label'       => __('Icon', 'tally_taxdomain'),
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
			'id'          => 'class',
			'label'       => __('Class', 'tally_taxdomain'),
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
	'id'          => $home_infoBox_prefix.'columns',
	'label'       => __('Columns', 'tally_taxdomain'),
	'desc'        => __('It can be 2, 3, 4, 5, or 6 columns', 'tally_taxdomain'),
	'std'         => tally_option_std($home_infoBox_prefix.'columns'),
	'type'        => 'text',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
	'condition'   => $home_infoBox_prefix.'enable:is(on)',
);
$custom_settings['settings'][] = array(
	'id'          => $home_infoBox_prefix.'margin',
	'label'       => __('Column Margin', 'tally_taxdomain'),
	'desc'        => __('Margin of the columns. It can be 1, 2 or 3', 'tally_taxdomain'),
	'std'         => tally_option_std($home_infoBox_prefix.'margin'),
	'type'        => 'text',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
	'condition'   => $home_infoBox_prefix.'enable:is(on)',
);


$custom_settings['settings'][] = array(
	'id'          => $home_infoBox_prefix.'padding',
	'label'       => __('Section Padding', 'tally_taxdomain'),
	'desc'        => __('Add <strong>TOP</strong> and <strong>Bottom</strong> padding only.', 'tally_taxdomain'),
	'std'         => tally_option_std($home_infoBox_prefix.'padding'),
	'type'        => 'spacing',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
	'condition'   => $home_infoBox_prefix.'enable:is(on)',
);

$custom_settings['settings'][] = array(
	'id'          => $home_infoBox_prefix.'icon_color',
	'label'       => __('Icon Color', 'tally_taxdomain'),
	'desc'        => __('This is the color of the icon', 'tally_taxdomain'),
	'std'         => tally_option_std($home_infoBox_prefix.'icon_color'),
	'type'        => 'colorpicker',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
	'condition'   => $home_infoBox_prefix.'enable:is(on)',
);
$custom_settings['settings'][] = array(
	'id'          => $home_infoBox_prefix.'icon_hover_color',
	'label'       => __('Icon Hover Color', 'tally_taxdomain'),
	'desc'        => __('This is the hover color of the icon', 'tally_taxdomain'),
	'std'         => tally_option_std($home_infoBox_prefix.'icon_hover_color'),
	'type'        => 'colorpicker',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
	'condition'   => $home_infoBox_prefix.'enable:is(on)',
);
$custom_settings['settings'][] = array(
	'id'          => $home_infoBox_prefix.'icon_bg_color',
	'label'       => __('Icon Background Color', 'tally_taxdomain'),
	'desc'        => __('This is the Background color of the icon', 'tally_taxdomain'),
	'std'         => tally_option_std($home_infoBox_prefix.'icon_bg_color'),
	'type'        => 'colorpicker',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
	'condition'   => $home_infoBox_prefix.'enable:is(on)',
);
$custom_settings['settings'][] = array(
	'id'          => $home_infoBox_prefix.'icon_bg_hover_color',
	'label'       => __('Icon Background Hover Color', 'tally_taxdomain'),
	'desc'        => __('This is the Background Hover color of the icon', 'tally_taxdomain'),
	'std'         => tally_option_std($home_infoBox_prefix.'icon_bg_hover_color'),
	'type'        => 'colorpicker',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
	'condition'   => $home_infoBox_prefix.'enable:is(on)',
);
$custom_settings['settings'][] = array(
	'id'          => $home_infoBox_prefix.'icon_border_color',
	'label'       => __('Icon Border Color', 'tally_taxdomain'),
	'desc'        => __('This is the border color of the icon', 'tally_taxdomain'),
	'std'         => tally_option_std($home_infoBox_prefix.'icon_border_color'),
	'type'        => 'colorpicker',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
	'condition'   => $home_infoBox_prefix.'enable:is(on)',
);
$custom_settings['settings'][] = array(
	'id'          => $home_infoBox_prefix.'icon_border_hover_color',
	'label'       => __('Icon Border Hover Color', 'tally_taxdomain'),
	'desc'        => __('This is the border hover color of the icon', 'tally_taxdomain'),
	'std'         => tally_option_std($home_infoBox_prefix.'icon_border_hover_color'),
	'type'        => 'colorpicker',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
	'condition'   => $home_infoBox_prefix.'enable:is(on)',
);

$custom_settings['settings'][] = array(
	'id'          => $home_infoBox_prefix.'text_color',
	'label'       => __('Text Color', 'tally_taxdomain'),
	'desc'        => __('This will change the normal text color of the elements.', 'tally_taxdomain'),
	'std'         => tally_option_std($home_infoBox_prefix.'text_color'),
	'type'        => 'colorpicker',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
	'condition'   => $home_infoBox_prefix.'enable:is(on)',
);
$custom_settings['settings'][] = array(
	'id'          => $home_infoBox_prefix.'heading_color',
	'label'       => __('Heading Color', 'tally_taxdomain'),
	'desc'        => __('Content headings color. This will change the color of h1, h2, h3, h4, h5 and h6.', 'tally_taxdomain'),
	'std'         => tally_option_std($home_infoBox_prefix.'heading_color'),
	'type'        => 'colorpicker',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
	'condition'   => $home_infoBox_prefix.'enable:is(on)',
);
$custom_settings['settings'][] = array(
	'id'          => $home_infoBox_prefix.'border_color',
	'label'       => __('Border Color', 'tally_taxdomain'),
	'desc'        => __('Border color of the section..', 'tally_taxdomain'),
	'std'         => tally_option_std($home_infoBox_prefix.'border_color'),
	'type'        => 'colorpicker',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
	'condition'   => $home_infoBox_prefix.'enable:is(on)',
);
$custom_settings['settings'][] = array(
	'id'          => $home_infoBox_prefix.'border_inner_color',
	'label'       => __('Inner Border Color', 'tally_taxdomain'),
	'desc'        => __('Border color of inner elements of the section.', 'tally_taxdomain'),
	'std'         => tally_option_std($home_infoBox_prefix.'border_inner_color'),
	'type'        => 'colorpicker',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
	'condition'   => $home_infoBox_prefix.'enable:is(on)',
);
$custom_settings['settings'][] = array(
	'id'          => $home_infoBox_prefix.'_innerbg',
	'label'       => __('Inner Background Color', 'tally_taxdomain'),
	'desc'        => __('This is the inner background of the elements.', 'tally_taxdomain'),
	'std'         => tally_option_std($home_infoBox_prefix.'_innerbg'),
	'type'        => 'colorpicker',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
	'condition'   => $home_infoBox_prefix.'enable:is(on)',
);
$custom_settings['settings'][] = array(
	'id'          => $home_infoBox_prefix.'bg',
	'label'       => __('Section Background', 'tally_taxdomain'),
	'desc'        => __('This is Background of the Section.', 'tally_taxdomain'),
	'std'         => tally_option_std($home_infoBox_prefix.'bg'),
	'type'        => 'background',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
	'condition'   => $home_infoBox_prefix.'enable:is(on)',
);