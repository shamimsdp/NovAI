<?php
/**
 * Title: Light transparent nav
 * Slug: novai/nav-light
 * Categories: novai-navigation
 * Block Types: core/group, core/site-logo, core/navigation, core/buttons, core/button
 * Viewport Width: 1280
 * Inserter: true
 */
?>
<!-- wp:group {"tagName":"header","className":"novai-nav-light is-sticky","style":{"color":{"background":"rgba(247,246,254,0.92)"},"spacing":{"padding":{"top":"0","bottom":"0"}},"css":"backdrop-filter:blur(16px);-webkit-backdrop-filter:blur(16px);border-bottom:1px solid rgba(108,71,255,0.12);"},"layout":{"type":"default"}} -->
<header class="wp-block-group novai-nav-light is-sticky">

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"14px","right":"var:preset|spacing|lg","bottom":"14px","left":"var:preset|spacing|lg"},"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center","wideSize":"1200px"}} -->
	<div class="wp-block-group">

		<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo-icon-dark.svg","width":28,"height":28,"alt":"NovAI logo icon"} /-->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"17px","fontWeight":"600","letterSpacing":"-0.02em"},"color":{"text":"#0D0B1A"}}} -->
			<p>Nov<span style="color:#6C47FF;">AI</span></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:navigation {"style":{"typography":{"fontSize":"var:preset|font-size|sm","fontWeight":"400"},"color":{"text":"#4B4480"},"spacing":{"blockGap":"32px"}},"layout":{"type":"flex","justifyContent":"center","flexWrap":"nowrap"},"overlayBackgroundColor":"cloud-white","overlayTextColor":"deep-space"}>
			<!-- wp:navigation-link {"label":"Features","url":"#features"} /-->
			<!-- wp:navigation-link {"label":"Templates","url":"#templates"} /-->
			<!-- wp:navigation-link {"label":"Pricing","url":"#pricing"} /-->
			<!-- wp:navigation-link {"label":"Docs","url":"/docs"} /-->
		<!-- /wp:navigation -->

		<!-- wp:buttons {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"style":{"color":{"background":"transparent","text":"#6C47FF"},"border":{"radius":"8px","color":"#6C47FF","width":"1px"},"spacing":{"padding":{"top":"7px","right":"16px","bottom":"7px","left":"16px"}},"typography":{"fontSize":"12px","fontWeight":"500"}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/demo">View demo</a></div>
			<!-- /wp:button -->
			<!-- wp:button {"style":{"color":{"background":"#6C47FF","text":"#FFFFFF"},"border":{"radius":"8px"},"spacing":{"padding":{"top":"7px","right":"16px","bottom":"7px","left":"16px"}},"typography":{"fontSize":"12px","fontWeight":"500"}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://themeforest.net">Get started →</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

</header>
<!-- /wp:group -->
