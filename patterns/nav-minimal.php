<?php
/**
 * Title: Minimal centered nav
 * Slug: novai/nav-minimal
 * Categories: novai-navigation
 * Block Types: core/group, core/navigation, core/buttons, core/button
 * Viewport Width: 1280
 * Inserter: true
 */
?>
<!-- wp:group {"tagName":"header","className":"novai-nav-minimal","style":{"color":{"background":"#0F0F0F"},"spacing":{"padding":{"top":"0","bottom":"0"}},"css":"border-bottom:1px solid rgba(234,179,8,0.15);"},"layout":{"type":"default"}} -->
<header class="wp-block-group novai-nav-minimal">

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"16px","right":"var:preset|spacing|lg","bottom":"16px","left":"var:preset|spacing|lg"},"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center","wideSize":"1200px"}} -->
	<div class="wp-block-group">

		<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","fontWeight":"600","letterSpacing":"-0.01em","fontFamily":"var:preset|font-family|system-mono"},"color":{"text":"#FFFFFF"}}} -->
		<p>~/forge<span style="color:#EAB308;">_</span></p>
		<!-- /wp:paragraph -->

		<!-- wp:navigation {"style":{"typography":{"fontSize":"13px","fontWeight":"400","fontFamily":"var:preset|font-family|system-mono"},"color":{"text":"rgba(255,255,255,0.45)"},"spacing":{"blockGap":"28px"}},"layout":{"type":"flex","justifyContent":"center","flexWrap":"nowrap"},"overlayBackgroundColor":"forge-dark","overlayTextColor":"cloud-white"}>
			<!-- wp:navigation-link {"label":"docs","url":"/docs"} /-->
			<!-- wp:navigation-link {"label":"api","url":"/api"} /-->
			<!-- wp:navigation-link {"label":"pricing","url":"#pricing"} /-->
			<!-- wp:navigation-link {"label":"changelog","url":"/changelog"} /-->
		<!-- /wp:navigation -->

		<!-- wp:buttons {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"style":{"color":{"background":"#EAB308","text":"#0F0F0F"},"border":{"radius":"6px"},"spacing":{"padding":{"top":"7px","right":"16px","bottom":"7px","left":"16px"}},"typography":{"fontSize":"12px","fontWeight":"500","fontFamily":"var:preset|font-family|system-mono"}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://themeforest.net">$ npm install</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

</header>
<!-- /wp:group -->
