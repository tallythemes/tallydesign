<div id="sidebar" class="sidebar widget-area">
	<div id="sidebar-inner">
    	<?php
		if ( ! dynamic_sidebar( 'sidebar' ) && current_user_can( 'edit_theme_options' )  ) {
			echo '<div class="widget widget_text">';
				echo '<div class="widget-wrap">';
				
					printf( '<h4 class="widgettitle">%s</h4>', esc_html( __( 'Primary Sidebar Widget Area', 'tally_textdomain' ) ) );
					echo '<div class="textwidget"><p>';
					
						printf( __( 'This is the %s. You can add content to this area by visiting your <a href="%s">Widgets Panel</a> and adding new widgets to this area.', 'tally_textdomain' ), $name, admin_url( 'widgets.php' ) );
					
					echo '</p></div>';
				
				echo '</div>';
			echo '</div>';
		}
		?>
    </div>
</div>