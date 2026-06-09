<?php
/**
 * Title: Changelog
 * Slug: novai/changelog
 * Categories: novai-content
 * Block Types: core/group, core/columns, core/column, core/heading, core/paragraph
 * Viewport Width: 1280
 * Inserter: true
 */
?>
<!-- wp:group {"style":{"color":{"background":"#0F0F0F"},"spacing":{"padding":{"top":"var:preset|spacing|3xl","bottom":"var:preset|spacing|3xl","right":"var:preset|spacing|lg","left":"var:preset|spacing|lg"}}},"layout":{"type":"constrained","wideSize":"1200px"}} -->
<div class="wp-block-group" style="background-color:#0F0F0F;padding-top:96px;padding-bottom:96px;">

	<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|3xl"}},"verticalAlignment":"top"} -->
	<div class="wp-block-columns">

		<!-- wp:column {"width":"30%","style":{"spacing":{"blockGap":"var:preset|spacing|md"}}} -->
		<div class="wp-block-column" style="flex-basis:30%;">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","fontWeight":"500","letterSpacing":"0.1em","textTransform":"uppercase"},"color":{"text":"#EAB308"}}} -->
			<p>Changelog</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.03em"},"color":{"text":"#FFFFFF"}}} -->
			<h2 class="wp-block-heading">What's new</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.35)"},"typography":{"fontSize":"var:preset|font-size|sm","lineHeight":"1.7"}}} -->
			<p>We ship updates regularly. Every version is backwards-compatible — just upload and activate.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"70%","style":{"spacing":{"blockGap":"0"}}} -->
		<div class="wp-block-column" style="flex-basis:70%;">

			<!-- Version 1.1 -->
			<!-- wp:group {"className":"novai-cl-entry","style":{"spacing":{"padding":{"top":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg"},"blockGap":"var:preset|spacing|sm"},"border":{"bottom":{"color":"rgba(255,255,255,0.06)","width":"1px"}}},"layout":{"type":"flex","verticalAlignment":"top","flexWrap":"nowrap","blockGap":"var:preset|spacing|xl"}} -->
			<div class="wp-block-group novai-cl-entry">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"flex","orientation":"vertical"},"className":"novai-cl-meta"} -->
				<div class="wp-block-group novai-cl-meta" style="min-width:80px;">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","fontWeight":"600","fontFamily":"var:preset|font-family|system-mono"},"color":{"text":"#34D399"}}} --><p>v1.1.0</p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","fontFamily":"var:preset|font-family|system-mono"},"color":{"text":"rgba(255,255,255,0.25)"}}} --><p>Jun 2026</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|sm"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|md","fontWeight":"600"},"color":{"text":"#FFFFFF"}}} --><h3 class="wp-block-heading">Forge template + 8 new patterns</h3><!-- /wp:heading -->
					<!-- wp:list {"style":{"color":{"text":"rgba(255,255,255,0.45)"},"typography":{"fontSize":"13px"},"spacing":{"blockGap":"4px"}}} -->
					<ul class="wp-block-list">
						<!-- wp:list-item --><li>Added Forge developer template (amber/black)</li><!-- /wp:list-item -->
						<!-- wp:list-item --><li>New: hero-code, code-block, changelog patterns</li><!-- /wp:list-item -->
						<!-- wp:list-item --><li>New: nav-minimal for developer-first layouts</li><!-- /wp:list-item -->
						<!-- wp:list-item --><li>Improved mobile navigation accessibility</li><!-- /wp:list-item -->
					</ul>
					<!-- /wp:list -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- Version 1.0 -->
			<!-- wp:group {"className":"novai-cl-entry","style":{"spacing":{"padding":{"top":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg"},"blockGap":"var:preset|spacing|sm"},"border":{"bottom":{"color":"rgba(255,255,255,0.06)","width":"1px"}}},"layout":{"type":"flex","verticalAlignment":"top","flexWrap":"nowrap","blockGap":"var:preset|spacing|xl"}} -->
			<div class="wp-block-group novai-cl-entry">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"flex","orientation":"vertical"},"className":"novai-cl-meta"} -->
				<div class="wp-block-group novai-cl-meta" style="min-width:80px;">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","fontWeight":"600","fontFamily":"var:preset|font-family|system-mono"},"color":{"text":"#6C47FF"}}} --><p>v1.0.0</p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","fontFamily":"var:preset|font-family|system-mono"},"color":{"text":"rgba(255,255,255,0.25)"}}} --><p>May 2026</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|sm"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|md","fontWeight":"600"},"color":{"text":"#FFFFFF"}}} --><h3 class="wp-block-heading">Initial release</h3><!-- /wp:heading -->
					<!-- wp:list {"style":{"color":{"text":"rgba(255,255,255,0.45)"},"typography":{"fontSize":"13px"},"spacing":{"blockGap":"4px"}}} -->
					<ul class="wp-block-list">
						<!-- wp:list-item --><li>NovAI and Orbit starter templates</li><!-- /wp:list-item -->
						<!-- wp:list-item --><li>20 block patterns across 7 categories</li><!-- /wp:list-item -->
						<!-- wp:list-item --><li>theme.json v3 with full token mapping</li><!-- /wp:list-item -->
						<!-- wp:list-item --><li>5 style variations (Dark, Minimal, Vibrant, Corporate, Gradient)</li><!-- /wp:list-item -->
					</ul>
					<!-- /wp:list -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
