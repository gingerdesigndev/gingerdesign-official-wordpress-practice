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

get_header();
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

<div class="index-service">
    <div class="container">
        <?=get_template_part( 'template-parts/content/content-service' );?>
    </div>
</div>

<div class="index-projects">
    <?php get_template_part('template-parts/post/list-projects', 'projects', array( 'category_slug' => 'projects', 'num' => 2, )); ?>
</div>

<div class="index-process pb-5">
    <?php get_template_part('template-parts/post/list', 'process', array( 'category_slug' => 'process', 'num' => 6, )); ?>
</div>

</div>
<?php
get_footer();
