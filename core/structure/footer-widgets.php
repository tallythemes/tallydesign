<?php 
	$footer_widget_layout = tally_option( 'footer_widget_layout', 3); 
	$footer_widget_layout_class = array(3,3,3,3);
	if( $footer_widget_layout == '1' ){ $footer_widget_layout_class = array(4,4,4,0); }
	elseif( $footer_widget_layout == '2' ){ $footer_widget_layout_class = array(8,4,0,0); }
	elseif( $footer_widget_layout == '3' ){ $footer_widget_layout_class = array(4,8,0,0); }
	elseif( $footer_widget_layout == '4' ){ $footer_widget_layout_class = array(3,3,3,3); }
	elseif( $footer_widget_layout == '5' ){ $footer_widget_layout_class = array(6,3,3,0); }
	elseif( $footer_widget_layout == '6' ){ $footer_widget_layout_class = array(3,3,6,0); }
	elseif( $footer_widget_layout == '7' ){ $footer_widget_layout_class = array(12,0,0,0); }
	elseif( $footer_widget_layout == '8' ){ $footer_widget_layout_class = array(6,6,0,0); }
?>
<div id="fwidget">
	<div id="fwidget-inner">
    	<div class="col-holder nomargin">
        	<div class="col col_<?php echo $footer_widget_layout_class[0]; ?>"><?php dynamic_sidebar('footer_widget_1'); ?></div>
            <?php if( ($footer_widget_layout == '2') || ($footer_widget_layout == '3') || ($footer_widget_layout == '4') || ($footer_widget_layout == '5') || ($footer_widget_layout == '6') || ($footer_widget_layout == '8')): ?>
            	<div class="col col_<?php echo $footer_widget_layout_class[1]; ?>"><?php dynamic_sidebar('footer_widget_2'); ?></div>
            <?php endif; ?>
            <?php if(($footer_widget_layout == '4') || ($footer_widget_layout == '5') || ($footer_widget_layout == '6') ): ?>
            	<div class="col col_<?php echo $footer_widget_layout_class[2]; ?>"><?php dynamic_sidebar('footer_widget_3'); ?></div>
            <?php endif; ?>
            <?php if( ($footer_widget_layout == '4') ): ?>
            	<div class="col col_<?php echo $footer_widget_layout_class[3]; ?>"><?php dynamic_sidebar('footer_widget_4'); ?></div>
            <?php endif; ?>
            
        </div>
    </div>
</div>