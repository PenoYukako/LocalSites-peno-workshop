<a href="<?php the_permalink(); ?>">
            <li id="post-<?php the_ID(); ?>" <?php post_class('__card'); ?>>
              <div class="cardListImg">
                <?php the_post_thumbnail('medium'); ?>
              </div>
              <div class="cardListName">
                <p><?php the_title(); ?></p>
              </div>
            </li>
</a>