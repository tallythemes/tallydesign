<?php 
$markers = '';
$width = '100%';
$height = '400px';
$icon = '';

$address = 'Dhaka, Bangladesh';
$zoom = '15';
$scrollwheel = 'true';
$scaleControl = 'true';
$navigationControl = 'true';
$maptype = 'ROADMAP'; // ROADMAP, SATELLITE, HYBRID, TERRAIN
$html = 'This is Dhaka';
$popup = 'true';
?>
<div class="<?php echo $block_class; ?> thpb-googleMap <?php echo $the_block['skin']; ?>">
	<?php if(tally_hp_option($the_prefix.'title') != ''): ?><h2 class="hpb-title"><?php echo tally_hp_option($the_prefix.'title'); ?></h2><?php endif; ?>
	<?php if(tally_hp_option($the_prefix.'des') != ''): ?><div class="hpb-content"><?php echo tally_hp_option($the_prefix.'des'); ?></div><?php endif; ?>
    
    <div class="" id="map" style="height:400px;"></div>
</div>
<?php wp_enqueue_script( 'google-map'); ?>
<script type="text/javascript">
    jQuery(document).ready(function(){
		jQuery("#map").goMap({
			markers: [{  
				address: '<?php echo $address; ?>',
				html: { 
					content: '<?php echo $html; ?>', 
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