<?php 
$markers = '';

$width = tally_hp_option($the_prefix.'width', '100%');
$height = tally_hp_option($the_prefix.'height', '400px');
$icon = tally_hp_option($the_prefix.'icon');

$address = tally_hp_option($the_prefix.'address', 'Dhaka, Bangladesh');
$zoom = tally_hp_option($the_prefix.'zoom', '15');
$maptype = tally_hp_option($the_prefix.'maptype', 'ROADMAP'); // ROADMAP, SATELLITE, HYBRID, TERRAIN
$html = tally_hp_option($the_prefix.'infoWindow', 'This is Dhaka');

$popup = (tally_hp_option($the_prefix.'popup') == 'on' ? 'true' : 'false');
$scrollwheel = (tally_hp_option($the_prefix.'scrollwheel') == 'on' ? 'true' : 'false');
$scaleControl = (tally_hp_option($the_prefix.'scaleControl') == 'on' ? 'true' : 'false');
$navigationControl = (tally_hp_option($the_prefix.'navigationControl') == 'on' ? 'true' : 'false');
?>
<div class="<?php echo $block_class; ?> thpb-googleMap <?php echo $the_block['skin']; ?>">
	<?php if(tally_hp_option($the_prefix.'title') != ''): ?><h2 class="hpb-title"><?php echo tally_hp_option($the_prefix.'title'); ?></h2><?php endif; ?>
	<?php if(tally_hp_option($the_prefix.'des') != ''): ?><div class="hpb-content"><?php echo tally_hp_option($the_prefix.'des'); ?></div><?php endif; ?>
    
    <div id="map-<?php echo $block_class; ?>" style="height:<?php echo $height; ?>; width:<?php echo $width; ?>;"></div>
</div>
<?php wp_enqueue_script( 'google-map'); ?>
<script type="text/javascript">
    jQuery(document).ready(function(){
		jQuery("#map-<?php echo $block_class; ?>").goMap({
			markers: [{  
				address: '<?php echo $address; ?>',
				html: { 
					content: '<?php echo preg_replace( "/\r|\n/", "", $html); ?>', 
					popup:<?php echo $popup; ?>, 
				} 
			}],
			
			zoom: <?php echo $zoom; ?>,
			scrollwheel: <?php echo $scrollwheel; ?>,
			scaleControl: <?php echo $scaleControl; ?>,
			navigationControl: <?php echo $navigationControl; ?>,
			maptype: '<?php echo $maptype; ?>',
		}); 
		
    });
  </script>