<?php
/**
 * The header for our theme.
 *
 * @package vatjss_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>
			
			<div class="site-header-background"></div>
			<header id="masthead" class="site-header" role="banner">
				<div class="vatjss-container">
					<div class="vatjss-flex-container-no-wrap">
						<div class="site-branding vatjss-flex-item-desktop-20">
						<a href=<?php echo home_url() ?>><img class="vatjss-hidden-mobile" src=<?php echo get_stylesheet_directory_uri(); ?>/images/vatjss_logo_text_side_white.svg alt="VATJSS logo image"/></a>
							<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						</div>
						<nav id="site-navigation" class="main-navigation vatjss-flex-item-mobile-100 vatjss-flex-item-desktop-80" role="navigation">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="vatjss-hidden-desktop vatjss-mobile-logo" src=<?php echo get_stylesheet_directory_uri(); ?>/images/vatjss_mobile_logo.svg alt="hero image"/></a>
							<div id="vatjss-nav-menu" class="vatjss-hidden-mobile vatjss-nav-menu"><?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?></div>
							<div class="vatjss-phone-search">
								<a class="phone" href="tel:604-123-4567"><span><i class="fa fa-phone" aria-hidden="true"></i></span><span class="vatjss-hidden-mobile">(604)-123-4567</span></a>
								<?php echo get_search_form(); ?>
							</div>
						</nav>
					</div>
				</div>
			</header><!-- #masthead -->
			<div id="content" class="site-content">
