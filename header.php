<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <?php if (is_home() || is_front_page()) : ?>
    <title>HTS - High Technology Solutions</title>
    <?php elseif (is_single()): ?>
    <title>HTS | <?php echo the_title(); ?></title>
    <?php elseif(is_post_type_archive()): ?>
    <title>HTS | blog</title>
    <?php elseif(is_404()): ?>
    <title>error</title>
    <?php endif; ?>

    <!-- css -->
    <?php if (is_home() || is_front_page()) : ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/top.css">
    <?php elseif(is_single()): ?>
    <?php elseif(is_post_type_archive()): ?>
    <?php elseif(is_404()): ?>
    <?php endif; ?>

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

    <?php wp_head(); ?>

    <noscript>
      <p class="noscript">このサイトはJavaScriptを有効にしないと正しく動作しません。ブラウザの設定からJavaScriptを有効にしてください</p>
    </noscript>

  </head>
  <body>
