<?php
/*
Template Name: Blog
*/
$blog_template_layout = tally_option('blog_sidebar', 'right');

get_header(); ?>
<div id="wrapper" class="sidebar-<?php echo $blog_template_layout; ?>">
    <div id="site-header">
        <div id="site-header-inner">
            <?php tally_site_header(); ?>
            <?php tally_site_subheader(); ?>
        </div>
    </div>
    
    <div id="site-main">
        <div id="site-main-inner" class="site_content_width">
            <div id="page-content">
                <div id="page-content-inner">
                    <?php tally_site_content('_template-blog'); ?>
                </div>
            </div>
            <?php if($blog_template_layout != 'no'){ get_sidebar(); } ?>
        </div>
    </div>
    
    <div id="site-footer">
        <div id="site-footer-inner">
            <?php tally_site_footer_widgets(); ?>
            <?php tally_site_footer(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>