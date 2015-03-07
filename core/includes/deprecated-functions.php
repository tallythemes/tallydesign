<?php


function tally_st_header_menu($class = ''){
	?>
	<nav id="navigation" class="<?php echo $class; ?>" role="navigation">
		<?php wp_nav_menu( array('theme_location'=>'main_menu') ); ?>
	</nav><!-- #site-navigation -->
	<?php
}

function tally_st_header_menu_alt($class = ''){
	?>
	<div class="nav_alt-area <?php echo $class; ?>">
		<nav id="nav_alt" role="navigation">
			<?php wp_nav_menu( array('theme_location'=>'alt_menu') ); ?>
		</nav><!-- #site-navigation -->
	</div>
	<?php
}

function tally_st_header_info($class = ''){
	if(tally_option('header_info_text') != ''){
		?>
		<div class="header-info <?php echo $class; ?>">
			<div class="header-info-inner">
				<?php echo tally_option('header_info_text'); ?>
			</div>
		</div>
		<?php
	}
}

function tally_st_header_phone($class = '', $icon = '<i class="fa fa-phone"></i>'){
	if(tally_option('header_phone_number') != ''){
		?>
		<div class="header-phone <?php echo $class; ?>">
			<div class="header-phone-inner">
				<?php echo $icon; ?>
			 <a href="tel:<?php tally_option('header_phone_number'); ?>"><?php echo tally_option('header_phone_number'); ?></a>
			</div>
		</div>
		<?php
	}
}

function tally_st_header_email($class = '', $icon = '<i class="fa fa-envelope"></i>'){
	if(tally_option('header_email_address') != ''){
		?>
		<div class="header-email <?php echo $class; ?>">
			<div class="header-email-inner">
				<?php echo $icon; ?>
				<a href="mailto:<?php tally_option('header_email_address'); ?>"><?php echo tally_option('header_email_address'); ?></a>
			</div>
		</div>
		<?php
	}
}

function tally_st_header_logo($class = ''){
	?>
    <div class="logo_area <?php echo $class; ?>"><?php tallyfn_logo(tally_option('site_logo')); ?></div>
    <?php
}

function tally_st_header_social_icons($class = ''){
	if(tally_option('header_social_icons') == 'on'){
		tally_social_icons($class);
	}
}

function tally_st_header_woocommerce_cart($class = ''){
	if(tally_option('header_woocommerce_cart') == 'on'){
		tally_woocommerce_cart($class);
	}
}

function tally_st_header_wpml_menu($class = ''){
	if(tally_option('header_wpml_menu') == 'on'){
		tally_wpml_language_switcher( $class);
	}
}

function tally_st_header_advertisment($class = ''){
	if(tally_option('header_advertisment_code') != ''){
		echo tally_option('header_advertisment_code');
	}
}

function tally_st_header_serch($class = ''){
	if(tally_option('header_search_bar') == 'on'){
		tally_icon_search_bar($class);
	}
}

function tally_st_header_login($class = '', $login = '<i class="fa fa-lock"></i> Login', $register = '<i class="fa fa-plus-square"></i> Register'){
	?>
    <div class="header-logins-area <?php echo $class; ?>">
    	<div class="header-logins-inner">
        	<?php if($login != ''){ ?><a class="header-login" href="<?php echo tally_option('header_login_url'); ?>"><?php echo $login; ?></a> <?php } ?>
        	<?php if($register != ''){ ?><a class="header-register" href="<?php echo tally_option('header_register_url'); ?>"><?php echo $register; ?></a> <?php } ?>
        </div>
    </div>
    <?php
}




/*
  Social Icons
-----------------------------------*/
function tally_social_icons($class = ''){
	?>
	<?php if(tally_option('enable_social_icons', 'yes') == 'yes'): ?>
		<?php if(is_array(tally_option('social_icons'))): ?>
			<div class="tally-social-icons <?php echo $class; ?>">
				<?php foreach(tally_option('social_icons') as $social_icon): ?>
					<a href="<?php echo $social_icon['link']; ?>" class="" title="<?php echo $social_icon['title']; ?>" rel="nofollow" target="_blank">
						<i class="fa <?php echo $social_icon['icon']; ?>"></i>
					</a>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	<?php endif; ?>
	<?php	
}


