<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Ginger Design
 * @since Ginger Design 1.0
 */

$homeDataPage = get_page_by_path('home-data');
$feedback = get_field('feedback', $homeDataPage->ID);
$clientsImgDesktop = get_field('clients_img_desktop', $homeDataPage->ID);
$clientsImgMobile = get_field('clients_img_mobile', $homeDataPage->ID);
get_header();
var_dump($feedback);
?>

<div class="index-wrap">
    <div class="index-welcome">
        <div class="container px-4">
            <div class="row">
                <div class="col-12 col-lg-4 order-lg-2 offset-lg-1 mb-5 mb-lg-0">
                    <img src="<?= esc_url( get_template_directory_uri() ) ?>/img/index-welcome.svg" alt="歡迎來到野薑設計工作室">
                </div>
                <div class="col-12 col-lg-7 order-lg-1">
                    <h2>您好，<br>
                    歡迎來到野薑設計工作室<br>
                    Hello,<br>
                    Welcome to<br>
                    Ginger Design</h2>
                    <p>野薑設計提供一流的設計合作體驗，網路知識顧問、需求研究、網站設計、架設開發、技術評估。我們擅長提供精細服務，提供適切的開發建議，簡單易懂的技術說明，創造良善的專案體驗，協助您在網路世界中建立屬於自己的家，與野薑合作，悠遊於數位世界。</p>
                </div>
            </div>
        </div>
    </div>

    <div class="index-featured index-box">
        <?php get_template_part('template-parts/post/list-process', 'featured', array( 'category_slug' => 'featured', 'num' => 4, 'more' => true )); ?>
    </div>

    <div class="index-service index-box">
        <div class="container">
            <?php get_template_part('template-parts/content/content-service');?>
        </div>
    </div>

    <div class="index-highlights index-box">
        <?php get_template_part('template-parts/post/list-process', 'highlights', array( 'category_slug' => 'highlights', 'num' => 3, )); ?>
    </div>

    <div class="index-projects index-box">
        <?php get_template_part('template-parts/post/list-projects', 'projects', array( 'category_slug' => 'projects', 'num' => 2, )); ?>
    </div>

    <div class="index-process index-box pb-5">
        <?php get_template_part('template-parts/post/list-process', 'process', array( 'category_slug' => 'process', 'num' => 6, )); ?>
    </div>

    <?php if ($feedback['one']['img']): ?>
    <div class="index-box">
        <header class="header-page">
            <div class="container">
                <h1>
                    Feedback
                    <span>客戶回饋</span>
                </h1>
                <p>從小型登陸頁到大型正式網站，<br>野薑致力於提供高品質設計給您。</p>
            </div>
        </header>
        <div class="container">
            <div class="row">
                <?php foreach($feedback as $feed): ?>
                <div class="col-12 col-lg-4">
                    <a href="<?=$feed['link']?>">
                        <img src="<?=$feed['img']?>" alt="" class="w-100">
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <?php if ($clientsImgMobile): ?>
    <div class="index-box">
        <header class="header-page">
            <div class="container">
                <h1>
                    Clients
                    <span>客戶品牌</span>
                </h1>
                <p>我們合作客戶，都是很棒的人，設計也為他們創造價值，歡迎加入我們！</p>
            </div>
        </header>
        <div class="container">
            <picture>
                <source srcset="<?=$clientsImgDesktop?>" media="(min-width: 768px)">
                <img src="<?=$clientsImgMobile?>" alt="Clients" class="w-100">
            </picture>
        </div>
    </div>
    <?php endif; ?>

</div><!-- .index-wrap -->
<?php
get_footer();
