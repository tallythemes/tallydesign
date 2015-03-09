<?php
$home_textBlock2_prefix = 'home_textBlock2_';
$custom_settings['settings'][] = array(
	'id'          => 'home_tab_textBlock2',
	'label'       => __('TextBlock 2', 'tally_taxdomain'),
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
	'id'          => $home_textBlock2_prefix.'enable',
	'label'       => __('Enable TextBlock Section', 'tally_taxdomain'),
	'desc'        => '',
	'std'         => tally_option_std($home_textBlock2_prefix.'enable'),
	'type'        => 'on_off',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
);

$custom_settings['settings'][] = array(
	'id'          => $home_textBlock2_prefix.'content',
	'label'       => __('Content', 'tally_taxdomain'),
	'desc'        => '',
	'std'         => tally_option_std($home_textBlock2_prefix.'description'),
	'type'        => 'textarea',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
	'condition'   => $home_textBlock2_prefix.'enable:is(on)',
);
$custom_settings['settings'][] = array(
	'id'          => $home_textBlock2_prefix.'button_link',
	'label'       => __('Button Link', 'tally_taxdomain'),
	'desc'        => '',
	'std'         => tally_option_std($home_textBlock2_prefix.'button_link'),
	'type'        => 'text',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
	'condition'   => $home_textBlock2_prefix.'enable:is(on)',
);
$custom_settings['settings'][] = array(
	'id'          => $home_textBlock2_prefix.'button_text',
	'label'       => __('Button Text', 'tally_taxdomain'),
	'desc'        => '',
	'std'         => tally_option_std($home_textBlock2_prefix.'button_text'),
	'type'        => 'text',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
	'condition'   => $home_textBlock2_prefix.'enable:is(on)',
);



$custom_settings['settings'][] = array(
	'id'          => $home_textBlock2_prefix.'padding',
	'label'       => __('Section Padding', 'tally_taxdomain'),
	'desc'        => __('Add <strong>TOP</strong> and <strong>Bottom</strong> padding only.', 'tally_taxdomain'),
	'std'         => tally_option_std($home_textBlock2_prefix.'padding'),
	'type'        => 'spacing',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
	'condition'   => $home_textBlock2_prefix.'enable:is(on)',
);
$custom_settings['settings'][] = array(
	'id'          => $home_textBlock2_prefix.'text_color',
	'label'       => __('Text Color', 'tally_taxdomain'),
	'desc'        => __('This will change the normal text color of the elements.', 'tally_taxdomain'),
	'std'         => tally_option_std($home_textBlock2_prefix.'text_color'),
	'type'        => 'colorpicker',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
	'condition'   => $home_textBlock2_prefix.'enable:is(on)',
);
$custom_settings['settings'][] = array(
	'id'          => $home_textBlock2_prefix.'heading_color',
	'label'       => __('Heading Color', 'tally_taxdomain'),
	'desc'        => __('Content headings color. This will change the color of h1, h2, h3, h4, h5 and h6.', 'tally_taxdomain'),
	'std'         => tally_option_std($home_textBlock2_prefix.'heading_color'),
	'type'        => 'colorpicker',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
	'condition'   => $home_textBlock2_prefix.'enable:is(on)',
);
$custom_settings['settings'][] = array(
	'id'          => $home_textBlock2_prefix.'border_color',
	'label'       => __('Border Color', 'tally_taxdomain'),
	'desc'        => __('Border color of the section..', 'tally_taxdomain'),
	'std'         => tally_option_std($home_textBlock2_prefix.'border_color'),
	'type'        => 'colorpicker',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
	'condition'   => $home_textBlock2_prefix.'enable:is(on)',
);
$custom_settings['settings'][] = array(
	'id'          => $home_textBlock2_prefix.'border_inner_color',
	'label'       => __('Inner Border Color', 'tally_taxdomain'),
	'desc'        => __('Border color of inner elements of the section.', 'tally_taxdomain'),
	'std'         => tally_option_std($home_textBlock2_prefix.'border_inner_color'),
	'type'        => 'colorpicker',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
	'condition'   => $home_textBlock2_prefix.'enable:is(on)',
);
$custom_settings['settings'][] = array(
	'id'          => $home_textBlock2_prefix.'_innerbg',
	'label'       => __('Inner Background Color', 'tally_taxdomain'),
	'desc'        => __('This is the inner background of the elements.', 'tally_taxdomain'),
	'std'         => tally_option_std($home_textBlock2_prefix.'_innerbg'),
	'type'        => 'colorpicker',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
	'condition'   => $home_textBlock2_prefix.'enable:is(on)',
);
$custom_settings['settings'][] = array(
	'id'          => $home_textBlock2_prefix.'bg',
	'label'       => __('Section Background', 'tally_taxdomain'),
	'desc'        => __('This is Background of the Section.', 'tally_taxdomain'),
	'std'         => tally_option_std($home_textBlock2_prefix.'padding'),
	'type'        => 'background',
	'section'     => 'home',
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
	'condition'   => $home_textBlock2_prefix.'enable:is(on)',
);