function tally_creat_config_xml(){
	//$options = get_option( 'option_tree' );
	$options = apply_filters('tally_option_std', array());
	$output = '';
	$output .= '<tally-config>'. "\n";
		foreach($options as $key => $option){
			$first_line_br = '';
			$first_line_br_s = '';
			if(is_array($option)){ $first_line_br = "\n"; }
			$output .= "\t".'<key name="'.$key.'">'.$first_line_br;
				if(is_array($option)){
					foreach($option as $key_s => $option_s){
						if(is_array($option_s)){ $first_line_br_s = "\n"; }
						$output .= "\t"."\t".'<key name="'.$key_s.'">'.$first_line_br_s;
							if(is_array($option_s)){
								foreach($option_s as $key_s_s => $option_s_s){
									$output .= "\t"."\t"."\t".'<key name="'.$key_s_s.'">';
										//$output .= $option_s_s;
										$output .=trim(preg_replace('/\t+/', '', $option_s_s));
									$output .= '</key>'."\n";
								}
							}else{
								$output .= $option_s;
							}
						$output .= '</key>'."\n";
					}
				}else{
					$output .= $option;
				}
			$output .= '</key>'. "\n";
		}
	$output .= '</tally-config>';
	
	return $output;
}





/* Search bar with icon
-------------------------------------------------*/
function tally_icon_search_bar($class = ''){
?>
<div class="tally_icon_search_bar <?php echo $class; ?>">
	<a href="#" class="the_search_icon"><i class="fa fa-search"></i></a>
	<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
		<div class="search-form-inner">
			<input type="text" value="" name="s" id="s" placeholder="<?php _e('Search', 'tally_textdomain'); ?>" />
			<input type="submit" id="searchsubmit" value="<?php _e('Search', 'tally_textdomain'); ?>" />
		</div>
	</form>
</div>
<?php	
}



/*
   WPML language switcher
-----------------------------------*/
function tally_wpml_language_switcher( $class = '' ){
	if(function_exists('icl_get_languages')){
		echo '<div class="tally_wpml_language_switcher '.$class.'">';
			$items = icl_get_languages('skip_missing=1&orderby=id&order=asc&link_empty_to=empty');
			if(is_array($items) && !empty($items)){
				echo '<ul class="main-ul-holder">';
					echo '<li>';
						foreach( $items as $item ){
							if($item['active'] == 1){
								echo '<a href="#" class="lan-menu"><span>'.$item['language_code'].'</span><i class="fa fa-angle-down"></i></a>';
							}
						}
						echo '<ul class="flag-list">';
							foreach( $items as $item ){
								echo '<li>';
									echo '<a href="'.$item['url'].'" class="active_'.$item['active'].'" title="'.$item['translated_name'].'">';
										echo '<img src="'.$item['country_flag_url'].'" alt="'.$item['translated_name'].'" /> <span>'.$item['native_name'].'</span>';
									echo '</a>';
								echo '</li>';
							}
						echo '</ul>';
					echo '</li>';
				echo '</ul>';
			}
		echo '</div>';
	}
}


/*
  Woocommerce Cart
-----------------------------------*/
function tally_woocommerce_cart($class = ''){
	/** Fail silently if WooCommerce is not activated */
	if ( ! in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) return;
	global $woocommerce;
	echo '<div class="tally_woocommerce_cart '.$class.'">';
		echo tally_woocommerce_cart_content();
	echo '</div>';
	
}
add_filter('add_to_cart_fragments', 'tally_woocommerce_add_to_cart_fragment');
function tally_woocommerce_add_to_cart_fragment( $fragments ) {
	global $woocommerce;
	
	ob_start();
	
	echo tally_woocommerce_cart_content();
	
	$fragments['a.tally-woo-cart-contents'] = ob_get_clean();
	
	return $fragments;
}

