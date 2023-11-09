<button class="navbtn" onClick="document.querySelector('body').classList.toggle('open')">
    <span class="navbtn-bar"></span>
    <span class="sr-only">MENU</span>
</button>

<nav class="nav center">
    <div class="container">
        <ul class="menu">
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
        <button class="c-button --accent">
            <a href="/contact" class="astro-VNZLVQNM">資料請求</a>
        </button>
        <button class="c-button --main">
            <a href="/contact" class="astro-VNZLVQNM">お問い合わせ</a>
        </button>
        <h1 class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo@2x.png" />
        </h1>

        <address class="address">
            <p>0123-456-7890</p>
            <p>平日08:00~20:00</p>
        </address>
    </div>
</nav>
