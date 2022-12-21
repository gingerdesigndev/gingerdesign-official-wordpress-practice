<?php
get_header();
$s=get_search_query();
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array(
	's' => $s,
    'paged' => $paged,
    'posts_per_page' => 6,
);
$query = new WP_Query($args);
$searchPosts = $query->posts;
?>

<div class="box-author my-5">
    <div class="container">
        <div class="tag-info">
            <h3><?=$s?></h3>
            <p>共有 <?=$query->found_posts?> 篇文章</p>
        </div>
        <div class="box-author-posts">
            <?php get_template_part('template-parts/post/list-search', 'search_posts', array( 'posts' => $searchPosts, )); ?>
            <div>
                <?=the_posts_pagination(array(
                    'prev_text' => __( '<span class="material-icons">arrow_back</span>', 'textdomain' ),
                    'next_text' => __( '<span class="material-icons">arrow_forward</span>', 'textdomain' ),));?>
            </div>
        </div>
    </div>
</div>


<?php
get_footer();
?>