if(!function_exists('tally_woocommerce_cart_content')){
	function tally_woocommerce_cart_content(){
		global $woocommerce;
		?>
		<a class="tally-woo-cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'tally_textdomain'); ?>">
			<i class="fa fa-shopping-cart"></i>
			<span class="tally_woo_items">
				<?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'tally_textdomain'), $woocommerce->cart->cart_contents_count);?>
			</span>
		</a>
		<?php
	}
}




/* Widget Column Class
-------------------------------------------------*/
function tallyfn_column_class($sidebar_id){
	$columns = tallyfn_count_widgets($sidebar_id, false);
	
	switch ($columns) {	    
	    case 1:
	        return '12';
	        break;
	    case 2:
	        return '6';
	        break;
	    case 3:
	        return '4';
	        break;
	    case 4:
	        return '3';
	        break;
	    case 0:
	    default:
	        return '4';
	        break;
	}
}




/* Widget Counter
-------------------------------------------------*/
function tallyfn_count_widgets($sidebar_id, $echo = true) {
    $the_sidebars = wp_get_sidebars_widgets();
    if (!isset($the_sidebars[$sidebar_id]))
        return 0;
    if ($echo)
        echo count($the_sidebars[$sidebar_id]);
    else
        return count($the_sidebars[$sidebar_id]);
}





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



function tally_theme_breadcrumbs($before='<div class="breadcrumbs">', $after = '</div>'){
	
	if(get_post_meta(get_the_ID(), 'tally_subheader_breadcrumbs', true) != 'off'){
		echo $before;
			echo  apply_filters('tally_breadcrumb', tally_breadcrumb2());
		echo $after;
	}
}




/* Logo / title output function
-------------------------------------------------*/
function tallyfn_logo($logo = '', $des = true){
	?>
    <div id="logo">
		<?php if($logo != 'none'): ?>
			<a href="<?php echo home_url(); ?>"><img src="<?php echo tally_option('site_logo'); ?>" alt="<?php bloginfo('name'); ?>"></a>
		<?php else: ?>
			<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
			<?php if($des == true){ ?><span><?php bloginfo( 'description' ); ?></span><?php } ?>
		<?php endif; ?>
	</div>
    <?php	
}



/* Is header
-------------------------------------------------*/
function tally_is_header(){
	global $wp_query;
	$header  = tally_option( 'is_header', 'yes');
	
	if(!is_404() && get_post()){
		$custom_field = get_post_meta( get_the_ID(), 'tally_is_header', true );
		$header  = $custom_field ? $custom_field : $header;
	}
	
	return apply_filters('tally_is_header', $header);
}




/* Footer Widget Layour Option
-------------------------------------------------*/
function tally_footer_widget_layout_option(){
	global $wp_query;
	$widget_layout  = tally_option( 'footer_widget_layout', 3);
	
	if(!is_404() && get_post()){
		$custom_field = get_post_meta( get_the_ID(), 'tally_footer_widget_layout', true );
		$widget_layout  = $custom_field ? $custom_field : $widget_layout;
	}
	
	return apply_filters('tally_footer_widget_layout_option', $widget_layout);
}


/* Sidebar Layout 
-------------------------------------------------*/
function tally_sitebar_layout_option(){
	global $wp_query;
	
	//* If viewing a singular page or post
	if ( is_singular() ) {
		$custom_field = get_post_meta( get_the_ID(), 'tally_sidebar_layout', true );
		$site_layout  = $custom_field ? $custom_field : tally_option( 'sidebar_layout' );
	}else{
		$site_layout  = tally_option( 'sidebar_layout', 'full-width-content' );
	}
	
	return apply_filters('tally_sitebar_layout_option', $site_layout);
}





/* closing div
-------------------------------------------------*/
if(!function_exists('tally_div_close')):
	function tally_div_close(){
		echo '</div>';	
	}
endif;



