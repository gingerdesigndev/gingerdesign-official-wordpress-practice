<?php
    $postID = get_the_ID();
?>

<div class="box-single">
    <div class="container px-4">
        <article id="post-<?=the_ID();?>" <?=post_class();?>>
            <h1 class="single-title"><?=the_title();?></h1>
            <div class="row gx-5">
                <div class="col-12 col-lg-8 mb-5 mb-lg-0">
                    <?php if (has_post_thumbnail()): ?>
                        <div class="single-cover mb-3 mb-md-5">
                            <img src="<?=the_post_thumbnail_url()?>" alt="<?=the_title()?>" class="w-100">
                        </div>
                    <?php endif; ?>
                    <div class="single-content"><?=the_content();?></div>
                    <p class="mt-5 text-center">
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSehiu9etbRwLqFSLsRQ_ixHWK9UoQHilQLtdhLhxf8wGULihA/viewform" class="btn btn-major" target="_blank" rel="noopener noreferrer">我想知道本專案時程與報價</a>
                    </p>
                </div>
                <div class="col-12 col-lg-4">
                    <ul class="list-unstyled">
                        <li>客戶 / <?=the_field('customer');?></li>
                        <li>服務類型 / <?=the_field('type');?>
                        <li>作品年份 / <?=the_field('year');?>
                    </ul>
                    <p><a href="<?=the_field('link');?>" class="btn btn-major" target="_blank" rel="noopener noreferrer">網站連結</a></p>
                    <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSehiu9etbRwLqFSLsRQ_ixHWK9UoQHilQLtdhLhxf8wGULihA/viewform" class="btn btn-major" target="_blank" rel="noopener noreferrer">我想知道本專案時程與報價</a></p>
                </div>
            </div>
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
                        <span class="material-icons-outlined">done</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="single-related-posts">
            <h2 class="title-md text-center"><b>更多專案<span>More Projects</span><b></h2>
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
