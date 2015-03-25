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
						if(file_exists(TALLY_DRI . '/core/home-page/blocks/'.$the_block['name'].'/'.$the_block['name'].'-css.php')){
							include(TALLY_DRI . '/core/home-page/blocks/'.$the_block['name'].'/'.$the_block['name'].'-css.php');
						}
					}
				}
			}
		}
	}
}