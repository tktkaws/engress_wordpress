<?php get_header(); ?>
<main>
    <?php get_template_part('template/bread-crumb') ?>
    <section class="l-hero">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/other/plan.png" />
        <h2 class="l-hero-title">コース・料金</h2>
    </section>
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
        <ul>
            <li class="price-list__card">
                <h3 class="price-list__card-title">
                    <span>基礎プラン</span>
                </h3>
                <div class="price-list__card-body">
                    <p class="price-list__card-price">59,000円~</p>
                    <p class="price-list__card-desc">カリキュラム作成</p>
                    <p class="price-list__card-desc">TOEFL学習サポート</p>
                    <p class="price-list__card-desc">週一回のビデオMTG</p>
                </div>
            </li>
            <li class="price-list__card">
                <h3 class="price-list__card-title">
                    <span>演習プラン</span>
                </h3>
                <div class="price-list__card-body">
                    <p class="price-list__card-price">75,000円~</p>
                    <p class="price-list__card-desc">カリキュラム作成</p>
                    <p class="price-list__card-desc">TOEFL学習サポート</p>
                    <p class="price-list__card-desc">週一回のビデオMTG</p>
                    <p class="price-list__card-desc">月二回の模試（解説 付き）</p>
                </div>
            </li>
            <li class="price-list__card --orange">
                <h3 class="price-list__card-title --orange">
                    <p>おすすめ</p>
                    <p>志望校対策プラン</p>
                </h3>
                <div class="price-list__card-body">
                    <p class="price-list__card-price --orange">95,000円~</p>
                    <p class="price-list__card-desc">カリキュラム作成</p>
                    <p class="price-list__card-desc">TOEFL学習サポート</p>
                    <p class="price-list__card-desc">週一回のビデオMTG</p>
                    <p class="price-list__card-desc">月二回の模試（解説 付き）</p>
                    <p class="price-list__card-desc">週一の英語面接対策</p>
                </div>
            </li>
            <li class="price-list__card">
                <h3 class="price-list__card-title">
                    <span>フレックスプラン</span>
                </h3>
                <div class="price-list__card-body">
                    <p class="price-list__card-price">60,000円~</p>
                    <p class="price-list__card-desc--none">＊別途ご相談ください</p>
                </div>
            </li>
        </ul>
    </section>
    <?php get_template_part('template/cta') ?>
</main>



<?php get_footer(); ?>
