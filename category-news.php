<?php get_header(); ?>
<?php  get_template_part('parts/header'); ?>

<main id="news">

  <div class="title">
    <h2>お知らせ一覧</h2>
  </div>

  <div class="news--inner inner">
    <ul class="list">

      <?php
        $paged = get_query_var('paged') ?: 1;

        $news_query = new WP_Query(
          array(
            'post_type' => 'post',
            'category_name' => 'news',
            'posts_per_page' => 5,
            'paged' => $paged,
          )
        );

        if($news_query->have_posts()):
          while($news_query->have_posts($post)):
            $news_query->the_post();
            setup_postdata($post);
      ?>


      <li class="list--item">
        <a href="<?php the_permalink(); ?>">
          <div class="image_block">
            <?php
              if(has_post_thumbnail()):
                the_post_thumbnail('thumbnail');
            ?>
            <?php else : ?>
              <img src="<?php bloginfo('template_url'); ?>/images/no_image.png" width="150" height="150" alt="アイキャッチがない時の画像" />
            <?php endif ; ?>
          </div><!-- /.image_block -->

          <div class="text_block">

            <div class="time--outer">
              <span class="icon">お知らせ</span>
              <time class="time"><?php  echo get_the_date('Y.m.d') ?></time>
            </div><!-- /.time--outer -->

            <h3 class="news_title"><?php echo get_the_title(); ?></h3>
            <h4 class="text"><?php the_excerpt(); ?></h4><!-- pで囲むと色が変えれない? -->
            <span>続きを見る&nbsp;→</span>

          </div><!-- /.text_block -->
        </a>
      </li><!-- /.list--item -->

      <?php
          endwhile;
        endif;
      ?>

    </ul>
  </div><!-- /.news--inner .inner -->

  <?php
    if ( function_exists( 'pagination' ) ) :
      pagination( $news_query->max_num_pages, $paged );
    endif;

  wp_reset_postdata();
  ?>

</main><!-- /#news -->

<?php  get_template_part('parts/contact'); ?>
<?php get_footer(); ?>