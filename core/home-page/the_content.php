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
		if(file_exists(TALLY_DRI . '/core/contents/front-page/'.$the_config['id'].'.php')){
			include(TALLY_DRI . '/core/contents/front-page/'.$the_config['id'].'.php');
		}
	}
}