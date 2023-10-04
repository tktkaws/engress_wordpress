<?php get_header(); ?>
<main>
    <section class="l-hero">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/cta.png" />
        <h2 class="l-hero-title">お問い合わせ・資料請求</h2>
    </section>
    <?php get_template_part('template/bread-crumb') ?>
    <section class="contact">
        <div class="contact-container">
            <p class="contact-container-desc">
                弊社に興味を持って頂きありがとうございます。商談やサービスのご利用、資料請求について下記のフォームよりお問い合わせください。
            </p>
            <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                    ?>
            <?php the_content(); ?>
            <?php endwhile;
                    endif; ?>

        </div>

    </section>

</main>



<?php get_footer(); ?>
