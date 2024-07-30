<?php get_header(); ?>

  <!--公開実績詳細ページ-->
  <?php if ( in_category('public') ): ?>

    <!--タイトルイメージ-->
    <section class="pageImg">
      <div class="container">
        <h2>
          <?php the_title(); ?>
        </h2>
        <?php if ( is_single('illustdeco') ): ?>
          <picture>
            <source media="(min-width:767px )" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/achievements/illust&deco/title_img.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/achievements/illust&deco/title_img.png" alt="挿絵イラスト・デコレーションスタンプタイトルイラスト">
          </picture>
        <?php elseif (is_single('isometric')): ?>
          <picture>
            <source media="(min-width:767px )" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/achievements/Isometric/title_img.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/achievements/Isometric/title_img.png" alt="アイソメトリックタイトルイラスト">
          </picture>
        <?php elseif (is_single('stockillust')): ?>
          <picture>
            <source media="(min-width:767px )" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/achievements/stockillust/title_img.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/achievements/stockillust/title_img.png" alt="ストックイラストタイトルイラスト">
          </picture>
        <?php elseif (is_single('manga')): ?>
          <picture>
            <source media="(min-width:767px )" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/achievements/manga/title_img.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/achievements/manga/title_img.png" alt="マンガタイトルイラスト">
          </picture>
        <?php endif; ?>
      </div>
    </section>

    <!--　制作実績　-->
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <section class="workDetail">
          <div class="container">
            <?php the_content(); ?>
          </div>
      <?php endwhile; ?>
    <?php endif; ?>

    <div class="ctaArea">
        <div class="contents">
          <div class="ctaBtn">
            <a href="<?php echo home_url('/works/'); ?>" class="btn btn__Bk"><span>一覧ページに戻る<i
                  class="fa-solid fa-caret-right fa-position-left"></i></span></a>
            <a href="<?php echo home_url('/contact/'); ?>" class="btn btn__Blue"><span>お問い合わせ<i
                  class="fa-solid fa-caret-right fa-position-left"></i></span></a>
          </div>
        </div>
    </div>
  <?php endif; ?>
  
  

 <?php get_footer(); ?>