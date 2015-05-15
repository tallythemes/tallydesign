<?php
$settings[] = array(
	'id'          => $the_prefix.'items',
	'label'       => __('People Items', 'tally_taxdomain'),
	'desc'        => __('Add or edit info People items.', 'tally_taxdomain'),
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
			'id'          => 'position',
			'label'       => __('Position', 'tally_taxdomain'),
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
			'id'          => 'link_text',
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
	'id'          => $the_prefix.'columns',
	'label'       => __('Columns', 'tally_taxdomain'),
	'desc'        => __('It can be 2, 3, 4, 5, or 6 columns.', 'tally_taxdomain'),
	'std'         => tally_hp_option_std($the_prefix .'columns'),
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
	'id'          => $the_prefix.'column_margin',
	'label'       => __('Column Margin', 'tally_taxdomain'),
	'desc'        => __('Enable or disable Direction navigation of the slideshow.', 'tally_taxdomain'),
	'std'         => tally_hp_option_std($the_prefix .'column_margin'),
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
	'id'          => $the_prefix.'heading_color',
	'label'       => __('Heading Color', 'tally_taxdomain'),
	'desc'        => '',
	'std'         => tally_hp_option_std($the_prefix .'heading_color'),
	'type'        => 'colorpicker',
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
	'id'          => $the_prefix.'text_color',
	'label'       => __('Text Color', 'tally_taxdomain'),
	'desc'        => '',
	'std'         => tally_hp_option_std($the_prefix .'text_color'),
	'type'        => 'colorpicker',
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
	'id'          => $the_prefix.'border_color',
	'label'       => __('Border Color', 'tally_taxdomain'),
	'desc'        => '',
	'std'         => tally_hp_option_std($the_prefix .'border_color'),
	'type'        => 'colorpicker',
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
	'id'          => $the_prefix.'bg_color',
	'label'       => __('Background Color', 'tally_taxdomain'),
	'desc'        => '',
	'std'         => tally_hp_option_std($the_prefix .'bg_color'),
	'type'        => 'colorpicker',
	'section'     => $the_section_id,
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => 'tally-dis',
	'choices'     => '',
	'condition'   => $the_prefix.'enable:is(on),'.$section_prefix.'enable:is(on)',
	'operator'    => 'and',
);