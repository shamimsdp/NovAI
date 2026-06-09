<?php
declare(strict_types=1);
/**
 * NovAI — Kirki Theme Options
 *
 * Registers Customizer options via Kirki and outputs dynamic CSS
 * based on user-selected theme settings.
 *
 * @package NovAI
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register a Theme Options page under Appearance.
 *
 * Block themes hide the default Customizer menu entry, so this provides
 * a predictable access point for Kirki-powered options.
 *
 * @return void
 */
function novai_register_theme_options_page(): void {
	add_theme_page(
		esc_html__( 'Theme Options', 'novai' ),
		esc_html__( 'Theme Options', 'novai' ),
		'edit_theme_options',
		'novai-theme-options',
		'novai_theme_options_redirect'
	);
}
add_action( 'admin_menu', 'novai_register_theme_options_page' );

/**
 * Redirect Theme Options page to the Customizer panel.
 *
 * @return void
 */
function novai_theme_options_redirect(): void {
	if ( ! current_user_can( 'edit_theme_options' ) ) {
		return;
	}

	wp_safe_redirect( admin_url( 'customize.php?autofocus[panel]=novai_theme_options' ) );
	exit;
}

/**
 * Register Kirki configuration and all NovAI option fields.
 *
 * @return void
 */
function novai_register_kirki_options(): void {
	if ( ! class_exists( 'Kirki' ) ) {
		return;
	}

	Kirki::add_config(
		'novai_theme_config',
		[
			'capability'  => 'edit_theme_options',
			'option_type' => 'theme_mod',
		]
	);

	Kirki::add_panel(
		'novai_theme_options',
		[
			'priority'    => 20,
			'title'       => esc_html__( 'NovAI Theme Options', 'novai' ),
			'description' => esc_html__( 'Customize branding, layout, colors, typography, and utility settings.', 'novai' ),
		]
	);

	Kirki::add_section(
		'novai_branding',
		[
			'title'    => esc_html__( 'Branding', 'novai' ),
			'panel'    => 'novai_theme_options',
			'priority' => 10,
		]
	);

	Kirki::add_section(
		'novai_header',
		[
			'title'    => esc_html__( 'Header', 'novai' ),
			'panel'    => 'novai_theme_options',
			'priority' => 20,
		]
	);

	Kirki::add_section(
		'novai_layout',
		[
			'title'    => esc_html__( 'Layout', 'novai' ),
			'panel'    => 'novai_theme_options',
			'priority' => 30,
		]
	);

	Kirki::add_section(
		'novai_colors',
		[
			'title'    => esc_html__( 'Colors', 'novai' ),
			'panel'    => 'novai_theme_options',
			'priority' => 40,
		]
	);

	Kirki::add_section(
		'novai_typography',
		[
			'title'    => esc_html__( 'Typography', 'novai' ),
			'panel'    => 'novai_theme_options',
			'priority' => 50,
		]
	);

	Kirki::add_section(
		'novai_blog',
		[
			'title'    => esc_html__( 'Blog', 'novai' ),
			'panel'    => 'novai_theme_options',
			'priority' => 60,
		]
	);

	Kirki::add_section(
		'novai_footer',
		[
			'title'    => esc_html__( 'Footer', 'novai' ),
			'panel'    => 'novai_theme_options',
			'priority' => 70,
		]
	);

	Kirki::add_section(
		'novai_social',
		[
			'title'    => esc_html__( 'Social Links', 'novai' ),
			'panel'    => 'novai_theme_options',
			'priority' => 80,
		]
	);

	Kirki::add_section(
		'novai_performance',
		[
			'title'    => esc_html__( 'Performance & Motion', 'novai' ),
			'panel'    => 'novai_theme_options',
			'priority' => 90,
		]
	);

	Kirki::add_section(
		'novai_custom_css',
		[
			'title'    => esc_html__( 'Custom CSS', 'novai' ),
			'panel'    => 'novai_theme_options',
			'priority' => 100,
		]
	);

	// Branding.
	Kirki::add_field(
		'novai_theme_config',
		[
			'type'        => 'text',
			'settings'    => 'novai_brand_tagline',
			'label'       => esc_html__( 'Hero Tagline', 'novai' ),
			'section'     => 'novai_branding',
			'default'     => esc_html__( 'Built for modern AI startups.', 'novai' ),
			'priority'    => 10,
			'transport'   => 'auto',
			'sanitize_callback' => 'sanitize_text_field',
		]
	);

	Kirki::add_field(
		'novai_theme_config',
		[
			'type'      => 'slider',
			'settings'  => 'novai_logo_max_width',
			'label'     => esc_html__( 'Logo Max Width (px)', 'novai' ),
			'section'   => 'novai_branding',
			'default'   => 160,
			'priority'  => 20,
			'choices'   => [
				'min'  => 80,
				'max'  => 320,
				'step' => 1,
			],
		]
	);

	// Header.
	Kirki::add_field(
		'novai_theme_config',
		[
			'type'     => 'switch',
			'settings' => 'novai_enable_sticky_header',
			'label'    => esc_html__( 'Enable Sticky Header', 'novai' ),
			'section'  => 'novai_header',
			'default'  => true,
			'priority' => 10,
			'choices'  => [
				'on'  => esc_html__( 'On', 'novai' ),
				'off' => esc_html__( 'Off', 'novai' ),
			],
		]
	);

	Kirki::add_field(
		'novai_theme_config',
		[
			'type'      => 'slider',
			'settings'  => 'novai_header_blur',
			'label'     => esc_html__( 'Header Blur (px)', 'novai' ),
			'section'   => 'novai_header',
			'default'   => 0,
			'priority'  => 20,
			'choices'   => [
				'min'  => 0,
				'max'  => 20,
				'step' => 1,
			],
		]
	);

	// Layout.
	Kirki::add_field(
		'novai_theme_config',
		[
			'type'      => 'slider',
			'settings'  => 'novai_container_width',
			'label'     => esc_html__( 'Content Width (px)', 'novai' ),
			'section'   => 'novai_layout',
			'default'   => 1200,
			'priority'  => 10,
			'choices'   => [
				'min'  => 960,
				'max'  => 1600,
				'step' => 10,
			],
		]
	);

	Kirki::add_field(
		'novai_theme_config',
		[
			'type'      => 'slider',
			'settings'  => 'novai_card_radius',
			'label'     => esc_html__( 'Card Radius (px)', 'novai' ),
			'section'   => 'novai_layout',
			'default'   => 12,
			'priority'  => 20,
			'choices'   => [
				'min'  => 0,
				'max'  => 32,
				'step' => 1,
			],
		]
	);

	// Colors.
	Kirki::add_field(
		'novai_theme_config',
		[
			'type'      => 'color',
			'settings'  => 'novai_accent_color',
			'label'     => esc_html__( 'Primary Accent Color', 'novai' ),
			'section'   => 'novai_colors',
			'default'   => '#6C47FF',
			'priority'  => 10,
			'choices'   => [
				'alpha' => false,
			],
		]
	);

	Kirki::add_field(
		'novai_theme_config',
		[
			'type'      => 'color',
			'settings'  => 'novai_accent_hover_color',
			'label'     => esc_html__( 'Accent Hover Color', 'novai' ),
			'section'   => 'novai_colors',
			'default'   => '#A78BFA',
			'priority'  => 20,
			'choices'   => [
				'alpha' => false,
			],
		]
	);

	// Typography.
	Kirki::add_field(
		'novai_theme_config',
		[
			'type'      => 'typography',
			'settings'  => 'novai_body_typography',
			'label'     => esc_html__( 'Body Typography', 'novai' ),
			'section'   => 'novai_typography',
			'priority'  => 10,
			'default'   => [
				'font-family'    => 'Inter',
				'variant'        => '400',
				'font-size'      => '16px',
				'line-height'    => '1.7',
				'letter-spacing' => '0',
			],
			'output'    => [
				[
					'element' => 'body',
				],
			],
		]
	);

	Kirki::add_field(
		'novai_theme_config',
		[
			'type'      => 'typography',
			'settings'  => 'novai_heading_typography',
			'label'     => esc_html__( 'Heading Typography', 'novai' ),
			'section'   => 'novai_typography',
			'priority'  => 20,
			'default'   => [
				'font-family'    => 'Inter',
				'variant'        => '600',
				'line-height'    => '1.2',
				'letter-spacing' => '-0.01em',
			],
			'output'    => [
				[
					'element' => 'h1,h2,h3,h4,h5,h6,.wp-block-heading',
				],
			],
		]
	);

	// Blog.
	Kirki::add_field(
		'novai_theme_config',
		[
			'type'     => 'switch',
			'settings' => 'novai_show_post_meta',
			'label'    => esc_html__( 'Show Post Meta', 'novai' ),
			'section'  => 'novai_blog',
			'default'  => true,
			'priority' => 10,
			'choices'  => [
				'on'  => esc_html__( 'On', 'novai' ),
				'off' => esc_html__( 'Off', 'novai' ),
			],
		]
	);

	Kirki::add_field(
		'novai_theme_config',
		[
			'type'     => 'switch',
			'settings' => 'novai_show_featured_image',
			'label'    => esc_html__( 'Show Featured Image', 'novai' ),
			'section'  => 'novai_blog',
			'default'  => true,
			'priority' => 20,
			'choices'  => [
				'on'  => esc_html__( 'On', 'novai' ),
				'off' => esc_html__( 'Off', 'novai' ),
			],
		]
	);

	// Footer.
	Kirki::add_field(
		'novai_theme_config',
		[
			'type'        => 'text',
			'settings'    => 'novai_footer_copyright',
			'label'       => esc_html__( 'Footer Copyright Text', 'novai' ),
			'section'     => 'novai_footer',
			'default'     => sprintf( '© %d NovAI. All rights reserved.', gmdate( 'Y' ) ),
			'priority'    => 10,
			'sanitize_callback' => 'sanitize_text_field',
		]
	);

	Kirki::add_field(
		'novai_theme_config',
		[
			'type'     => 'switch',
			'settings' => 'novai_show_footer_social',
			'label'    => esc_html__( 'Show Footer Social Links', 'novai' ),
			'section'  => 'novai_footer',
			'default'  => true,
			'priority' => 20,
			'choices'  => [
				'on'  => esc_html__( 'On', 'novai' ),
				'off' => esc_html__( 'Off', 'novai' ),
			],
		]
	);

	// Social.
	Kirki::add_field(
		'novai_theme_config',
		[
			'type'              => 'url',
			'settings'          => 'novai_social_x',
			'label'             => esc_html__( 'X (Twitter) URL', 'novai' ),
			'section'           => 'novai_social',
			'default'           => '',
			'priority'          => 10,
			'sanitize_callback' => 'esc_url_raw',
		]
	);

	Kirki::add_field(
		'novai_theme_config',
		[
			'type'              => 'url',
			'settings'          => 'novai_social_linkedin',
			'label'             => esc_html__( 'LinkedIn URL', 'novai' ),
			'section'           => 'novai_social',
			'default'           => '',
			'priority'          => 20,
			'sanitize_callback' => 'esc_url_raw',
		]
	);

	Kirki::add_field(
		'novai_theme_config',
		[
			'type'              => 'url',
			'settings'          => 'novai_social_github',
			'label'             => esc_html__( 'GitHub URL', 'novai' ),
			'section'           => 'novai_social',
			'default'           => '',
			'priority'          => 30,
			'sanitize_callback' => 'esc_url_raw',
		]
	);

	// Performance & motion.
	Kirki::add_field(
		'novai_theme_config',
		[
			'type'     => 'switch',
			'settings' => 'novai_enable_scroll_reveal',
			'label'    => esc_html__( 'Enable Scroll Reveal Animations', 'novai' ),
			'section'  => 'novai_performance',
			'default'  => true,
			'priority' => 10,
			'choices'  => [
				'on'  => esc_html__( 'On', 'novai' ),
				'off' => esc_html__( 'Off', 'novai' ),
			],
		]
	);

	Kirki::add_field(
		'novai_theme_config',
		[
			'type'     => 'switch',
			'settings' => 'novai_enable_card_hover',
			'label'    => esc_html__( 'Enable Card Hover Lift', 'novai' ),
			'section'  => 'novai_performance',
			'default'  => true,
			'priority' => 20,
			'choices'  => [
				'on'  => esc_html__( 'On', 'novai' ),
				'off' => esc_html__( 'Off', 'novai' ),
			],
		]
	);

	// Custom CSS.
	Kirki::add_field(
		'novai_theme_config',
		[
			'type'     => 'code',
			'settings' => 'novai_custom_css',
			'label'    => esc_html__( 'Custom CSS', 'novai' ),
			'section'  => 'novai_custom_css',
			'default'  => '',
			'choices'  => [
				'language' => 'css',
				'theme'    => 'monokai',
			],
			'priority' => 10,
		]
	);
}
add_action( 'init', 'novai_register_kirki_options', 20 );

