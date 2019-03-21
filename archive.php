<?php

get_header(); ?>

    <div class="container">
    <!--    <div class="right">-->
    <h1 class="blog__welcome right"><?php the_archive_title(); ?></h1>
    <h3 class="blog__subtitle right"><?php the_archive_description(); ?></h3>


        <div class="blog__posts">
            <?php
            while(have_posts()) {
                the_post(); ?>
                <div class="post-item">
                    <h3 class="post__title"><strong><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></strong></h3>

                    <div class="post__meta">
                        <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y'); ?> in <?php echo get_the_category_list(', '); ?></p>
                    </div>

                    <div class="">
                        <?php the_excerpt(); ?>
                        <div class="blog__continue">
                            <p><a class="btn btn-primary" href="<?php the_permalink(); ?>">Continue reading &raquo;</a></p>
                        </div>
                    </div>

                </div>

                <hr />

            <?php } ?>

            <div class="right">
                <div class="paginate_links">
                    <?php
                    echo paginate_links();
                    ?>
                </div>
            </div>


        </div>
    </div>

<?php get_footer();

?>