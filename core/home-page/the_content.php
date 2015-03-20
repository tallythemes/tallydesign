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
			echo '<div class="tally-home-section home-slideshow tally-flexslider-skin-1">';
				if($the_config['inner_div'] == true){ echo '<div class="tally-home-section-inner">'; }
				
					if($the_config['settings'] == true){
						
					}
				
					if($the_config['columns'] == true){ echo '<div class="col-holder">'; }
						if(is_array($the_config['blocks'])){
							foreach($the_config['blocks'] as $the_block){
								
								$the_prefix = $the_config['id'].'_'.$the_block['id'].'_';
								
								if($the_config['columns'] == true){ echo '<div class="col col_'.$the_block['column'].'">'; }
									if(file_exists(TALLY_DRI . '/core/home-page/blocks/'.$the_block['name'].'/'.$the_block['name'].'-content.php')){
										include(TALLY_DRI . '/core/home-page/blocks/'.$the_block['name'].'/'.$the_block['name'].'-content.php');
									}
								if($the_config['columns'] == true){ echo '</div>'; }
							}
						}
					if($the_config['columns'] == true){ echo '</div>'; }
				if($the_config['inner_div'] == true){ echo '</div>'; }
			echo '</div>';
		}
	}
}