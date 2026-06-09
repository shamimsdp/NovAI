<?php
/**
 * Title: Features — alternating text + visual
 * Slug: novai/features-alt
 * Categories: novai-features
 * Block Types: core/group, core/columns, core/column, core/heading, core/paragraph, core/list, core/list-item
 * Viewport Width: 1280
 * Inserter: true
 */
?>
<!-- wp:group {"style":{"color":{"background":"#0D0B1A"},"spacing":{"padding":{"top":"var:preset|spacing|3xl","bottom":"var:preset|spacing|3xl","right":"var:preset|spacing|lg","left":"var:preset|spacing|lg"}}},"layout":{"type":"constrained","wideSize":"1200px"}} -->
<div class="wp-block-group" style="background-color:#0D0B1A;padding-top:96px;padding-bottom:96px;">

	<!-- Row 1: text left, visual right -->
	<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|3xl","margin":{"bottom":"var:preset|spacing|3xl"}}},"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- wp:column {"width":"48%","style":{"spacing":{"blockGap":"var:preset|spacing|lg"}}} -->
		<div class="wp-block-column" style="flex-basis:48%;">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","fontWeight":"500","letterSpacing":"0.1em","textTransform":"uppercase"},"color":{"text":"#6C47FF"}}} -->
			<p>01 — Smart templates</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.03em"},"color":{"text":"#FFFFFF"}}} -->
			<h2 class="wp-block-heading">Pick a niche. Launch in minutes.</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.45)"},"typography":{"fontSize":"var:preset|font-size|md","lineHeight":"1.7"}}} -->
			<p>Each of the three starter templates ships as a complete, importable demo. Swap the logo, update the copy, push to production.</p>
			<!-- /wp:paragraph -->
			<!-- wp:list {"style":{"spacing":{"blockGap":"var:preset|spacing|sm"},"color":{"text":"rgba(255,255,255,0.5)"},"typography":{"fontSize":"var:preset|font-size|sm"}}} -->
			<ul class="wp-block-list">
				<!-- wp:list-item -->
				<li><span style="color:#A78BFA;">✓</span> NovAI — AI tools &amp; product landing pages</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><span style="color:#38BDF8;">✓</span> Orbit — SaaS dashboards &amp; analytics</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><span style="color:#EAB308;">✓</span> Forge — Developer tools &amp; API products</li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"52%"} -->
		<div class="wp-block-column" style="flex-basis:52%;">
			<!-- wp:group {"style":{"color":{"background":"#1E1A38"},"border":{"radius":"16px","color":"rgba(108,71,255,0.2)","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|lg","right":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg","left":"var:preset|spacing|lg"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:image {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/templates-trio.png","alt":"NovAI, Orbit, and Forge template previews","style":{"border":{"radius":"10px"}},"width":"100%"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- Row 2: visual left, text right -->
	<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|3xl"}},"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- wp:column {"width":"52%"} -->
		<div class="wp-block-column" style="flex-basis:52%;">
			<!-- wp:group {"style":{"color":{"background":"#1E1A38"},"border":{"radius":"16px","color":"rgba(56,189,248,0.2)","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|lg","right":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg","left":"var:preset|spacing|lg"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:image {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/site-editor-preview.png","alt":"WordPress Site Editor showing NovAI pattern library","style":{"border":{"radius":"10px"}},"width":"100%"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"48%","style":{"spacing":{"blockGap":"var:preset|spacing|lg"}}} -->
		<div class="wp-block-column" style="flex-basis:48%;">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","fontWeight":"500","letterSpacing":"0.1em","textTransform":"uppercase"},"color":{"text":"#38BDF8"}}} -->
			<p>02 — Full Site Editor</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.03em"},"color":{"text":"#FFFFFF"}}} -->
			<h2 class="wp-block-heading">Customize every pixel — no code needed</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.45)"},"typography":{"fontSize":"var:preset|font-size|md","lineHeight":"1.7"}}} -->
			<p>WordPress's native Site Editor lets you visually edit templates, patterns, navigation, and Global Styles — all saved as reversible overrides on top of the theme defaults.</p>
			<!-- /wp:paragraph -->
			<!-- wp:list {"style":{"color":{"text":"rgba(255,255,255,0.5)"},"typography":{"fontSize":"var:preset|font-size|sm"},"spacing":{"blockGap":"var:preset|spacing|sm"}}} -->
			<ul class="wp-block-list">
				<!-- wp:list-item --><li><span style="color:#38BDF8;">✓</span> Live preview as you edit</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><span style="color:#38BDF8;">✓</span> Global color &amp; typography controls</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><span style="color:#38BDF8;">✓</span> Pattern inserter with 28 sections</li><!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
