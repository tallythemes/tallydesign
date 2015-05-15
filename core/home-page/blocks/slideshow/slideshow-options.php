<?php
$settings[] = array(
	'id'          => $the_prefix.'items',
	'label'       => __('Slider Items', 'tally_taxdomain'),
	'desc'        => __('Add or edit info slider items.', 'tally_taxdomain'),
	'std'         => tally_hp_option_std($the_prefix .'items'),
	'type'        => 'list-item',
	'section'     => $the_section_id,
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => 'tally-list-dis',
	'choices'     => '',
	'condition'   => $the_prefix.'enable:is(on),'.$section_prefix.'enable:is(on)',
	'operator'    => 'and',
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
			'id'          => 'text_align',
			'label'       => __('Text Align', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => '',
			'type'        => 'select',
			'section'     => '',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => 'tally-dis',
			'choices'     => '',
			'choices'     => array( 
				array('value' => 'left','label' => 'left','src' => ''),
				array('value' => 'right','label' => 'right','src' => ''),
				array('value' => 'center','label' => 'center','src' => '')
			),
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
			'id'          => 'button_text',
			'label'       => __('Button Text', 'tally_taxdomain'),
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
			'id'          => 'text_color',
			'label'       => __('Text Color', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => '',
			'type'        => 'colorpicker',
			'section'     => '',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => 'tally-dis',
			'choices'     => '',
		),
		array(
			'id'          => 'heading_color',
			'label'       => __('Heading Color', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => '',
			'type'        => 'colorpicker',
			'section'     => '',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => 'tally-dis',
			'choices'     => '',
		),
		array(
			'id'          => 'button_color',
			'label'       => __('Button Color', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => '',
			'type'        => 'select',
			'section'     => '',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => 'tally-dis',
			'choices'     => '',
			'choices'     => array( 
				array('value' => 'accent','label' => 'accent','src' => ''),
				array('value' => 'light','label' => 'light','src' => ''),
				array('value' => 'dark','label' => 'dark','src' => '')
			),
		),
		
	)
);
$settings[] = array(
	'id'          => $the_prefix.'image_size',
	'label'       => __('Image Size', 'tally_taxdomain'),
	'desc'        => __('Example: <strong>200x200</strong>', 'tally_taxdomain'),
	'std'         => tally_hp_option_std($the_prefix .'image_size'),
	'type'        => 'text',
	'section'     => $the_section_id,
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => 'tally-dis',
	'choices'     => '',
	'condition'   => $the_prefix.'enable:is(on),'.$section_prefix.'enable:is(on)',
	'operator'    => 'and',
);

$settings[] = array(
	'id'          => $the_prefix.'control_nav',
	'label'       => __('Control Nave', 'tally_taxdomain'),
	'desc'        => __('Enable or disable control navigation of the slideshow.', 'tally_taxdomain'),
	'std'         => tally_hp_option_std($the_prefix .'control_nav'),
	'type'        => 'on_off',
	'section'     => $the_section_id,
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => 'tally-dis',
	'choices'     => '',
	'condition'   => $the_prefix.'enable:is(on),'.$section_prefix.'enable:is(on)',
	'operator'    => 'and',
);
$settings[] = array(
	'id'          => $the_prefix.'direction_nav',
	'label'       => __('Direction Nav', 'tally_taxdomain'),
	'desc'        => __('Enable or disable Direction navigation of the slideshow.', 'tally_taxdomain'),
	'std'         => tally_hp_option_std($the_prefix .'direction_nav'),
	'type'        => 'on_off',
	'section'     => $the_section_id,
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => 'tally-dis',
	'choices'     => '',
	'condition'   => $the_prefix.'enable:is(on),'.$section_prefix.'enable:is(on)',
	'operator'    => 'and',
);