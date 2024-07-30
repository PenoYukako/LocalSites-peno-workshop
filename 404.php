<?php get_header(); ?>

    <!--Title-->
    <section class="page404">
      <div class="container">
        <picture>
          <source media="(min-width:767px )" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/404/title404_img.png">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/404/title404_img.png" alt="Peno Workshop">
        </picture>
      </div>
    </section>
    <section class="contents404">
      <div class="inner">
        <h3>お探しのページは見つかりませんでした。</h3>
        <p>URLが変更・削除されたか、現在利用できない可能性があります。<br>お手数をおかけしますが、TOPページからお探しください。</p>
      </div>
      <a href="<?php echo home_url('/'); ?>" class="btn btn__Bk"><span>TOPページに戻る<i
            class="fa-solid fa-caret-right fa-position-left"></i></span></a>

    </section>


 <?php get_footer(); ?>