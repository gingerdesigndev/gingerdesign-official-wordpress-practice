<?php
get_header();
?>

<div id="page-blog">
    <div class="container">
        <header class="header-page">
            <h1>Blog<span>知識專欄</span></h1>
            <p>展開專案充滿期待又擔心受傷害嗎？<br>來看看各種案例，讓您對專案有大方向！</p>
        </header>
        <nav class="nav-blog">
            <ul>
                <li>
                    <a href="#featured">精選文章</a>
                </li>
                <li>
                    <a href="#manual">我要如何合作</a>
                </li>
                <li>
                    <a href="#guide">如何營運網站</a>
                </li>
                <li>
                    <a href="#viewpoint">數位世界變化</a>
                </li>
                <li>
                    <a href="#news">開業日記</a>
                </li>
            </ul>
        </nav>
    </div>
    <?php get_template_part('template-parts/post/list', 'featured', array( 'category_slug' => 'featured', 'num' => 4 )); ?>
    <?php get_template_part('template-parts/post/list', 'manual', array( 'category_slug' => 'manual', 'num' => 2 )); ?>
    <?php get_template_part('template-parts/post/list', 'guide', array( 'category_slug' => 'guide', 'num' => 3 )); ?>
    <?php get_template_part('template-parts/post/list', 'viewpoint', array( 'category_slug' => 'viewpoint', 'num' => 3 )); ?>
    <?php get_template_part('template-parts/post/list', 'lab', array( 'category_slug' => 'lab', 'num' => 3 )); ?>
    <?php get_template_part('template-parts/post/list-fb-posts'); ?>
</div>

<?php
get_footer();
