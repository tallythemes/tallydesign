<?php
$settings[] = array(
	'id'          => $the_prefix.'gallery',
	'label'       => __('Gallery Images', 'tally_taxdomain'),
	'desc'        => '',
	'std'         => tally_hp_option_std($the_prefix .'gallery'),
	'type'        => 'gallery',
	'section'     => $the_section_id,
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
	'condition'   => $the_prefix.'enable:is(on),'.$section_prefix.'enable:is(on)',
	'operator'    => 'and',
);
$settings[] = array(
	'id'          => $the_prefix.'image_size',
	'label'       => __('Image Size', 'tally_taxdomain'),
	'desc'        => '',
	'std'         => tally_hp_option_std($the_prefix .'image_size'),
	'type'        => 'text',
	'section'     => $the_section_id,
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
	'condition'   => $the_prefix.'enable:is(on),'.$section_prefix.'enable:is(on)',
	'operator'    => 'and',
);
$settings[] = array(
	'id'          => $the_prefix.'column',
	'label'       => __('Columns', 'tally_taxdomain'),
	'desc'        => '',
	'std'         => tally_hp_option_std($the_prefix .'column'),
	'type'        => 'text',
	'section'     => $the_section_id,
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
	'condition'   => $the_prefix.'enable:is(on),'.$section_prefix.'enable:is(on)',
	'operator'    => 'and',
);
$settings[] = array(
	'id'          => $the_prefix.'margin',
	'label'       => __('Margin', 'tally_taxdomain'),
	'desc'        => '',
	'std'         => tally_hp_option_std($the_prefix .'margin'),
	'type'        => 'text',
	'section'     => $the_section_id,
	'rows'        => '5',
	'post_type'   => '',
	'taxonomy'    => '',
	'class'       => '',
	'choices'     => '',
	'condition'   => $the_prefix.'enable:is(on),'.$section_prefix.'enable:is(on)',
	'operator'    => 'and',
);