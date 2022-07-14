
<?php
    $category_slug = $args['category_slug'];
    $num = $args['num'];
    $category = get_category_by_slug($category_slug);
    $postItemClass = 'col-12 col-lg-6';
    if ($num === 3 || $num === 6) $postItemClass = 'col-12 col-lg-4';
?>

<div class="" id="<?=$category_slug?>">
    <header class="header-page">
        <div class="container">
            <h1>
                <?=$category_slug?>
                <span><?=$category->name?></span>
            </h1>
            <p><?=$category->description?></p>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <?php
                $args = array( 'numberposts' => $num, 'category' => $category->cat_ID );
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
                <div class="<?=$postItemClass?> post-item">
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
