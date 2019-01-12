<?php

  get_header();
  ?>

  <?php

  while(have_posts()) {
    the_post(); ?>
      <div class="container">
      <h2 class="single_post_title"><?php the_title(); ?></h2>
          <div class="single__post__meta">
              <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y'); ?> in <?php echo get_the_category_list(', '); ?></p>
          </div>
    <?php the_content(); ?>

          <hr>

      <div class="blog__continue right">
          <p><a class="btn btn-primary" href="/blog/">Go back to blogs &raquo;</a></p>
      </div>
      </div>
  <?php }

  get_footer();

?>