/* Layout of the Pages
-------------------------------------------------*/
function tally_layout($atter = array() ){
	
	$default = array(			
		'content' => NULL,
		'main_div_class' => '',
		'body_class' => '',
	);
	$tally_layout_atter = array_merge($default, $atter);
	
	do_action( 'tally_template_init' );
	do_action( 'tally_html_before' );
	get_header();
	echo '<div id="wrapper">';
	
		do_action( 'tally_before_header' );
		do_action( 'tally_header' );
		do_action( 'tally_after_header' );
		
		echo '<div id="main" class="'.apply_filters('tally_main_class', $tally_layout_atter['main_div_class']).'">';
			echo '<div id="main-inner">';
			do_action( 'tally_before_content_sidebar_area' );
				echo '<div id="content-sidebar-wrap">';
					do_action( 'tally_before_content' );
						echo '<div id="content">';
							echo '<div id="content-inner" class="hfeed">';
								do_action( 'tally_before_loop' );
								if($tally_layout_atter['content'] == NULL){
									do_action( 'tally_loop' );
								}else{
									tally_file_dri($tally_layout_atter['content']);
								}
								do_action( 'tally_after_loop' );
							echo '</div>';
						echo '</div>';
					do_action( 'tally_after_content' );
				echo '</div>';
			do_action( 'tally_after_content_sidebar_area' );
			echo '</div>';
		echo '</div>';
		
		do_action( 'tally_before_footer' );
		do_action( 'tally_footer' );
		do_action( 'tally_after_footer' );
	echo '</div>';
	get_footer();
	do_action( 'html_footer' );
}





/* Content File Loader
-------------------------------------------------*/
if(!function_exists('tally_get_content_file')):
	function tally_get_content_file($file, $data = NULL){
		if(file_exists(get_stylesheet_directory().'/tally/'.$file)){
			include(get_stylesheet_directory().'/tally/'.$file);
		}elseif(file_exists(get_template_directory().'/tally/'.$file)){
			include(get_template_directory().'/tally/'.$file);
		}elseif(file_exists(get_template_directory().'/core/'.$file)){
			include(get_template_directory().'/core/'.$file);
		}
	}
endif;




/* Output Theme title
-------------------------------------------------*/
function tallyfn_title($tally_custom_page_title = NULL) {
	
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
	
	if( $tally_custom_page_title != NULL ){ echo $tally_custom_page_title; }else{ echo $output; }
}




/**
 * Helper function to return encoded strings
 *
 * @return    string
 *
 * @access    public
 * @since     0.8.3
 */
function tally_encode( $value ) {

  $func = 'base64' . '_encode';
  return $func( $value );
  
}

/**
 * Helper function to return decoded strings
 *
 * @return    string
 *
 * @access    public
 * @since     0.8.3
 */
function tally_decode( $value ) {

  $func = 'base64' . '_decode';
  return $func( $value );
  
}




/* Output Theme title
-------------------------------------------------*/
function tallyfn_title2($tally_custom_page_title = NULL) {
	
	global $wp_query;
	$output = '';
	
	if ( is_home()){
		$home_page = get_page( get_queried_object_id() );
		$output = get_the_title( $home_page->ID );
	}elseif ( is_singular() ) {
		/* Get singular post variables needed. */
		$post = get_queried_object();
		$post_id = absint( get_queried_object_id() );
		$post_type = $post->post_type;
		$parent = absint( $post->post_parent );
		/* Get the post type object. */
		$post_type_object = get_post_type_object( $post_type );
	}else{
		$output = get_the_title();
	}
	
	if( $tally_custom_page_title != NULL ){ echo $tally_custom_page_title; }else{ echo $output; }
}




if(!function_exists('tally_get_serialize_option_data')):
function tally_get_serialize_option_data(){
	$output = '';
	
	if( function_exists('ot_options_id') ){
		$field_settings = get_option( ot_options_id());
		$output = tally_encode( serialize( $field_settings ));
	}
	
	return $output;
}
endif;