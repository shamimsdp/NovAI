<?php
/**
 * Title: Split hero — text + visual
 * Slug: novai/hero-split
 * Categories: novai-heroes
 * Block Types: core/group, core/columns, core/column, core/heading, core/paragraph, core/buttons, core/button, core/image
 * Viewport Width: 1280
 * Inserter: true
 */
?>
<!-- wp:group {"style":{"color":{"background":"#03111F"},"spacing":{"padding":{"top":"120px","bottom":"80px","right":"var:preset|spacing|lg","left":"var:preset|spacing|lg"}}},"layout":{"type":"constrained","wideSize":"1200px"}} -->
<div class="wp-block-group" style="background-color:#03111F;padding-top:120px;padding-bottom:80px;">

	<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|2xl"}},"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- wp:column {"width":"52%","style":{"spacing":{"blockGap":"var:preset|spacing|lg"}}} -->
		<div class="wp-block-column" style="flex-basis:52%;">

			<!-- wp:group {"className":"novai-badge-pill","style":{"color":{"background":"rgba(14,165,233,0.12)"},"border":{"radius":"99px","color":"rgba(14,165,233,0.3)","width":"1px"},"spacing":{"padding":{"top":"5px","right":"12px","bottom":"5px","left":"12px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group novai-badge-pill" style="display:inline-flex;">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","fontWeight":"500","letterSpacing":"0.04em"},"color":{"text":"#38BDF8"}}} -->
				<p>◈ Orbit Template — SaaS &amp; Analytics</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:heading {"level":1,"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.04em","lineHeight":"1.05","fontSize":"clamp(36px, 5vw, 60px)"},"color":{"text":"#FFFFFF"}}} -->
			<h1 class="wp-block-heading">Analytics your team will actually use</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.5)"},"typography":{"fontSize":"var:preset|font-size|lg","lineHeight":"1.65"}}} -->
			<p>Real-time dashboards, AI-powered insights, and collaborative reporting — all in one platform built for data-driven teams.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|sm","margin":{"top":"var:preset|spacing|sm"}}}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"color":{"background":"#0EA5E9","text":"#FFFFFF"},"border":{"radius":"10px"},"spacing":{"padding":{"top":"14px","right":"28px","bottom":"14px","left":"28px"}},"typography":{"fontSize":"var:preset|font-size|sm","fontWeight":"500"}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">Start free trial →</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"style":{"color":{"background":"transparent","text":"rgba(255,255,255,0.65)"},"border":{"radius":"10px","color":"rgba(56,189,248,0.25)","width":"1px"},"spacing":{"padding":{"top":"14px","right":"28px","bottom":"14px","left":"28px"}},"typography":{"fontSize":"var:preset|font-size|sm"}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">Watch demo</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xl","margin":{"top":"var:preset|spacing|lg"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","blockGap":"2px"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"22px","fontWeight":"700"},"color":{"text":"#FFFFFF"}}} --><p>3.4B+</p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px"},"color":{"text":"rgba(255,255,255,0.35)"}}} --><p>Events tracked daily</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","blockGap":"2px"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"22px","fontWeight":"700"},"color":{"text":"#FFFFFF"}}} --><p>99.9%</p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px"},"color":{"text":"rgba(255,255,255,0.35)"}}} --><p>Uptime SLA</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","blockGap":"2px"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"22px","fontWeight":"700"},"color":{"text":"#FFFFFF"}}} --><p>&lt;50ms</p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px"},"color":{"text":"rgba(255,255,255,0.35)"}}} --><p>Query response</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"48%"} -->
		<div class="wp-block-column" style="flex-basis:48%;">
			<!-- wp:group {"style":{"color":{"background":"#1E1A38"},"border":{"radius":"16px","color":"rgba(56,189,248,0.2)","width":"1px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:image {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/orbit-dashboard.png","alt":"Orbit analytics dashboard preview","style":{"border":{"radius":"16px"}},"width":"100%"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
