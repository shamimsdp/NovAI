<?php
/**
 * NovAI — Theme Functions
 *
 * @package NovAI
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// ── Constants ──────────────────────────────────────────────────────────────
define( 'NOVAI_VERSION',   '1.0.0' );
define( 'NOVAI_DIR',       get_template_directory() );
define( 'NOVAI_URI',       get_template_directory_uri() );

// ── Theme setup ────────────────────────────────────────────────────────────
function novai_setup() {
	load_theme_textdomain( 'novai', NOVAI_DIR . '/languages' );

	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/css/editor.css' );

	// Custom logo
	add_theme_support( 'custom-logo', [
		'height'      => 48,
		'width'       => 160,
		'flex-height' => true,
		'flex-width'  => true,
	] );

	// HTML5 markup
	add_theme_support( 'html5', [
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	] );
}
add_action( 'after_setup_theme', 'novai_setup' );

// ── Enqueue styles & scripts ───────────────────────────────────────────────
function novai_enqueue_assets() {
	// Main stylesheet (compiled from assets/css/)
	wp_enqueue_style(
		'novai-style',
		NOVAI_URI . '/assets/css/custom.css',
		[],
		NOVAI_VERSION
	);

	// Lightweight navigation script (no jQuery dependency)
	wp_enqueue_script(
		'novai-navigation',
		NOVAI_URI . '/assets/js/navigation.js',
		[],
		NOVAI_VERSION,
		[ 'strategy' => 'defer', 'in_footer' => true ]
	);
}
add_action( 'wp_enqueue_scripts', 'novai_enqueue_assets' );

// ── Include helper modules ─────────────────────────────────────────────────
require_once NOVAI_DIR . '/inc/block-patterns.php';
require_once NOVAI_DIR . '/inc/font-preload.php';
require_once NOVAI_DIR . '/inc/performance.php';
require_once NOVAI_DIR . '/inc/lib/class-tgm-plugin-activation.php';
require_once NOVAI_DIR . '/inc/tgmpa.php';

// ── Block patterns auto-loader ──────────────────────────────────────────────
// WordPress 6.0+ auto-registers pattern files in /patterns/ using the PHP
// file header. This explicit loader exists only for environments < 6.0.
function novai_register_patterns(): void {
	if ( version_compare( get_bloginfo( 'version' ), '6.0', '>=' ) ) {
		return; // Core handles it.
	}

	$pattern_dir = NOVAI_DIR . '/patterns/';
	if ( ! is_dir( $pattern_dir ) ) {
		return;
	}

	foreach ( glob( $pattern_dir . '*.php' ) as $file ) {
		$pattern_data = get_file_data( $file, [
			'title'      => 'Title',
			'slug'       => 'Slug',
			'categories' => 'Categories',
		] );

		if ( empty( $pattern_data['slug'] ) ) {
			continue;
		}

		ob_start();
		include $file;
		$content = ob_get_clean();

		register_block_pattern(
			$pattern_data['slug'],
			[
				'title'      => $pattern_data['title'],
				'content'    => $content,
				'categories' => array_map( 'trim', explode( ',', $pattern_data['categories'] ) ),
			]
		);
	}
}
add_action( 'init', 'novai_register_patterns' );

// ── Dequeue unused block library theme styles ──────────────────────────────
function novai_dequeue_unused_block_styles(): void {
	wp_dequeue_style( 'wp-block-library-theme' );
}
add_action( 'wp_enqueue_scripts', 'novai_dequeue_unused_block_styles', 100 );
