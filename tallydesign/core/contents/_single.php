<?php
if ( have_posts() ) : 
	while ( have_posts() ) : the_post();
		echo '<article '; post_class(); echo '>';
			echo '<div class="entry-header">';
				tally_site_content('single/_format-audio');
				tally_site_content('single/_format-gallery');
				tally_site_content('single/_format-image');
				tally_site_content('single/_format-link');
				tally_site_content('single/_format-quote');
				tally_site_content('single/_format-video');
			echo '</div>';
			echo '<div class="entry-content">';
				tally_site_content('single/_single-title');
				tally_site_content('single/_single-meta');
				tally_site_content('single/_single-content');
				tally_site_content('single/_single-content_nav');
				tally_site_content('single/_single-cat_tag');
			echo '</div>';
			echo '<div class="entry-footer">';
				tally_site_content('single/_single-social');
				tally_site_content('single/_single-author-bio');
				tally_site_content('single/_single-related_post');
				comments_template();
			echo '</div>';
		echo '</article>';
	endwhile;
else :
	tally_do_noposts();
endif;