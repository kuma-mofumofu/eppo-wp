<?php get_header();?>
<?php get_template_part('parts/header');?>
<main id="diary">

  <div class="title">
    <h2>活動日記一覧</h2>
  </div>

  <div class="diary--inner inner">
    <ul class="list">

      <?php
        $paged = get_query_var('paged') ?: 1;

        $diary_query = new WP_Query(
          array(
            'post_type' => 'post',
            'category_name' => 'diary',
            'posts_per_page' => 6,
            'paged' => $paged,
          )
        );

        if($diary_query->have_posts()):
          while($diary_query->have_posts($post)):
            $diary_query->the_post();
            setup_postdata($post);
      ?>

      <li class="list--item">
        <a href="<?php the_permalink(); ?>">
          <time class="year"><?php echo get_the_date('Y年'); ?></time>
          <time class="time"><?php echo get_the_date('m月d日'); ?></time>
          <p class="text"><?php the_title();?></p>
        </a>
      </li><!-- /.list--item -->

      <?php
          endwhile;
        endif;
      ?>
    </ul>
  </div><!-- /.diary--inner .inner -->

  <?php
    if(function_exists('pagination')):
      pagination($diary_query->max_num_pages,$paged);
    endif;

    wp_reset_postdata();
  ?>

</main><!-- /#diary -->
<?php  get_template_part('parts/contact'); ?>
<?php get_footer();?>