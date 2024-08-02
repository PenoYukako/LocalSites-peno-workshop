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
            <?php the_content(); ?>
          </div>
      <?php endwhile; ?>
    <?php endif; ?>
  

 <?php get_footer(); ?>