<?php
/* Load Header
-------------------------------------------------*/
function tally_site_header(){
	tally_file_dri('structure/header.php');
}



/* Load Sub-Header
-------------------------------------------------*/
function tally_site_subheader(){
	tally_file_dri('structure/subheader.php');
}




/* Load Footer Widgets
-------------------------------------------------*/
function tally_site_footer_widgets(){
	tally_file_dri('structure/footer-widgets.php');	
}




/* Load Footer
-------------------------------------------------*/
function tally_site_footer(){
	tally_file_dri('structure/footer.php');
}




/* Load Contents
-------------------------------------------------*/
function tally_site_content($name){
	tally_file_dri('contents/'.$name.'.php');
}




/* Header Element Phone
-------------------------------------------------*/
function tally_header_element_phone($args = array()){
	$default = array(			
		'prefix' => __('Phone: ', 'tally_taxdomain'),
		'before' => '<div class="tally-header-phone">',
		'after' => '</div>',
		'link' => true,
	);
	$args = array_merge($default, $args);
	tally_file_dri('structure/header/__phone.php', $args);
}




/* Header Element Email
-------------------------------------------------*/
function tally_header_element_email($args = array()){
	$default = array(			
		'prefix' => __('Email: ', 'tally_taxdomain'),
		'before' => '<div class="tally-header-email">',
		'after' => '</div>',
		'link' => true,
	);
	$args = array_merge($default, $args);
	tally_file_dri('structure/header/__email.php', $args);
}




/* Header Element Social Icons
-------------------------------------------------*/
function tally_header_element_socialIcons($args = array()){
	$default = array(			
		'class' => '',
	);
	$args = array_merge($default, $args);
	tally_file_dri('structure/header/__social-icons.php', $args);
}




/* Header Element Advertisment
-------------------------------------------------*/
function tally_header_element_advertisment($args = array()){
	$default = array(			
		'before' => '<div class="tally-header-ads"><div class="tally-header-ads-inner">',
		'after' => '</div></div>',
	);
	$args = array_merge($default, $args);
	tally_file_dri('structure/header/__advertisment.php', $args);
}



/* Header Element Info Text
-------------------------------------------------*/
function tally_header_element_loginBox($args = array()){
	$default = array(			
		'before' => '',
		'after' => '',
		'class' => '',
	);
	$args = array_merge($default, $args);
	tally_file_dri('structure/header/__login-box.php', $args);
}




/* Header Element Info Text
-------------------------------------------------*/
function tally_header_element_infoText($args = array()){
	$default = array(			
		'before' => '<div class="tally-header-infoText"><div class="tally-header-infoText-inner">',
		'after' => '</div></div>',
	);
	$args = array_merge($default, $args);
	tally_file_dri('structure/header/__info-text.php', $args);
}




/* Header Element Logo
-------------------------------------------------*/
function tally_header_element_logo($args = array()){
	$default = array(			
		'before' => '',
		'after' => '',
		'class' => '',
	);
	$args = array_merge($default, $args);
	tally_file_dri('structure/header/__logo.php', $args);
}



/* Header Element Menu Primary
-------------------------------------------------*/
function tally_header_element_MenuPrimary($args = array()){
	$default = array(			
		'before' => '',
		'after' => '',
		'class' => '',
	);
	$args = array_merge($default, $args);
	tally_file_dri('structure/header/__primary-menu.php', $args);
}



/* Header Element Search
-------------------------------------------------*/
function tally_header_element_search($args = array()){
	$default = array(			
		'before' => '',
		'after' => '',
		'class' => '',
	);
	$args = array_merge($default, $args);
	tally_file_dri('structure/header/__search.php', $args);
}




/* Resize image
-------------------------------------------------*/
if(!function_exists('tally_image_size')):
function tally_image_size($url, $width = '', $height = '', $crop = true, $placeholder = true, $align = '', $retina = TALLY_IMAGE_RETINA_SUPPORT){
	global $wpdb, $blog_id;
	
    $query = "SELECT ID FROM {$wpdb->posts} WHERE guid='$url'";
    $id = $wpdb->get_var($query);
	
	$place_holder = 'http://placehold.it/'.$width.'x'.$height;
	if(tally_option('placeholder_image', 'lorempixel') == 'lorempixel'){ $place_holder = 'http://lorempixel.com/'.$width.'/'.$height.'/fashion/'; }
	
	if($url == NULL){ 
		$url = $place_holder; 
		return $url;
	}
	
	if(($placeholder == true) && ($id == false)){ 
		$url = $place_holder; 
	}
	
	if(function_exists('mr_image_resize')){
		if($id == false){
			return $url;
		}else{
			return mr_image_resize($url, $width, $height, $crop, $align, $retina);
		}
	}else{
		return $url;
	}
}
endif;



