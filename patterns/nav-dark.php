<?php
/**
 * Title: Dark sticky nav
 * Slug: novai/nav-dark
 * Categories: novai-navigation
 * Block Types: core/group, core/site-logo, core/site-title, core/navigation, core/buttons, core/button
 * Viewport Width: 1280
 * Inserter: true
 */
?>
<!-- wp:group {"tagName":"header","className":"novai-nav-dark is-sticky","style":{"color":{"background":"rgba(13,11,26,0.95)"},"spacing":{"padding":{"top":"0","bottom":"0"}},"css":"backdrop-filter:blur(16px);-webkit-backdrop-filter:blur(16px);border-bottom:1px solid rgba(46,40,87,0.6);"},"layout":{"type":"default"}} -->
<header class="wp-block-group novai-nav-dark is-sticky">

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"14px","right":"var:preset|spacing|lg","bottom":"14px","left":"var:preset|spacing|lg"},"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center","wideSize":"1200px"}} -->
	<div class="wp-block-group">

		<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo-icon.svg","width":28,"height":28,"alt":"NovAI logo icon"} /-->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"17px","fontWeight":"600","letterSpacing":"-0.02em"},"color":{"text":"#FFFFFF"}}} -->
			<p>Nov<span style="color:#A78BFA;">AI</span></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:navigation {"textColor":"text-secondary","style":{"typography":{"fontSize":"var:preset|font-size|sm","fontWeight":"400"},"spacing":{"blockGap":"32px"}},"layout":{"type":"flex","justifyContent":"center","flexWrap":"nowrap"},"overlayBackgroundColor":"deep-space","overlayTextColor":"cloud-white"}>
			<!-- wp:navigation-link {"label":"Features","url":"#features"} /-->
			<!-- wp:navigation-link {"label":"Templates","url":"#templates"} /-->
			<!-- wp:navigation-link {"label":"Pricing","url":"#pricing"} /-->
			<!-- wp:navigation-link {"label":"Docs","url":"/docs"} /-->
		<!-- /wp:navigation -->

		<!-- wp:buttons {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"style":{"color":{"background":"transparent","text":"rgba(255,255,255,0.75)"},"border":{"radius":"8px","color":"rgba(108,71,255,0.4)","width":"1px"},"spacing":{"padding":{"top":"7px","right":"16px","bottom":"7px","left":"16px"}},"typography":{"fontSize":"12px","fontWeight":"500"}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/demo">Live preview</a></div>
			<!-- /wp:button -->
			<!-- wp:button {"style":{"color":{"background":"#6C47FF","text":"#FFFFFF"},"border":{"radius":"8px"},"spacing":{"padding":{"top":"7px","right":"16px","bottom":"7px","left":"16px"}},"typography":{"fontSize":"12px","fontWeight":"500"}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://themeforest.net">Buy now — $59</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

</header>
<!-- /wp:group -->
