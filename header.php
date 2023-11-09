<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/scroll-hint@latest/css/scroll-hint.css">
    <?php wp_head(); ?>
</head>
<header class="l-header">
    <h1 class="l-header-logo">
        <a href="/">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo@2x.png" class="astro-3EF6KSR2">
        </a>
    </h1>
    <nav class="l-header-gnav">
        <ul>
            <li>
                <a href="/">ホーム</a>
            </li>
            <li>
                <a href="/news">お知らせ</a>
            </li>
            <li>
                <a href="/post">ブログ</a>
            </li>
            <li>
                <a href="/price">コース・料金</a>
            </li>
        </ul>
        <div class="l-header-right">
            <address class="l-header-address">
                <p class="l-header-small"><small>平日08:00〜20:00</small></p>
                <p class="l-header-call">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/tell.svg" alt="" />
                    <span>0123-456-7890</span>
                </p>
            </address>
            <button class="c-button --accent">
                <a href="/contact" class="astro-VNZLVQNM">資料請求</a>
            </button>
            <button class="c-button --main">
                <a href="/contact" class="astro-VNZLVQNM">お問い合わせ</a>
            </button>
        </div>
    </nav>
    <?php get_template_part('template/nav-btn') ?>
</header>

<body>