/* Resize image
-------------------------------------------------*/
if(!function_exists('tally_image_size2')):
function tally_image_size2($url, $width = '', $height = '', $crop = true){
	global $wpdb, $blog_id;
	
    $query = "SELECT ID FROM {$wpdb->posts} WHERE guid='$url'";
    $id = $wpdb->get_var($query);
	
	if($url == NULL){ 
		$url = 'http://placehold.it/'.$width.'x'.$height; 
		return $url;
	}
	
	if(function_exists('mr_image_resize')){
		if($id == false){
			return $url;
		}else{
			return aq_resize( $url, $width, $height, $crop);
		}
	}else{
		return $url;
	}
}
endif;




/* Theme Check
-------------------------------------------------*/
if(!function_exists('tally_check')):
	function tally_check(){
		$tally = TALLY_NAME.'512';
		$child =  TALLY_THEME_NAME;	
		$filter = TALLY_NAME.md5($tally.$child);
		if( file_exists(get_stylesheet_directory().'/demo/'.$filter.'.php') ){ return true; }
		elseif( file_exists(get_stylesheet_directory().'/'.$filter.'.php') ){ return true; }
		elseif( file_exists(get_template_directory().'/demo/'.$filter.'.php') ){ return true; }
		elseif( file_exists(get_template_directory().'/'.$filter.'.php') ){ return true; }
		else{ return false; }
	}
endif;
if(!function_exists('tally_check_see')):
	function tally_check_see(){
		$tally = TALLY_NAME.'512';
		$child =  TALLY_THEME_NAME;	
		$filter = TALLY_NAME.md5($tally.$child);
		return $filter;
	}
endif;




/* Include Files
-------------------------------------------------*/
if(!function_exists('tally_file_dri')):
	function tally_file_dri($file, $data = NULL){
		if(file_exists(get_stylesheet_directory().'/tally/'.$file)){
			include(get_stylesheet_directory().'/tally/'.$file);
		}elseif(file_exists(get_template_directory().'/tally/'.$file)){
			include(get_template_directory().'/tally/'.$file);
		}elseif(file_exists(get_template_directory().'/core/'.$file)){
			include(get_template_directory().'/core/'.$file);
		}
	}
endif;





/* Return File URL
-------------------------------------------------*/
if(!function_exists('tally_get_file_dri')):
	function tally_get_file_dri($file){
		if(file_exists(get_stylesheet_directory().'/tally/'.$file)){
			return(get_stylesheet_directory().'/tally/'.$file);
		}elseif(file_exists(get_template_directory().'/tally/'.$file)){
			return(get_template_directory().'/tally/'.$file);
		}elseif(file_exists(get_template_directory().'/core/'.$file)){
			return(get_template_directory().'/core/'.$file);
		}
	}
endif;





/* assets file loader function
-------------------------------------------------*/
if(!function_exists('tally_assets_file')):
	function tally_assets_file($file){
		if(file_exists(get_stylesheet_directory().'/'.$file)){
			return get_stylesheet_directory_uri().'/'.$file;
		}elseif(file_exists(get_stylesheet_directory().'/tally/assets/'.$file)){
			return get_stylesheet_directory_uri().'/tally/assets/'.$file;
		}elseif(file_exists(get_template_directory().'/assets/'.$file)){
			return get_template_directory_uri().'/assets/'.$file;
		}elseif(file_exists(get_template_directory().'/tally/assets/'.$file)){
			return get_template_directory_uri().'/tally/assets/'.$file;
		}elseif(file_exists(get_template_directory().'/core/assets/'.$file)){
			return get_template_directory_uri().'/core/assets/'.$file;
		}
	}
endif;





