<?php
$settings[] = array(
	'id'          => $the_prefix .'tab',
	'label'       => $the_block['label'],
	'desc'        => '',
	'std'         => '',
	'type'        => 'tab',
	'section'     => $the_section_id,
	'class'       => '',
	'condition'   =>  '',
	'operator'    => 'and',
);
$settings[] = array(
	'id'          => $the_prefix .'enable',
	'label'       => $the_block['label'],
	'desc'        => '',
	'std'         => tally_hp_option_std($the_prefix .'enable', 'off'),
	'type'        => 'on_off',
	'section'     => $the_section_id,
	'class'       => '',
	'condition'   => $section_prefix.'enable:is(on)',
	'operator'    => 'and',
);

if($the_block['column'] != ''){
	$settings[] = array(
		'id'          => $the_prefix .'column',
		'label'       => 'Column Layout',
		'desc'        => 'Column width will be select the content width of this block. The content width divided into 12 columns. So for full width use 12. For 50% width use 6',
		'std'         => $the_block['column'],
		'type'        => 'numeric-slider',
		'section'     => $the_section_id,
		'class'       => 'tally-dis',
		'condition'   => $section_prefix.'enable:is(on)',
		'operator'    => 'and',
		'min_max_step'=> '1,12,1',
	);
}
						
if(file_exists(TALLY_CHILD_DRI . '/home-page/blocks/'.$the_block['name'].'/'.$the_block['name'].'-options.php')){
	include(TALLY_CHILD_DRI . '/home-page/blocks/'.$the_block['name'].'/'.$the_block['name'].'-options.php');
}elseif(file_exists(TALLY_DRI . '/home-page/blocks/'.$the_block['name'].'/'.$the_block['name'].'-options.php')){
	include(TALLY_DRI . '/home-page/blocks/'.$the_block['name'].'/'.$the_block['name'].'-options.php');
}elseif(file_exists(TALLY_DRI . '/core/home-page/blocks/'.$the_block['name'].'/'.$the_block['name'].'-options.php')){
	include(TALLY_DRI . '/core/home-page/blocks/'.$the_block['name'].'/'.$the_block['name'].'-options.php');
}