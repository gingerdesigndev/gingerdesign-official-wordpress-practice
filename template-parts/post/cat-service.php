<?php
    $id = $recent['ID'];
    $categories = get_the_category();
    $term = get_queried_object();
    $faq = get_faq();
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
            <div class="col-12 col-md-8 mb-5 mb-md-0 single-content">
                <?=get_field('service_content', $term);?>
            </div>
            <div class="col-12 col-md-4 text-center">
                <a href="/contact" class="btn btn-gold">聯絡我們</a>
            </div>
        </div>
    </div>
</div>

<div class="service-posts">
    <h2>相關作品集</h2>
    <div class="container gx-4">
        <div class="row">
            <?php
                $args = array( 'numberposts' => '2', 'category' => $term->term_id, 'post_status' => 'publish' );
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
                    </a>
                    <div class="list-categories">
                        <?php foreach($categories as $category):
                            if (!(is_category() && $category->name == $term->name) && $category->parent !== 0):
                            $category_link = get_category_link( $category );
                        ?>
                            <a href="<?=$category_link?>"><?=$category->cat_name?></a>
                        <?php endif; endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<div class="box-faq">
    <div class="container">
        <h2><?=$faq['name']?></h2>
        <ul class="list-faq">
            <?php foreach($faq['list'] as $val): ?>
            <li>
                <h3><?=get_field('question', $val)?></h3>
                <div><?=get_field('answer', $val)?></div>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
