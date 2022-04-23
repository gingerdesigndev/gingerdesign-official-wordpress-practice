<?php


get_header();

while ( have_posts() ) :
	the_post();
    $categories = get_the_category();
    function getSlug($n){
        return $n->slug;
    }
    $categoriesNames = array_map('getSlug', $categories);
    if (in_array('projects', $categoriesNames)) {
        get_template_part( 'template-parts/content/content-single-projects' );
    } else {
	    get_template_part( 'template-parts/content/content-single' );
    }
endwhile;

get_footer();