/**
 * Output CSS generated from NovAI theme options.
 *
 * @return void
 */
function novai_output_theme_options_css(): void {
	$accent_color       = sanitize_hex_color( get_theme_mod( 'novai_accent_color', '#6C47FF' ) ) ?: '#6C47FF';
	$accent_hover_color = sanitize_hex_color( get_theme_mod( 'novai_accent_hover_color', '#A78BFA' ) ) ?: '#A78BFA';
	$logo_max_width     = absint( get_theme_mod( 'novai_logo_max_width', 160 ) );
	$container_width    = absint( get_theme_mod( 'novai_container_width', 1200 ) );
	$header_blur        = absint( get_theme_mod( 'novai_header_blur', 0 ) );
	$card_radius        = absint( get_theme_mod( 'novai_card_radius', 12 ) );
	$sticky_header      = (bool) get_theme_mod( 'novai_enable_sticky_header', true );
	$enable_reveal      = (bool) get_theme_mod( 'novai_enable_scroll_reveal', true );
	$enable_card_hover  = (bool) get_theme_mod( 'novai_enable_card_hover', true );
	$custom_css         = wp_strip_all_tags( (string) get_theme_mod( 'novai_custom_css', '' ) );

	if ( $logo_max_width < 80 || $logo_max_width > 320 ) {
		$logo_max_width = 160;
	}
	if ( $container_width < 960 || $container_width > 1600 ) {
		$container_width = 1200;
	}
	if ( $header_blur < 0 || $header_blur > 20 ) {
		$header_blur = 0;
	}
	if ( $card_radius < 0 || $card_radius > 32 ) {
		$card_radius = 12;
	}

	echo '<style id="novai-theme-options-css">';
	echo ':root{--novai-accent:' . esc_html( $accent_color ) . ';--novai-accent-hover:' . esc_html( $accent_hover_color ) . ';--novai-container-width:' . esc_html( (string) $container_width ) . 'px;--novai-card-radius:' . esc_html( (string) $card_radius ) . 'px;}';
	echo '.custom-logo-link img{max-width:' . esc_html( (string) $logo_max_width ) . 'px;height:auto;}';
	echo '.wp-site-blocks > *{max-width:var(--novai-container-width);margin-left:auto;margin-right:auto;}';
	echo ':focus-visible{outline-color:var(--novai-accent);}';
	echo '.wp-block-navigation .wp-block-navigation-item__content:hover{color:var(--novai-accent-hover)!important;}';
	echo '.novai-feature-card,.novai-testimonial-card,.novai-bento-card,.novai-team-card,.novai-int-card,.novai-post-card{border-radius:var(--novai-card-radius);}';
	echo '.novai-header,.novai-nav-dark,.novai-nav-light{-webkit-backdrop-filter:blur(' . esc_html( (string) $header_blur ) . 'px);backdrop-filter:blur(' . esc_html( (string) $header_blur ) . 'px);}';

	if ( ! $sticky_header ) {
		echo '.novai-header,.novai-nav-dark,.novai-nav-light{position:static!important;top:auto!important;}';
	}
	if ( ! $enable_reveal ) {
		echo '.novai-animate,.novai-animate.is-visible{opacity:1!important;transform:none!important;transition:none!important;}';
	}
	if ( ! $enable_card_hover ) {
		echo '.novai-feature-card:hover,.novai-testimonial-card:hover,.novai-bento-card:hover,.novai-team-card:hover,.novai-int-card:hover{transform:none!important;box-shadow:none!important;}';
	}

	if ( '' !== trim( $custom_css ) ) {
		echo '/* Custom CSS (Kirki) */' . esc_html( $custom_css );
	}

	echo '</style>';
}
add_action( 'wp_head', 'novai_output_theme_options_css', 120 );

/**
 * Get a NovAI theme option with default fallback.
 *
 * @param  string $key     Theme mod key.
 * @param  mixed  $default Default value.
 * @return mixed
 */
function novai_get_theme_option( string $key, $default = '' ) {
	return get_theme_mod( $key, $default );
}
