</main>

<?php
    $theme = theme();
    $footerColor = 'gray';
    if ($theme === 'dark-theme') $footerColor = 'gold';
?>

<div class="footer-main">
    <img src="<?= esc_url( get_template_directory_uri() ) ?>/img/logo-<?=$footerColor?>.svg" alt="Ginger Design" class="footer-logo">
    <h2>野薑設計工作室</h2>
    <h3>Ginger Design</h3>
    <ul class="list-social">
        <li><a href="#"><img src="<?= esc_url( get_template_directory_uri() ) ?>/img/facebook-<?=$footerColor?>.svg" alt="Ginger Design Facebook"></a></li>
        <li><a href="#"><img src="<?= esc_url( get_template_directory_uri() ) ?>/img/in-<?=$footerColor?>.svg" alt="Ginger Design Linkedin"></a></li>
    </ul>
    <p class="center-line-text"><span>Contact time</span></p>
    <p>Mon ~ Fri  10:00 ~ 18:00</p>
    <p class="center-line-text"><span>Email</span></p>
    <p><a href="mailto:contact@gingerdesign.com.tw">contact@gingerdesign.com.tw</p>
</div>

</div><!-- #page -->

<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="<?= esc_url( get_template_directory_uri() ) ?>/js/main.js" type="module"></script>

</body>
</html>
