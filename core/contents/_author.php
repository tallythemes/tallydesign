<div class="author-profile">
	<div class="author-info">
        <div class="author-avatar">
            <?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'tally_author_bio_avatar_size', 74 ) ); ?>
        </div><!-- .author-avatar -->
        <div class="author-description">
            <h2 class="author-title"><?php printf( __( 'About %s', 'tally_textdomain' ), get_the_author() ); ?></h2>
            <p class="author-description-text">
                <?php the_author_meta( 'description' ); ?>
            </p>
        </div><!-- .author-description -->
    </div><!-- .author-info -->
</div>
<h2><?php printf( __( 'Posts Created By: %s', 'tally_textdomain' ), get_the_author() ); ?></h2>
<?php tally_site_content('archive/archive-simple'); ?>