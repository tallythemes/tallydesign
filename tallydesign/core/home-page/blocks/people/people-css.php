/*	Skin 1
---------------------------------------------------------*/
<?php echo $block_class; ?>.hpbs1 .hpb-people-item{
	background-color:<?php tally_hp_option_color($the_prefix.'bg_color'); ?>;
	border-color:<?php tally_hp_option_color($the_prefix.'border_color'); ?> !important;
    color:<?php tally_hp_option_color($the_prefix.'text_color'); ?>;
}
<?php echo $block_class; ?>.hpbs1 .hpb-people-item p{ color:<?php tally_hp_option_color($the_prefix.'text_color'); ?> !important; }
<?php echo $block_class; ?>.hpbs1 .hpb-people-item h4{ color:<?php tally_hp_option_color($the_prefix.'heading_color'); ?>  !important; }
<?php echo $block_class; ?>.hpbs1 .hpb-people-item .hpb-des a.hpb-more{ 
	border-color:<?php tally_hp_option_color($the_prefix.'text_color', '0.8'); ?> !important; 
	color:<?php tally_hp_option_color($the_prefix.'text_color', '0.8'); ?> !important;
}
<?php echo $block_class; ?>.hpbs1 .hpb-people-item .hpb-des a.hpb-more:hover{ 
	border-color:<?php tally_option_color('primary_color', '0.6'); ?> !important; 
    color:<?php tally_option_color('primary_color'); ?>  !important;
}
<?php echo $block_class; ?>.hpbs1 .hpb-people-item .hpb-des .hpb-icons a{ color:<?php tally_hp_option_color($the_prefix.'text_color', '0.8'); ?> !important; }
<?php echo $block_class; ?>.hpbs1 .hpb-people-item .hpb-des .hpb-icons a:hover{ color:<?php tally_option_color('primary_color'); ?>  !important; }