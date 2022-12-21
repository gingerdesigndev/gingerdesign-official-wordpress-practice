<?php
    $posts = $args['posts'];
?>
    <div class="row">
        <?php foreach($posts as $post):
            $link = get_permalink($post->ID);
        ?>
        <div class="post-item col-12 col-lg-4">
            <a href="<?=$link?>">
                <div class="post-img">
                    <img src="<?=get_feature_image($post->ID)?>" alt="<?=$post->post_title?>">
                </div>
                <div class="post-text">
                    <h3 class="post-title max-two-lines"><?=$post->post_title?></h3>
                    <p class="post-excerpt max-three-lines"><?=$post->post_excerpt?></p>
                </div>
            </a>
        </div>
        <?php endforeach; ?>
    </div>
