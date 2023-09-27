<?php get_header(); ?>
<main>
    <section class="l-hero">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/other/news.png" />
        <h2 class="l-hero-title">お知らせ</h2>
    </section>
    <?php get_template_part('template/bread-crumb') ?>
    <section class="blog-index">
        <h1 class="news-index-title">お知らせ一覧</h1>

        <ul class="news-index-list">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
            ?>
            <li class="news-index-item">
                <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time>
                <a class="news-link" href="<?php the_permalink(); ?>">
                    <p class="news-title">
                        <?php the_title(); ?>
                    </p>
                </a>
            </li>
            <?php endwhile;
            endif;
            wp_reset_postdata();
            ?>
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