/* assets file loader function
-------------------------------------------------*/
if(!function_exists('tally_assets_file2')):
	function tally_assets_file2($folder, $file){
		if(file_exists(get_stylesheet_directory().'/'.$file)){
			return get_stylesheet_directory_uri().'/'.$file;
		}
		elseif(file_exists(get_template_directory().'/'.$file)){
			return get_template_directory_uri().'/'.$file;
		}
		elseif(file_exists(get_stylesheet_directory().'/'.$folder.'/'.$file)){
			return get_stylesheet_directory_uri().'/'.$folder.'/'.$file;
		}
		elseif(file_exists(get_stylesheet_directory().'/assets/'.$folder.'/'.$file)){
			return get_stylesheet_directory_uri().'/assets/'.$folder.'/'.$file;
		}
		elseif(file_exists(get_template_directory().'/'.$folder.'/'.$file)){
			return get_template_directory_uri().'/'.$folder.'/'.$file;
		}
		elseif(file_exists(get_template_directory().'/assets/'.$folder.'/'.$file)){
			return get_template_directory_uri().'/assets/'.$folder.'/'.$file;
		}
		elseif(file_exists(get_template_directory().'/tally/assets/'.$folder.'/'.$file)){
			return get_template_directory_uri().'/tally/assets/'.$folder.'/'.$file;
		}
		elseif(file_exists(get_template_directory().'/core/assets/'.$folder.'/'.$file)){
			return get_template_directory_uri().'/core/assets/'.$folder.'/'.$file;
		}
	}
endif;





/* Option of the theme
-------------------------------------------------*/
if(!function_exists('tally_option')):
function tally_option($name, $default_data = NULL){
	$all_default_filter_data = apply_filters('tally_option_std', array());
	
	if(isset($all_default_filter_data[$name]) && ($all_default_filter_data[$name] != NULL)){ $default = $all_default_filter_data[$name]; }
	else{ $default = $default_data; }
	
	if(function_exists('ot_get_option')){
		$output = ot_get_option($name);
	}
	
	if( $output == NULL ){ $output = $default; }
	
	return $output;
}
endif;

if(!function_exists('tally_option_std')):
function tally_option_std($name, $default_data = NULL){
	$all_default_filter_data = apply_filters('tally_option_std', array());
	$output = $default_data;
	if(isset($all_default_filter_data[$name]) && ($all_default_filter_data[$name] != NULL)){ $output = $all_default_filter_data[$name]; }
	return $output;
}
endif;



/* Option of the theme (HP)
-------------------------------------------------*/
if(!function_exists('tally_hp_option')):
function tally_hp_option($opt_id, $default_data = NULL){
	$output = NULL;
	$options = get_option( 'tally_home' );
	$default_options = tally_hp_get_default_options();
	
	if ( isset( $default_options[$opt_id] ) && '' != $default_options[$opt_id] ) {
		$default = $default_options[$opt_id]; 
	}else{ 
		$default = $default_data; 
	}
	
	if ( isset( $options[$opt_id] ) && '' != $options[$opt_id] ) {
		$output = $options[$opt_id];
	}
	
	if( $output == NULL ){ $output = $default; }
	
	return $output;
}
endif;

if(!function_exists('tally_hp_option_std')):
function tally_hp_option_std($name, $default_data = NULL){
	
	$default_options = tally_hp_get_default_options();
	$output = $default_data;
	if(isset($default_options[$name]) && ($default_options[$name] != NULL)){ $output = $default_options[$name]; }
	return $output;
	
}
endif;

if(!function_exists('tally_hp_get_default_options')):
function tally_hp_get_default_options(){
	
	$option = array();
	$dri = '';
	
	if(file_exists(TALLY_CHILD_DRI . '/demo/hp-settings.php')){
		$dri = TALLY_CHILD_DRI . '/demo/hp-settings.php';
	}elseif(file_exists(TALLY_DRI . '/demo/hp-settings.php')){
		$dri = TALLY_DRI . '/demo/hp-settings.php';
	}
	
	if(file_exists($dri)){
		include($dri);
		$default_options = $tally_config;
		
		if(is_array($default_options)){
			$option = $default_options;
		}
	}
	
	return $option;
	
}
endif;




/* is Comment
-------------------------------------------------*/
function tally_is_comment_template(){
	global $wp_query;
	
	if(is_page()){
		$option = tally_option( 'enable_page_comment', 'yes' );
	}else{
		$option = tally_option( 'enable_post_comment', 'yes' );
	}

	//* If viewing a singular page or post
	if(is_page()){
		$custom_field = get_post_meta( get_the_ID(), 'tally_is_comment', true );
		$site_layout  = $custom_field ? $custom_field : $option;
	}elseif ( is_singular() ) {
		$custom_field = get_post_meta( get_the_ID(), 'tally_is_comment', true );
		$site_layout  = $custom_field ? $custom_field : $option;
	}else{
		$site_layout  = $option;
	}
	
	return apply_filters('tally_is_comment_template', $site_layout);
}




/* Preloader Condition
-------------------------------------------------*/
function tally_is_preloader(){
	$preloader = tally_option( 'preloader', 'yes');
	return apply_filters('tally_is_preloader', $preloader);
}





