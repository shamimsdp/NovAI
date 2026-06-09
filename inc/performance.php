<?php
declare(strict_types=1);
/**
 * NovAI — Performance Optimisations
 *
 * Removes unnecessary WordPress default actions/scripts that add weight
 * to the front-end without contributing functionality for an FSE block theme.
 *
 * @package NovAI
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Remove emoji detection script and styles.
 *
 * Emoji support is handled natively by modern operating systems.
 * The WordPress emoji scripts add ~10 KB and a DNS lookup per page.
 *
 * @return void
 */
function novai_disable_emojis(): void {
	remove_action( 'wp_head',             'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles',     'print_emoji_styles' );
	remove_action( 'admin_print_styles',  'print_emoji_styles' );
	remove_filter( 'the_content_feed',    'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss',    'wp_staticize_emoji' );
	remove_filter( 'wp_mail',             'wp_staticize_emoji_for_email' );
}
add_action( 'init', 'novai_disable_emojis' );

/**
 * Remove the oEmbed discovery links and related REST API exposure.
 *
 * Reduces head tag noise and prevents unnecessary feature discovery.
 *
 * @return void
 */
function novai_disable_oembed_discovery(): void {
	remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
	remove_action( 'wp_head', 'wp_oembed_add_host_js' );
}
add_action( 'init', 'novai_disable_oembed_discovery' );

/**
 * Remove the Really Simple Discovery (RSD) link tag.
 *
 * Used by legacy XML-RPC clients; not needed for modern block themes.
 *
 * @return void
 */
function novai_remove_rsd_link(): void {
	remove_action( 'wp_head', 'rsd_link' );
}
add_action( 'init', 'novai_remove_rsd_link' );

/**
 * Remove the Windows Live Writer manifest link.
 *
 * @return void
 */
function novai_remove_wlw_manifest(): void {
	remove_action( 'wp_head', 'wlwmanifest_link' );
}
add_action( 'init', 'novai_remove_wlw_manifest' );

/**
 * Remove query strings from static resources.
 *
 * Improves cache efficiency for proxy servers that do not cache
 * resources with query string parameters.
 *
 * @param  string $src Asset URL.
 * @return string      Asset URL without version query string.
 */
function novai_remove_query_strings( string $src ): string {
	if ( str_contains( $src, '?ver=' ) ) {
		$src = remove_query_arg( 'ver', $src );
	}
	return $src;
}
add_filter( 'style_loader_src',  'novai_remove_query_strings' );
add_filter( 'script_loader_src', 'novai_remove_query_strings' );

/**
 * Add resource hints for self-hosted font files.
 *
 * Emits a <link rel="preconnect"> hint for the theme's own domain —
 * mainly useful when served from a CDN that differs from the origin.
 * Keeps the list conservative to avoid unnecessary DNS lookups.
 *
 * @param  array<int,array<string,string>> $hints Existing resource hints.
 * @param  string                          $type  Hint type (dns-prefetch, preconnect, etc.).
 * @return array<int,array<string,string>>         Updated resource hints.
 */
function novai_resource_hints( array $hints, string $type ): array {
	if ( 'preconnect' === $type ) {
		// No external origins — all assets are self-hosted.
		// This hook is kept as an extension point for child themes.
	}
	return $hints;
}
add_filter( 'wp_resource_hints', 'novai_resource_hints', 10, 2 );
