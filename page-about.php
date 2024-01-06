<?php
$aboutPage = get_page_by_path('about');
$title = get_field('title', $aboutPage->ID);
$desc = get_field('desc', $aboutPage->ID);
$team = get_field('team', $aboutPage->ID);
get_header();
?>

<div id="page-about" class="py-5">
    <div class="box-about about-intro">
        <div class="container">
            <div class="box-sm">
                <h1>Hello，我們是野薑設計</h1>
                <div class="about-quote">
                    <img src="<?= esc_url( get_template_directory_uri() ) ?>/img/quote.svg" alt="">
                    <div class="title"><pre><?=$title?></pre></div>
                </div>
                <div class="desc"><pre><?=$desc?></pre></div>
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
                <?php foreach($team as $p): ?>
                <div class="col-12 col-lg-3 mb-4">
                    <img src="<?=$p['img']['sizes']['thumbnail']?>" alt="<?=$p['name']?>">
                    <h3><?=$p['name']?></h3>
                    <h4><?=$p['job']?></h4>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="about-team py-5">
        <div class="container">
            <h2 class="title-lg text-center">專案經驗</h2>
            <p class="box-sm">自己摸索架站會帶來樂趣，但與我們合作更有效益。相信我們，如果您是一家園藝商，將網路技術交給我們，您專注在植物、員工、您的事業，會是更好的作法。</p>
            <div class="text-center">
                <a href="/contact" class="btn btn-gold">聯絡我們</a>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfrZmyH9r2QDm64SKet-OK_5lCUHz6Aeua1pjltuJTuTMJj-g/viewform?embedded=true" width="640" height="3510" frameborder="0" marginheight="0" marginwidth="0">載入中…</iframe>
    </div>
</div>

<?php
get_footer();
