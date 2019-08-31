<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package veropeluqueria
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'veropeluqueria' ); ?></a>

	<header id="masthead" class="site-header">

		<div class="antesHeader">
			<div class="socialHeader">
				<a href="mailto:geser.geser51@gmail.com" target="_blank" rel="nofollow"><span class="dashicons dashicons-email-alt"></span></a>
				<a href="https://www.facebook.com/geseradvance51/" target="_blank" rel="nofollow"><span class="dashicons dashicons-facebook"></span></a>
				<a href="https://twitter.com/GAdvance51" target="_blank" rel="nofollow" ><span class="dashicons dashicons-twitter"></span></a>
			</div>	
			<div class="horario">
				<p>LUN-SÁB: 8:30-14:00 y 16:00-20:00  /</p>
				<p>  DOM: CERRADO  /</p>
				<p> <a href="">RESERVAR</a></p>
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<a href="http://plantilla-web-simple.local/inicio/"><img class="imagenLogo" src="http://plantilla-web-simple.local/wp-content/uploads/2019/08/Vero-Peluqueria.png" alt="Logo de la web" /></a>
			<button style="display: none;" class="menu-toggle dashicons dashicons-menu" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( '', 'Vero' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-4',
				'menu_id'        => 'Vero',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
