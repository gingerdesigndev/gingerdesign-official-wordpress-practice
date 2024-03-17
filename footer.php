</main>

<?php if (!$args['isBlankPage']): ?>
    <div class="footer-main">
        <svg class="footer-logo" width="83" height="83" viewBox="0 0 83 83" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M39.7626 48.733C39.7626 48.733 31.4475 46.4561 24.8635 49.0135C18.2796 51.571 17 57.004 17 57.004C17 57.004 21.982 60.7966 27.1382 59.9292C32.2943 59.0618 37.9773 55.2127 39.7626 48.733Z" fill="#9E9E9E"/>
            <path d="M42.3828 48.7376C42.3828 48.7376 50.698 46.4583 57.2819 49.0158C63.8658 51.5732 65.1455 57.0086 65.1455 57.0086C65.1455 57.0086 60.1634 60.8012 55.0073 59.9314C49.8512 59.0617 44.1682 55.2149 42.3828 48.7376Z" fill="#9E9E9E"/>
            <path d="M41.0303 49.6167C41.0303 49.6167 40.0894 57.1594 40.0894 59.2807C40.0894 61.4021 40.8515 61.4021 41.0091 61.4021C41.1667 61.4021 41.9712 61.4021 41.9712 59.302C41.9712 57.2018 41.0303 49.6167 41.0303 49.6167Z" fill="#9E9E9E"/>
            <path d="M53.6006 20C53.6006 20 51.0131 21.8692 49.3454 23.0406C47.7811 24.139 43.0367 26.1426 41.0326 28.4431C39.0237 26.1449 34.284 24.1414 32.7197 23.043C31.0496 21.8645 28.4645 20.0047 28.4645 20.0047C26.8674 20.8509 24.8491 29.7041 26.0182 34.588C27.1873 39.4719 35.1919 42.9156 37.4336 44.7682C39.1319 46.1684 41.0326 48.153 41.0326 48.153C41.0467 48.1389 42.9379 46.166 44.6291 44.7682C46.8732 42.9179 54.8755 39.4742 56.0446 34.5904C57.2136 29.7065 55.1978 20.8603 53.6006 20ZM41.0043 45.8596C41.0043 45.8596 40.0846 38.3169 40.0846 36.1955C40.0846 34.0742 40.8467 34.0742 41.0043 34.0742C41.1619 34.0742 41.9664 34.0742 41.9664 36.1767C41.9664 38.2792 41.0043 45.8596 41.0043 45.8596Z" fill="#9E9E9E"/>
            <path d="M34.9425 46.4915C34.9425 46.4915 27.8694 43.7667 26.004 42.7696C24.1387 41.7726 24.4892 41.1008 24.5645 40.9594C24.6397 40.818 25.0349 40.1109 26.8673 41.0938C28.6997 42.0767 34.9425 46.4915 34.9425 46.4915Z" fill="#9E9E9E"/>
            <path d="M47.1367 46.4512C47.1367 46.4512 54.3416 44.0942 56.2634 43.2055C58.1852 42.3169 57.8629 41.6169 57.7971 41.4707C57.7312 41.3246 57.3831 40.601 55.4895 41.4849C53.596 42.3688 47.1367 46.4512 47.1367 46.4512Z" fill="#9E9E9E"/>
            <path class="circle" d="M41.3456 81.8574C63.6279 81.8574 81.6913 63.7569 81.6913 41.4287C81.6913 19.1006 63.6279 1 41.3456 1C19.0634 1 1 19.1006 1 41.4287C1 63.7569 19.0634 81.8574 41.3456 81.8574Z" stroke="#9E9E9E" stroke-width="2" stroke-miterlimit="10"/>
        </svg>
        <h2 style="letter-spacing: .07em;">野薑設計工作室</h2>
        <h3>Ginger Design</h3>
        <ul class="list-social">
            <li class="facebook">
                <a href="https://www.facebook.com/GingerDesignUIUX" target="_blank" rel="noopener noreferrer">
                    <?php get_template_part('/template-parts/svg/facebook'); ?>
                </a>
            </li>
            <li class="instagram">
                <a href="https://instagram.com/gingerdesigntw?igshid=MmIzYWVlNDQ5Yg==" target="_blank" rel="noopener noreferrer">
                    <?php get_template_part('/template-parts/svg/instagram'); ?>
                </a>
            </li>
            <li class="line">
                <a href="https://lin.ee/XYfFeH7" target="_blank" rel="noopener noreferrer">
                    <?php get_template_part('/template-parts/svg/line'); ?>
                </a>
            </li>
        </ul>
        <p class="center-line-text"><span>Contact time</span></p>
        <p>Mon ~ Fri  10:00 ~ 18:00</p>
        <p class="center-line-text"><span>Email</span></p>
        <p><a href="mailto:contact@gingerdesign.com.tw">contact@gingerdesign.com.tw</a></p>
    </div>

    <div id="img-show"><img id="img-show-img" src=""></div>
    <div id="btns-fixed">
        <ul>
            <li><a href="#page"><span class="material-icons">keyboard_arrow_up</span></a></li>
            <li><a href="https://lin.ee/u7j7mWJ" target="_blank"><?php get_template_part('/template-parts/svg/line-simple'); ?></a></li>
            <li><a href="https://www.messenger.com/t/2068633876694243/?messaging_source=source%3Apages%3Amessage_shortlink&source_id=1441792" target="_blank"><?php get_template_part('/template-parts/svg/messenger'); ?></a></li>
        </ul>
    </div>
<?php endif; ?>

</div><!-- #page -->

<?php if (!$args['isBlankPage']): ?>

<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="<?= esc_url( get_template_directory_uri() ) ?>/js/main.js?20240317" type="module"></script>
<!-- 
<script type="text/javascript"> var arrgetbtn=[]; arrgetbtn.push({"title":"Facebook Messenger","icon":"fwidgethelp-facebook-messenger","link":"https://www.messenger.com/t/2068633876694243/?messaging_source=source%3Apages%3Amessage_shortlink&source_id=1441792","target":"_blank","color":"#FFFFFF","background":"#6699FF"}); arrgetbtn.push({"title":"yichunchen","icon":"fwidgethelp-line-messenger","link":"https://lin.ee/u7j7mWJ","target":"_blank","color":"#FFFFFF","background":"#00B900"}); var WidGetButtonOptions = { id:"7ea76983a93979e5c6b8ae2715a26c9e", iconopen:"fwidgethelp-commenting-o", maintitle:"", mainbackground:"#ffd28d", maincolor:"#ffffff", pulse:"widgethelp_pulse", fasize:"2", direction:"top", position:"rightbottom", arrbtn: arrgetbtn }; (function() { var script = document.createElement("script"); script.type = "text/javascript"; script.async = true; script.src = "https://getbtn.com/widget/index.php?id="+WidGetButtonOptions.id; document.getElementsByTagName("head")[0].appendChild(script); })();</script> -->

<?php endif; ?>


</body>
</html>
