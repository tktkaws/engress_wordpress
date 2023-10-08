<?php get_header(); ?>
<main>
    <section class="top-hero">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/fv.png" />
        <div class="top-hero-content">
            <p class="top-hero-title">TOEFL対策はEngress</p>
            <p class="top-hero-desc">
                日本人へのTOEFL指導歴豊かな講師陣の
                <br />
                コーチング型TOEFLスクール
            </p>
            <button class="c-button-radius --hero">
                <a href="./contact.html" class="astro-EMKAGK7Q">資料請求</a>
            </button>
            <p class="top-hero-contact"><a href="/contact.html"> お問い合わせ</a></p>
        </div>
    </section>
    <section class="top-about">
        <h2 class="top-about-title">
            TOEFL学習で
            <br class="only-mb" />
            こんな悩みありませんか？
        </h2>
        <ul>
            <li>
                勉強の習慣が
                <br class="only-pc" />
                身についていない
            </li>
            <li>
                勉強しているはず
                <br class="only-pc" />
                なのに点数が伸びない
            </li>
            <li>
                正しい勉強方法が
                <br class="only-pc" />
                わからない
            </li>
        </ul>
        <div class="top-about-white">
            <div class="top-about-white-container">
                <p class="top-about-white-title">
                    Engressは
                    <br />
                    <span class="top-about-orange">TOEFLに特化したスクール</span>
                    <span class="top-about-ml">です</span>
                </p>
                <p class="top-about-white-desc">
                    完全オーダーメイドで、
                    <br class="only-mb" />
                    １人１人の悩みに合わせた最適な指導で
                    <br />
                    TOEFLの苦手分野を克服します。
                </p>
            </div>
        </div>
    </section>
    <section class="top-strength">
        <h2 class="top-strength-title">
            TOEFL対策に特化した
            <br class="only-mb" />Engress3つの強み
        </h2>
        <ul>
            <li class="top-strength__card">
                <div class="top-strength__card-content">
                    <p class="top-strength__card-tag">
                        <span>特長 1</span>
                    </p>
                    <h3 class="top-strength__card-title">
                        TOEFLに最適化された
                        <br class="only-pc" />無駄のないカリキュラム
                    </h3>
                    <p class="top-strength__card-text">
                        TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。
                    </p>
                </div>
                <div class="top-strength__card-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/feature01.png" alt="" />
                </div>
            </li>
            <li class="top-strength__card">
                <div class="top-strength__card-content">
                    <p class="top-strength__card-tag">
                        <span>特長 2</span>
                    </p>
                    <h3 class="top-strength__card-title">
                        日本人指導歴10年以上の
                        <br class="only-pc" />経験豊富な講師陣
                    </h3>
                    <p class="top-strength__card-text">
                        Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。
                    </p>
                </div>
                <div class="top-strength__card-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/feature02.png" alt="" />
                </div>
            </li>
            <li class="top-strength__card">
                <div class="top-strength__card-content">
                    <p class="top-strength__card-tag">
                        <span>特長 3</span>
                    </p>
                    <h3 class="top-strength__card-title">平均3ヶ月でTOEFL iBT20点アップ</h3>
                    <p class="top-strength__card-text">
                        Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。
                    </p>
                </div>
                <div class="top-strength__card-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/feature03.png" alt="" />
                </div>
            </li>
        </ul>
        <div class="top-strength__cta">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/price.png" />
            <div class="top-strength__cta-content">
                <p class="top-strength__cta-title">Engressの料金プランはこちら</p>
                <button class="c-button-radius --strength">
                    <a href="./contact.html">料金を見てみる</a>
                </button>
            </div>
        </div>
    </section>
    <section class="top-success">
        <h2 class="top-success-title">TOEFL成功事例</h2>

        <ul>
            <?php
            global $post;
            $args = array(
                'posts_per_page' => 3,
                'post_type' => 'examples',
                "order" => "ASC"
            );
            $myposts = get_posts($args);
            foreach ($myposts as $post) : setup_postdata($post); ?>
                <li class="top-success__card --first">
                    <div class="top-success__card-title">
                        <?php the_title(); ?>
                    </div>
                    <div class="top-success__white">
                        <img src="<?php the_field('image'); ?>">
                    </div>
                    <p class="top-success__card-tag"><?php the_field('tag'); ?></p>
                    <p class="top-success__card-name"><?php the_field('name'); ?></p>
                    <p class="top-success__card-caption"><?php the_field('desc'); ?></p>
                </li>
            <?php
            endforeach;
            wp_reset_postdata();
            ?>
        </ul>
    </section>
    <section class="top-process">
        <h2 class="top-process-title">ご利用の流れ</h2>
        <ul>
            <li class="top-process__card">
                <div class="top-process__card-number">
                    <span>01</span>
                </div>
                <h3 class="top-process__card-title">お問い合わせ</h3>
                <p class="top-process__card-desc">
                    まずはフォームまたはお電話からお申し込みください。
                </p>
            </li>
            <li class="top-process__card">
                <div class="top-process__card-number">
                    <span>02</span>
                </div>
                <h3 class="top-process__card-title">ヒアリング</h3>
                <p class="top-process__card-desc">
                    現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。
                </p>
            </li>
            <li class="top-process__card">
                <div class="top-process__card-number">
                    <span>03</span>
                </div>
                <h3 class="top-process__card-title">学習プランのご提供</h3>
                <p class="top-process__card-desc">
                    目標達成のために最適な学習プランをご提案致します。
                </p>
            </li>
            <li class="top-process__card">
                <div class="top-process__card-number">
                    <span>04</span>
                </div>
                <h3 class="top-process__card-title">ご入会</h3>
                <p class="top-process__card-desc">お申込み完了後、レッスンがスタートします。</p>
            </li>
        </ul>
    </section>
    <section class="top-faq">
        <h2 class="top-faq-title">よくある質問</h2>
        <details class="js-details">
            <summary class="js-summary">
                <span class="js-summary_inner">
                    Engressはサラリーマンでも学習を続けられるでしょうか？<span class="icon"></span>
                </span>
            </summary>
            <div class="js-content">
                <div class="js-content_inner">
                    Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。
                </div>
            </div>
        </details>

        <details class="js-details">
            <summary class="js-summary">
                <span class="js-summary_inner">
                    教材はオリジナルのものを使用しているのでしょうか？<span class="icon"></span>
                </span>
            </summary>
            <div class="js-content">
                <div class="js-content_inner">
                    Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。
                </div>
            </div>
        </details>

        <details class="js-details">
            <summary class="js-summary">
                <span class="js-summary_inner">
                    講師に日本人はいますか？<span class="icon"></span>
                </span>
            </summary>
            <div class="js-content">
                <div class="js-content_inner">
                    Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。
                </div>
            </div>
        </details>
        <details class="js-details">
            <summary class="js-summary">
                <span class="js-summary_inner">
                    TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？<span class="icon"></span>
                </span>
            </summary>
            <div class="js-content">
                <div class="js-content_inner">
                    Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。
                </div>
            </div>
        </details>
    </section>
    <section class="top-news">
        <div class="top-news-container">
            <div class="top-news-blog-container">
                <h2 class="top-news-title">ブログ</h2>
                <ul class="top-news__blog-list">
                    <li class="top-news__blog-card">
                        <div class="top-news__blog-card-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/sample01.png" alt="" />
                            <p class="top-news__blog-card-category">カテゴリー</p>
                        </div>
                        <p class="top-news__blog-card-title">Engress説明会in大阪の模様をお伝えします</p>
                        <p class="top-news__blog-card-date">
                            <time>2020-12-27</time>
                        </p>
                    </li>
                    <li class="top-news__blog-card">
                        <div class="top-news__blog-card-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/sample02.png" alt="" />
                            <p class="top-news__blog-card-category">カテゴリー</p>
                        </div>
                        <p class="top-news__blog-card-title">Engressもくもく会でみんなでTOEFL学習をしませんか？</p>
                        <p class="top-news__blog-card-date">
                            <time>2020-12-01</time>
                        </p>
                    </li>
                    <li class="top-news__blog-card">
                        <div class="top-news__blog-card-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/sample03.png" alt="" />
                            <p class="top-news__blog-card-category">カテゴリー</p>
                        </div>
                        <p class="top-news__blog-card-title">TOEFL学習にはコーチング学習が最強である話</p>
                        <p class="top-news__blog-card-date">
                            <time>2020-11-20</time>
                        </p>
                    </li>
                </ul>
            </div>
            <div class="top-news-news-container">
                <h2 class="top-news-title">お知らせ</h2>
                <ul class="top-news-news-list">
                    <li class="top-news__news-card">
                        <p class="top-news__news-card-title">2021年のスケジュールについて</p>
                        <time class="top-news__news-card-date">2020-12-01</time>
                    </li>
                    <li class="top-news__news-card">
                        <p class="top-news__news-card-title">11月休校日のお知らせ</p>
                        <time class="top-news__news-card-date">2019-11-02</time>
                    </li>
                    <li class="top-news__news-card">
                        <p class="top-news__news-card-title">10月休校日のお知らせ</p>
                        <time class="top-news__news-card-date">2020-10-01</time>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <?php get_template_part('template/cta') ?>
</main>



<?php get_footer(); ?>
