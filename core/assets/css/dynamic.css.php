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
#subheader .page_title{ color:<?php tally_option_color('subheader_title_color'); ?>; }
#subheader .page_subtitle{ color:<?php tally_option_color('subheader_subtitle_color'); ?>; }
#subheader .breadcrumbs span a{ color:<?php tally_option_color('subheader_breadcrumbs_color'); ?>; }
#subheader .breadcrumbs span.sep{ color:<?php tally_option_color('subheader_breadcrumbs_divider_color'); ?>; }
#subheader .breadcrumbs span{ color:<?php tally_option_color('subheader_breadcrumbs_active_color'); ?>; }
#subheader,
#subheader *{ border-color:<?php tally_option_color('subheader_border_color'); ?> !important; }
#subheader{ <?php tally_option_background('subheader_bg'); ?> }








/*=================================================================================
	Site Main
==================================================================================*/
#site-main{ color:<?php tally_option_color('color_text'); ?>; }
#site-main .metatext{ color:<?php tally_option_color('color_meta'); ?>; }
#site-main h1,
#site-main h2,
#site-main h3,
#site-main h4,
#site-main h5,
#site-main h6{ color:<?php tally_option_color('color_headings'); ?>; }
#site-main h1.subheadings,
#site-main h2.subheadings,
#site-main h3.subheadings,
#site-main h4.subheadings,
#site-main h5.subheadings,
#site-main h6.subheadings{ color:<?php tally_option_color('color_subheadings'); ?>; }
<?php tally_option_link('color_link', '#site-main a'); ?>
#site-main,
#site-main *{ border-color:<?php tally_option_color('color_border'); ?>; }
#site-main .border-alt{ border-color:<?php tally_option_color('color_border2'); ?>; }
#site-main .innerbg{ background-color:<?php tally_option_color('color_inner_bg'); ?>; }
#site-main { <?php tally_option_background('color_content_bg'); ?> }
body { <?php tally_option_background('site_background'); ?> }

#site-main .widget_recent_entries a,
#site-main .widget_categories a,
#site-main .widget_archive a,
#site-main .widget_recent_comments a{ color:<?php tally_option_color('color_text'); ?>; }

#site-main .widget_recent_entries li:hover,
#site-main .widget_categories li:hover,
#site-main .widget_archive li:hover,
#site-main .widget_recent_comments li:hover,
#site-main .widget_recent_entries li:hover a,
#site-main .widget_categories li:hover a,
#site-main .widget_archive li:hover a,
#site-main .widget_recent_comments li:hover a{ color:<?php tally_option_color('primary_color'); ?>; }







/*=================================================================================
	Footer
==================================================================================*/

/*	Footer Widgets
---------------------------------------------------------*/
#fwidget{ color:<?php tally_option_color('footer_w_text_color'); ?>; }
#fwidget h1,
#fwidget h2,
#fwidget h3,
#fwidget h4,
#fwidget h5,
#fwidget h6{ color:<?php tally_option_color('footer_w_heading_color'); ?>; }
<?php tally_option_link('footer_w_link_color', '#fwidget a'); ?>
#fwidget { border-color:<?php tally_option_color('footer_w_border_color'); ?>; }
#fwidget *{ border-color:<?php tally_option_color('footer_w_inner_border_color'); ?>; }
#fwidget .innerbg{ background-color:<?php tally_option_color('footer_w_inner_bg_color'); ?>; }
#fwidget { <?php tally_option_background('footer_w_bg'); ?> }



/*	Footer
---------------------------------------------------------*/
#footer{ color:<?php tally_option_color('footer_c_text_color'); ?>; }
#footer h1,
#footer h2,
#footer h3,
#footer h4,
#footer h5,
#footer h6{ color:<?php tally_option_color('footer_c_text_color'); ?>; }
<?php tally_option_link('footer_c_link_color', '#footer a'); ?>
#footer { border-color:<?php tally_option_color('footer_c_border_color'); ?>; }
#footer *{ border-color:<?php tally_option_color('footer_c_inner_border_color'); ?>; }
#footer { <?php tally_option_background('footer_c_bg'); ?> }




/*=================================================================================
	FlexSlider Skins
==================================================================================*/

	/*	Skin 1
	----------------------------------------------*/
    .tally-flexslider-skin-1 .wfs-control-nav li a:hover,
	.tally-flexslider-skin-1 .wfs-control-nav li a.wfs-active{ background-color:<?php tally_option_color('primary_color'); ?>; }




/*=================================================================================
	Button
==================================================================================*/
.tally-button.btn-color-accent{ border-color:<?php tally_option_color('primary_color'); ?> !important; background-color:<?php tally_option_color('primary_color'); ?>; }
.tally-button.btn-color-accent:hover{ background-color:<?php tally_option_color('primary_color', '0.24'); ?>;}




/*=================================================================================
	Home Page
==================================================================================*/
<?php include(TALLY_DRI . '/core/home-page/section/section-css.php'); ?>
<?php include(TALLY_DRI . '/core/home-page/blocks/blocks-css.php'); ?>