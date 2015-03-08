<?php
header("Content-type: text/css; charset: UTF-8");
?>

/*=================================================================================
	Header
==================================================================================*/

/*	Top Bar
---------------------------------------------------------*/
#topbar{ color:<?php tally_option_color('header_topbar_text_color'); ?>; }
<?php tally_option_link('header_topbar_link_color', '#topbar a'); ?>
#topbar,
#topbar *{ border-color:<?php tally_option_color('header_topbar_border_color'); ?> !important; }
#topbar{ <?php tally_option_background('header_topbar_bg'); ?> }



/*	Header
---------------------------------------------------------*/
#header,
#header #logo h1 a{ color:<?php tally_option_color('header_text_color'); ?>; }
<?php tally_option_link('header_link_color', '#header a'); ?>
#header,
#header *{ border-color:<?php tally_option_color('header_border_color'); ?> !important; }
#header{ <?php tally_option_background('header_bg'); ?> }




/*	Menu
---------------------------------------------------------*/
#primary-menu ul li a{ 
	color:<?php tally_option_color('nav_text_color'); ?>; 
    border-color:<?php tally_option_color('nav_border_color'); ?> !important; 
	background-color:<?php tally_option_color('nav_bg_color'); ?>; 
}
#primary-menu ul li a:hover{ 
	color:<?php tally_option_color('nav_text_hover_color'); ?>;
    border-color:<?php tally_option_color('nav_border_hover_color'); ?> !important; 
	background-color:<?php tally_option_color('nav_bg_hover_color'); ?>; 
}
#primary-menu ul li ul li a{ 
	color:<?php tally_option_color('nav_sub_text_color'); ?>; 
    border-color:<?php tally_option_color('nav_sub_border_color'); ?> !important; 
	background-color:<?php tally_option_color('nav_sub_bg_color'); ?>; 
}
#primary-menu ul li ul li a:hover{ 
	color:<?php tally_option_color('nav_sub_text_hover_color'); ?>;
    border-color:<?php tally_option_color('nav_sub_border_hover_color'); ?> !important; 
	background-color:<?php tally_option_color('nav_sub_bg_hover_color'); ?>; 
}





/*	Elements
---------------------------------------------------------*/

/*--- Login Box | Skin-1 ---*/
#header .tally-header-loginBox.he-skin1 .tally-logout,
#header .tally-header-loginBox.he-skin1 .tally-login{ border-color:<?php tally_option_color('primary_color'); ?> !important; }







/*=================================================================================
	Sub-Header
==================================================================================*/










/*=================================================================================
	Site Main
==================================================================================*/










/*=================================================================================
	Footer
==================================================================================*/

/*	Footer Widgets
---------------------------------------------------------*/



/*	Footer
---------------------------------------------------------*/