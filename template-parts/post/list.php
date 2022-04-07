
<?php
    $category_name = $args['category_name'];
    $category_id = get_cat_ID($category_name);
?>

<div class="box" id="<?=$category_name?>">
    <div>
        <header class="header-category">
            <h2>
                <?=category_description($category_id)?>
                <span><?=$category_name?></span>
            </h2>
            <a href="/category/<?=$category_name?>" class="more"><img src="<?= esc_url( get_template_directory_uri() ) ?>/img/arrow-right.svg" alt="more"></a>
        </header>
        <div class="row gx-lg-5">
            <?php
                $args = array( 'numberposts' => $args['num'], 'category' => $category_id );
                $recent_posts = wp_get_recent_posts( $args );
                foreach( $recent_posts as $key => $post) {
                    $link = get_permalink($post['ID']);
                    $my_post_categories = get_the_category($post['ID']);
                    $my_post_child_cats = array();
                    foreach ( $my_post_categories as $post_cat ) {
                        if ( 0 != $post_cat->category_parent ) {
                            $my_post_child_cats[] = $post_cat->cat_name;
                        }
                    }
            ?>
                <div class="col-12 col-lg-6 post-item">
                    <a href="<?=$link?>">
                        <div class="post-img">
                            <img src="<?=get_feature_image($post['ID'])?>" alt="<?=$post['post_title']?>">
                        </div>
                        <div class="post-text">
                            <label class="post-sub-cat"><?=$my_post_child_cats[0]?></label>
                            <h3 class="post-title max-two-lines"><?=$post['post_title']?></h3>
                            <p class="post-excerpt max-three-lines"><?=$post['post_excerpt']?></p>
                        </div>
                    </a>
                </div>
            <?php }; ?>
        </div>
    </div>
</div>
