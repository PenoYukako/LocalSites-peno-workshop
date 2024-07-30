<?php get_header(); ?>

<!--コンタクトページTitleImage-->
  <?php if (is_page('contact')): ?>
      <section class="pageImg">
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
      <!--入力フォーム-->
      <section class="formContents">
        <div class="contents">
          <div class="inner">  
            <?php the_content(); ?>
          </div>
          
        </div>
      </section>

  <!--イメージなしTitleImage-->
  <?php elseif (is_page()): ?>
    <section class="pageNoImg">
        <div class="container">
          <h2>
            <?php the_title(); ?>
          </h2>
        </div>
    </section>
    <div class="contents">
      <div class="textArea">
        <?php the_content(); ?>
      </div>
    </div>
    
  <?php endif ?>
  
  


 <?php get_footer(); ?>