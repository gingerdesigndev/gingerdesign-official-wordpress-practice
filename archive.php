<?php
get_header();

if ( have_posts() ) {
	?>
	<header class="header-page">
        <div class="container">
            <h1><?=get_the_archive_title('', false)?></h1>
            <p><?=get_the_archive_description()?></p>
        </div>
	</header>
    <div class="container gx-4">
        <div class="list-posts-one-line">
        <?php
            while ( have_posts() ) {
                the_post();
                get_template_part( 'template-parts/post/list-archive', get_post_format() );
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

