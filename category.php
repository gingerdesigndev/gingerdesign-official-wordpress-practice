<?php
$term = get_queried_object();
$projects_category = get_category_by_slug('projects');
get_header();

if ($term->category_parent === $projects_category->term_id) {
    get_template_part( 'template-parts/post/cat-service', get_post_format() );
} else {
    if ( have_posts() ) {
        ?>
        <header class="header-page">
            <div class="container">
                <h1>
                    <?=$term->slug;?>
                    <span><?=$term->name?></span>
                </h1>
                <p><?=$term->description?></p>
            </div>
        </header>
        <div class="container gx-4">
            <div class="row">
            <?php
                while ( have_posts() ) {
                    the_post();
                    get_template_part( 'template-parts/post/category', get_post_format());
                }
            ?>
            </div>
            <div>
                <?=the_posts_pagination(array(
                    'prev_text' => __( '<span class="material-icons">arrow_back</span>', 'textdomain' ),
                    'next_text' => __( '<span class="material-icons">arrow_forward</span>', 'textdomain' ),));?>
            </div>
        </div>
        <?php
    } else {
        get_template_part( 'template-parts/content/content-none' );
    }
}


get_footer();

