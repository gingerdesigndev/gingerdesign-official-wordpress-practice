<?php
    $id = $recent['ID'];
    $categories = get_the_category();
    $term = get_queried_object();
?>

<div class="col-12 col-sm-6 post-item">
    <a href="<?=the_permalink();?>">
        <div class="post-img">
            <img src="<?=get_feature_image($id)?>" alt="<?=the_title()?>">
        </div>
        <div class="post-text">
            <h3 class="post-title max-two-lines"><?=the_title()?></h3>
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
        </li>
    </a>
</div>
