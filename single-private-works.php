<?php get_header(); ?>

  <!--タイトルイメージ-->
  <section class="pageImg workPageImg">
    <div class="container">
      <h2>
        <?php the_title(); ?>

        <?php 
        /*カスタム投稿でのタグ取得・出力（リンクなし）*/

        $tax_tagname = 'private-works_tag'; //タクソノミーのタグ
        if ($terms = get_the_terms($post->ID, $tax_tagname)) :
          // $post->IDでループ外の現在の投稿のIDを取得
          foreach ( $terms as $term ) :
            echo '<span>'.$term->name.'</span>';
          endforeach;
        endif;

        ?>
        
      </h2>
    </div>
  </section>

  <!--　制作実績　-->
  <section class="workDetail">
    <div class="container">
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
      
          <div class="privatePageDetails">
            <?php the_content(); ?>
            
          </div>
          
        <?php endwhile; ?>
      <?php endif; ?>

      <div class="ctaArea">

          <!-- <div class="contents">
            <div class="ctaBtn">
              <a href="<?php echo home_url('/private-works/'); ?>" class="btn btn__Bk"><span>一覧ページに戻る<i
                    class="fa-solid fa-caret-right position-fa-left"></i></span></a>
              <a href="<?php echo home_url('/contact/'); ?>" class="btn btn__Blue"><span>お問い合わせ<i
                    class="fa-solid fa-caret-right position-fa-left"></i></span></a>
            </div>
          </div> -->
          
      </div>
    </div>
  </section>
    
<?php get_footer(); ?>