<?php echo $block_class; ?> h1,
<?php echo $block_class; ?> h2,
<?php echo $block_class; ?> h3,
<?php echo $block_class; ?> h4,
<?php echo $block_class; ?> h5,
<?php echo $block_class; ?> h6{ color:<?php tally_hp_option_color($the_prefix.'heading_color'); ?> !important; }
<?php echo $block_class; ?>{ 
	color:<?php tally_hp_option_color($the_prefix.'text_color'); ?> !important;
    border-color:<?php tally_hp_option_color($the_prefix.'border_color'); ?> !important;
}
<?php echo $block_class; ?> *{ border-color:<?php tally_hp_option_color($the_prefix.'border_color'); ?> !important; }