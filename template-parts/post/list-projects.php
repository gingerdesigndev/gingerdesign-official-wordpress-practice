
<?php
    $category_slug = $args['category_slug'];
    $num = $args['num'];
    $category = get_category_by_slug($category_slug);
    $postItemClass = 'col-12 col-lg-6';
    if ($num === 3) $postItemClass = 'col-12 col-lg-4';
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
        <div class="row gx-lg-5">
            <?php
                $args = array( 'numberposts' => $num, 'category' => $category->cat_ID );
                $recent_posts = wp_get_recent_posts( $args );
                foreach( $recent_posts as $key => $post) {
                    $link = get_permalink($post['ID']);
                    $categories = get_the_category($post['ID']);
                    $term = get_queried_object();
            ?>
                <div class="<?=$postItemClass?> post-item">
                    <a href="<?=$link?>">
                        <div class="post-img">
                            <img src="<?=get_feature_image($post['ID'])?>" alt="<?=$post['post_title']?>">
                        </div>
                        <div class="post-text">
                            <h3 class="post-title max-two-lines">
                                <a href="<?=$link?>"><?=$post['post_title']?></a>
                            </h3>
                            <!-- <p class="post-excerpt max-three-lines"><?=$post['post_excerpt']?></p> -->
                        </div>
                        <div class="list-categories">
                        <?php foreach($categories as $category) :
                            if (!(is_category() && $category->name == $term->name)):
                            $category_link = get_category_link( $category );
                        ?>
                            <a href="<?=$category_link?>"><?=$category->cat_name?></a>
                        <? endif; endforeach; ?>
                        </div>
                    </a>
                </div>
            <?php }; ?>
        </div>
    </div>
</div>
