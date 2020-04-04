<?php
/**
 * Hero Section
 */
$prices           = get_field( 'prices' );
$pre_launch_text  = $prices['pre_launch_price']['price_text'];
$pre_launch_value = $prices['pre_launch_price']['price_value'];

$launch_text  = $prices['launch_price']['price_text'];
$launch_value = $prices['launch_price']['price_value'];

$final_text  = $prices['final_price']['price_text'];
$final_value = $prices['final_price']['price_value'];
?>


<!-- HERO
================================================== -->
<section id="hero" data-type="background" data-speed="5">
    <article>
        <div class="container clearfix">
            <div class="row">

                <div class="col-sm-5">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>. /assets/img/logo-badge.png"
                         alt="Bootstrap to Wordpress" class="logo">
                </div><!-- col -->

                <div class="col-sm-7 hero-text">
                    <h1><?php bloginfo( 'name' ); ?></h1>
                    <p class="lead"><?php bloginfo( 'description' ); ?></p>

                    <div id="price-timeline">
                        <div class="price active">
                            <h4><?= $pre_launch_text; ?> <small>Ends soon!</small></h4>
                            <span>$<?= $pre_launch_value; ?></span>
                        </div><!-- end price -->
                        <div class="price">
                            <h4><?= $launch_text; ?> <small>Coming soon!</small></h4>
                            <span>$<?= $launch_value; ?></span>
                        </div><!-- end price -->
                        <div class="price">
                            <h4><?= $final_text; ?><small>Coming soon!</small></h4>
                            <span>$<?= $final_value; ?></span>
                        </div><!-- end price -->
                    </div><!-- price-timeline -->

                    <p><a class="btn btn-lg btn-danger" href="/" role="button">Enroll now &raquo;</a></p>
                </div><!-- col -->

            </div><!-- row -->
        </div><!-- container -->
    </article>
</section>