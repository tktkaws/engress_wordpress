<?php get_header(); ?>
<main>
    <?php get_template_part('template/bread-crumb') ?>
    <section class="news-post">
        <article class="article">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
            ?>
            <h1><?php the_title(); ?></h1>
            <div class="news-date-wrapper">
                <time class="news-date"><?php the_time('Y-m-d'); ?></time>
            </div>
            <?php the_content(); ?>
            <?php endwhile;
            endif; ?>
        </article>
    </section>
    <?php get_template_part('template/cta') ?>
</main>
<?php get_footer(); ?>
