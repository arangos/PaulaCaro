<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Penscratch
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="icon" href="http://localhost:8888/paulacaro.com/imagenes/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://localhost:8888/paulacaro.com/imagenes/favicon.ico" type="image/x-icon" />
<link type="text/css" rel="stylesheet" href="Css-Generales/font-awesome-4.3.0/css/font-awesome.css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- 	NUEVA BARRA PARA LOGO NOMBRE Y REDES SOCIALES -->
	
	<nav>
	<div  id="imagenes"  role="navigation" style="background-color: black; width: 100%;">
			
			<div style="width: 50%; float:left;">
					<img align="middle" src="http://localhost:8888/paulacaro.com/imagenes/IconoBlog.jpg" height="47px" width="47px">
					&nbsp;
					<img align="middle" src="http://localhost:8888/paulacaro.com/imagenes/BarraNombre.jpg" height="50px" width="120px">
			</div>	
	
			<div class="socialbtns" style="width: 50%; float:left;" >
						<li style="float:right">
						<a  href="#" class="fa fa-lg fa-facebook"></a>
						</li>
						<li style="float:right"><a href="#" class="fa fa-lg fa-twitter"></a></li>
			</div>
<!-- 	Esto es para que se seten bien las divs -->
		<br style="clear: left;" />			
	</div>
	</nav>
	
<!-- 	NUEVA BARRA PARA LOGO NOMBRE Y REDES SOCIALES -->

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'penscratch' ); ?></a>
	<header id="masthead" class="site-header" role="banner">
	
	

	
		<div class="site-branding">
			<?php if ( function_exists( 'jetpack_the_site_logo' ) ) jetpack_the_site_logo(); ?>
			<!-- <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1> -->
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="http://localhost:8888/paulacaro.com/imagenes/paulacaro4.png" style="float: right;" alt="Logo" /></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>


		<nav id="site-navigation" class="main-navigation" role="navigation">
		
	<!--  <img src="http://localhost:8888/paulacaro.com/imagenes/peque1.jpg" style="float: left;" alt="Logo" width="80px" heigth="100px"/> -->
			<button class="menu-toggle"><?php _e( 'Menu', 'penscratch' ); ?></button>
	<!--  <img src="http://localhost:8888/paulacaro.com/imagenes/peque2.jpg" style="float: right;" alt="Logo" width="80px" heigth="100px"/>	-->
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		
			
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<?php if ( get_header_image() ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img class="custom-header" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
			</a>
		<?php endif;  // End header image check. ?>