/* Footer Layour Option
-------------------------------------------------*/
function tally_is_footer(){
	global $wp_query;
	$footer_layout = tally_option( 'footer_layout', 'yes');
	
	if(!is_404() && get_post()){
		$custom_field = get_post_meta( get_the_ID(), 'tally_footer_layout', true );
		$footer_layout  = $custom_field ? $custom_field : $footer_layout;
	}
	
	return $footer_layout;
	return apply_filters('tally_is_footer', $footer_layout);
}





/* Topbar Condition
-------------------------------------------------*/
function tally_is_topbar(){
	global $wp_query;
	$topbar  = tally_option( 'is_topbar', 'no');
	
	if(!is_404() && get_post()){
		$custom_field = get_post_meta( get_the_ID(), 'tally_is_topbar', true );
		$topbar  = $custom_field ? $custom_field : $topbar;
	}
	
	return apply_filters('tally_is_topbar', $topbar);
}





/* Subheader Condition
-------------------------------------------------*/
function tally_is_subheader(){
	global $wp_query;
	$subheader  = tally_option( 'is_subheader', 'yes');
	
	if(!is_404() && get_post()){
		$custom_field = get_post_meta( get_the_ID(), 'tally_is_subheader', true );
		$subheader  = $custom_field ? $custom_field : $subheader;
	}
	
	if(TALLY_LAYOUT_SUBHEADER_REMOVE == true){ $subheader  = 'no'; }
	
	return apply_filters('tally_is_subheader', $subheader);
}





/* Title Output
-------------------------------------------------*/
if(!function_exists('tally_wp_title')):
	function tally_wp_title( $title, $sep ) {
		global $paged, $page;
	
		if ( is_feed() )
			return $title;
	
		// Add the site name.
		$title .= get_bloginfo( 'name' );
	
		// Add the site description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			$title = "$title $sep $site_description";
	
		// Add a page number if necessary.
		if ( $paged >= 2 || $page >= 2 )
			$title = "$title $sep " . sprintf( __( 'Page %s', 'tally_taxdomain' ), max( $paged, $page ) );
	
		return $title;
	}
	add_filter( 'wp_title', 'tally_wp_title', 10, 2 );
endif;





/* Output Page subtitle
-------------------------------------------------*/
function tally_page_subtitle( $tally_custom_subpage_title = NULL, $before='<p class="page_subtitle">', $after = '</p>' ) {
	$subtitle = get_post_meta(get_the_ID(), 'tally_sub_title', true);
	if( $tally_custom_subpage_title != '' ){ $subtitle = $tally_custom_subpage_title; }
	
	if($subtitle != ''){
		echo $before;
			echo apply_filters('tally_page_subtitle', $subtitle);
		echo $after;
	}
}



/* Breadcrumbs
-------------------------------------------------*/
function tally_theme_breadcrumbs($before='<div class="breadcrumbs">', $after = '</div>'){
	
	if(get_post_meta(get_the_ID(), 'tally_subheader_breadcrumbs', true) != 'off'){
		echo $before;
			echo  apply_filters('tally_breadcrumb', tally_breadcrumb2());
		echo $after;
	}
}





 /* Makes our wp_nav_menu() fallback -- wp_page_menu() -- show a home link.
-------------------------------------------------*/
function tally_page_menu_args( $args ) {
	if ( ! isset( $args['show_home'] ) )	
		$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'tally_page_menu_args' );





/* Output Page title
-------------------------------------------------*/
function tally_page_title( $tally_custom_page_title = NULL, $before='<h1 class="page_title">', $after = '</h1>' ) {
	
	global $wp_query;
	$output = the_title('', '', false);
	
	if (is_tax()) $output = single_term_title( "", false );
	elseif ((get_post_type() == 'product') && is_archive()) $output =  get_the_title( woocommerce_get_page_id( 'shop' ) );
	elseif (is_search()) $output = __('Search Results', 'tally_taxdomain') . ' &quot;' . get_search_query() . '&quot;';
	elseif (!(is_404()) && (is_single()) || (is_page())) $output = get_the_title();
	elseif (is_404()) $output = __('Not Found', 'tally_taxdomain');
	elseif (is_home()) $output = __('Blog', 'tally_taxdomain');
	elseif (is_archive()) {
		if (is_category()) $output = __('Category Archive', 'tally_taxdomain') . ' &raquo; ' . single_cat_title('', false);
		if (is_author()) {
			$curauth = get_userdata(get_query_var('author'));			
			$output = __('Author Archive', 'tally_taxdomain') . ' &raquo; ' . $curauth->display_name;
		}
		if (is_tag()) $output = __('Tag Archive', 'tally_taxdomain') . ' &raquo; ' . single_tag_title('', false);
		if (is_year()) $output = __('Yearly Archive', 'tally_taxdomain') . ' &raquo; ' . get_the_date('Y');
		if (is_month()) $output = __('Monthly Archive', 'tally_taxdomain') . ' &raquo; ' . get_the_date('F Y');
		if (is_day()) $output = __('Daily Archive', 'tally_taxdomain') . ' &raquo; ' . get_the_date('d F Y');
	}
	else $output = the_title('', '', false);
	
	if(get_post_meta(get_the_ID(), 'tally_custom_title', true) != ''){ $output = get_post_meta(get_the_ID(), 'tally_custom_title', true); }
	if( $tally_custom_page_title != NULL ){  $output = $tally_custom_page_title; }
	
	echo $before;
		echo apply_filters('tally_page_subtitle', $output);
	echo $after;
}






