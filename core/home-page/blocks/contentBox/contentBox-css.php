/*	Skin 1
---------------------------------------------------------*/
<?php echo $block_class; ?>.hpbs1 .hpb-contentBox-item{ 
	<?php tally_hp_option_background($the_prefix.'bg'); ?> 
    border-color:<?php tally_hp_option_color($the_prefix.'border_color'); ?>  !important;  
}
<?php echo $block_class; ?>.hpbs1 .hpb-contentBox-item *{ border-color:<?php tally_hp_option_color($the_prefix.'border_color'); ?>  !important;   }
<?php echo $block_class; ?>.hpbs1 .hpb-contentBox-item .hpb-title{ color:<?php tally_hp_option_color($the_prefix.'heading_color'); ?> !important; }
<?php echo $block_class; ?>.hpbs1 .hpb-contentBox-item .hpb-des{ color:<?php tally_hp_option_color($the_prefix.'text_color'); ?>; }
<?php echo $block_class; ?>.hpbs1 .hpb-contentBox-item .hpb-more{ 
	color:<?php tally_hp_option_color($the_prefix.'more_text_color'); ?>  !important;
    background-color:<?php tally_hp_option_color($the_prefix.'more_bg_color'); ?>;
}
<?php echo $block_class; ?>.hpbs1 .hpb-contentBox-item .hpb-more:hover{ 
	color:<?php tally_hp_option_color($the_prefix.'more_hover_text_color'); ?>  !important;
    background-color:<?php tally_hp_option_color($the_prefix.'more_hover_bg_color'); ?>;
}

<?php
$contentBox_items = tally_hp_option($the_prefix.'items');
$contentBox_items_count = 1;
if(is_array($contentBox_items)){
	foreach($contentBox_items as $contentBox_item){
		if($contentBox_item['enable_color'] == 'on'):
			?>
				/*	Skin 1
				---------------------------------------------------------*/
				<?php echo $block_class; ?>.hpbs1 .hpb-contentBox-item-<?php echo $contentBox_items_count; ?>{ 
					<?php tally_option_background2($contentBox_item['bg']); ?> 
					border-color:<?php echo $contentBox_item['border_color']; ?> !important;  
				}
				<?php echo $block_class; ?>.hpbs1 .hpb-contentBox-item-<?php echo $contentBox_items_count; ?> *{ 
					border-color:<?php echo $contentBox_item['border_color']; ?> !important;
				}
				<?php echo $block_class; ?>.hpbs1 .hpb-contentBox-item-<?php echo $contentBox_items_count; ?> .hpb-title{ 
					color:<?php echo $contentBox_item['heading_color']; ?> !important;
				}
				<?php echo $block_class; ?>.hpbs1 .hpb-contentBox-item-<?php echo $contentBox_items_count; ?> .hpb-des{
					color:<?php echo $contentBox_item['text_color']; ?>;
				}
				<?php echo $block_class; ?>.hpbs1 .hpb-contentBox-item-<?php echo $contentBox_items_count; ?> .hpb-more{ 
					color:<?php echo $contentBox_item['more_text_color']; ?>  !important;
					background-color:<?php echo $contentBox_item['more_bg_color']; ?>;
				}
				<?php echo $block_class; ?>.hpbs1 .hpb-contentBox-item-<?php echo $contentBox_items_count; ?> .hpb-more:hover{ 
					color:<?php echo $contentBox_item['more_hover_text_color']; ?>  !important;
					background-color:<?php echo $contentBox_item['more_hover_bg_color']; ?>;
				}
			<?php
		endif;
		$contentBox_items_count++;
	}
}
?>