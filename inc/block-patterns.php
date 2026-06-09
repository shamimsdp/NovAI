<?php
declare(strict_types=1);
/**
 * NovAI — Block Pattern Category Registration
 *
 * Registers the seven custom pattern categories that organise
 * all 28 NovAI block patterns in the block inserter.
 *
 * @package NovAI
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register NovAI block pattern categories.
 *
 * @return void
 */
function novai_register_pattern_categories(): void {
	$categories = [
		'novai-navigation'   => __( 'NovAI — Navigation',   'novai' ),
		'novai-heroes'       => __( 'NovAI — Heroes',        'novai' ),
		'novai-features'     => __( 'NovAI — Features',      'novai' ),
		'novai-social-proof' => __( 'NovAI — Social Proof',  'novai' ),
		'novai-pricing'      => __( 'NovAI — Pricing & CTA', 'novai' ),
		'novai-content'      => __( 'NovAI — Content',       'novai' ),
		'novai-footer'       => __( 'NovAI — Footer & Misc', 'novai' ),
	];

	foreach ( $categories as $slug => $label ) {
		register_block_pattern_category(
			$slug,
			[
				'label'       => $label,
				'description' => sprintf(
					/* translators: %s: pattern category label */
					__( 'Patterns from the %s collection.', 'novai' ),
					$label
				),
			]
		);
	}
}
add_action( 'init', 'novai_register_pattern_categories' );
