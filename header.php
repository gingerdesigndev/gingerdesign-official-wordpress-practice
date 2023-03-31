<?php
    $theme = theme();
?>

<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YSVCVM9QTW"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-YSVCVM9QTW');
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WC755MQ');</script>
    <!-- End Google Tag Manager -->
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WC755MQ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <script> !function(f,b,e,v,n,t,s) {if(f.fbq)return;n=f.fbq=function(){n.callMethod? n.callMethod.apply(n,arguments):n.queue.push(arguments)}; if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0'; n.queue=[];t=b.createElement(e);t.async=!0; t.src=v;s=b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t,s)}(window, document,'script', 'https://connect.facebook.net/en_US/fbevents.js'); fbq('init', '1054225351953895'); fbq('track', 'PageView'); </script>

    <script> !function(f,b,e,v,n,t,s) {if(f.fbq)return;n=f.fbq=function(){n.callMethod? n.callMethod.apply(n,arguments):n.queue.push(arguments)}; if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0'; n.queue=[];t=b.createElement(e);t.async=!0; t.src=v;s=b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t,s)}(window, document,'script', 'https://connect.facebook.net/en_US/fbevents.js'); fbq('init', '1054225351953895'); fbq('track', 'PageView'); </script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="<?= esc_url( get_template_directory_uri() ) ?>/style.css?20230125" />
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2150625846941263" crossorigin="anonymous"></script>
	
    <?php $currentUrl = parse_url(home_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH) );?>
</head>

<body class="<?=$theme?> <?php if (is_home()) echo 'body-home'; ?>">

<?php if (is_home()): ?>
    <?=get_template_part( 'template-parts/content/index-animation' );?>
<?php endif; ?>

<div id="page" class="site <?php if (is_home()) echo 'home'; ?>">
    <header class="header-main">
        <div class="container">
            <h1>
                <a href="/">
                    <?php
                        $logo = 'logo';
                        if ($theme === 'dark-theme') {
                            $logo = 'logo-dark';
                        }
                    ?>
                    <img src="<?= esc_url( get_template_directory_uri() ) ?>/img/<?=$logo?>.svg" alt="Ginger Design">
                </a>
            </h1>
            <nav class="nav-main">
                <ul>
                    <li class="<?php if($currentUrl['path'] === '/projects/') echo 'active'; ?>">
                        <a href="/category/projects">成功案例</a>
                    </li>
                    <li class="<?php if($pagename === 'service') echo 'active'; ?>">
                        <a href="/service">服務項目</a>
                    </li>
                    <li class="<?php if($pagename === 'blog') echo 'active'; ?>">
                        <a href="/blog">知識專欄</a>
                    </li>
                    <li class="<?php if($pagename === 'about') echo 'active'; ?>">
                        <a href="/about">關於我們</a>
                    </li>
                    <li class="highlight <?php if($pagename === 'contact') echo 'active'; ?>">
                        <a href="/contact">聯絡我們</a>
                    </li>
                    <li>
                        <div class="box-search">
                            <?=get_search_form()?>
                            <div class="btn-search"><span class="material-icons btn-search">search</span></div>
                            <span class="material-icons btn-search-close">close</span>
                        </div>
                    </li>
                </ul>
            </nav>
            
            <div class="btn-nav-main"><i></i><i></i><i></i></div>
        </div>
    </header>
	<main class="main-main">
