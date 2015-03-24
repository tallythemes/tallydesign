<?php
$tally_hconfig = array();

$tally_hconfig[] = array(
	'id'		=> 'slideshow',
	'label'		=> 'Slideshow',
	'biz'		=> false,
	'div_class' => '',
	'settings'	=> false,
	'columns'	=> false,
	'inner_div'	=> false,
	'header'	=> false,
	'blocks'	=> array(
		array(
			'id'		=> 'slideshow',
			'label'		=> 'Slideshow',
			'div_class' => '',
			'name'		=> 'slideshow',
			'column'	=> '',
			'skin'		=> '',
			'layout'	=> '',
			'biz'		=> false,
		),
	)
);
$tally_hconfig[] = array(
	'id'		=> 'three_column_text',
	'label'		=> 'Three Columns Text',
	'biz'		=> false,
	'div_class' => '',
	'settings'	=> true,
	'columns'	=> true,
	'inner_div'	=> true,
	'header'	=> false,
	'blocks'	=> array(
		array(
			'id'		=> 'col1',
			'label'		=> 'First Column',
			'div_class' => '',
			'name'		=> 'text',
			'column'	=> '4',
			'skin'		=> 'hpbs2',
			'layout'	=> '',
			'biz'		=> false,
		),
		array(
			'id'		=> 'col2',
			'label'		=> 'Secend Column',
			'div_class' => '',
			'name'		=> 'text',
			'column'	=> '4',
			'skin'		=> 'hpbs2',
			'layout'	=> '',
			'biz'		=> false,
		),
		array(
			'id'		=> 'col3',
			'label'		=> 'Third Column',
			'div_class' => '',
			'name'		=> 'text',
			'column'	=> '4',
			'skin'		=> 'hpbs2',
			'layout'	=> '',
			'biz'		=> false,
		),
	)
);
$tally_hconfig[] = array(
	'id'		=> 'text1',
	'label'		=> 'Textarea',
	'biz'		=> false,
	'div_class' => '',
	'settings'	=> true,
	'columns'	=> false,
	'inner_div'	=> true,
	'header'	=> false,
	'blocks'	=> array(
		array(
			'id'		=> 'text1',
			'label'		=> 'Textarea',
			'div_class' => '',
			'name'		=> 'text',
			'column'	=> '',
			'skin'		=> 'hpbs1',
			'layout'	=> '',
			'biz'		=> false,
		),
	)
);

return $tally_hconfig;