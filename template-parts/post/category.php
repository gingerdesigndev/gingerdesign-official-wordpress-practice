<?php
    $categories = get_the_category();
    $term = get_queried_object();
    $isProjects = $term->slug === 'projects';
    var_dump('test');
?>

<div class="col-12 col-sm-6 post-item">
    <div>
        <div class="post-img">
            <a href="<?=the_permalink();?>">
                <img src="<?=get_feature_image($id)?>" alt="<?=the_title()?>">
            </a>
        </div>
        
    </div>
</div>
