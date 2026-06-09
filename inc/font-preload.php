<?php
declare(strict_types=1);
/**
 * NovAI — Font Preload
 *
 * Injects <link rel="preload"> tags for the self-hosted Inter WOFF2 files
 * to eliminate render-blocking font download delay.
 *
 * @package NovAI
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Output preload hints for self-hosted Inter WOFF2 font files.
 *
 * Called on wp_head with priority 1 to ensure the hints appear
 * before any stylesheet links.
 *
 * @return void
 */
function novai_preload_fonts(): void {
	$font_dir = NOVAI_URI . '/assets/fonts/inter/';

	$fonts = [
		'inter-400.woff2' => 'Inter Regular 400',
		'inter-600.woff2' => 'Inter SemiBold 600',
	];

	foreach ( $fonts as $file => $label ) {
		$file_path = NOVAI_DIR . '/assets/fonts/inter/' . $file;

		// Only emit preload if the file is physically present.
		if ( ! file_exists( $file_path ) ) {
			continue;
		}

		printf(
			'<link rel="preload" href="%s" as="font" type="font/woff2" crossorigin="anonymous">%s',
			esc_url( $font_dir . $file ),
			"\n"
		);
	}
}
add_action( 'wp_head', 'novai_preload_fonts', 1 );