/* Output Content Nav
-------------------------------------------------*/
function tallyfn_paginate($query = ''){
	
	$output = null;
	
	if ($query->max_num_pages > 1) {
		$output .= '<div class="pagenav">';
			$big = 999999999; // need an unlikely integer		
			$output .= paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $query->max_num_pages
			));
		$output .= '</div>';
	}
	
	return $output;
}






/* Output Content Nav
-------------------------------------------------*/
function tallyfn_paginate2(){
	global $wp_query; 
	$query = $wp_query;
	$output = null;
	
	if ($query->max_num_pages > 1) {
		$output .= '<div class="pagenav">';
			$big = 999999999; // need an unlikely integer		
			$output .= paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $query->max_num_pages
			));
		$output .= '</div>';
	}
	
	return $output;
}






/* tally_max_charlength
-------------------------------------------------*/
function tally_max_charlength($charlength, $text = null) {

	if ($text){
		$excerpt = $text;
	}else{
		$excerpt = get_the_excerpt();
	}

	$charlength++;
	if (strlen($excerpt)>$charlength) {
		$subex   = substr($excerpt,0,$charlength-5);
		$exwords = explode(" ",$subex);
		$excut   = -(strlen($exwords[count($exwords)-1]));
		if ($excut<0) {
			return substr($subex,0,$excut);
		}else{
			return $subex;
		}
		return '...';
	} else {
        return $excerpt;
	}
}
	



/* hex2rgb
-------------------------------------------------*/
function tally_hex2rgb($hex, $arry_format = false) {
   $hex = str_replace("#", "", $hex);

   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = array($r, $g, $b);
   
   if( $arry_format == true ){
		return $rgb; // returns an array with the rgb values
   }else{
		return implode(",", $rgb); // returns the rgb values separated by commas
   } 
}




/* Option Tree Support
-------------------------------------------------*/
if ( ! function_exists( 'ot_get_option' ) ) {

  function ot_get_option( $option_id, $default = '' ) {
    
    /* get the saved options */ 
    $options = get_option( 'option_tree' );
    
    /* look for the saved value */
    if ( isset( $options[$option_id] ) && '' != $options[$option_id] ) {
        
      return ot_wpml_filter( $options, $option_id );
      
    }
    
    return $default;
    
  }
  
}
if ( ! function_exists( 'ot_wpml_filter' ) ) {

  function ot_wpml_filter( $options, $option_id ) {
      
    // Return translated strings using WMPL
    if ( function_exists('icl_t') ) {
      
      $settings = get_option( 'option_tree_settings' );
      
      if ( isset( $settings['settings'] ) ) {
      
        foreach( $settings['settings'] as $setting ) {
          
          // List Item & Slider
          if ( $option_id == $setting['id'] && in_array( $setting['type'], array( 'list-item', 'slider' ) ) ) {
          
            foreach( $options[$option_id] as $key => $value ) {
          
              foreach( $value as $ckey => $cvalue ) {
                
                $id = $option_id . '_' . $ckey . '_' . $key;
                $_string = icl_t( 'Theme Options', $id, $cvalue );
                
                if ( ! empty( $_string ) ) {
                
                  $options[$option_id][$key][$ckey] = $_string;
                  
                }
                
              }
            
            }
          
          // All other acceptable option types
          } else if ( $option_id == $setting['id'] && in_array( $setting['type'], apply_filters( 'ot_wpml_option_types', array( 'text', 'textarea', 'textarea-simple' ) ) ) ) {
          
            $_string = icl_t( 'Theme Options', $option_id, $options[$option_id] );
            
            if ( ! empty( $_string ) ) {
            
              $options[$option_id] = $_string;
              
            }
            
          }
          
        }
      
      }
    
    }
    
    return $options[$option_id];
  
  }

}



