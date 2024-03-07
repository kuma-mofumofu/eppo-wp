<!DOCTYPE html>
<html <?php language_attributes(); ?>>

  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">

    <title>
      <?php
				if ( !is_front_page() ) {
          wp_title( '::', true, 'right' );
        }
        bloginfo( 'name' );
      ?>
    </title>

		<!-- 管理画面の「設定 > 一般」で設定された「キャッチフレーズ」を表示する -->
    <meta name="description" content="<?php echo get_bloginfo('description'); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- ファビコン -->
		<link rel="shortcut icon" href="<?php echo get_theme_file_uri('/images/favicon.png'); ?>" />

		<!-- Cache Busting(キャッシュバスティング -->
		<link rel='stylesheet' href='<?php bloginfo('stylesheet_url');?>?ver=<?php echo date("His") ?>'/>

		<!-- reset.css destyle -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css"/>

    <link rel="stylesheet" href="<?php echo get_theme_file_uri('/css/reset.css'); ?>" />

    <!-- 筑紫B丸ゴシック（Adobe font） -->
    <script>
      (function(d) {
        var config = {
          kitId: 'sfj8nak',
          scriptTimeout: 3000,
          async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      })(document);
    </script>

    <link rel="stylesheet" href="<?php echo get_theme_file_uri('/css/style.css?'); ?>" />
    <title><?php echo esc_html( wp_get_document_title() ); ?></title>

		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo get_theme_file_uri('/js/script.js'); ?>"></script>

		<?php wp_head(); ?>
  </head>
  <body>