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
            <form action="">
                <label>
                    <p>会社名</p>
                    <p><input type="text" name="company" placeholder="Engress" /></p>
                </label>
                <label>
                    <p>氏名</p>
                    <p><input type="text" name="name" placeholder="田中  太郎" /></p>
                </label>
                <label>
                    <p>メールアドレス</p>
                    <p>
                        <input type="email" name="mail" placeholder="example@example.com" />
                    </p>
                </label>
                <label>
                    <p>電話番号</p>
                    <p><input type="tel" name="tel" placeholder="01-2345-6789" /></p>
                </label>
                <div class="radio">
                    <p>
                        お問い合わせの種類を選択してください（<strong>資料請求の方は資料請求を選択ください</strong>）
                    </p>
                    <p>
                        <label class="my-radio">
                            <input type="radio" class="radio-buttons" name="contact" value="consultation" />
                            <span class="radio-mark"></span>
                            商談のご相談
                        </label>
                    </p>
                    <p>
                        <label class="my-radio">
                            <input type="radio" class="radio-buttons" name="contact" value="service" />
                            <span class="radio-mark"></span>
                            サービスに関するお問い合わせ
                        </label>
                    </p>
                    <p>
                        <label class="my-radio">
                            <input type="radio" class="radio-buttons" name="contact" value="document" />
                            <span class="radio-mark"></span>
                            資料請求
                        </label>
                    </p>
                    <p>
                        <label class="my-radio">
                            <input type="radio" class="radio-buttons" name="contact" value="other" />
                            <span class="radio-mark"></span>
                            その他
                        </label>
                    </p>
                </div>

                <label>
                    <p>お問い合わせ内容</p>
                    <textarea name="content" id="" cols="60" rows="10"></textarea>
                </label>
                <p class="policy">
                    <a href="">プライバシーポリシー</a>に同意の上、送信ください。
                </p>

                <label for="policy"><input type="checkbox" name="policy" id="policy" />プライバシーポリシーに同意する</label>

                <p class="submit">
                    <input type="submit" value="送信する" />
                </p>
            </form>
        </div>

    </section>

</main>



<?php get_footer(); ?>
