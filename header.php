<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_WordPress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bootstrap2wordpress' ); ?></a>

    <!-- HEADER
	================================================== -->
    <header class="site-header" role="banner">

        <!-- NAVBAR
		================================================== -->
	    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		    <div class="container">
			    <a class="navbar-brand" href="<?= site_url() ?>"><img src="<?php bloginfo( 'stylesheet_directory' ); ?> . /assets/img/logo.png" alt="Bootstrap to wordpress"></a>
			    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
			    </button>

			    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
				    <?php wp_nav_menu([
					    'theme_location' => 'primary',
					    'container' => false,
					    'menu_class' => 'navbar-nav'
				    ]) ?>
			    </div>
		    </div>
	    </nav>
    </header>

	<div id="content" class="site-content">
