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
		
		$section_prefix = $the_config['id'].'_';
		if(tally_hp_option($section_prefix.'enable') == 'on'){
			
			if(is_array($the_config['blocks'])){
				foreach($the_config['blocks'] as $the_block){
								
					$the_prefix = $the_config['id'].'_'.$the_block['id'].'_';
					$block_class = '.tally-hpb-'.$the_config['id'].'_'.$the_block['id'];
						
					if(tally_hp_option($the_prefix.'enable') == 'on'){		
						if($the_block['name'] == 'widget'){
							register_sidebar( array(
								'name' => 'Home '.$the_block['label'],
								'id' => $the_prefix.'home',
								'description' => __('Widget for Home Page', 'tally_taxdomain'),
								'before_widget' => '<div id="%1$s" class="widget %2$s">',
								'after_widget' => "</div>",
								'before_title' => '<h4 class="heading">',
								'after_title' => '</h4>',
							));
						}
					}
				}
			}
		}
	}
}