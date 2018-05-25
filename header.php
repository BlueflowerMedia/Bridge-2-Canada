
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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<?php wp_head(); ?>
</head>

<<<<<<< HEAD
<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'blueflowermedia' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="top-navigation">
      <!-- navbar left -->
			<div class="nav-item-left">
        <a href="<?php echo get_home_url(); ?>">	<img src="<?php echo get_template_directory_uri(); ?>/images/b2c-logo-website.png" alt="Bridge 2 Canada"></a>
			</div>
      <!-- navbar right -->
      <div class="nav-item-right">
				<ul>
					<li><a href="" >About</a></li>
					<li><a href="" >Objectives</a></li>
					<li><a href="" >Contact</a></li>
				</ul>
      </div>
		</nav>
	</header>

	<div id="content" class="site-content">
	</header>
=======
<body>
<div class="topnav" id="myTopnav">


			<a href="#" id="nav-left" class="responsive" style="flex-grow: 1"><img src="<?php echo get_template_directory_uri(); ?>/images/b2c-logo-website.png" alt="bridge 2 Canada"></a>
			<a style="flex-grow: 8"></a>
			<a href="#" id="aboutlink" style="flex-grow: 1">About</a>
			<a href="#" id="objectiveslink" style="flex-grow: 1">Objectives</a>
			<a href="#" id="contactslink" style="flex-grow: 1">Contact</a>
  		<a href="javascript:void(0);"  id="nav-right" class="icon" onclick="myFunction()">  <i class="fa fa-bars"></i></a>
>>>>>>> c1d22d77fc0d1ffa5f01493d7c639ff9f1565965
</div>

</body>
