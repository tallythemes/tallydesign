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
	'id'		=> 'services',
	'label'		=> 'Services',
	'biz'		=> false,
	'div_class' => '',
	'settings'	=> true,
	'columns'	=> false,
	'inner_div'	=> true,
	'header'	=> true,
	'blocks'	=> array(
		array(
			'id'		=> 'contentBox',
			'label'		=> 'Services',
			'div_class' => '',
			'name'		=> 'contentBox',
			'column'	=> '12',
			'skin'		=> 'hpbs1',
			'layout'	=> '',
			'biz'		=> false,
		),
	)
);
$tally_hconfig[] = array(
	'id'		=> 'our_work',
	'label'		=> 'Our Work',
	'biz'		=> false,
	'div_class' => '',
	'settings'	=> true,
	'columns'	=> false,
	'inner_div'	=> true,
	'header'	=> true,
	'blocks'	=> array(
		array(
			'id'		=> 'imageGallery',
			'label'		=> 'Our Work',
			'div_class' => '',
			'name'		=> 'imageGallery',
			'column'	=> '',
			'skin'		=> 'hpbs1',
			'layout'	=> '',
			'biz'		=> false,
		),
	)
);

$tally_hconfig[] = array(
	'id'		=> 'parallax',
	'label'		=> 'Parallax One',
	'biz'		=> false,
	'div_class' => '',
	'settings'	=> true,
	'columns'	=> false,
	'inner_div'	=> true,
	'header'	=> false,
	'blocks'	=> array(
		array(
			'id'		=> 'content',
			'label'		=> 'Content',
			'div_class' => '',
			'name'		=> 'text',
			'column'	=> '4',
			'skin'		=> 'hpbs1',
			'layout'	=> '',
			'biz'		=> false,
		),
	)
);


$tally_hconfig[] = array(
	'id'		=> 'artists',
	'label'		=> 'Artists',
	'biz'		=> false,
	'div_class' => '',
	'settings'	=> true,
	'columns'	=> false,
	'inner_div'	=> true,
	'header'	=> true,
	'blocks'	=> array(
		array(
			'id'		=> 'people',
			'label'		=> 'Artists',
			'div_class' => '',
			'name'		=> 'people',
			'column'	=> '',
			'skin'		=> 'hpbs1',
			'layout'	=> '',
			'biz'		=> false,
		),
	)
);


$tally_hconfig[] = array(
	'id'		=> 'testimonials',
	'label'		=> 'Testimonials',
	'biz'		=> false,
	'div_class' => '',
	'settings'	=> true,
	'columns'	=> false,
	'inner_div'	=> true,
	'header'	=> true,
	'blocks'	=> array(
		array(
			'id'		=> 'quoteSlider',
			'label'		=> 'Testimonials',
			'div_class' => '',
			'name'		=> 'quoteSlider',
			'column'	=> '',
			'skin'		=> 'hpbs1',
			'layout'	=> '',
			'biz'		=> false,
		),
	)
);


$tally_hconfig[] = array(
	'id'		=> 'what_we_offer',
	'label'		=> 'What We Offer',
	'biz'		=> false,
	'div_class' => '',
	'settings'	=> true,
	'columns'	=> false,
	'inner_div'	=> true,
	'header'	=> false,
	'blocks'	=> array(
		array(
			'id'		=> 'infoBox',
			'label'		=> 'infoBoxs',
			'div_class' => '',
			'name'		=> 'infoBox',
			'column'	=> '',
			'skin'		=> 'hpbs1',
			'layout'	=> '',
			'biz'		=> false,
		),
	)
);


$tally_hconfig[] = array(
	'id'		=> 'parallax2',
	'label'		=> 'Parallax Two',
	'biz'		=> false,
	'div_class' => '',
	'settings'	=> true,
	'columns'	=> false,
	'inner_div'	=> true,
	'header'	=> false,
	'blocks'	=> array(
		array(
			'id'		=> 'content',
			'label'		=> 'Content',
			'div_class' => '',
			'name'		=> 'text',
			'column'	=> '4',
			'skin'		=> 'hpbs1',
			'layout'	=> '',
			'biz'		=> false,
		),
	)
);


$tally_hconfig[] = array(
	'id'		=> 'contact',
	'label'		=> 'Contact',
	'biz'		=> false,
	'div_class' => 'home_contact_section',
	'settings'	=> true,
	'columns'	=> true,
	'inner_div'	=> false,
	'header'	=> false,
	'blocks'	=> array(
		array(
			'id'		=> 'googleMap',
			'label'		=> 'Map',
			'div_class' => '',
			'name'		=> 'googleMap',
			'column'	=> '6',
			'skin'		=> 'hpbs1',
			'layout'	=> '',
			'biz'		=> false,
		),
		array(
			'id'		=> 'contactForm',
			'label'		=> 'Contact Form',
			'div_class' => '',
			'name'		=> 'contactForm',
			'column'	=> '4',
			'skin'		=> 'hpbs1',
			'layout'	=> '',
			'biz'		=> false,
		),
		array(
			'id'		=> 'contactInfo',
			'label'		=> 'Contact Info',
			'div_class' => '',
			'name'		=> 'contactInfo',
			'column'	=> '2',
			'skin'		=> 'hpbs1',
			'layout'	=> '',
			'biz'		=> false,
		),
	)
);


return $tally_hconfig;
