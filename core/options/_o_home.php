<?php
add_filter('option_tree_settings_args', 'tally_home_ot_options');
function tally_home_ot_options($custom_settings){
	$custom_settings['sections'][] = array( 'id' => 'home','title' => 'Home Page');
	
	if(file_exists(TALLY_CHILD_DRI . '/demo/hconfig.php')){
		$dri = TALLY_CHILD_DRI . '/demo/hconfig.php';
	}elseif(file_exists(TALLY_DRI . '/demo/hconfig.php')){
		$dri = TALLY_DRI . '/demo/hconfig.php';
	}
	
	include($dri);
	
	if(is_array($tally_hconfig)){
		foreach($tally_hconfig as $the_config){
			if(file_exists(TALLY_DRI . '/core/options/home/'.$the_config['id'].'.php')){
				include(TALLY_DRI . '/core/options/home/'.$the_config['id'].'.php');
			}
		}
	}
	
	return $custom_settings;
}