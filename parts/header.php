<header id="header">
	<div class="header--inner">

    <h1 class="logo">
      <a href="<?php echo esc_url( home_url() ); ?>">
        <div>
          <img src="<?php echo get_theme_file_uri('/images/logo.png'); ?>" while="56" height="56" alt="ロゴ">
        </div>
        <p>早産児ビリルビン脳症による<br>脳性まひ当事者の会えっぽ</p>
      </a>
    </h1>

    <div class="menu">
      <div class="menu--inner">
        <span></span>
        <span></span>
        <span></span>
      </div><!-- /.menu--inner -->
    </div><!-- /.menu -->

  </div><!-- /.header--inner -->

  <?php
    $category_diary = get_term_by('slug','diary','category');
    $category_diary_link = get_term_link( $category_diary ,'category');

    $category_treasure = get_term_by('slug','treasure','category');
    $category_treasure_link = get_term_link( $category_treasure ,'category');

    $category_news = get_term_by('slug','news','category');
    $category_news_link = get_term_link( $category_news ,'category');
  ?>

  <div class="hide">
    <section class="hide--about">
      <h2>ABOUT</h2>
      <a href="<?php echo esc_url( '/about' ); ?>">えっぽについて</a>

      <a href="<?php echo esc_url( $category_diary_link ); ?>">活動報告</a>

      <a href="<?php echo esc_url( $category_treasure_link ); ?>">たからばこ</a>
    </section>

    <section class="hide--contact">
      <h2>CONTACT</h2>
      <a href="#">お問合せ</a>
      <a href="#" class="line">LINE公式アカウント</a>
    </section>

    <section class="hide--news">
      <h2>NEWS</h2>
      <a href="<?php echo esc_url( $category_news_link ); ?>">お知らせ</a>
    </section>

    <section class="hide--member">
      <a class="hide--member--inner" href="<?php echo esc_url( '/recruitment' ); ?>">
        <h2>MEMBER</h2>
        <p>メンバー＆サポーター募集</p>
        <p>支援のお願い</p>
        <div class="arrow">
          <span></span>
          <span></span>
        </div>
      </a>
    </section>

  </div><!-- /.hide -->
</header>