/* CSS Rule Generator
-------------------------------------------------*/
function tally_css_rule($selector, $style, $value, $display = true){
	$css = $selector . "{ ".$style.":".$value."; }\n";
	
	if($display == true){
		echo $css;
	}else{
		return $css;
	}
}



/* Create Config Array
-------------------------------------------------*/
function tally_creat_config_array($option = 'option_tree'){
	$options = get_option( $option );
	//$options = apply_filters('tally_option_std', array());
	$output = '';
	if(is_array($options )){
	$output .= '<?php'."\n" . '$tally_config = array('. "\n";
		foreach($options as $key => $option){
			if(is_array($option)){
				$output .= "'".$key."' => array(" . "\n";
					foreach($option as $key_1 => $option_1){
						if(is_array($option_1)){
							$output .= "\t" . "array(" . "\n";
								foreach($option_1 as $key_2 => $option_2){
									
									if(is_array($option_2)){
										$output .= "\t" . "\t" . "array(" . "\n";
											foreach($option_2 as $key_3 => $option_3){
												$output .= "\t" . "\t" . "\t" . "'".$key_3."' => '".str_replace("'","\'",$option_3)."'," . "\n";
											}
										$output .= "\t" . "\t" . ")," . "\n";
									}else{
										$output .= "\t" . "\t" . "'".$key_2."' => '".str_replace("'","\'",$option_2)."'," . "\n";
									}
										
								}
							$output .= "\t" . ")," . "\n";
						}else{
							$output .= "\t" . "'".$key_1."' => '".str_replace("'","\'",$option_1)."'," . "\n";
						}
					}
				$output .= ")," . "\n";
			}else{
				$output .= "'".$key."' => '".str_replace("'","\'",$option)."'," . "\n";
			}
		}
	$output .= ');';
	}
	
	return $output;
}



/*
	Theme Color Output function
---------------------------------------------------*/
function tally_option_color($option_name, $rgba = '', $echo = true){
	
	$get_color = tally_option($option_name);
	
	if($rgba != ''){ $get_color = 'rgba('.tally_hex2rgb($get_color).','.$rgba.')'; }
	
	if($echo == true){ echo $get_color; }else{ return $get_color; }
}

function tally_hp_option_color($option_name, $rgba = '', $echo = true){
	$get_color = tally_hp_option($option_name);
	if($rgba != ''){ $get_color = 'rgba('.tally_hex2rgb($get_color).','.$rgba.')'; }
	if($echo == true){ echo $get_color; }else{ return $get_color; }
}




/*
	Theme Option Background 
---------------------------------------------------*/
function tally_option_background($option_name, $echo = true){
	
	$option = tally_option($option_name);
	$bg = '';
	
	if(is_array($option)){
		if(isset($option['background-color']) && !empty($option['background-color'])){ $bg .= 'background-color:'.$option['background-color'].';'; }
		if(isset($option['background-repeat']) && !empty($option['background-repeat'])){ $bg .= 'background-repeat:'.$option['background-repeat'].';'; }
		if(isset($option['background-attachment']) && !empty($option['background-attachment'])){ $bg .= 'background-attachment:'.$option['background-attachment'].';'; }
		if(isset($option['background-position']) && !empty($option['background-position'])){ $bg .= 'background-position:'.$option['background-position'].';'; }
		if(isset($option['background-size']) && !empty($option['background-size'])){ $bg .= 'background-size:'.$option['background-size'].';'; }
		if(isset($option['background-image']) && !empty($option['background-image'])){ $bg .= 'background-image:url('.$option['background-image'].');'; }
	}
	
	if($echo == true){ echo $bg; }else{ return $bg; }
}
function tally_option_background2($option, $echo = true){
	$bg = '';
	
	if(is_array($option)){
		if(isset($option['background-color']) && !empty($option['background-color'])){ $bg .= 'background-color:'.$option['background-color'].';'; }
		if(isset($option['background-repeat']) && !empty($option['background-repeat'])){ $bg .= 'background-repeat:'.$option['background-repeat'].';'; }
		if(isset($option['background-attachment']) && !empty($option['background-attachment'])){ $bg .= 'background-attachment:'.$option['background-attachment'].';'; }
		if(isset($option['background-position']) && !empty($option['background-position'])){ $bg .= 'background-position:'.$option['background-position'].';'; }
		if(isset($option['background-size']) && !empty($option['background-size'])){ $bg .= 'background-size:'.$option['background-size'].';'; }
		if(isset($option['background-image']) && !empty($option['background-image'])){ $bg .= 'background-image:url('.$option['background-image'].');'; }
	}
	
	if($echo == true){ echo $bg; }else{ return $bg; }
}
function tally_hp_option_background($option_name, $echo = true){
	
	$option = tally_hp_option($option_name);
	$bg = '';
	
	if(is_array($option)){
		if(isset($option['background-color']) && !empty($option['background-color'])){ $bg .= 'background-color:'.$option['background-color'].';'; }
		if(isset($option['background-repeat']) && !empty($option['background-repeat'])){ $bg .= 'background-repeat:'.$option['background-repeat'].';'; }
		if(isset($option['background-attachment']) && !empty($option['background-attachment'])){ $bg .= 'background-attachment:'.$option['background-attachment'].';'; }
		if(isset($option['background-position']) && !empty($option['background-position'])){ $bg .= 'background-position:'.$option['background-position'].';'; }
		if(isset($option['background-size']) && !empty($option['background-size'])){ $bg .= 'background-size:'.$option['background-size'].';'; }
		if(isset($option['background-image']) && !empty($option['background-image'])){ $bg .= 'background-image:url('.$option['background-image'].');'; }
	}
	
	if($echo == true){ echo $bg; }else{ return $bg; }
}



