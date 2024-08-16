<!DOCTYPE html>
<html lang="ja">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/websaite#">
    <?php wp_head(); ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- OGP -->
    <meta property="og:url" content="http://peno-yukako.com/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Peno workshop" />
    <meta property="og:description" content="フリーランスでデザイナー、イラストレーターをしているペノユカコのサイトです" />
    <meta property="og:site_name" content="Peno workshop" />
    <meta property="og:image" content="http://peno-yukako.com/images/icon/ogp.jpg" />
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@PenoPara" />
    <link href="https://use.fontawesome.com/releases/v6.5.2/css/all.css" rel="stylesheet">

    <!-- Script -->
    <script type="text/javascript" src="//typesquare.com/3/tsst/script/ja/typesquare.js?5da5528ee34c4b42ba4a3fc3e90393a3" charset="utf-8"></script>
  </head>

  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="wrapper">
      <!--Header-->
      <header>
        <div class="js-cover"></div>
        <section class="container">
          <div class="humburgerBtn">
            <span class="top"></span>
            <span class="middle"></span>
            <span class="bottom"></span>
          </div>
          <h1 class="logo">
            <a href="<?php echo home_url(); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.svg" alt="PenoWorkshopロゴ">
            </a>
          </h1>
          <!--Global navigation-->
          <?php
          $args = [
            'menu' => 'global-navigation' ,
            'menu_class' => 'gnav' ,
            'container' => false,
          ];
          wp_nav_menu($args);
          ?>
        </section>
      </header>