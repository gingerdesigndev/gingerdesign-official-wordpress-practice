<?php
    $postID = get_the_ID();
?>

<div class="box-single">
    <div class="container px-4" style="max-width: 800px;">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h1 class="single-title"><?php the_title(); ?></h1>
            <div class="single-content"><?=the_content();?></div>
        </article>
        <div class="text-center">
            <ul class="list-shares">
                <li>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?=get_permalink()?>" target="_blank" rel="noopener noreferrer"><img src="<?= esc_url( get_template_directory_uri() ) ?>/img/share-facebook.svg" alt="share to Facebook"></a>
                </li>
                <li>
                    <a href="https://twitter.com/intent/tweet?url=<?=get_permalink()?>" target="_blank" rel="noopener noreferrer"><img src="<?= esc_url( get_template_directory_uri() ) ?>/img/share-twitter.svg" alt="share to Twitter"></a>
                </li>
                <li>
                    <a href="https://line.me/R/share?text=<?=get_permalink()?>" target="_blank" rel="noopener noreferrer"><img src="<?= esc_url( get_template_directory_uri() ) ?>/img/share-line.svg" alt="share to LINE"></a>
                </li>
                <li>
                    <a href="#" class="copy-link">
                        <img src="<?= esc_url( get_template_directory_uri() ) ?>/img/share-link.svg" alt="share link">
                        <span class="material-icons">check_circle</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container px-4">
        <div class="single-related-posts">
            <h2 class="title-md text-center">相關文章<span>Related Articles</span></h2>
            <div class="row">
                <?php
                    $related = get_posts( array(
                        'category__in' => wp_get_post_categories($postID),
                        'numberposts' => 3,
                        'post__not_in' => array($postID),
                        )
                    );
                    if( $related ):
                        foreach( $related as $recent ):
                            $id = $recent->ID;
                            $title = $recent->post_title;
                            $link = get_permalink($id);
                            $my_post_categories = get_the_category($id);
                            $my_post_child_cats = array();
                            foreach ( $my_post_categories as $post_cat ) {
                                if ( 0 != $post_cat->category_parent ) {
                                    $my_post_child_cats[] = $post_cat->cat_name;
                                }
                            }
                ?>
                <div class="col-12 col-lg-4 post-item">
                    <a href="<?=$link?>">
                        <div class="post-img">
                            <img src="<?=get_feature_image($id)?>" alt="<?=$title?>">
                        </div>
                        <div class="post-text">
                            <label class="post-sub-cat"><?=$my_post_child_cats[0]?></label>
                            <h3 class="post-title max-two-lines"><?=$title?></h3>
                            <p class="post-excerpt max-three-lines"><?=$recent->post_excerpt?></p>
                        </div>
                    </a>
                </div>
                <?php endforeach; endif; ?>
            </div>
        </div>
    </div>
<div>
