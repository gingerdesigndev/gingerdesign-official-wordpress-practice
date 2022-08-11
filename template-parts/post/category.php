<?php
    $categories = get_the_category();
    $term = get_queried_object();
    $isProjects = $term->slug === 'projects';
?>

<div class="col-12 col-sm-6 post-item">
    <div>
        <div class="post-img">
            <a href="<?=the_permalink();?>">
                <img src="<?=get_feature_image($id)?>" alt="<?=the_title()?>">
            </a>
        </div>
        <div class="post-text">
            <h3 class="post-title max-two-lines">
                <a href="<?=the_permalink();?>"><?=the_title()?></a>
            </h3>
            <?php if(!$isProjects): ?>
            <p class="post-excerpt max-three-lines"><?=get_the_excerpt()?></p>
            <?php endif; ?>
        </div>
       
    </div>
</div>
