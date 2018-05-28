
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<?php wp_head(); ?>
</head>

<body>
<div class="topnav" id="myTopnav">
	<div class="logo">
		<a href="#" class="responsive"><img src="<?php echo get_template_directory_uri(); ?>/images/b2c-logo-website.png" alt="bridge 2 Canada"></a>
	</div>
	<div class="options">
		<a href="#about">About</a>
		<a href="#objectives" >Objectives</a>
		<a href="#contacts" >Contact</a>

		<div class="hamburger" id="hamburger-9">
			<span class="line"></span>
			<span class="line"></span>
			<span class="line"></span>
		</div>
	</div>
	<div id="dropdown-menu" class="dropdown">
	  <ul>
	   	<li ><a href="#about">About</a></li>
	   <li><a href="#objectives">Objectives</a></li>
	   <li><a href="#contacts">Contact</a></li>
	  </ul>
	</div>
	</div>
</div>

</body>
