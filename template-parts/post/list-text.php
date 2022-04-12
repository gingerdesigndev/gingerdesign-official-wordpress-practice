
<?php
    $category_slug = $args['category_slug'];
    $num = $args['num'];
    $category = get_category_by_slug($category_slug);
    $postItemClass = 'col-12 col-lg-6';
    if ($num === 3) $postItemClass = 'col-12 col-lg-4';
?>

<div class="box-list" id="<?=$category_slug?>">
    <div class="container">
        <header class="header-category">
            <h2>
                <?=$category->description?>
                <span><?=$category->name?></span>
            </h2>
            <a href="/category/<?=$category_slug?>" class="more"><img src="<?= esc_url( get_template_directory_uri() ) ?>/img/arrow-right.svg" alt="more"></a>
        </header>
        <div class="row gx-lg-5">
            <?php
                $args = array( 'numberposts' => $num, 'category' => $category->cat_ID );
                $recent_posts = wp_get_recent_posts( $args );
                foreach( $recent_posts as $key => $post) {
                    $link = get_permalink($post['ID']);
                    $date = get_the_date( 'Y/m/d' );
                    $tags = get_the_tags($post['ID']);
            ?>
                <div class="<?=$postItemClass?> post-text-item">
                    <div>
                        <div class="post-date"><?=$date?></div>
                        <ul class="post-list-tag">
                            <li><a href="/tag/<?=$tags[0]->name?>"><?=$tags[0]->name?></a></li>
                            <li><a href="/tag/<?=$tags[1]->name?>"><?=$tags[1]->name?></a></li>
                        </ul>
                        <a href="<?=$link?>">
                            <p class="post-excerpt max-eight-lines"><?=$post['post_excerpt']?></p>
                        </a>
                    </div>
                </div>
            <?php }; ?>
        </div>
    </div>
</div>
