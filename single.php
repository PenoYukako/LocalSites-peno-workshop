<?php get_header(); ?>

    <!--タイトル-->
    <section class="titleBox pageTitle">
      <div class="container">
        <h2>
          <?php the_title(); ?>
        </h2>
      </div>
    </section>

    <!--　投稿記事　-->
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <section class="workDetail">
          <div class="container">
            <?php if( is_user_logged_in() && is_singular('private-works') && is_single('/login') ) : ?>
              <p>テスト</p>
            <?php else : ?>
              <?php the_content(); ?>
            <?php endif; ?>
          </div>
      <?php endwhile; ?>
    <?php endif; ?>
  

 <?php get_footer(); ?>