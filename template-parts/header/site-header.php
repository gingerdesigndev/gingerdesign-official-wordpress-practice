<header class="header-main">
	<div class="container">
        <h1>
            <a href="/">
                <img src="<?= esc_url( get_template_directory_uri() ) ?>/img/logo.svg" alt="Ginger Design">
            </a>
        </h1>
        <nav class="nav-main">
            <ul>
                <li class="<?php if($pagename === 'portfolio') echo 'active'; ?>">
                    <a href="/portfolio">專案作品</a>
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
