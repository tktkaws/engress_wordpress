<?php get_header(); ?>
<main>
    <section class="l-hero">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/other/plan.png" />
        <h2 class="l-hero-title">コース・料金</h2>
    </section>
    <?php get_template_part('template/bread-crumb') ?>
    <section class="price-structure">
        <h2 class="price-structure-title">料金体系</h2>
        <ul class="price-structure-list">
            <li class="price-structure-item">
                <span>入会金 39,800円</span>
            </li>
            <li class="price-structure-item">
                <span>月額費用</span>
            </li>
        </ul>
        <p class="price-structure-desc">
            Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。
        </p>
    </section>
    <section class="price-list">
        <h2 class="price-list-title">料金表</h2>
        <div class="js-scrollable">
            <ul class="price-list__list">
                <?php
                global $post;
                $args = array(
                    'posts_per_page' => 4,
                    'post_type' => 'plice_list',
                    "order" => "ASC"
                );
                $myposts = get_posts($args);
                foreach ($myposts as $post) : setup_postdata($post); ?>
                    <li class="price-list__card">
                        <h3 class="price-list__card-title">
                            <span>
                                <?php the_title(); ?>
                            </span>
                        </h3>
                        <div class="price-list__card-body">
                            <p class="price-list__card-price"><?php the_field('price'); ?></p>
                            <div class="price-list__card-desc">
                                <?php the_content(); ?>
                            </div>

                        </div>
                    </li>
                <?php
                endforeach;
                wp_reset_postdata();
                ?>
            </ul>
        </div>
    </section>
    <?php get_template_part('template/cta') ?>
</main>
<?php get_footer(); ?>
