<div class="<?php echo $block_class; ?>  tally-hpb-tabs <?php echo $the_block['skin']; ?>">    
    <?php if(is_array(tally_hp_option($the_prefix.'items'))): ?>
        <div class="hpb-tabs">
        
        	<ul class="hpb-nav">
            	<?php
				$i = 1;
				foreach(tally_hp_option($the_prefix.'items') as $tab_item): 
				?>
            		<li>
                    	<a href="#<?php echo $block_class.'_'.$i; ?>">
                    		<?php if($tab_item['icon'] != ''): ?><i class="fa <?php echo $tab_item['icon']; ?>"></i><?php endif; ?>
							<span><?php echo $tab_item['title']; ?></span>
                        </a>
                    </li>
                <?php $i++; endforeach; ?>
            </ul>
            
            <?php
			$i = 1;
			foreach(tally_hp_option($the_prefix.'items') as $tab_item): 
			?>
				<div id="<?php echo $block_class.'_'.$i; ?>" class="hpb-box">
                	<?php echo $tab_item['content']; ?>
                    <div class="clear"></div>
				</div>
			<?php $i++; endforeach; ?>
            
        </div>
    <?php endif; ?>
</div>