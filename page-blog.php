<?php
get_header();
?>

<div id="page-blog">
    <div class="container">
        <header class="header-page">
            <h1>Blog<span>部落格</span></h1>
            <p>展開專案充滿期待又擔心受傷害嗎？<br>來看看各種案例，讓您對專案有大方向！</p>
        </header>
        <nav class="nav-blog">
            <ul>
                <li>
                    <a href="#featured">精選文章</a>
                </li>
                <li>
                    <a href="#cooperate">我要如何合作</a>
                </li>
                <li>
                    <a href="#operate">如何營運網站</a>
                </li>
                <li>
                    <a href="#change">數位世界變化</a>
                </li>
                <li>
                    <a href="#diary">開業日記</a>
                </li>
            </ul>
        </nav>
        <?php
            get_template_part('template-parts/post/list', 'featured', array( 'category_name' => '精選文章', 'num' => 4 ));
        ?>
    </div>
</div>

<?php
get_footer();
