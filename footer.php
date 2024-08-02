
      <!--Footerー-->
      <footer>
        <div class="inner">
          <p>
            <small>&copy;2024 peno workshop</small>
          </p>
          <?php
          $args = [
            'menu' => 'footer_menu' ,
            'menu_class' => 'footer_menu' ,
            'container' => false,
          ];
          wp_nav_menu($args);
          ?>
          <div class="sp_contactBtn">
            <a href="<?php echo home_url('/contact/'); ?>" class="btn__contact">お問い合わせ</a>
          </div>
        </div>
      </footer>
      
  </div><!-- wrapperのdiv -->
  <?php wp_footer(); ?>
  </body>
</html>
    
    
    