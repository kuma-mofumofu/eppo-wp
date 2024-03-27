<?php get_header(); ?>
<?php  get_template_part('parts/header'); ?>
<main id="single">

  <div class="title">
    <?php
      $categories = get_the_category();
      if(!empty($categories)){
        echo '<h2>' .esc_html($categories[0]->name) . '</h2>';
      }
    ?>
  </div>

  <div class="single-inner inner">
    <h2><?php echo get_the_title(); ?></h2>

    <?php the_content(); ?>

  </div><!-- /.inner -->

</main>
<?php  get_template_part('parts/contact'); ?>
<?php get_footer(); ?>