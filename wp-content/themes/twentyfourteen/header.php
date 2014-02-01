<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/custom.css">
	<?php wp_head(); ?>
</head>

<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('body').attr('class', 'en-home');
	});
</script>

<body>
<div>
	
	<header class="en-header" role="banner">
		<div class="en-top-bar">
			<div class="en-language-chooser">
				<?php echo qtrans_generateLanguageSelectCode('image'); ?>
			</div>
		</div>
		<div class="en-nav">
			<div class="en-nav-beginning" >&nbsp</div>
			<img class="en-logo" src="<?php echo get_template_directory_uri(); ?>/images/design-images/logo.png" />
			<div class="en-nav-home" > <a> Početna </a></div>
			<?php wp_nav_menu(array('menu_class' => 'en-nav-bar')); ?>
		</div>
		
	</header><!-- #masthead -->

	
