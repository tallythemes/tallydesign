<?php
$dri = '';
if(file_exists(TALLY_CHILD_DRI . '/demo/hpconfig.php')){
	$dri = TALLY_CHILD_DRI . '/demo/hpconfig.php';
}elseif(file_exists(TALLY_DRI . '/demo/hpconfig.php')){
	$dri = TALLY_DRI . '/demo/hpconfig.php';
}
include($dri);

if(is_array($tally_hconfig)){
	foreach($tally_hconfig as $the_config){
		
		$the_section_id = $the_config['id'];
		$section_prefix = $the_config['id'].'_';
		
		if(tally_hp_option($section_prefix.'enable') == 'on'){
			$section_class = '.tally-hps-'.$the_section_id;
		?>
			<?php echo $section_class; ?>{
				<?php tally_hp_option_background($section_prefix.'bg'); ?> 
                <?php tally_option_border(tally_hp_option($section_prefix.'border_top'), 'top'); ?> 
                <?php tally_option_border(tally_hp_option($section_prefix.'border_bottom'), 'bottom'); ?> 
				color:<?php tally_hp_option_color($section_prefix.'text_color'); ?> !important;
			}
			<?php tally_hp_option_spacing($section_prefix.'padding', $section_class, 'padding'); ?>
            <?php echo $section_class; ?> h1,
            <?php echo $section_class; ?> h2,
            <?php echo $section_class; ?> h3,
            <?php echo $section_class; ?> h4,
            <?php echo $section_class; ?> h5,
            <?php echo $section_class; ?> h6{ color:<?php tally_hp_option_color($section_prefix.'heading_color'); ?> !important; }
            <?php echo $section_class; ?> *{ border-color:<?php tally_hp_option_color($section_prefix.'border_inner_color'); ?> !important; }
            
            <?php if(tally_hp_option($section_prefix.'content_width') > 499): ?>
            	<?php echo $section_class; ?> .tally-home-section-inner{ max-width:<?php echo tally_hp_option($section_prefix.'content_width'); ?>px; }
            <?php endif; ?>
        <?php
		}
	}
}