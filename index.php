<?php

$homeDataPage = get_page_by_path('home-data');
$feedback = get_field('feedback', $homeDataPage->ID);
$clientsImgDesktop = get_field('clients_img_desktop', $homeDataPage->ID);
$clientsImgMobile = get_field('clients_img_mobile', $homeDataPage->ID);
get_header();
?>

<?php
get_footer();
