<?php
/**
 * Hook to register admin pages 
 */
add_action( 'init', 'tally_regoster_ot_home_page_settings_page' );

/**
 * Registers all the required admin pages.
 */
function tally_regoster_ot_home_page_settings_page() {

	// Only execute in admin & if OT is installed
	if ( is_admin() && function_exists( 'ot_register_settings' ) ) {
	
		$sections = array();
		$settings = array();
		
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
				$sections[] = array(
					'id'          => $the_config['id'],
					'title'       => $the_config['label']
				);
				
				$settings[] = array(
					'id'          => $section_prefix .'enable',
					'label'       => 'Enable This Section',
					'desc'        => 'Using this setting you can enable or disable this section of the home page. <br>All option of the section will be show when you will select <strong>ON</strong>.',
					'std'         => '',
					'type'        => 'on_off',
					'section'     => $the_section_id,
					'class'       => ''
				);
				
				if(is_array($the_config['blocks'])){
					foreach($the_config['blocks'] as $the_block){
						
						$the_prefix = $the_config['id'].'_'.$the_block['id'].'_';
						include('blocks-options.php');
					}
				}
				
				include('sections-options.php');
			}
		}
		
		$config = array(
			array( 
			  'id'              => 'tally_home',
			  'pages'           => array(
				array(
				  'id'              => 'tally_home',
				  'parent_slug'     => 'themes.php',
				  'page_title'      => 'Home Page',
				  'menu_title'      => 'Home Page',
				  'capability'      => 'edit_theme_options',
				  'menu_slug'       => 'tally-home-page',
				  'icon_url'        => null,
				  'position'        => null,
				  'updated_message' => 'Home Page updated.',
				  'reset_message'   => 'Home Page reset.',
				  'button_text'     => 'Save Changes',
				  'show_buttons'    => true,
				  'screen_icon'     => 'options-general',
				  'contextual_help' => null,
				  'sections'        => $sections,
				  'settings'        => $settings,
				)
			  )
			)
		);  	

		// Register the pages
		ot_register_settings($config);

	}

}