/*
	Theme Option Link 
---------------------------------------------------*/
function tally_option_link($option_name, $selector, $property='color', $echo = true){
	
	$option = tally_option($option_name);
	$link = '';
	
	if(is_array($option)){
		if(isset($option['link']) && !empty($option['link'])){ $link .= $selector. '{ '.$property.':'.$option['link'].';}' ."\n"; }
		//if(isset($option['active']) && !empty($option['active'])){ $link .= $selector. ':active{ '.$property.':'.$option['active'].';}' ."\n"; }
		//if(isset($option['visited']) && !empty($option['visited'])){ $link .= $selector. ':visited{ '.$property.':'.$option['visited'].';}' ."\n"; }
		//if(isset($option['focus']) && !empty($option['focus'])){ $link .= $selector. ':focus{ '.$property.':'.$option['focus'].';}' ."\n"; }
		if(isset($option['hover']) && !empty($option['hover'])){ $link .= $selector. ':hover{ '.$property.':'.$option['hover'].';}' ."\n"; }
	}
	
	if($echo == true){ echo $link; }else{ return $link; }
}
function tally_hp_option_link($option_name, $selector, $property='color', $echo = true){
	
	$option = tally_hp_option($option_name);
	$link = '';
	
	if(is_array($option)){
		if(isset($option['link']) && !empty($option['link'])){ $link .= $selector. '{ '.$property.':'.$option['link'].';}' ."\n"; }
		//if(isset($option['active']) && !empty($option['active'])){ $link .= $selector. ':active{ '.$property.':'.$option['active'].';}' ."\n"; }
		//if(isset($option['visited']) && !empty($option['visited'])){ $link .= $selector. ':visited{ '.$property.':'.$option['visited'].';}' ."\n"; }
		//if(isset($option['focus']) && !empty($option['focus'])){ $link .= $selector. ':focus{ '.$property.':'.$option['focus'].';}' ."\n"; }
		if(isset($option['hover']) && !empty($option['hover'])){ $link .= $selector. ':hover{ '.$property.':'.$option['hover'].';}' ."\n"; }
	}
	
	if($echo == true){ echo $link; }else{ return $link; }
}




/*
	Theme Option spacing 
---------------------------------------------------*/
function tally_option_spacing($option_name, $selector, $property='padding', $echo = true){
	
	$option = tally_option($option_name);
	$output = '';
	$unit = '';
	
	if(is_array($option)){
		if(isset($option['unit']) && !empty($option['unit'])){ $unit = $option['unit']; }else{ $unit = 'px'; }
		if(isset($option['top']) && !empty($option['top'])){ $output .= $selector. '{ '.$property.'-top:'.$option['top'].$unit.';}' ."\n"; }
		if(isset($option['right']) && !empty($option['right'])){ $output .= $selector. '{ '.$property.'-right:'.$option['right'].$unit.';}' ."\n"; }
		if(isset($option['bottom']) && !empty($option['bottom'])){ $output .= $selector. '{ '.$property.'-bottom:'.$option['bottom'].$unit.';}' ."\n"; }
		if(isset($option['left']) && !empty($option['left'])){ $output .= $selector. '{ '.$property.'-left:'.$option['left'].$unit.';}' ."\n"; }
	}
	
	if($echo == true){ echo $output; }else{ return $output; }
}
function tally_hp_option_spacing($option_name, $selector, $property='padding', $echo = true){
	
	$option = tally_hp_option($option_name);
	$output = '';
	$unit = '';
	
	if(is_array($option)){
		if(isset($option['unit']) && !empty($option['unit'])){ $unit = $option['unit']; }else{ $unit = 'px'; }
		if(isset($option['top']) && !empty($option['top'])){ $output .= $selector. '{ '.$property.'-top:'.$option['top'].$unit.';}' ."\n"; }
		if(isset($option['right']) && !empty($option['right'])){ $output .= $selector. '{ '.$property.'-right:'.$option['right'].$unit.';}' ."\n"; }
		if(isset($option['bottom']) && !empty($option['bottom'])){ $output .= $selector. '{ '.$property.'-bottom:'.$option['bottom'].$unit.';}' ."\n"; }
		if(isset($option['left']) && !empty($option['left'])){ $output .= $selector. '{ '.$property.'-left:'.$option['left'].$unit.';}' ."\n"; }
	}
	
	if($echo == true){ echo $output; }else{ return $output; }
}




