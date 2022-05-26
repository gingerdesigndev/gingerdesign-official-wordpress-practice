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

<main class="main">
    <div class="index-welcome">
        <div class="container">
            <h2>您好，<br>
            歡迎來到野薑設計工作室<br>
            Hello,<br>
            Welcome to<br>
            Ginger Design</h2>
            <p>野薑設計提供一流的設計合作體驗，網路知識顧問、需求研究、網站設計、架設開發、技術評估。我們擅長提供精細服務，提供適切的開發建議，簡單易懂的技術說明，創造良善的專案體驗，協助您在網路世界中建立屬於自己的家，與野薑合作，悠遊於數位世界。</p>
        </div>
    </div>

</main>

<?php
get_footer();
