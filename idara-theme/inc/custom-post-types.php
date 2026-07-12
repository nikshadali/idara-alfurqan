<?php
/**
 * Register custom post types for the Quranic Academy
 */

function idara_register_custom_post_types() {

	// 1. Courses Post Type
	$course_labels = array(
		'name'                  => _x( 'Courses', 'Post type general name', 'idara-theme' ),
		'singular_name'         => _x( 'Course', 'Post type singular name', 'idara-theme' ),
		'menu_name'             => _x( 'Courses', 'Admin Menu text', 'idara-theme' ),
		'add_new'               => __( 'Add New', 'idara-theme' ),
		'add_new_item'          => __( 'Add New Course', 'idara-theme' ),
	);

	$course_args = array(
		'labels'             => $course_labels,
		'public'             => true,
		'has_archive'        => true,
		'menu_icon'          => 'dashicons-welcome-learn-more',
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
		'rewrite'            => array( 'slug' => 'courses' ),
	);

	register_post_type( 'idara_course', $course_args );

	// 2. Tutors Post Type
	$tutor_labels = array(
		'name'                  => _x( 'Tutors', 'Post type general name', 'idara-theme' ),
		'singular_name'         => _x( 'Tutor', 'Post type singular name', 'idara-theme' ),
		'menu_name'             => _x( 'Tutors', 'Admin Menu text', 'idara-theme' ),
	);

	$tutor_args = array(
		'labels'             => $tutor_labels,
		'public'             => true,
		'has_archive'        => false,
		'menu_icon'          => 'dashicons-businessman',
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
	);

	register_post_type( 'idara_tutor', $tutor_args );
}
add_action( 'init', 'idara_register_custom_post_types' );
