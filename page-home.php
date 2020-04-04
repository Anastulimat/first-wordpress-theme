<?php
/**
 * Template Name: Home Page
 * Template Post Type: page, post
 *
 * @package Bootstrap_to_WordPress
 */


get_header();
?>

    <?php get_template_part( 'content', 'hero' ); ?>

    <?php get_template_part( 'content', 'optin' ); ?>

    <?php get_template_part( 'content', 'income' ); ?>

    <?php get_template_part( 'content', 'benefits' ); ?>

    <?php get_template_part( 'content', 'coursefeatures' ); ?>

    <?php get_template_part( 'content', 'projectfeatures' ); ?>

    <?php get_template_part( 'content', 'videosfeature' ); ?>

    <?php get_template_part( 'content', 'instructor' ); ?>

    <?php get_template_part( 'content', 'testimonials' ); ?>



<?php
get_footer();