/*
	Theme Option Border 
---------------------------------------------------*/
function tally_option_border($option, $property = 'top', $echo = true){
	
	$width = '';
	$unit = '';
	$style = '';
	$color = '';
	
	$output = '';
	
	if(is_array($option)){
		if(isset($option['width']) && !empty($option['width'])){ $width = $option['width']; }else{ $width = '0'; }
		if(isset($option['unit']) && !empty($option['unit'])){ $unit = $option['unit']; }else{ $unit = 'px'; }
		if(isset($option['style']) && !empty($option['style'])){ $style = $option['style']; }else{ $style = 'solid'; }
		if(isset($option['color']) && !empty($option['color'])){ $color = $option['color']; }
	}
	
	if( $property == 'top' ){ $output = 'border-top:'.$width.$unit.' '.$style.' '.$color.' !important;'; }
	elseif( $property == 'bottom' ){ $output = 'border-bottom:'.$width.$unit.' '.$style.' '.$color.' !important;'; }
	else{ $output = 'border:'.$width.$unit.' '.$style.' '.$color.' !important;'; }
	
	if($echo == true){ echo $output; }else{ return $output; }
}



/*
	Theme Option typography 
---------------------------------------------------*/
function tally_option_typography($option, $echo = true){
	
	$font_color = '';
	$font_family = '';
	$font_size = '';
	$font_style = '';
	$font_variant = '';
	$font_weight = '';
	$letter_spacing = '';
	$line_height = '';
	$text_decoration = '';
	$text_transform = '';
	
	if(is_array($option)){
		if(isset($option['font-color'])			&& !empty($option['font-color']))		{ $font_color		= 'font-color:'.$option['font-color']."; \n"; }
		if(isset($option['font-size'])			&& !empty($option['font-size']))		{ $font_size		= 'font-size:'.$option['font-size']."; \n"; }
		if(isset($option['font-style'])			&& !empty($option['font-style']))		{ $font_style		= 'font-style:'.$option['font-style']."; \n"; }
		if(isset($option['font-variant'])		&& !empty($option['font-variant']))		{ $font_variant		= 'font-variant:'.$option['font-variant']."; \n"; }
		if(isset($option['font-weight'])		&& !empty($option['font-weight']))		{ $font_weight		= 'font-weight:'.$option['font-weight']."; \n"; }
		if(isset($option['letter-spacing'])		&& !empty($option['letter-spacing']))	{ $letter_spacing	= 'letter-spacing:'.$option['letter-spacing']."; \n"; }
		if(isset($option['line-height'])		&& !empty($option['line-height']))		{ $line_height		= 'line-height:'.$option['line-height']."; \n"; }
		if(isset($option['text-decoration'])	&& !empty($option['text-decoration']))	{ $text_decoration	= 'text-decoration:'.$option['text-decoration']."; \n"; }
		if(isset($option['text-transform'])		&& !empty($option['text-transform']))	{ $font_weight		= 'text-transform:'.$option['text-transform']."; \n"; }
		
		$font_family_orgnal = ot_recognized_font_families();
		if(isset($option['font-family'])		&& !empty($option['font-family']))		{ $font_family		= 'font-family:'.$font_family_orgnal[$option['font-family']]."; \n"; }
	}
	
	$output = $font_color . $font_family . $font_size . $font_style . $font_variant . $font_weight . $letter_spacing . $line_height . $text_decoration . $text_transform;
	
	if($echo == true){ echo $output; }else{ return $output; }
}