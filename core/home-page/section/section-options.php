<?php
if($the_config['header'] == true){
	$settings[] = array(
		'id'          => $section_prefix .'tab',
		'label'       => 'Section Header',
		'desc'        => '',
		'std'         => '',
		'type'        => 'tab',
		'section'     => $the_section_id,
		'class'       => '',
		'condition'   => '',
		'operator'    => 'and',
	);
	$settings[] = array(
		'id'          => $section_prefix .'header_enable',
		'label'       => 'Enable Header',
		'desc'        => '',
		'std'         => '',
		'type'        => 'on_off',
		'section'     => $the_section_id,
		'class'       => '',
		'condition'   => $section_prefix.'enable:is(on)',
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
		'condition'   => $section_prefix.'enable:is(on),'.$section_prefix.'header_enable:is(on)',
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
		'condition'   => $section_prefix.'enable:is(on),'.$section_prefix.'header_enable:is(on)',
		'operator'    => 'and',
	);
	$settings[] = array(
		'id'          => $section_prefix .'align',
		'label'       => 'Text Align',
		'desc'        => '',
		'std'         => '',
		'type'        => 'select',
		'section'     => $the_section_id,
		'class'       => '',
		'condition'   => $section_prefix.'enable:is(on),'.$section_prefix.'header_enable:is(on)',
		'operator'    => 'and',
		'choices'     => array( 
			array('value' => 'left','label' => 'left','src' => ''),
			array('value' => 'right','label' => 'right','src' => ''),
			array('value' => 'center','label' => 'center','src' => '')
		),
	);
	$settings[] = array(
		'id'          => $section_prefix .'header_text_color',
		'label'       => 'Text Color',
		'desc'        => '',
		'std'         => '',
		'type'        => 'colorpicker',
		'section'     => $the_section_id,
		'class'       => '',
		'condition'   => $section_prefix.'enable:is(on),'.$section_prefix.'header_enable:is(on)',
		'operator'    => 'and',
	);
	$settings[] = array(
		'id'          => $section_prefix .'header_heading_color',
		'label'       => 'Heading Color',
		'desc'        => '',
		'std'         => '',
		'type'        => 'colorpicker',
		'section'     => $the_section_id,
		'class'       => '',
		'condition'   => $section_prefix.'enable:is(on),'.$section_prefix.'header_enable:is(on)',
		'operator'    => 'and',
	);
	$settings[] = array(
		'id'          => $section_prefix .'header_border_color',
		'label'       => 'Border Color',
		'desc'        => '',
		'std'         => '',
		'type'        => 'colorpicker',
		'section'     => $the_section_id,
		'class'       => '',
		'condition'   => $section_prefix.'enable:is(on),'.$section_prefix.'header_enable:is(on)',
		'operator'    => 'and',
	);
}
if($the_config['settings'] == true){	
	$settings[] = array(
		'id'          => $section_prefix .'tab2',
		'label'       => 'Settings',
		'desc'        => '',
		'std'         => '',
		'type'        => 'tab',
		'section'     => $the_section_id,
		'class'       => '',
		'condition'   => '',
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
	
}