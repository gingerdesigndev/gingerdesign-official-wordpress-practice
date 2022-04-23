<?php
get_header();
?>

<div id="page-blog">
    <div class="container">
        <header class="header-page">
            <h1>Service<span>服務項目</span></h1>
            <p>從小型登陸頁到大型正式網站，<br>野薑致力於提供高品質設計給您。</p>
        </header>
        <ul class="list-service row gx-5">
            <li class="col-12 col-lg-6">
                <a href="">
                    <img src="<?= esc_url( get_template_directory_uri() ) ?>/img/service-1.svg" alt="登陸頁形象官網建置服務">
                    <h2>登陸頁形象官網建置服務<span>Landing Page Crafting Service</span></h2>
                    <p>項目包含官方網站、形象網站、活動網站、遊戲型網站等。項目包含官方網站、形象網站、活動網站、遊戲型網站等。</p>
                </a>
            </li>
            <li class="col-12 col-lg-6">
                <a href="">
                    <img src="<?= esc_url( get_template_directory_uri() ) ?>/img/service-1.svg" alt="知識內容型網站服務">
                    <h2>知識內容型網站服務<span>Content Management System Crafting Service</span></h2>
                    <p>項目包含官方網站、形象網站、活動網站、遊戲型網站等。項目包含官方網站、形象網站、活動網站、遊戲型網站等。</p>
                </a>
            </li>
            <li class="col-12 col-lg-6">
                <a href="">
                    <img src="<?= esc_url( get_template_directory_uri() ) ?>/img/service-3.svg" alt="網路策略諮詢服務">
                    <h2>網路策略諮詢服務<span>Digital Strategy Consulting Service</span></h2>
                    <p>項目包含官方網站、形象網站、活動網站、遊戲型網站等。項目包含官方網站、形象網站、活動網站、遊戲型網站等。</p>
                </a>
            </li>
            <li class="col-12 col-lg-6">
                <a href="">
                    <img src="<?= esc_url( get_template_directory_uri() ) ?>/img/service-4.svg" alt="用戶需求研究及工作坊">
                    <h2>用戶需求研究及工作坊<span>User Research Workshop</span></h2>
                    <p>項目包含官方網站、形象網站、活動網站、遊戲型網站等。項目包含官方網站、形象網站、活動網站、遊戲型網站等。</p>
                </a>
            </li>
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
