<?php get_header(); ?>
<main>
    <?php get_template_part('template/bread-crumb') ?>
    <section class="news-post">
        <article>
            <h1>
                お知らせのタイトルテキストテキストテキストテキストテキストテキストテキスト
            </h1>
            <p class="news-date"><time datetime="2020-10-01">2020-10-01</time></p>
            <h2>見出し1</h2>
            <p>
                本文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </p>
            <h3>見出しh3</h3>
            <p>
                本文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </p>
            <blockquote>
                <p>
                    引用文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                </p>
            </blockquote>
            <div class="caption">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/other/sample4.png" alt="" />
            </div>
            <li class="list-item">リストリストリストリストリスト</li>
            <li class="list-item">リストリストリストリストリスト</li>
            <li class="list-item">リストリストリストリストリスト</li>
            <p class="link">
                <a href="">テキストリンク</a>
                <a href="">テキストリンク</a>
            </p>
        </article>
    </section>
    <?php get_template_part('template/cta') ?>
</main>



<?php get_footer(); ?>
