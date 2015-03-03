<div class="tally-archive-simple">
	<?php
    if ( have_posts() ) : 
        while ( have_posts() ) : the_post();
            ?>
            <div class="post-item">
                <div class="post-item-inner">
                    <div class="post-media">
                        <a href="<?php the_permalink(); ?>">
                        <?php 
                            $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); 
                            echo '<img src="'.tally_image_size($large_image_url[0], TALLY_BLOG_IMG_W, TALLY_BLOG_IMG_H).'" class="post-image" alt="'.get_the_title().'">';
                        ?>
                        </a>
                    </div>
                    <h4 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <p class="post-meta">
                    By <?php the_author_posts_link(); ?> | <?php the_date(); ?> | <?php the_category(', '); ?> | <?php comments_popup_link(__('No Comments', 'tally_textdomain'), __('1 Comment', 'tally_textdomain'), '% '.__('Comments', 'tally_textdomain')); ?>
                    </p>
                    <div class="post-content">
                        <?php the_excerpt(); ?>
                    </div>
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