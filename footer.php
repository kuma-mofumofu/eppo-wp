    <div class="wood">
      <img src="<?php echo get_theme_file_uri('/images/wood.png'); ?>" alt="木のイラスト">
    </div>
    <footer id="footer">
      <div class="footer--inner">

        <div class="footer--inner--left">

          <div class="footer_logo">
            <div>
              <img src="<?php echo get_theme_file_uri('/images/logo.png'); ?>" while="56" height="56" alt="ロゴ">
            </div>
            <p>早産児ビリルビン脳症による脳性まひ当事者の会えっぽ</p>
            <a href="tel:0643064308">TEL:06-4306-4308</a>
          </div><!-- /.footer_logo -->

          <div class="footer_nav">
            <ul>
              <li><a href="#">えっぽについて</a></li>
              <li><a href="#">お問い合わせ</a></li>
              <li><a href="#">活動報告</a></li>
              <li><a href="#">支援について</a></li>
              <li><a href="#">たからばこ</a></li>

              <?php
                $cat_column = get_term_by('slug','news','category');
                $cat_column_link = get_term_link( $cat_column , ' category ' );
              ?>
              <li><a href="<?php echo esc_url( $cat_column_link ); ?>">お知らせ</a></li>
              
            </ul>
          </div>

        </div><!-- /.footer--inner--left -->

        <div class="footer--inner--right">
          <div class="footer_btn">
              <a href="#">
                <div class="btn btn-orange">
                  <p>サポートのお願い</p>
                </div>
                <div class="btn btn-red">
                  <p>メンバー＆サポーター募集</p>
                </div>
              </a>
            </div><!-- /.footer_btn -->
        </div><!-- /.footer--inner--right -->

      </div><!-- /.footer--inner -->

      <small>&copy; eppo 2024</small>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>