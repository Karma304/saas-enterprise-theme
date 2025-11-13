<?php
/**
 * SaaS Enterprise Theme functions and definitions
 *
 * @package SaaS_Enterprise_Theme
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Theme setup
 */
function saas_enterprise_theme_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Switch default core markup to output valid HTML5.
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

	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );

	// Add support for editor styles.
	add_theme_support( 'editor-styles' );

	// Add support for wide and full alignment.
	add_theme_support( 'align-wide' );

	// Make theme available for translation.
	load_theme_textdomain( 'saas-enterprise-theme', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'saas_enterprise_theme_setup' );

/**
 * Enqueue Google Fonts
 */
function saas_enterprise_theme_fonts() {
	wp_enqueue_style(
		'saas-enterprise-theme-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@400;500;600;700;800&display=swap',
		array(),
		null
	);
}
add_action( 'wp_enqueue_scripts', 'saas_enterprise_theme_fonts' );
add_action( 'admin_enqueue_scripts', 'saas_enterprise_theme_fonts' );

/**
 * Enqueue theme scripts
 */
function saas_enterprise_theme_scripts() {
	// Enqueue theme JavaScript.
	wp_enqueue_script(
		'saas-enterprise-theme-script',
		get_template_directory_uri() . '/assets/js/theme.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'saas_enterprise_theme_scripts' );

/**
 * Register block pattern categories
 */
function saas_enterprise_theme_register_pattern_categories() {
	$categories = array(
		'saas-hero'            => array( 'label' => __( 'Hero Sections', 'saas-enterprise-theme' ) ),
		'saas-about'           => array( 'label' => __( 'About Sections', 'saas-enterprise-theme' ) ),
		'saas-banners'         => array( 'label' => __( 'Banners', 'saas-enterprise-theme' ) ),
		'saas-cta'             => array( 'label' => __( 'Call to Action', 'saas-enterprise-theme' ) ),
		'saas-gallery'         => array( 'label' => __( 'Galleries', 'saas-enterprise-theme' ) ),
		'saas-posts'           => array( 'label' => __( 'Posts', 'saas-enterprise-theme' ) ),
		'saas-text'            => array( 'label' => __( 'Text Sections', 'saas-enterprise-theme' ) ),
		'saas-testimonials'    => array( 'label' => __( 'Testimonials', 'saas-enterprise-theme' ) ),
		'saas-pricing'         => array( 'label' => __( 'Pricing', 'saas-enterprise-theme' ) ),
		'saas-features'        => array( 'label' => __( 'Features', 'saas-enterprise-theme' ) ),
		'saas-stats'           => array( 'label' => __( 'Statistics', 'saas-enterprise-theme' ) ),
		'saas-faq'             => array( 'label' => __( 'FAQ', 'saas-enterprise-theme' ) ),
	);

	foreach ( $categories as $slug => $args ) {
		register_block_pattern_category( $slug, $args );
	}
}
add_action( 'init', 'saas_enterprise_theme_register_pattern_categories' );

/**
 * Add custom image sizes
 */
function saas_enterprise_theme_image_sizes() {
	add_image_size( 'saas-hero', 1920, 1080, true );
	add_image_size( 'saas-feature', 800, 600, true );
	add_image_size( 'saas-thumbnail', 400, 300, true );
}
add_action( 'after_setup_theme', 'saas_enterprise_theme_image_sizes' );

/**
 * Add editor styles
 */
function saas_enterprise_theme_editor_styles() {
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'saas_enterprise_theme_editor_styles' );
