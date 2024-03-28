<?php get_header(); ?>
<?php  get_template_part('parts/header'); ?>
  <main id="about">

    <div class="title">
      <h2>えっぽについて<br><span>ABOUT</span></h2>
    </div>

    <section class="cherish">
      <h3>大切にしたいこと</h3>
      <div class="cherish--inner">

        <div class="block--outer">    
          <div class="block">
            <p>柔らかく<br>つながる</p>
          </div>
        </div>

        <div class="block--outer">
          <div class="block">
            <p>双方向の矢印</p>
          </div>
        </div>

        <div class="block--outer">
          <div class="block">
            <p>脳性まひ<br>当事者の会</p>
          </div>
        </div>

      </div><!-- /.cherish--inner -->

      <div class="text">
        <p>
          本文通常サイズです親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。なぜそんな無闇をしたと聞く人があるかも知れぬ。
        </p>
      </div><!-- /.text -->
    </section>

    <section class="greeting">
      <h2 class="sub_title">代表あいさつ<br><span>GREETINGS</span></h2>

      <div class="greeting--img">
        <img src="<?php echo get_theme_file_uri('/images/representative.png'); ?>" width="370" height="370" alt="代表の写真">
      </div>

      <h3></h3>


    </section>

  </main>
<?php  get_template_part('parts/contact'); ?>
<?php get_footer(); ?>