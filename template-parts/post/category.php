<?php
    $id = $recent['ID'];
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
        <ul class="list-categories">
            <?php
                foreach ($categories as $category):
                if (is_category() && $category->name == $term->name) continue;
            ?>
                <li><a href="/category/<?=$category->slug?>"><?=$category->cat_name?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
