<?php get_header(); ?>

 <!--PageImage-->
   <?php if (is_home()): ?>
      <section class="pageImg">
        <div class="container">
          <h2>
            Works
          </h2>
          <picture>
          <source media="(min-width:767px )" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/works/title_img.png">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/works/title_img.png" alt="制作実績タイトル画像">
        </picture>
        </div>
      </section>
  <?php endif ?>

  <?php if ( have_posts() ) : ?>
  <section class="workList">
    <h3>illust</h3>
    <div class="contents">
      <ul class="cardList">
        <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part('template-parts/loop', 'worklist'); ?>
        
          <?php endwhile; ?>
      <ul>
    </div>
  <?php endif ?>
  <div class="ctaArea">
    <div class="contents">
      <p>デザイン実績の閲覧にはIDとパスワードが必要になります。<br>IDとパスワードに関しては下記ボタンよりお問い合わせください。</p>
      <div class="ctaBtn">
        <a href="<?php echo home_url('/private-results/'); ?>" class="btn btn__Wh"><span>デザイン実績ページ<i class="fa-solid fa-caret-right fa-position-left"></i></span></a>
        <a href="<?php echo home_url('/contact/'); ?>" class="btn btn__Blue"><span>お問い合わせ<i class="fa-solid fa-caret-right fa-position-left"></i></span></a>
      </div>
    </div>
  </div>
</section>
    
  

 <?php get_footer(); ?>