<?php get_header(); ?>

    <?php if (is_front_page()): ?>
      <!--KeyVisual-->
      <section class="kv">
         <div class="container">
           <h2>
            <picture>
              <source media="(min-width:767px )" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/title.svg">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/sp_title.svg" alt="Peno Workshop">
            </picture>
          </h2>
        </div>
      </section>
    <?php endif; ?>

    
    <!--イラスト一覧-->
      <div class="topContainer">
        <section class="illustrationList" >
          <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/illustList.svg" alt="イラスト一覧"></h2>
          
          <p>様々なタッチのイラスト制作が可能です。</p>
          <ul>
           <a href="<?php echo home_url('stockillust'); ?>"><li>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/illustList01.svg" alt="ストックイラスト">
              <span>ストックイラスト</span>
            </li></a>
            <a href="<?php echo home_url('illustdeco'); ?>"><li>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/illustList02.svg" alt="挿絵イラスト・デコレーションスタンプ">
              <span>挿絵イラスト・デコレーションスタンプ</span>
            </li></a>
            <a href="<?php echo home_url('isometric'); ?>"><li>             
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/illustList03.svg" alt="アイソメトリックイラスト">
              <span>アイソメトリック<br>イラスト</span>
            </li></a>
            <a href="<?php echo home_url('manga'); ?>"><li>              
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/illustList04.svg" alt="日常漫画">
              <span>日常漫画<br>イラスト</span>
            </li></a>
          </ul>
        </section>

        <!--プロフィール-->
        <section class="profile" id="penoProfile">
          <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/Profile.svg" alt="プロフィール"></h2>
          <div class="contents">
            <div class="inner">
              <ul>
                <li>ペノ ユカコ</li>
                <li>
                  <a href="https://x.com/PenoPara"><i class="fa-brands fa-x-twitter faStyle sns"></i></a>
                  <a href="https://www.instagram.com/penopara/?hl=ja"><i class="fab fa-instagram faStyle sns"></i></a>
                </li>
                <li>イラストを描くことが得意なフリーランスのデザイナーです。<br>WEB、DTP、コーディングなど、幅広く制作業務に携わっています。　趣味は漫画を描くこと。</li>
              </ul>
              <div class="designWorks">
                <a href="<?php echo home_url('/private-works/login/'); ?>" class="btn btn__Bk"><span>デザイン実績はこちら<sup>※</sup></span></a>
              </div>
            </div>
          </div>
          <p class="annotation"><span>※閲覧にはIDとパスワードが必要です。</span></p>
        </section>
      </div>

 <?php get_footer(); ?>
