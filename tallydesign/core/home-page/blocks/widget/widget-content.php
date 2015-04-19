<div class="<?php echo $block_class; ?> tally-hpb-widget <?php echo $the_block['skin']; ?>">
	<div class="hpb-content">
		<?php
		if ( ! dynamic_sidebar( $the_prefix.'home' ) && current_user_can( 'edit_theme_options' )  ) {
			echo '<div class="widget widget_text">';
				echo '<div class="widget-wrap">';
				
					printf( '<h4 class="widgettitle">%s</h4>', esc_html( 'Home '.$the_block['label'] ) );
					echo '<div class="textwidget"><p>';
					
						printf( __( 'This is the %s. You can add content to this area by visiting your <a href="%s">Widgets Panel</a> and adding new widgets to this area.', 'tally_textdomain' ), 'Home '.$the_block['label'], admin_url( 'widgets.php' ) );
					
					echo '</p></div>';
				
				echo '</div>';
			echo '</div>';
		}
		?>
        <div class="clear"></div>
    </div>
</div>