<?php get_header(); ?>
<main>
    <?php get_template_part('template/bread-crumb') ?>
    <section class="blog-post">
        <div class="blog-post-container">
            <article>
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                ?>
                        <p class="category">
                            <?php
                            $categories = get_the_category();
                            console_log($categories);
                            $category = $categories[0];
                            ?>
                            <a href="<?php echo get_category_link($category->term_id) ?>">
                                <span>
                                    <?php echo $category->name; ?>
                                </span>
                            </a>
                        </p>
                        <h1><?php the_title(); ?></h1>
                        <ul class="social-area">
                            <li>はてぶ</li>
                            <li>faccebook</li>
                            <li>twitter</li>
                            <time class="blog-date"><?php the_time('Y-m-d'); ?></time>
                        </ul>
                        <div class="caption">
                            <?php the_post_thumbnail(); ?>
                        </div>




                        <?php the_content(); ?>

                <?php endwhile;
                endif; ?>

            </article>
            <aside>
                <div class="related-articles">
                    <h2 class="aside-title">
                        <span>関連記事</span>
                    </h2>
                    <ul>
                        <li class="related-articles-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/sample01.png" alt="" />
                            <p class="related-articles-card-title">
                                ブログタイトルテキストテキストテキストテキストテキストテキスト
                            </p>
                        </li>
                        <li class="related-articles-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/sample01.png" alt="" />
                            <p class="related-articles-card-title">
                                ブログタイトルテキストテキストテキストテキストテキストテキスト
                            </p>
                        </li>
                        <li class="related-articles-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/sample01.png" alt="" />
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
