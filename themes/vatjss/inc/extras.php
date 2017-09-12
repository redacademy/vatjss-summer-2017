<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package vatjss_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function vatjss_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'vatjss_body_classes' );

function vatjss_archive_title( $title ) {
	if ( is_post_type_archive('staff') ) {
			$title = 'Our Staff';
	}
	return $title;
}
add_filter( 'get_the_archive_title', 'vatjss_archive_title' );

/* ABOUT HERO BACKGROUND */
function vatjss_about_dynamic_css() {
	if( ! is_page_template( 'page-templates/about.php' )) {
		return;
	}
	$image = CFS()->get( 'about_header_image' );
	if ( ! $image ) {
		return;
	}
	$banner_css = ".vatjss-custom-hero{
		background: linear-gradient(230deg, rgba(0, 0, 0, 0.25) 0, rgba(0, 0, 0, 0.25)), 
			url({$image}) no-repeat center bottom;
		height: 100vh;
		background-size: cover;
		margin: 0;
		padding: 0;
	}";
	wp_add_inline_style( 'vatjss-style', $banner_css );
}
add_action( 'wp_enqueue_scripts', 'vatjss_about_dynamic_css');

/* STAFF PAGE GROUP PHOTO */
function vatjss_about_staff_css() {
	if ( ! is_page_template( 'page-templates/about.php' )) {
		return;
	}
	$staff_photo = CFS()->get( 'staff_team_photo');
	if ( ! $staff_photo ) {
		return;
	}

	$staff_photo_css = " .vatjss-staff-img {
		background-image: url({$staff_photo});
		width: 100px;
		height: 100px;
	}";
	wp_add_inline_style( 'vatjss-style', $staff_photo_css );
}
add_action( 'wp_enqueue_scripts', 'vatjss_about_staff_css');