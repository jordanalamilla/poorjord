<?php
get_header();

if (have_posts()) {
    while ( have_posts() ) { the_post();

        // Post header
        get_template_part('template-parts/post-header');

        //Content
        the_content();

    }
}

get_footer();