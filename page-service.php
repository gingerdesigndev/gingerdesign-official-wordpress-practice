<?php
get_header();
?>

<div id="page-blog">
    <div class="container">
        <?=get_template_part( 'template-parts/content/content-service' );?>
        <div class="box-service-contact">
            <img src="<?= esc_url( get_template_directory_uri() ) ?>/img/gem.svg" alt="填寫您的需求表單">
            <p>您好，請填寫您的需求表單，<br>幫助您釐清專案思考</p>
            <a href="#" class="btn btn-gold">聯絡我們</a>
        </div>
    </div>
</div>

<?php
get_footer();
