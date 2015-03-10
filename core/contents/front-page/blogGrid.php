<?php
if(tally_option('home_blogGrid_enable') == 'on'): 
$masonry = new tally_masonry_html(array('column'=>tally_option('home_blogGrid_column', 3), 'margin'=>tally_option('home_blogGrid_margin', 3)));
$blog_query = new WP_Query( array('post_type' => 'post', 'posts_per_page' => tally_option('home_blogGrid_limit', 3)) );
if ( tally_option('home_blogGrid_cat') ) {
	$query['tax_query'][] = array(
	'taxonomy' => 'category',
	'terms'    => explode( ',', tally_option('home_blogGrid_cat') ),
	'field'    => 'id'
	);
}
if(tally_option('home_blogGrid_image_size') != ''){
	$image_size = explode("x", tally_option('home_blogGrid_image_size'));
}else{
	$image_size = array(600, 500);
}
?>
<div class="tally-home-section home-blogGrid">
	<div class="tally-home-section-inner">
    	
        <?php if(tally_option('home_blogGrid_description') != ''): ?>
            <div class="tally-home-section-des">
                <div class="tally-home-section-des-inner">
                    <?php echo tally_option('home_blogGrid_description'); ?>
                </div>
            </div>
        <?php endif; ?>
        
    	<?php if( $blog_query->have_posts()): ?>
        	<?php $masonry->start(); ?>
				<?php while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>
                    <?php $masonry->in_loop_start(); ?>
                        <div class="home-blogGrid-item">
                        	<a href="<?php the_permalink(); ?>">
							<?php 
                                $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); 
                                echo '<img src="'.tally_image_size($large_image_url[0], $image_size[0], $image_size[1]).'" class="post-image" alt="'.get_the_title().'">';
                            ?>
                            </a>
                            <h4 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <div class="post-content"><?php echo tally_max_charlength(170); ?></div>
                            <p class="post-meta">
                                By <?php the_author_posts_link(); ?> | <?php the_date(); ?> | <?php comments_popup_link(__('No Comments', 'tally_textdomain'), __('1 Comment', 'tally_textdomain'), '% '.__('Comments', 'tally_textdomain')); ?>
                            </p>
                        </div>
                    <?php $masonry->in_loop_end(); ?>
                <?php endwhile; ?>
            <?php $masonry->end(); ?>
            <div style="clear:both;"></div>
            <?php wp_reset_postdata(); ?>
        <?php else: ?>
			<?php _e('No Posts found.', 'tally_taxdomain'); ?>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>