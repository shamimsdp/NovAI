<?php
/**
 * Title: Features — bento grid
 * Slug: novai/features-bento
 * Categories: novai-features
 * Block Types: core/group, core/columns, core/column, core/heading, core/paragraph
 * Viewport Width: 1280
 * Inserter: true
 */
?>
<!-- wp:group {"style":{"color":{"background":"#0D0B1A"},"spacing":{"padding":{"top":"var:preset|spacing|3xl","bottom":"var:preset|spacing|3xl","right":"var:preset|spacing|lg","left":"var:preset|spacing|lg"}}},"layout":{"type":"constrained","wideSize":"1200px"}} -->
<div class="wp-block-group" style="background-color:#0D0B1A;padding-top:96px;padding-bottom:96px;">

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|sm","margin":{"bottom":"var:preset|spacing|2xl"}}},"layout":{"type":"constrained","contentSize":"560px"},"textAlign":"center"} -->
	<div class="wp-block-group has-text-align-center">
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","fontWeight":"500","letterSpacing":"0.1em","textTransform":"uppercase"},"color":{"text":"#6C47FF"}}} -->
		<p class="has-text-align-center">The full picture</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":2,"textAlign":"center","style":{"typography":{"fontWeight":"600","letterSpacing":"-0.03em"},"color":{"text":"#FFFFFF"}}} -->
		<h2 class="wp-block-heading has-text-align-center">Designed for every screen, every founder</h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- Row 1: large + small + small -->
	<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|md"}}} -->
	<div class="wp-block-columns">

		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%;">
			<!-- wp:group {"className":"novai-bento-card novai-bento-large","style":{"color":{"background":"linear-gradient(135deg,rgba(108,71,255,0.15) 0%,rgba(30,26,56,0.8) 100%)","background":"#1E1A38"},"border":{"radius":"20px","color":"rgba(108,71,255,0.25)","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|2xl","right":"var:preset|spacing|xl","bottom":"var:preset|spacing|2xl","left":"var:preset|spacing|xl"},"blockGap":"var:preset|spacing|md"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"space-between"}} -->
			<div class="wp-block-group novai-bento-card novai-bento-large">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|sm"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"32px"}}} --><p>🌙</p><!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|xl","fontWeight":"600","letterSpacing":"-0.02em"},"color":{"text":"#FFFFFF"}}} -->
					<h3 class="wp-block-heading">Dark &amp; light mode</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.4)"},"typography":{"fontSize":"var:preset|font-size|sm","lineHeight":"1.6"}}} -->
					<p>Five style variations ship with every template. Switch between Dark, Minimal, Vibrant, Corporate, and Gradient — in one click via Global Styles.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"color":{"background":"rgba(0,0,0,0.3)"},"border":{"radius":"10px"},"spacing":{"padding":{"top":"12px","right":"14px","bottom":"12px","left":"14px"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
				<div class="wp-block-group">
					<span style="font-size:11px;color:rgba(255,255,255,0.25);">5 style variations included</span>
					<span style="font-size:11px;font-weight:500;color:#A78BFA;">→ Try them now</span>
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%;">
			<!-- wp:group {"className":"novai-bento-card","style":{"color":{"background":"#1E1A38"},"border":{"radius":"20px","color":"rgba(56,189,248,0.2)","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|lg","right":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg","left":"var:preset|spacing|lg"},"blockGap":"var:preset|spacing|sm"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group novai-bento-card">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"28px"}}} --><p>📐</p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|md","fontWeight":"600","letterSpacing":"-0.01em"},"color":{"text":"#FFFFFF"}}} -->
				<h3 class="wp-block-heading">Fluid type scale</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.4)"},"typography":{"fontSize":"12px","lineHeight":"1.6"}}} -->
				<p>9 fluid font sizes using <code>clamp()</code> — perfectly scaled on every viewport.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%;">
			<!-- wp:group {"className":"novai-bento-card","style":{"color":{"background":"#1E1A38"},"border":{"radius":"20px","color":"rgba(52,211,153,0.2)","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|lg","right":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg","left":"var:preset|spacing|lg"},"blockGap":"var:preset|spacing|sm"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group novai-bento-card">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"28px"}}} --><p>♿</p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|md","fontWeight":"600","letterSpacing":"-0.01em"},"color":{"text":"#FFFFFF"}}} -->
				<h3 class="wp-block-heading">WCAG 2.2 AA</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.4)"},"typography":{"fontSize":"12px","lineHeight":"1.6"}}} -->
				<p>All color pairs pass contrast requirements. Semantic HTML throughout.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- Row 2: small + small + large -->
	<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|md","margin":{"top":"var:preset|spacing|md"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%;">
			<!-- wp:group {"className":"novai-bento-card","style":{"color":{"background":"#1E1A38"},"border":{"radius":"20px","color":"rgba(234,179,8,0.2)","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|lg","right":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg","left":"var:preset|spacing|lg"},"blockGap":"var:preset|spacing|sm"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group novai-bento-card">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"28px"}}} --><p>🔌</p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|md","fontWeight":"600","letterSpacing":"-0.01em"},"color":{"text":"#FFFFFF"}}} -->
				<h3 class="wp-block-heading">Plugin-friendly</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.4)"},"typography":{"fontSize":"12px","lineHeight":"1.6"}}} -->
				<p>Works with WooCommerce, LearnDash, ACF, and all major WordPress plugins.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%;">
			<!-- wp:group {"className":"novai-bento-card","style":{"color":{"background":"#1E1A38"},"border":{"radius":"20px","color":"rgba(167,139,250,0.2)","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|lg","right":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg","left":"var:preset|spacing|lg"},"blockGap":"var:preset|spacing|sm"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group novai-bento-card">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"28px"}}} --><p>📦</p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|md","fontWeight":"600","letterSpacing":"-0.01em"},"color":{"text":"#FFFFFF"}}} -->
				<h3 class="wp-block-heading">GPL v2</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.4)"},"typography":{"fontSize":"12px","lineHeight":"1.6"}}} -->
				<p>Fully open source. Modify, sell, distribute — no restrictions.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%;">
			<!-- wp:group {"className":"novai-bento-card","style":{"color":{"background":"#1E1A38"},"border":{"radius":"20px","color":"rgba(108,71,255,0.25)","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|xl","right":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|xl"},"blockGap":"var:preset|spacing|md"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
			<div class="wp-block-group novai-bento-card">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"32px"}}} --><p>📱</p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|xl","fontWeight":"600","letterSpacing":"-0.02em"},"color":{"text":"#FFFFFF"}}} -->
				<h3 class="wp-block-heading">Pixel-perfect on every device</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.4)"},"typography":{"fontSize":"var:preset|font-size|sm","lineHeight":"1.6"}}} -->
				<p>Mobile-first CSS, sticky navigation that works on touch, and responsive patterns tested at 320px, 768px, 1024px, and 1440px breakpoints.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
