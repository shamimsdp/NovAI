<?php
declare(strict_types=1);
/**
 * NovAI — TGMPA Plugin Recommendations
 *
 * Registers recommended plugins for NovAI via TGM Plugin Activation.
 *
 * @package NovAI
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register recommended plugins for NovAI.
 *
 * @return void
 */
function novai_register_recommended_plugins(): void {
	$plugins = [
		[
			'name'     => 'WooCommerce',
			'slug'     => 'woocommerce',
			'required' => false,
		],
		[
			'name'     => 'WP All Import',
			'slug'     => 'wp-all-import',
			'required' => false,
		],
		[
			'name'     => 'Contact Form 7',
			'slug'     => 'contact-form-7',
			'required' => false,
		],
		[
			'name'     => 'Yoast SEO',
			'slug'     => 'wordpress-seo',
			'required' => false,
		],
		[
			'name'     => 'Kirki Customizer Framework',
			'slug'     => 'kirki',
			'required' => false,
		],
	];

	$config = [
		'id'           => 'novai',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'parent_slug'  => 'themes.php',
		'capability'   => 'edit_theme_options',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => false,
		'message'      => '',
		'strings'      => [
			'page_title' => esc_html__( 'Install Recommended Plugins', 'novai' ),
			'menu_title' => esc_html__( 'Install Plugins', 'novai' ),
		],
	];

	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'novai_register_recommended_plugins' );
