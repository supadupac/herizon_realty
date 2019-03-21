<?php get_header(); ?>

<?php

//  while(have_posts()) {
//    the_post(); ?>
<!--     <h2><a href="--><?php // the_permalink(); ?><!--">--><?php //the_title(); ?><!--</a></h2> -->
<!--    --><?php // the_content(); ?>
<!--     <hr> -->
<!--    --><?php //} ?>

<div class="hero_background">
    <div class="background-darken">
    </div>
    <h3 class="find-a-home-header">Search for a Home</h3>
    <div class="quick-search-box">
        <?php echo do_shortcode("[optima_express_quick_search style='horizontal' showPropertyType='false']"); ?>
    </div>
</div>

<div class="container">
    <div class="featured">
        <div class="red">
            <?php echo do_shortcode("[optima_express_featured displayType='grid' header='true' includeMap='false' status='active']"); ?>
        </div>
    </div>
</div>

<?php
$sticky = get_option( 'sticky_posts' );
$herizon_announcements = new WP_query([
    'posts_per_page' => 1,
    'post__in'  => $sticky,
    'ignore_sticky_posts' => 1
]);
if ( isset($sticky[0]) ) {
    $herizon_announcements->the_post();
    ?>

    <div class="container-fluid">
        <div class="container sticky-bg">
            <div class="sticky-post">

                <h1 class="title_announcement">
                    <?php the_title(); ?>
                </h1>

                <p>
                    <?php the_content(); ?>
                </p>

            </div>
        </div>
    </div>
<?php } ?>


<div class="container-fluid welcome">
    <h1>Experience how great it is to sell or buy a home with us</h1>
</div>
<div class="container welcome-links">
    <div class="row text-center">
        <div class="col-lg-4">
            <img src="http://herizon.christophertoulee.com//wp-content/uploads/2018/09/herizon_sell.jpg" class="img-fluid">
            <br>
            <br>
            <h1>Buy</h1>
            <p>We love to help buyers find a home that they can be happy in. We always do our best to serve all of your real estate needs.</p>
        </div>
        <div class="col-lg-4">
            <img src="http://herizon.christophertoulee.com//wp-content/uploads/2018/09/key_buyers.jpg" class="img-fluid">
            <br>
            <br>
            <h1>Sell</h1>
            <p>We enjoy selling homes and helping sellers prepare, market, and sell their home.</p>
        </div>
        <div class="col-lg-4">
            <img src="http://herizon.christophertoulee.com//wp-content/uploads/2018/09/home001.jpg" class="img-fluid">
            <br>
            <br>
            <h1>Properties</h1>
            <p>Come take a look at all of the properties that we can help you purchase.</p>
        </div>
    </div>
</div>

<div class="container-fluid light-bg">
    <div class="container">
        <div class="row agents">
            <div class="col-xl-5">
                <img src="http://herizon.christophertoulee.com/wp-content/uploads/2019/01/herizon_agents.jpg" class="img-fluid">
            </div>
            <div class="col-xl-7 text-center">
                <h1>What our agents can do for you</h1>
                <p>
                    Our Realtors have access to the Multiple Listing Service in three different MLS Areas which keeps them abreast of any new listings from any MLS Company. Our Realtors® spend time with you, just learning your real estate needs. Our Realtors can also help you sell your home. With our listing options we are able to meet the needs of sellers in a manner most suited to them. We offer various listing options to sellers. By doing so, sellers are able to choose the most economical way to market and sell their home and actively participate in the selling process if they desire to.
                </p>
                <p>We always do our best to serve all your real estate needs.<br><br>
                    <a href="/agents/" class="btn btn-primary btn-lg" role="button">Find an Agent</a> </p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xl-3">
            </div>
            <div class="col-xl-6 text-center contact-us-form">
                <h1>Get in touch</h1>
                <p>Have any questions or just want to get in touch with us?</p>

                <form id="contact-form" method="post" action="contact/email_handler.php" role="form">

                    <div class="messages"></div>

                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <input type="firstName" class="form-control" id="firstName" name="firstName" aria-describedby="firstName" placeholder="First Name" required="required" data-error="First name is required">
                            </div>
                            <div class="col">
                                <input type="lastName" class="form-control" id="lastName" name="lastName" aria-describedby="lastName" placeholder="Last Name" required="required" data-error="Last name is required">
                            </div>
                        </div><br>
                        <div class="form-row">
                            <div class="col">
                                <input type="email" class="form-control" id="emailInput" name="emailInput" aria-describedby="emailInput" placeholder="Enter email" required="required" data-error="Email is required">
                            </div>
                        </div>
                        <p class="antispam">Leave this empty: <input type="text" name="url" /></p>
                        <br>
                        <div class="form-row">
                            <div class="col">
                                <textarea class="form-control" id="messageArea" rows="4" name="message" placeholder="Message" required="required" data-error="A message is required"></textarea>
                            </div>
                        </div>
                        <div class="help-block with-errors"></div>
                    </div>
                    <input type="submit" class="btn btn-secondary" value="Send">
                </form>




            </div>
            <div class="col-xl-3">
            </div>
        </div>
    </div>
</div>

<?php
get_footer();

?>
