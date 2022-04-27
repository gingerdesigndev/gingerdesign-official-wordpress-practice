<?php
    $id = $recent['ID'];
    $categories = get_the_category();
    $term = get_queried_object();
?>

<header class="header-page-service">
    <div class="container">
        <h1>
            <?=$term->name?>
            <span><?=get_field('category_title_en', $term);?></span>
        </h1>
        <p><?=$term->description?></p>
    </div>
</header>

<div class="service-content">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-8">
                <?=get_field('service_content', $term);?>
            </div>
            <div class="col-12 col-md-4 text-center">
                <a href="#" class="btn btn-gold">聯絡我們</a>
            </div>
        </div>
    </div>
</div>

<div class="service-posts">
    <h2>相關作品集</h2>
    <div class="container gx-4">
        <div class="row">
            <?php
                $args = array( 'numberposts' => '2', 'category' => $term->term_id );
                $recent_posts = wp_get_recent_posts( $args );
                foreach( $recent_posts as $key => $recent):
                $link = get_permalink($recent['ID']);
            ?>
                <div class="col-12 col-lg-6 post-item">
                    <a href="<?=$link?>">
                        <div class="post-img">
                            <img src="<?=get_feature_image($recent['ID'])?>" alt="<?=$recent['post_title']?>">
                        </div>
                        <div class="post-text">
                            <h3 class="post-title max-two-lines"><?=$recent['post_title']?></h3>
                        </div>
                        <ul class="list-categories">
                            <?php
                                foreach($categories as $category) :
                                    if(is_category() && $category->name == $term->name)
                                        continue;
                                    $category_link = get_category_link( $category );
                                    echo '<li><a href="'.$category_link.'">'.$category->cat_name.'</a></li>';
                                endforeach;
                            ?>
                        </ul>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
