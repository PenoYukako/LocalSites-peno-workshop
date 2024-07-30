<?php get_header(); ?>

  <!--タイトルイメージ-->
  <section class="pageImg">
    <div class="container">
      <h2>
        Private Works
      </h2>
        <picture>
            <source media="(min-width:767px )" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/private-works/title_img.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/private-works/title_img.png" alt="非公開制作実績タイトル画像">
        </picture>
      
    </div>
  </section>


  <section class="workList">
    
    <?php  
      // カスタム投稿のカテゴリーの呼び出し
      $taxonomy = 'private-works_cat';
      $terms = get_terms( $taxonomy, array( 'parent' => 0) ); 
      foreach($terms as $term):
          $term_id = $term->term_id;
          // $term_idsp = $taxonomy."".$term_id;

          echo '<h3>'.$term->name.'</h3>';

          // カスタム投稿の一覧を取得
          $term_args = array(
            'post_type' => 'private-works',
            'tax_query' => array(
                array(
                    'taxonomy' => $taxonomy,
                    'field'    => 'term_id',
                    'terms'    => $term_id,
                ),
            ),
            'post_status' => 'publish',
            'posts_per_page' => -1
        );
        $term_query = new WP_Query($term_args);

        if ( $term_query->have_posts() ):
          echo '<div class="contents">';
            echo '<ul class="cardList">';
              while( $term_query->have_posts() ): $term_query->the_post();
                get_template_part('template-parts/loop', 'worklist');
              endwhile;
            echo '<ul>';
          echo '</div>';
          else:
            echo '<p>記事が見つかりません</p>';
        endif;

      endforeach;
    ?>

  
</section>
    
  

 <?php get_footer(); ?>