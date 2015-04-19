<?php
if($the_config['columns'] == true){ echo '<div class="col col_'.tally_hp_option($the_prefix.'column', $the_block['column']).'">'; }
	if(tally_hp_option($the_prefix.'enable') == 'on'){
		if(file_exists(TALLY_DRI . '/core/home-page/blocks/'.$the_block['name'].'/'.$the_block['name'].'-content.php')){
			include(TALLY_DRI . '/core/home-page/blocks/'.$the_block['name'].'/'.$the_block['name'].'-content.php');
		}
	}
if($the_config['columns'] == true){ echo '</div>'; }