<?php get_header(); ?>
<main>
    <?php get_template_part('template/bread-crumb') ?>
    <section class="l-hero">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/other/blog.png" />
        <h2 class="l-hero-title">ブログ</h2>
    </section>
    <section class="blog-index">
        <h1 class="blog-index-title">新着一覧</h1>

        <ul class="blog-index-list">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
            ?>
                    <li class="blog-card">
                        <div class="blog-card-image">
                            <?php the_post_thumbnail(); ?>
                            <p class="blog-card-tag">
                                <?php
                                $categories = get_categories();
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
                            <p class="blog-card-title"><?php
                                                        if (mb_strlen($post->post_title) > 40) {
                                                            $title = mb_substr($post->post_title, 0, 40);
                                                            echo $title . '...';
                                                        } else {
                                                            echo $post->post_title;
                                                        }
                                                        ?></p>
                        </a>
                        <time class="blog-card-date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time>
                        <p class="blog-card-desc">
                            <?php echo get_the_excerpt(); ?>
                        </p>
                    </li>
            <?php endwhile;
            endif; ?>
        </ul>
        <?php the_posts_pagination(
            array(
                'prev_next' => false,
                'type'      => 'list',
            )
        ); ?>
    </section>
    <?php get_template_part('template/cta') ?>
</main>



<?php get_footer(); ?>
