<?php

  get_header();

  while(have_posts()) {
    the_post(); ?>

      <div class="container">
        <div class="nav_bg_page"></div>
        <!-- <span class="page_title"><?php the_title(); ?></span> -->
        <br>
        <?php the_content(); ?>
      </div>


  <?php }

  get_footer();

?>
