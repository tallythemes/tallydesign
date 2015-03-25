/*
Skin 1
*/
<?php echo $block_class; ?>.hpbs1 .hpb-nav{  border-color:<?php tally_hp_option_color($the_prefix.'nav_border_color'); ?> !important; }
<?php echo $block_class; ?>.hpbs1 .hpb-nav li{ background-color:<?php tally_hp_option_color($the_prefix.'nav_bg'); ?>; }
<?php echo $block_class; ?>.hpbs1 .hpb-nav li a{ 
    color:<?php tally_hp_option_color($the_prefix.'nav_color'); ?> !important; 
    border-color:<?php tally_hp_option_color($the_prefix.'nav_border_color'); ?> !important;  
}

<?php echo $block_class; ?>.hpbs1 .hpb-nav li.ui-state-active,
<?php echo $block_class; ?>.hpbs1 .hpb-nav li.ui-state-active:hover{ background-color:<?php tally_hp_option_color($the_prefix.'nav_active_bg'); ?>; }
<?php echo $block_class; ?>.hpbs1 .hpb-nav li.ui-state-active a{ color:<?php tally_hp_option_color($the_prefix.'nav_active_color'); ?> !important; }

<?php echo $block_class; ?>.hpbs1 .hpb-nav li:hover{ background-color:<?php tally_hp_option_color($the_prefix.'nav_bg', '0.9'); ?>; }

<?php echo $block_class; ?>.hpbs1 .hpb-box{
 	color:<?php tally_hp_option_color($the_prefix.'box_text_color'); ?> !important; 
    border-color:<?php tally_hp_option_color($the_prefix.'box_border_color'); ?> !important; 
    background-color:<?php tally_hp_option_color($the_prefix.'box_bg_color'); ?>; 
}