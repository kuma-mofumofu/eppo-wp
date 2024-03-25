<?php get_header(); ?>
<?php get_template_part('parts/header'); ?>
  <main id="search">
    <div class="title">
      <h2><?php the_search_query(); ?>の検索結果</h2>
    </div>

    <div class="search--inner inner">


      <section>
        <ul class="search">
          <?php
            if(have_posts()):
              while(have_posts()):
                the_post();
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