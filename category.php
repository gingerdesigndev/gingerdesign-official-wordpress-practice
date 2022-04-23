<?php
$term = get_queried_object();
get_header();

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
            get_template_part( 'template-parts/post/category', get_post_format() );
        }
        ?>
        </div>
        <div>
            <?=the_posts_pagination(array(
                'prev_text' => __( '<', 'textdomain' ),
                'next_text' => __( '>', 'textdomain' ),));?>
        </div>
    </div>
    <?php
} else {
	get_template_part( 'template-parts/content/content-none' );
}

get_footer();

