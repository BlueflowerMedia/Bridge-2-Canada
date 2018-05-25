
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

<body>
<div class="topnav" id="myTopnav">
	<div class="logo">
		<a href="#" id="nav-left" class="responsive"><img src="<?php echo get_template_directory_uri(); ?>/images/b2c-logo-website.png" alt="bridge 2 Canada"></a>
	</div>
	<div class="options">
		<a href="#" id="aboutlink">About</a>
		<a href="#" id="objectiveslink">Objectives</a>
		<a href="#" id="contactslink">Contact</a>
		<a href="javascript:void(0);"  id="nav-right" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
	</div>

</div>

</body>
