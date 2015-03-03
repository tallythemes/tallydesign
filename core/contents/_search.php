<div class="tally-search-result">
	<?php
    if ( have_posts() ) : 
        while ( have_posts() ) : the_post();
            ?>
            <div class="post-item">
                <div class="post-item-inner">
                    <h4 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <div class="post-content"><?php the_excerpt(); ?></div>
                    <a href="<?php the_permalink(); ?>"><?php _e('Read More', 'tally_textdomain'); ?></a>
                </div>
            </div>
            <?php
        endwhile;
		echo tallyfn_paginate2();
    else :
        tally_do_noposts();
    endif;
    ?>
</div>