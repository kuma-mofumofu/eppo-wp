<?php get_header(); ?>
<?php get_template_part('parts/header'); ?>
<main id="treasure">
  <div class="title">
    <h2>たからばこ<br><span>〜みんなの経験談〜</span></h2>
  </div>

  <div class="treasure--inner inner">

    <div class="search_box">
    </div><!-- /.search_box -->

    <div class="tags">
<<<<<<< Updated upstream
      <!-- <?php
=======
      <?php
>>>>>>> Stashed changes
        $tag_cloud_args = array(
          'smallest'=> 1,    // 最小文字サイズ
          'largest'=>1,      // 最大文字サイズ
          'unit'=>'rem',     // 文字サイズの単位
          'number'=>0,       // 表示するタグの数（0なら全部表示）
          'orderby'=>'count',// 記事件数で並び替える
          'format'=>'list'   // 出力形式
        );
        wp_tag_cloud($tag_cloud_args);
<<<<<<< Updated upstream
      ?> -->
=======
      ?>
>>>>>>> Stashed changes
    </div><!--/.tags -->

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
        <a href="<?php the_permalink(); ?>">
          <time class="text text-time"><?php echo get_the_date('Y年m月d日'); ?></time>
          <p class="text text-title"><?php the_title(); ?></p>
          <p class="text text_tag">
            <?php
              $html ='#';
              $separator = '<span class="space"> # </span>';
              $tags = get_the_tags();
              foreach($tags as $tag){
                $html .= '<span>' .$tag->name .'</span>' .$separator;
              }
              $html = rtrim($html,$separator);
              echo $html;
            ?>
          </p>

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