<?php get_header(); ?>
<?php  get_template_part('parts/header'); ?>
<main>
  <div class="post__pagination">
      <?php $nextpost = get_adjacent_post(false, '', false); if ($nextpost) : ?>
      <div class="post__pagination__left">
        <a href="<?php echo get_permalink($nextpost->ID); ?>">
            <span class="post__pagination__left__img"><?php echo get_the_post_thumbnail($nextpost->ID); ?></span>
            <span class="post__pagination__left__text">«<?php echo esc_attr($nextpost->post_title); ?></span>
        </a>
      </div>
      <?php endif; ?>
      <?php $prevpost = get_adjacent_post(false, '', true); if ($prevpost) : ?>
      <div class="post__pagination__right">
        <a href="<?php echo get_permalink($prevpost->ID); ?>">
            <span class="post__pagination__right__img"><?php echo get_the_post_thumbnail($prevpost->ID); ?></span>
            <span class="post__pagination__right__text"><?php echo esc_attr($prevpost->post_title); ?>»</span>
        </a>
    </div>
      <?php endif; ?>
  </div>

</main>
<?php wp_pagenavi(); ?>
<?php  get_template_part('parts/contact'); ?>
<?php get_footer(); ?>