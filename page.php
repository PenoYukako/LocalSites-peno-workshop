<?php get_header(); ?>


  <?php if (is_page('contact')): ?>
    <!--コンタクトページTitleImage-->
    <section class="titleBox">
      <div class="container">
        <h2>
          <?php the_title(); ?>
        </h2>
        <picture>
          <source media="(min-width:767px )" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/contact/contactImg.png">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact/contactImg.png" alt="コンタクトページタイトルイラスト">
        </picture> 
      </div>
    </section>
  <?php elseif (is_page()): ?>
    <section class="titleBox__small">
      <div class="container">
        <h2>
          <?php the_title(); ?>
        </h2>
      </div>
    </section>
  <?php endif ?>
  
  <!--入力フォーム-->
  <section class="pageContents">
    <div class="contents">
      <?php the_content(); ?>          
    </div>
  </section>

  
<?php get_footer(); ?>