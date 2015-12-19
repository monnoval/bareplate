<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bareplate
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="header" role="banner">

		<div class="header__nav">
			<div class="site--wrapper clearfix">
				<div class="header__logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="header__logo-a">
					</a>
				</div>
				<div class="header__menu header__menu--primary js__header__menu_primary">
					<nav id="site-navigation" class="header__menu-nav header__menu-nav--primary" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'menu__ul', ) ) ?>
					</nav>
				</div>
			</div>
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">