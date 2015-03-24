<?php
/**
 * Overscores functions and definitions
 *
 * @package Overscores
 */

/**
 * Enqueue scripts and styles.
 */
function overscores_style() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'overscores_style' );

/**
 * Enqueue scripts and styles.
 */
function overscores_scripts() {
	wp_dequeue_script( 'underscores-scripts' );
	wp_enqueue_script( 'overscores-scripts', get_stylesheet_directory_uri() . '/js/overscores-scripts.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'overscores_scripts', 20 );

/**
 * Returns the Google font stylesheet URL, if available.
 *
 * The use of Quattrocento Sans and Playfair Display by default is
 * localized. For languages that use characters not supported by either
 * font, the font can be disabled.
 *
 * @return string Font stylesheet or empty string if disabled.
 */
function overscores_fonts_url() {
	$fonts_url = '';

	$font_families = array(
		urlencode( 'Karla:400,400italic,700,700italic' ),
		urlencode( 'Montserrat:400,700' ),
	);

	$protocol = is_ssl() ? 'https' : 'http';
	$fonts_url = add_query_arg( 'family', implode( '|', $font_families ), "$protocol://fonts.googleapis.com/css" );

	return $fonts_url;
}

/**
 * Loads our special font CSS file.
 *
 * To disable in a child theme, use wp_dequeue_style()
 * function mytheme_dequeue_fonts() {
 *     wp_dequeue_style( 'overscores-fonts' );
 * }
 * add_action( 'wp_enqueue_scripts', 'mytheme_dequeue_fonts', 11 );
 *
 * @return void
 */
function overscores_fonts() {
	$fonts_url = overscores_fonts_url();
	if ( ! empty( $fonts_url ) )
		wp_enqueue_style( 'overscores-fonts', esc_url_raw( $fonts_url ), array(), null );
}
// add_action( 'wp_enqueue_scripts', 'overscores_fonts' );

require_once 'plugins/overscores-generator.php';
