<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blueflowedmedia
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'blueflowermedia' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation fixed container-navbar">
      <!-- navbar left -->
			<div class="nav-left">

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">	<img src="<?php echo get_template_directory_uri(); ?>/images/b2c-logo-website.png" alt="Bridge 2 Canada"></a>


			</div>


      <!-- navbar right -->
      <div class="nav-right">
		<ul>
			<li><a href=""><button class="nav-about" type="button" name="button">About</button></a></li>
			<li><a href=""><button class="nav-objectives" type="button" name="button">Objectives</button></a></li>
			<li><a href=""><button class="nav-Contact" type="button" name="button">Contact</button></a></li>
		</ul>

      </div>
		</nav>
	</header>

	<div id="content" class="site-content">
