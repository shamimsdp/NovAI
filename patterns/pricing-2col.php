<?php
/**
 * Title: Pricing — 2 column comparison
 * Slug: novai/pricing-2col
 * Categories: novai-pricing
 * Block Types: core/group, core/columns, core/column, core/heading, core/paragraph, core/table
 * Viewport Width: 1280
 * Inserter: true
 */
?>
<!-- wp:group {"style":{"color":{"background":"#03111F"},"spacing":{"padding":{"top":"var:preset|spacing|3xl","bottom":"var:preset|spacing|3xl","right":"var:preset|spacing|lg","left":"var:preset|spacing|lg"}}},"layout":{"type":"constrained","wideSize":"1000px"}} -->
<div class="wp-block-group" style="background-color:#03111F;padding-top:96px;padding-bottom:96px;">

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|sm","margin":{"bottom":"var:preset|spacing|2xl"}}},"layout":{"type":"constrained","contentSize":"520px"},"textAlign":"center"} -->
	<div class="wp-block-group has-text-align-center">
		<!-- wp:heading {"level":2,"textAlign":"center","style":{"typography":{"fontWeight":"600","letterSpacing":"-0.03em"},"color":{"text":"#FFFFFF"}}} -->
		<h2 class="wp-block-heading has-text-align-center">Free vs Pro</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","style":{"color":{"text":"rgba(255,255,255,0.4)"},"typography":{"fontSize":"var:preset|font-size|md"}}} -->
		<p class="has-text-align-center">Start with the free WordPress.org version — upgrade to Pro for all three templates and the full pattern library.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"color":{"background":"#1E1A38"},"border":{"radius":"20px","color":"rgba(108,71,255,0.2)","width":"1px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group">

		<!-- Header row -->
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|lg","right":"var:preset|spacing|xl","bottom":"var:preset|spacing|lg","left":"var:preset|spacing|xl"}}},"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","fontWeight":"500"},"color":{"text":"rgba(255,255,255,0.4)"}}} --><p>Feature</p><!-- /wp:paragraph -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2xl"}},"layout":{"type":"flex"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","fontWeight":"600"},"color":{"text":"rgba(255,255,255,0.5)"}}} --><p>Free</p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","fontWeight":"600"},"color":{"text":"#A78BFA"}}} --><p>Pro — $59</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:separator {"style":{"color":{"background":"rgba(108,71,255,0.15)"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} --><hr class="wp-block-separator has-alpha-channel-opacity" /><!-- /wp:separator -->

		<!-- Comparison rows via table block -->
		<!-- wp:table {"style":{"color":{"background":"transparent","text":"rgba(255,255,255,0.6)"},"typography":{"fontSize":"13px"},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|xl","bottom":"0","left":"var:preset|spacing|xl"}}},"className":"novai-compare-table"} -->
		<figure class="wp-block-table novai-compare-table">
		<table>
			<tbody>
				<tr><td>Starter templates</td><td style="text-align:center;color:#A78BFA;">1 (NovAI)</td><td style="text-align:center;color:#A78BFA;">3 (All)</td></tr>
				<tr><td>Block patterns</td><td style="text-align:center;">10</td><td style="text-align:center;color:#A78BFA;">28</td></tr>
				<tr><td>Style variations</td><td style="text-align:center;">1</td><td style="text-align:center;color:#A78BFA;">5</td></tr>
				<tr><td>FSE templates</td><td style="text-align:center;color:#A78BFA;">✓</td><td style="text-align:center;color:#A78BFA;">✓</td></tr>
				<tr><td>Self-hosted Inter font</td><td style="text-align:center;color:#A78BFA;">✓</td><td style="text-align:center;color:#A78BFA;">✓</td></tr>
				<tr><td>WooCommerce support</td><td style="text-align:center;color:rgba(255,255,255,0.25);">—</td><td style="text-align:center;color:#A78BFA;">✓</td></tr>
				<tr><td>Priority support</td><td style="text-align:center;color:rgba(255,255,255,0.25);">—</td><td style="text-align:center;color:#A78BFA;">12 months</td></tr>
				<tr><td>Lifetime updates</td><td style="text-align:center;color:rgba(255,255,255,0.25);">—</td><td style="text-align:center;color:#A78BFA;">✓</td></tr>
				<tr><td>White-label (Agency)</td><td style="text-align:center;color:rgba(255,255,255,0.25);">—</td><td style="text-align:center;color:rgba(255,255,255,0.25);">+$140</td></tr>
			</tbody>
		</table>
		</figure>
		<!-- /wp:table -->

		<!-- CTA row -->
		<!-- wp:group {"style":{"color":{"background":"rgba(108,71,255,0.08)"},"border":{"top":{"color":"rgba(108,71,255,0.2)","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|lg","right":"var:preset|spacing|xl","bottom":"var:preset|spacing|lg","left":"var:preset|spacing|xl"}}},"layout":{"type":"flex","justifyContent":"flex-end","flexWrap":"wrap","blockGap":"var:preset|spacing|sm"}} -->
		<div class="wp-block-group">
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"color":{"background":"transparent","text":"rgba(255,255,255,0.5)"},"border":{"radius":"8px","color":"rgba(255,255,255,0.15)","width":"1px"},"spacing":{"padding":{"top":"10px","right":"20px","bottom":"10px","left":"20px"}},"typography":{"fontSize":"12px"}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://wordpress.org/themes/novai/">Get free version</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"style":{"color":{"background":"#6C47FF","text":"#FFFFFF"},"border":{"radius":"8px"},"spacing":{"padding":{"top":"10px","right":"20px","bottom":"10px","left":"20px"}},"typography":{"fontSize":"12px","fontWeight":"500"}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://themeforest.net">Upgrade to Pro →</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
