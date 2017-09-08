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
