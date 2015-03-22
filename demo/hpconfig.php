<?php
$tally_hconfig = array();

$tally_hconfig[] = array(
	'id'		=> 'slideshow',
	'label'		=> 'Slideshow',
	'biz'		=> false,
	'div_class' => '',
	'settings'	=> true,
	'columns'	=> false,
	'inner_div'	=> true,
	'header'	=> true,
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
			'skin'		=> '',
			'layout'	=> '',
			'biz'		=> false,
		),
	)
);

return $tally_hconfig;