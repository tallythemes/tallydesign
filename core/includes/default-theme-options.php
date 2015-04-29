<?php
/**
     * Default Theme Options loader
     *
     * @return    void
     *
     * @access    public
     * @since     0.8.6
-------------------------------------------------------*/
add_filter('tally_option_std', 'tally_option_std_filter');
function tally_option_std_filter($option){
	$dri = '';
	
	if(file_exists(TALLY_CHILD_DRI . '/demo/to-settings.php')){
		$dri = TALLY_CHILD_DRI . '/demo/to-settings.php';
	}elseif(file_exists(TALLY_DRI . '/demo/to-settings.php')){
		$dri = TALLY_DRI . '/demo/to-settings.php';
	}
		
	
	if(file_exists($dri)){
		
		include($dri);
		$default_options = $tally_config;
		
		if(is_array($default_options)){
			$option = $default_options;
		}
	}
	
	//print_r($default_options);
	
	return $option;	
}