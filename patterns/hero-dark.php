<?php
/**
 * Title: Dark headline hero
 * Slug: novai/hero-dark
 * Categories: novai-heroes
 * Block Types: core/cover, core/group, core/heading, core/paragraph, core/buttons, core/button, core/image
 * Viewport Width: 1280
 * Inserter: true
 */
?>
<!-- wp:cover {"dimRatio":0,"style":{"color":{"background":"#0D0B1A"},"spacing":{"padding":{"top":"120px","bottom":"80px"}}},"minHeight":680,"layout":{"type":"constrained","wideSize":"1200px"}} -->
<div class="wp-block-cover" style="min-height:680px;background-color:#0D0B1A;padding-top:120px;padding-bottom:80px;">
<div class="wp-block-cover__inner-container">

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xl"}},"layout":{"type":"constrained","contentSize":"760px"},"textAlign":"center"} -->
	<div class="wp-block-group has-text-align-center">

		<!-- wp:group {"className":"novai-badge-pill","style":{"color":{"background":"rgba(108,71,255,0.15)"},"border":{"radius":"99px","color":"rgba(108,71,255,0.35)","width":"1px"},"spacing":{"padding":{"top":"6px","right":"14px","bottom":"6px","left":"14px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"center"}} -->
		<div class="wp-block-group novai-badge-pill">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","fontWeight":"500","letterSpacing":"0.04em"},"color":{"text":"#A78BFA"}}} -->
			<p>✦ FSE ready · WordPress 6.6+</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:heading {"level":1,"textAlign":"center","style":{"typography":{"fontWeight":"600","letterSpacing":"-0.04em","lineHeight":"1.05"},"color":{"text":"#FFFFFF"},"spacing":{"margin":{"top":"var:preset|spacing|md"}}}} -->
		<h1 class="wp-block-heading has-text-align-center">The WordPress theme<br>for <span style="color:#A78BFA;">AI startups</span></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"color":{"text":"rgba(255,255,255,0.55)"},"typography":{"fontSize":"var:preset|font-size|lg","lineHeight":"1.65"},"spacing":{"margin":{"top":"var:preset|spacing|md"}}}} -->
		<p class="has-text-align-center">Launch faster with three niche-ready starter templates, 28 block patterns, and a performance-first architecture that scores 95+ on Lighthouse out of the box.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|sm","margin":{"top":"var:preset|spacing|lg"}}}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"style":{"color":{"background":"#6C47FF","text":"#FFFFFF"},"border":{"radius":"10px"},"spacing":{"padding":{"top":"14px","right":"28px","bottom":"14px","left":"28px"}},"typography":{"fontSize":"var:preset|font-size|sm","fontWeight":"500"}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://themeforest.net">Buy now — $59 →</a></div>
			<!-- /wp:button -->
			<!-- wp:button {"style":{"color":{"background":"transparent","text":"rgba(255,255,255,0.75)"},"border":{"radius":"10px","color":"rgba(255,255,255,0.15)","width":"1px"},"spacing":{"padding":{"top":"14px","right":"28px","bottom":"14px","left":"28px"}},"typography":{"fontSize":"var:preset|font-size|sm","fontWeight":"400"}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/demo">Live preview</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs","margin":{"top":"var:preset|spacing|xl"}}},"layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center","flexWrap":"wrap"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px"},"color":{"text":"rgba(255,255,255,0.35)"}}} -->
			<p>★★★★★</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px"},"color":{"text":"rgba(255,255,255,0.45)"}}} -->
			<p>Trusted by <strong style="color:rgba(255,255,255,0.7);">2,400+</strong> founders &amp; developers</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"novai-browser-frame","style":{"color":{"background":"#1E1A38"},"border":{"radius":"16px","color":"rgba(108,71,255,0.3)","width":"1px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"var:preset|spacing|2xl"}}},"layout":{"type":"constrained","contentSize":"900px"}} -->
	<div class="wp-block-group novai-browser-frame">
		<!-- wp:group {"className":"novai-browser-toolbar","style":{"color":{"background":"rgba(255,255,255,0.04)"},"spacing":{"padding":{"top":"10px","right":"14px","bottom":"10px","left":"14px"}},"border":{"bottom":{"color":"rgba(255,255,255,0.06)","width":"1px"}}},"layout":{"type":"flex","verticalAlignment":"center","justifyContent":"space-between"}} -->
		<div class="wp-block-group novai-browser-toolbar">
			<!-- wp:group {"layout":{"type":"flex","verticalAlignment":"center","blockGap":"6px"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"10px"},"color":{"text":"#FF5F57"},"css":"display:inline-block;width:10px;height:10px;border-radius:50%;background:#FF5F57;"}} --><p></p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"css":"display:inline-block;width:10px;height:10px;border-radius:50%;background:#FEBC2E;"}} --><p></p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"css":"display:inline-block;width:10px;height:10px;border-radius:50%;background:#28C840;"}} --><p></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","fontFamily":"var:preset|font-family|system-mono"},"color":{"text":"rgba(255,255,255,0.2)"}}} -->
			<p>novai-writer.app</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:image {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/dashboard-preview.png","alt":"NovAI dashboard preview — AI writing assistant","style":{"border":{"bottomLeft":{"radius":"16px"},"bottomRight":{"radius":"16px"}}},"width":"100%"} /-->
	</div>
	<!-- /wp:group -->

</div>
</div>
<!-- /wp:cover -->

<!-- wp:group {"className":"novai-hero-strip","style":{"color":{"background":"rgba(108,71,255,0.06)"},"border":{"top":{"color":"rgba(108,71,255,0.15)","width":"1px"},"bottom":{"color":"rgba(108,71,255,0.15)","width":"1px"}},"spacing":{"padding":{"top":"20px","bottom":"20px","right":"var:preset|spacing|lg","left":"var:preset|spacing|lg"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","blockGap":"var:preset|spacing|2xl"}} -->
<div class="wp-block-group novai-hero-strip">
	<!-- wp:group {"layout":{"type":"flex","verticalAlignment":"center","blockGap":"8px"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"20px","fontWeight":"700"},"color":{"text":"#FFFFFF"}}} --><p>95+</p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px"},"color":{"text":"rgba(255,255,255,0.4)"}}} --><p>Lighthouse score</p><!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"layout":{"type":"flex","verticalAlignment":"center","blockGap":"8px"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"20px","fontWeight":"700"},"color":{"text":"#FFFFFF"}}} --><p>28</p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px"},"color":{"text":"rgba(255,255,255,0.4)"}}} --><p>Block patterns</p><!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"layout":{"type":"flex","verticalAlignment":"center","blockGap":"8px"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"20px","fontWeight":"700"},"color":{"text":"#FFFFFF"}}} --><p>3</p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px"},"color":{"text":"rgba(255,255,255,0.4)"}}} --><p>Starter templates</p><!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"layout":{"type":"flex","verticalAlignment":"center","blockGap":"8px"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"20px","fontWeight":"700"},"color":{"text":"#FFFFFF"}}} --><p>FSE</p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px"},"color":{"text":"rgba(255,255,255,0.4)"}}} --><p>Full Site Editing</p><!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"layout":{"type":"flex","verticalAlignment":"center","blockGap":"8px"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"20px","fontWeight":"700"},"color":{"text":"#FFFFFF"}}} --><p>GPL</p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px"},"color":{"text":"rgba(255,255,255,0.4)"}}} --><p>v2 Licensed</p><!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
