<?php
get_header();


$projects_category = get_category_by_slug('projects');
$taxonomies = array(
    'category',
);
$args = array(
    'child_of' => $projects_category->term_id,
    'hide_empty' => 0,
    'order_by' => 'term_id',
);

$terms = get_terms($taxonomies, $args);

?>

<div id="page-blog">
    <div class="container">
        <header class="header-page">
            <h1>Service<span>服務項目</span></h1>
            <p>從小型登陸頁到大型正式網站，<br>野薑致力於提供高品質設計給您。</p>
        </header>
        <ul class="list-service row gx-5">
            <?php foreach($terms as $cat):
                $img = get_field('category_img', $cat);
            ?>
            <li class="col-12 col-lg-6">
                <a href="/category/<?=$cat->slug?>">
                    <img src="<?=$img['url']?>" alt="<?=$cat->name?>">
                    <h2><?=$cat->name?><span><?=get_field('category_title_en', $cat);?></span></h2>
                    <p><?=$cat->description?></p>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
        <div class="service-contact">
            <img src="<?= esc_url( get_template_directory_uri() ) ?>/img/gem.svg" alt="填寫您的需求表單">
            <p>您好，請填寫您的需求表單，<br>幫助您釐清專案思考</p>
            <a href="#" class="btn btn-gold">聯絡我們</a>
        </div>
    </div>
</div>

<?php
get_footer();
