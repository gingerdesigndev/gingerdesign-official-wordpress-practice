<?php
    $categories = get_the_category();
    $term = get_queried_object();
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
        </div>
        <div class="list-categories">
            <?php foreach($categories as $category) :
                if (!(is_category() && $category->name == $term->name)):
                $category_link = get_category_link( $category );
            ?>
                <a href="<?=$category_link?>"><?=$category->cat_name?></a>
            <? endif; endforeach; ?>
        </div>
    </div>
</div>
