<?php get_header(); ?>
<?php get_template_part('parts/header'); ?>
<main id="treasure">
  <div class="title">
    <h2>たからばこ<br><span>〜みんなの経験談〜</span></h2>
  </div>

  <div class="treasure--inner inner">

    <div class="tags--outer">
      <div class="tags">
        <h3>#ハッシュタグ</h3>

        <?php
          // カテゴリーに関連する投稿を取得
          $category_posts = get_posts(array(
            'category_name' => 'treasure',
            'posts_per_page' => -1 // 全ての投稿を取得
          ));

          // カテゴリーに関連する投稿に紐づくタグを取得
          $tags = array();
          foreach ($category_posts as $post) {
            $post_tags = get_the_tags($post->ID);
            if ($post_tags) {
              foreach ($post_tags as $tag) {
                $tags[$tag->term_id] = $tag;
              }
            }
          }

          // タグリンクを表示
          if ($tags) {
            echo '<ul>';
            foreach($tags as $tag) {
              $tag_link = esc_url(get_tag_link($tag->term_id));
              echo '<li><a href="' . $tag_link . '"> #' . $tag->name . '</a></li>';
            }
            echo '</ul>';
          } else {
            echo '<p>タグはありません</p>';
          }
        ?>

      </div><!--/.tags -->
    </div><!--/.tags--outer -->

    <ul class="list">
      <?php
        $paged = get_query_var('paged') ?: 1;

        $treasure_query = new WP_Query(
          array(
            'post_type' => 'post',
            'category_name' => 'treasure',
            'posts_per_page' => 9,
            'paged' => $paged,
          )
        );

        if($treasure_query->have_posts()):
          while($treasure_query->have_posts($post)):
            $treasure_query->the_post();
            setup_postdata($post);
      ?>

      <li class="list--item">
        <a class="list--item--link" href="<?php the_permalink(); ?>">
          <time class="text text-time"><?php echo get_the_date('Y年m月d日'); ?></time>
          <p class="text text-title"><?php the_title(); ?></p>
        </a>
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
      </li><!-- /.list--item --> 

      <?php
          endwhile;
        endif;
      ?>

    </ul>
  </div><!-- /.treasure--inner .inner -->

  <?php
    if(function_exists('pagination')):
      pagination($treasure_query->max_num_pages,$paged);
    endif;

    wp_reset_postdata();
  ?>

</main>
<?php  get_template_part('parts/contact'); ?>
<?php get_footer(); ?>