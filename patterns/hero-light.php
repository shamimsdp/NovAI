<?php
/**
 * Title: Centered light hero
 * Slug: novai/hero-light
 * Categories: novai-heroes
 * Block Types: core/group, core/heading, core/paragraph, core/buttons, core/button
 * Viewport Width: 1280
 * Inserter: true
 */
?>
<!-- wp:group {"style":{"color":{"background":"#F7F6FE"},"spacing":{"padding":{"top":"120px","bottom":"80px","right":"var:preset|spacing|lg","left":"var:preset|spacing|lg"}}},"layout":{"type":"constrained","wideSize":"1200px"}} -->
<div class="wp-block-group" style="background-color:#F7F6FE;padding-top:120px;padding-bottom:80px;">

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|lg"}},"layout":{"type":"constrained","contentSize":"720px"},"textAlign":"center"} -->
	<div class="wp-block-group has-text-align-center">

		<!-- wp:group {"className":"novai-badge-pill","style":{"color":{"background":"rgba(108,71,255,0.08)"},"border":{"radius":"99px","color":"rgba(108,71,255,0.2)","width":"1px"},"spacing":{"padding":{"top":"5px","right":"14px","bottom":"5px","left":"14px"}}},"layout":{"type":"flex","justifyContent":"center","flexWrap":"nowrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group novai-badge-pill" style="display:inline-flex;">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","fontWeight":"500","letterSpacing":"0.04em"},"color":{"text":"#6C47FF"}}} -->
			<p>✦ Now with AI-assisted setup</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:heading {"level":1,"textAlign":"center","style":{"typography":{"fontWeight":"600","letterSpacing":"-0.04em","lineHeight":"1.05","fontSize":"clamp(36px, 5vw, 58px)"},"color":{"text":"#0D0B1A"}}} -->
		<h1 class="wp-block-heading has-text-align-center">Build your next big idea — fast</h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#6B6490"},"typography":{"fontSize":"var:preset|font-size|lg","lineHeight":"1.65"}}} -->
		<p class="has-text-align-center">NovAI is a full-site editing WordPress theme with three starter templates, 28 block patterns, and a design system built for founders who ship.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|sm","margin":{"top":"var:preset|spacing|md"}}}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"style":{"color":{"background":"#6C47FF","text":"#FFFFFF"},"border":{"radius":"10px"},"spacing":{"padding":{"top":"14px","right":"28px","bottom":"14px","left":"28px"}},"typography":{"fontSize":"var:preset|font-size|sm","fontWeight":"500"}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">Get started free</a></div>
			<!-- /wp:button -->
			<!-- wp:button {"style":{"color":{"background":"transparent","text":"#6C47FF"},"border":{"radius":"10px","color":"rgba(108,71,255,0.3)","width":"1.5px"},"spacing":{"padding":{"top":"14px","right":"28px","bottom":"14px","left":"28px"}},"typography":{"fontSize":"var:preset|font-size|sm"}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">See all templates →</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

		<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#9B8FC4"},"typography":{"fontSize":"var:preset|font-size|xs"},"spacing":{"margin":{"top":"var:preset|spacing|xs"}}}} -->
		<p class="has-text-align-center">No credit card required · GPL v2 · 1-year support included</p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->

	<!-- wp:image {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-light-mockup.png","alt":"NovAI theme mockup on desktop and mobile","style":{"border":{"radius":"16px"},"spacing":{"margin":{"top":"var:preset|spacing|2xl"}}},"className":"alignwide","width":"100%"} /-->

</div>
<!-- /wp:group -->
