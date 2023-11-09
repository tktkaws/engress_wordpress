<?php get_header(); ?>
<main>
    <?php get_template_part('template/bread-crumb') ?>
    <section class="blog-post">
        <div class="blog-post-container">
            <div class="main-contents">
                <article class="article">
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                    ?>
                    <p class="category">
                        <?php
                                $categories = get_the_category();
                                $category = $categories[0];
                                ?>
                        <a href="<?php echo get_category_link($category->term_id) ?>">
                            <span>
                                <?php echo $category->name; ?>
                            </span>
                        </a>
                    </p>
                    <h1><?php the_title(); ?></h1>
                    <div class="social-area">
                        <?php if (function_exists('ADDTOANY_SHARE_SAVE_KIT')) {
                                    ADDTOANY_SHARE_SAVE_KIT();
                                } ?>
                        <time class="blog-date"><?php the_time('Y-m-d'); ?></time>
                    </div>
                    <div class="caption">
                        <?php the_post_thumbnail(); ?>
                        <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(); ?>
                        <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/other/dummy.png" alt="代替画像"
                            class="alt-image">
                        <?php endif; ?>
                    </div>
                    <?php the_content(); ?>
                    <?php endwhile;
                    endif; ?>

                </article>
                <section class="recommended-articles">
                    <p class="recommended-articles-title">おすすめの記事</p>
                    <ul class="blog-index-list">
                        <?php
                        $args = ['tag' => 'pickup'];
                        $custom_posts = get_posts($args);
                        foreach ($custom_posts as $post) : setup_postdata($post); ?>
                        <li class="blog-card">
                            <div class="blog-card-image">
                                <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail(); ?>
                                <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/other/dummy.png"
                                    alt="代替画像" class="alt-image">
                                <?php endif; ?>
                                <p class="blog-card-tag">
                                    <?php
                                        $categories = get_the_category();
                                        $category = $categories[0];
                                        ?>
                                    <a href="<?php echo get_category_link($category->term_id) ?>">
                                        <span>
                                            <?php echo $category->name; ?>
                                        </span>
                                    </a>
                                </p>
                            </div>
                            <a class="blog-link" href="<?php the_permalink(); ?>">
                                <p class="blog-card-title">
                                    <?php
                                        if (mb_strlen($post->post_title) > 40) {
                                            $title = mb_substr($post->post_title, 0, 40);
                                            echo $title . '...';
                                        } else {
                                            echo $post->post_title;
                                        }
                                        ?>
                                </p>
                            </a>
                            <time class="blog-card-date"
                                datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </section>

            </div>

            <aside class="aside">
                <div class="related-articles">
                    <h2 class="aside-title">
                        <span>関連記事</span>
                    </h2>
                    <ul>
                        <?php
                        $categories = get_the_category();
                        $category_ID = array();
                        foreach ($categories as $category) :
                            array_push($category_ID, $category->cat_ID);
                        endforeach;
                        $args = array(
                            'post__not_in' => array($post->ID),
                            'posts_per_page' => 3,
                            'category__in' => $category_ID,
                            'orderby' => 'rand',
                        );
                        $query = new WP_Query($args);
                        ?>
                        <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                        <a href="<?php the_permalink() ?>">
                            <li class="related-articles-card">
                                <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail(); ?>
                                <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo@2x.png"
                                    alt="">
                                <?php endif; ?>
                                <p class="related-articles-card-title">
                                    <?php
                                            if (mb_strlen($post->post_title) > 40) {
                                                $title = mb_substr($post->post_title, 0, 40);
                                                echo $title . '...';
                                            } else {
                                                echo $post->post_title;
                                            }
                                            ?>
                                </p>
                            </li>
                        </a>
                        <?php endwhile;
                        else : ?>
                        <p class="related-articles-notice">関連記事はありません。</p>
                        <?php endif; ?>

                        <?php wp_reset_postdata(); ?>
                    </ul>
                </div>
                <div class="categries">
                    <h2 class="aside-title">
                        <span>カテゴリー</span>
                    </h2>
                    <ul>
                        <?php
                        $categories = get_categories(array(
                            'orderby' => 'name',
                            'order' => 'ASC',
                            'number' => 5
                        ));
                        foreach ($categories as $category) {
                        ?>
                        <li>
                            <a href="<?php echo get_category_link($category->term_id); ?>">
                                <?php echo $category->name; ?>
                            </a>
                        </li>

                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </aside>
        </div>
    </section>
    <?php get_template_part('template/cta') ?>
</main>



<?php get_footer(); ?>
