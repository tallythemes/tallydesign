<?php
if($the_config['section_settings'] == true){
	$settings[] = array(
		'id'          => $section_prefix .'tab',
		'label'       => 'Section Settings',
		'desc'        => '',
		'std'         => '',
		'type'        => 'tab',
		'section'     => $the_section_id,
		'class'       => '',
		'condition'   => '',
		'operator'    => 'and',
	);
	$settings[] = array(
		'id'          => $section_prefix .'title',
		'label'       => 'Section Title',
		'desc'        => '',
		'std'         => '',
		'type'        => 'text',
		'section'     => $the_section_id,
		'class'       => '',
		'condition'   => $section_prefix.'enable:is(on)',
		'operator'    => 'and',
	);
	$settings[] = array(
		'id'          => $section_prefix .'description',
		'label'       => 'Section Description',
		'desc'        => '',
		'std'         => '',
		'type'        => 'textarea',
		'section'     => $the_section_id,
		'class'       => '',
		'condition'   => $section_prefix.'enable:is(on)',
		'operator'    => 'and',
	);
	$settings[] = array(
		'id'          => $section_prefix .'css_class',
		'label'       => 'CSS Class',
		'desc'        => '',
		'std'         => '',
		'type'        => 'text',
		'section'     => $the_section_id,
		'class'       => '',
		'condition'   => $section_prefix.'enable:is(on)',
		'operator'    => 'and',
	);
	$settings[] = array(
		'id'          => $section_prefix .'css_id',
		'label'       => 'CSS ID',
		'desc'        => '',
		'std'         => '',
		'type'        => 'text',
		'section'     => $the_section_id,
		'class'       => '',
		'condition'   => $section_prefix.'enable:is(on)',
		'ope
		rator'    => 'and',
	);
	$settings[] = array(
		'id'          => $section_prefix .'content_width',
		'label'       => 'Content Width',
		'desc'        => '',
		'std'         => '',
		'type'        => 'numeric-slider',
		'section'     => $the_section_id,
		'class'       => '',
		'condition'   => $section_prefix.'enable:is(on)',
		'operator'    => 'and',
		'min_max_step'=> '499,1400,1',
	);
	$settings[] = array(
		'id'          => $section_prefix .'padding',
		'label'       => 'Padding',
		'desc'        => '',
		'std'         => '',
		'type'        => 'spacing',
		'section'     => $the_section_id,
		'class'       => '',
		'condition'   => $section_prefix.'enable:is(on)',
		'operator'    => 'and',
	);
	$settings[] = array(
		'id'          => $section_prefix .'border_top',
		'label'       => 'Top Border',
		'desc'        => '',
		'std'         => '',
		'type'        => 'border',
		'section'     => $the_section_id,
		'class'       => '',
		'condition'   => $section_prefix.'enable:is(on)',
		'operator'    => 'and',
	);
	$settings[] = array(
		'id'          => $section_prefix .'border_bottom',
		'label'       => 'Bottom Border',
		'desc'        => '',
		'std'         => '',
		'type'        => 'border',
		'section'     => $the_section_id,
		'class'       => '',
		'condition'   => $section_prefix.'enable:is(on)',
		'operator'    => 'and',
	);
	$settings[] = array(
		'id'          => $section_prefix .'text_color',
		'label'       => 'Text Color',
		'desc'        => '',
		'std'         => '',
		'type'        => 'colorpicker',
		'section'     => $the_section_id,
		'class'       => '',
		'condition'   => $section_prefix.'enable:is(on)',
		'operator'    => 'and',
	);
	$settings[] = array(
		'id'          => $section_prefix .'heading_color',
		'label'       => 'Heading Color',
		'desc'        => '',
		'std'         => '',
		'type'        => 'colorpicker',
		'section'     => $the_section_id,
		'class'       => '',
		'condition'   => $section_prefix.'enable:is(on)',
		'operator'    => 'and',
	);
	$settings[] = array(
		'id'          => $section_prefix .'border_color',
		'label'       => 'Border Color',
		'desc'        => '',
		'std'         => '',
		'type'        => 'colorpicker',
		'section'     => $the_section_id,
		'class'       => '',
		'condition'   => $section_prefix.'enable:is(on)',
		'operator'    => 'and',
	);
	$settings[] = array(
		'id'          => $section_prefix .'inner_bg',
		'label'       => 'Inner Background Color',
		'desc'        => '',
		'std'         => '',
		'type'        => 'colorpicker',
		'section'     => $the_section_id,
		'class'       => '',
		'condition'   => $section_prefix.'enable:is(on)',
		'operator'    => 'and',
	);
	$settings[] = array(
		'id'          => $section_prefix .'bg',
		'label'       => 'Background',
		'desc'        => '',
		'std'         => '',
		'type'        => 'background',
		'section'     => $the_section_id,
		'class'       => '',
		'condition'   => $section_prefix.'enable:is(on)',
		'operator'    => 'and',
	);
}