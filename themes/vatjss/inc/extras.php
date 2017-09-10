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

// ABOUT HERO BACKGROUND 
// function my_style_method() {
// 	switch(true) {
// 		case is_page('page-templates/about'):
// 			$urlAbout = CFS()->get('about_header_image');
// 			$custom_css = "
// 				.vatjss-custom-hero {
// 					background: url ({ $urlAbout }) no-repeat center bottom;
// 					background-size: cover;
// 				};";
// 			break;
// 				default: $custom_css;	
// 			break;
// 	}
// 	wp_add_inline_style('vatjss-style', $custom_css);
// }
// add_action('wp_enqueue_scripts', 'my_style_method');