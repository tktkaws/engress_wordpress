<?php get_header(); ?>
<main>
    <?php get_template_part('template/bread-crumb') ?>
    <section class="blog-post">
        <div class="blog-post-container">
            <article>
                <p class="blog-post-category"><span>カテゴリ1</span></p>
                <h1>ブログタイトルテキストテキストテキストテキスト</h1>
                <ul class="social-area">
                    <li>はてぶ</li>
                    <li>faccebook</li>
                    <li>twitter</li>
                    <time class="blog-post-date">2020-01-01</time>
                </ul>
                <div class="caption">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/sample01@2x.png" alt="" />
                </div>
                <h2>見出しh2</h2>
                <p>
                    親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。
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

                <footer class="recommended-articles">
                    <p class="recommended-articles-title">おすすめの記事</p>
                    <ul class="top-news__blog-list">
                        <li class="top-news__blog-card">
                            <div class="top-news__blog-card-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/sample01.png"
                                    alt="" />
                                <p class="top-news__blog-card-category">カテゴリー</p>
                            </div>
                            <p class="top-news__blog-card-title">Engress説明会in大阪の模様をお伝えします</p>
                            <p class="top-news__blog-card-date">
                                <time>2020-12-27</time>
                            </p>
                        </li>
                        <li class="top-news__blog-card">
                            <div class="top-news__blog-card-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/sample02.png"
                                    alt="" />
                                <p class="top-news__blog-card-category">カテゴリー</p>
                            </div>
                            <p class="top-news__blog-card-title">Engressもくもく会でみんなでTOEFL学習をしませんか？</p>
                            <p class="top-news__blog-card-date">
                                <time>2020-12-01</time>
                            </p>
                        </li>
                        <li class="top-news__blog-card">
                            <div class="top-news__blog-card-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/sample03.png"
                                    alt="" />
                                <p class="top-news__blog-card-category">カテゴリー</p>
                            </div>
                            <p class="top-news__blog-card-title">TOEFL学習にはコーチング学習が最強である話</p>
                            <p class="top-news__blog-card-date">
                                <time>2020-11-20</time>
                            </p>
                        </li>
                    </ul>
                </footer>
            </article>
            <aside>
                <div class="related-articles">
                    <h2 class="aside-title">
                        <span>関連記事</span>
                    </h2>
                    <ul>
                        <li class="related-articles-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/sample01.png"
                                alt="" />
                            <p class="related-articles-card-title">
                                ブログタイトルテキストテキストテキストテキストテキストテキスト
                            </p>
                        </li>
                        <li class="related-articles-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/sample01.png"
                                alt="" />
                            <p class="related-articles-card-title">
                                ブログタイトルテキストテキストテキストテキストテキストテキスト
                            </p>
                        </li>
                        <li class="related-articles-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/sample01.png"
                                alt="" />
                            <p class="related-articles-card-title">
                                ブログタイトルテキストテキストテキストテキストテキストテキスト
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="categries">
                    <h2 class="aside-title">
                        <span>カテゴリー</span>
                    </h2>
                    <ul>
                        <ul>
                            <li>・カテゴリー1</li>
                            <li>・カテゴリー2</li>
                            <li>・カテゴリー3</li>
                        </ul>
                    </ul>
                </div>
            </aside>
        </div>
    </section>
    <?php get_template_part('template/cta') ?>
</main>



<?php get_footer(); ?>
