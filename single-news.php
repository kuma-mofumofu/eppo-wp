<?php get_header(); ?>
<?php  get_template_part('parts/header'); ?>
<main id="news_story">
  <div class="title">
    <h2>お知らせ</h2>
  </div>

  <div class="news_story--inner inner">
    <h2><?php echo get_the_title(); ?></h2>

    <?php the_content(); ?>

  </div><!-- /.news_story--inner .inner -->

</main>
<?php  get_template_part('parts/contact'); ?>
<?php get_footer(); ?>