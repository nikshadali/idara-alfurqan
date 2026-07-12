<?php
/**
 * Enqueue scripts and styles.
 */

function idara_theme_scripts() {
	// Main Stylesheet
	wp_enqueue_style( 'idara-style', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0' );

	// Main JS Script
	wp_enqueue_script( 'idara-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'idara_theme_scripts' );
