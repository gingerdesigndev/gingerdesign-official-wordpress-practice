<?php
get_header();
?>

<div id="page-about" class="py-5">
    <div class="box-about about-intro">
        <div class="container">
            <div class="box-sm">
                <h1>Hello，我們是野薑設計</h1>
                <div class="about-quote">
                    <img src="<?= esc_url( get_template_directory_uri() ) ?>/img/quote.svg" alt=""">
                    <p>網路世界變化快速，您需要數位導遊<br>The online world is changing fast<br>and you need a digital tour guide.</p>
                </div>
                <p class="mb-xl">野薑設計專注客製化數位設計服務。提供網路知識顧問、用戶研究、網站設計UI/UX、網站架設開發、技術評估及原型打造。我們謹慎評估您的需求，並提供適切建議及簡單易懂的技術說明。客製化的設計利於傳遞您的產品服務價值，適合需要高品質設計的您。</p>
                <div class="text-center">
                    <a href="/contact" class="btn btn-gold">聯絡我們</a>
                </div>
            </div>
        </div>
    </div>
    <div class="box-about about-team py-5">
        <div class="container">
            <h2 class="title-lg text-center">專業團隊</h2>
            <div class="row gx-5 list-team">
                <div class="col-12 col-lg-3 mb-4">
                    <img src="<?= esc_url( get_template_directory_uri() ) ?>/img/ginger.png" alt="Ginger">
                    <h3>Ginger</h3>
                    <h4>PM / UIUX Team</h4>
                </div>
                <div class="col-12 col-lg-3 mb-4">
                    <img src="<?= esc_url( get_template_directory_uri() ) ?>/img/dana.png" alt="Dana">
                    <h3>Dana</h3>
                    <h4>Frontend Team</h4>
                </div>
                <div class="col-12 col-lg-3 mb-4">
                    <img src="<?= esc_url( get_template_directory_uri() ) ?>/img/alice.png" alt="Alice">
                    <h3>Alice</h3>
                    <h4>Backend Team</h4>
                </div>
                <div class="col-12 col-lg-3 mb-4">
                    <img src="<?= esc_url( get_template_directory_uri() ) ?>/img/hanyu.png" alt="Hanyu">
                    <h3>Hanyu</h3>
                    <h4>Visual Team</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="about-team py-5">
        <div class="container">
            <h2 class="title-lg text-center">專案經驗</h2>
            <p class="box-sm">自己摸索會帶來樂趣，但與我們合作更有效益。相信我們，如果您是一家園藝商，將網路技術交給我們，您專注在植物、員工、您的事業，會是更好的作法。</p>
            <ul class="about-works">
                <li><img src="<?= esc_url( get_template_directory_uri() ) ?>/img/work-1.png" alt=""></li>
                <li><img src="<?= esc_url( get_template_directory_uri() ) ?>/img/work-2.png" alt=""></li>
            </ul>
            <div class="text-center">
                <a href="/contact" class="btn btn-gold">聯絡我們</a>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfbULZw95-QLvdRs2ir7ciWd_nK52pkybDeh1NKpKsND9Ye2Q/viewform?embedded=true" width="640" height="3400" frameborder="0" marginheight="0" marginwidth="0" style="width: 100%;">載入中…</iframe>
    </div>
</div>

<?php
get_footer();
