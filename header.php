<?php
    $theme = theme();
?>

<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2150625846941263" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body class="<?=$theme?>">
<?php wp_body_open(); ?>
<div id="page" class="site">
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
                    <li class="<?php if($pagename === '/category/projects') echo 'active'; ?>">
                        <a href="/category/projects">專案作品</a>
                    </li>
                    <li class="<?php if($pagename === 'service') echo 'active'; ?>">
                        <a href="/service">服務項目</a>
                    </li>
                    <li class="<?php if($pagename === 'blog') echo 'active'; ?>">
                        <a href="/blog">部落格</a>
                    </li>
                    <li class="<?php if($pagename === 'about') echo 'active'; ?>">
                        <a href="/about">關於我們</a>
                    </li>
                    <li class="<?php if($pagename === 'contact') echo 'active'; ?>">
                        <a href="/contact">聯絡我們</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
	<main class="main-main">
