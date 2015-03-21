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
			echo '<div class="tally-home-section tally-hps-'.$the_config['id'].' '.$the_config['div_class'].' '.tally_hp_option($section_prefix.'css_classs').'" id="'.tally_hp_option($section_prefix.'css_id').'">';
				if($the_config['inner_div'] == true){ echo '<div class="tally-home-section-inner">'; }
				
					if($the_config['settings'] == true){
						if((tally_hp_option($section_prefix.'title') != '') || tally_hp_option($section_prefix.'description') != ''){
							echo '<div class="tally-home-section-header text-align-'.tally_hp_option($section_prefix.'align').'">';
								if(tally_hp_option($section_prefix.'title') != ''){
									echo '<h2>'.tally_hp_option($section_prefix.'title').'</h2>';
									echo '<div class="thsh-des">'.tally_hp_option($section_prefix.'description').'</div>';
								}
							echo '</div>';
						}
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
				echo '<div class="clear"></div>';
			echo '</div>';
		}
	}
}