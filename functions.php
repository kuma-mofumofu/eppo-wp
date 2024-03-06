<?php

  /* ===============================================
  # Cache Busting(キャッシュバスティング)
  =============================================== */
  function theme_enqueue_styles() {
    wp_enqueue_style(
      'mytheme-style',
      get_stylesheet_uri(),
      array(),
      wp_get_theme()->get( 'Version' )
    );
  }

  /* ===============================================
  # archive.phpを作成
  =============================================== */
  function post_has_archive($args,$post_type){
    if('post' == $post_type){
      $args['rewrite'] = true;
      $args['has_archive'] = 'news';//スラッグ名
    }
    return $args;
  }
  add_filter('register_post_type_args','post_has_archive',10,2);

  /* ================================================
  # 抜粋機能を固定ページに使えるように設定
  ================================================ */
  add_post_type_support( 'page','excerpt' );

  /* ===============================================
  # 抜粋文の文字数調整
  =============================================== */
  function cms_excerpt_more(){
    return '...';
  }
  add_filter( 'excerpt_more','cms_excerpt_more' );

  function cms_excerpt_length(){
    return 80;
  }
  add_filter( 'excerpt_mblength','cms_excerpt_length' );

  /* ===============================================
  # 特定の箇所の文字数調整をできるようにする為の関数
  =============================================== */
  function get_flexible_excerpt( $number ){
    $value = get_the_excerpt();
    $value = wp_trim_words( $value,$number,'...' );
    return $value;
  }