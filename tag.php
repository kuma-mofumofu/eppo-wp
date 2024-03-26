<?php get_header(); ?>
<?php get_template_part('parts/header'); ?>
  <main id="tag">

    <div class="title">
      <?php
        $tag = get_queried_object();
        if($tag){
          echo '<h2>「#'.$tag->name.'」の検索結果</h2>';
        }
      ?>
    </div>

    <div class="tag--inner inner">

      <section>
        <ul class="loop">
          <?php
            $tag_id = $tag->term_id;
            $tag_posts = new WP_Query(
              array(
                'tag_id' => $tag_id,
                'posts_per_page' => -1, // 全ての投稿を取得
              )
              );

            if($tag_posts->have_posts()):
              while($tag_posts->have_posts()):
                $tag_posts->the_post();
          ?>

          <li class="list--item">
            <a href="<?php the_permalink(); ?>">
              <time class="text text-time"><?php echo get_the_date('Y年m月d日'); ?></time>
              <p class="text text-title"><?php the_title(); ?></p>
              <p class="text text_tag">
                <?php
                  $html ='#';
                  $separator = '<span class="space"> # </span>';
                  $post_tags = get_the_tags();

                  if($post_tags){
                    foreach($post_tags as $tag){
                      $tag_link = esc_url(get_tag_link($tag->term_id));
                      $html .= '<a href="'.$tag_link.'"><span>' .$tag->name .'</span></a>' .$separator;
                    }
                    $html = rtrim($html,$separator);
                    echo $html;
                  }
                ?>
              </p>

              <a href="<?php the_permalink(); ?>">
                <div class="arrow">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </a>

            </a>
          </li><!-- /.list--item -->
              <?php endwhile; ?>
            <?php else: ?>
              <li>検索キーワードに該当する記事がありませんでした</li>
            <?php endif; ?>
        </ul>
      </section>

    </div>

  </main>

<?php  get_template_part('parts/contact'); ?>
<?php get_footer(); ?>