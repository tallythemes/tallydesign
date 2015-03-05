<?php
rewind_posts();
$blog_category = '';
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
if( tally_option('blog_cat') != '' ){ $blog_category = 'cat='.tally_option('blog_cat').'&'; }
query_posts( $blog_category.'posts_per_page='.tally_option('blog_limit', '10').'&paged='.$paged );
tally_site_content('archive/archive-simple');
rewind_posts();