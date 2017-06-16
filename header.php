<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<?php if(is_front_page()) { ?>
	<body <?php body_class(); ?>>
		<video id="bgvid" playsinline autoplay muted loop>
			<source src="<?php bloginfo('template_url') ?>/media/type.mp4" type="video/mp4">
		</video>
<?php } else { ?>
	<body <?php body_class(); ?>>
<?php } ?>

<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

		<nav id="myNavmenu" class="navmenu navmenu-dark navmenu-fixed-left offcanvas" role="navigation">
			<div class="d-flex justify-content-center">
				<a class="navmenu-brand" href="/">marcopayumo.com</a>
			</div>
  			

			<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_id'    => 'navbarNavOffcanvas',
						'menu_class'      => 'nav navmenu-nav d-flex flex-column',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'walker'          => new WP_Bootstrap_Navwalker(),
					)
				); ?>


		</nav><!-- .site-navigation -->
	
		<button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target="#myNavmenu" data-canvas="body">
			<div class="hexagon d-flex justify-content-center align-items-center"><i class="fa fa-bars" aria-hidden="true"></i></div>
		</button>
		
		<div class="title-bar-margin d-flex justify-content-center">
			<?php //if(is_front_page() || 'portfolio_cases' == get_post_type()) { ?>
					<a class="navmenu-brand" href="/"><img src="<?php bloginfo(template_url); ?>/img/mp_3d.svg"></a>
				<?php //}
			?>
		</div>
 
	</div><!-- .wrapper-navbar end -->
