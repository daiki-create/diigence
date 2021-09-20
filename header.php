<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">

	<!-- Vendor Styles -->
	<link href="https://diigence.com/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="https://diigence.com/css/animate.css" rel="stylesheet" type="text/css"/>
	<link href="https://diigence.com/vendor/themify/themify.css" rel="stylesheet" type="text/css"/>
	<link href="https://diigence.com/vendor/scrollbar/scrollbar.min.css" rel="stylesheet" type="text/css"/>
	<link href="https://diigence.com/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>
	<link href="https://diigence.com/vendor/swiper/swiper.min.css" rel="stylesheet" type="text/css"/>
	<link href="https://diigence.com/vendor/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>

	<!-- Theme Styles -->
	<link href="https://diigence.com/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="https://diigence.com/css/global/global.css" rel="stylesheet" type="text/css"/>
	<link href="https://diigence.com/css/my-style.css" rel="stylesheet" type="text/css"/>

	<!-- <?php wp_head(); ?> -->
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a>

	<?php get_template_part( 'template-parts/header/site-header' ); ?>

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
