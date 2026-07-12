<?php
/**
 * Idara Theme functions and definitions
 *
 * @package Idara_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * 1. Theme Setup (Theme Support, Menus, Elementor)
 */
function idara_theme_setup() {
	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Add theme support for HTML5 markup.
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Custom Logo Support
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
	) );

	// Elementor Support: Ensures Elementor works perfectly with the theme
	add_theme_support( 'elementor' );

	// Register Menus
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'idara-theme' ),
			'footer'  => esc_html__( 'Footer Menu', 'idara-theme' ),
		)
	);
}
add_action( 'after_setup_theme', 'idara_theme_setup' );

/**
 * 2. Enqueue Scripts and Styles
 */
function idara_theme_scripts() {
	// Theme's base stylesheet
	wp_enqueue_style( 'idara-style', get_stylesheet_uri(), array(), '1.0.0' );
	
	// Custom Main CSS
	wp_enqueue_style( 'idara-main-css', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0' );

	// Custom Main JS
	wp_enqueue_script( 'idara-main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'idara_theme_scripts' );

/**
 * 3. Custom Post Types (Courses & Tutors)
 * Retaining the include for modularity so custom post types stay organized.
 */
require get_template_directory() . '/inc/custom-post-types.php';

/**
 * 4. Register Widget Areas
 */
function idara_widgets_init() {
	// Main Sidebar
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'idara-theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'idara-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	// Footer Column 1
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 1', 'idara-theme' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets for the first footer column here.', 'idara-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );

	// Footer Column 2
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 2', 'idara-theme' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets for the second footer column here.', 'idara-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'idara_widgets_init' );

/**
 * 5. Contact Form Handler
 */
function idara_handle_contact_form() {
	// Verify nonce
	if ( ! isset( $_POST['contact_nonce'] ) || ! wp_verify_nonce( $_POST['contact_nonce'], 'contact_form_submit' ) ) {
		wp_die( 'Security check failed. Please go back and try again.' );
	}

	// Sanitise inputs
	$name    = sanitize_text_field( $_POST['contact_name']    ?? '' );
	$email   = sanitize_email( $_POST['contact_email']         ?? '' );
	$phone   = sanitize_text_field( $_POST['contact_phone']   ?? '' );
	$course  = sanitize_text_field( $_POST['contact_course']  ?? '' );
	$message = sanitize_textarea_field( $_POST['contact_message'] ?? '' );

	// Basic validation
	if ( empty( $name ) || empty( $email ) || empty( $message ) || ! is_email( $email ) ) {
		wp_safe_redirect( add_query_arg( 'contact', 'error', wp_get_referer() ) );
		exit;
	}

	// Build email
	$to      = get_option( 'admin_email' );
	$subject = 'New Contact Form Submission from ' . $name;
	$body    = "Name: $name\n";
	$body   .= "Email: $email\n";
	$body   .= "Phone: $phone\n";
	$body   .= "Course: $course\n\n";
	$body   .= "Message:\n$message";
	$headers = array(
		'Content-Type: text/plain; charset=UTF-8',
		'Reply-To: ' . $name . ' <' . $email . '>',
	);

	wp_mail( $to, $subject, $body, $headers );

	// Redirect with success flag
	$contact_page = get_permalink( get_page_by_path( 'contact' ) );
	wp_safe_redirect( add_query_arg( 'contact', 'success', $contact_page ) );
	exit;
}
add_action( 'admin_post_handle_contact_form',        'idara_handle_contact_form' );
add_action( 'admin_post_nopriv_handle_contact_form', 'idara_handle_contact_form' );
