<?php
/**
 * Title: Code block — syntax highlighted
 * Slug: novai/code-block
 * Categories: novai-content
 * Block Types: core/group, core/columns, core/column, core/heading, core/paragraph, core/code
 * Viewport Width: 1280
 * Inserter: true
 */
?>
<!-- wp:group {"style":{"color":{"background":"#0F0F0F"},"spacing":{"padding":{"top":"var:preset|spacing|3xl","bottom":"var:preset|spacing|3xl","right":"var:preset|spacing|lg","left":"var:preset|spacing|lg"}}},"layout":{"type":"constrained","wideSize":"1200px"}} -->
<div class="wp-block-group" style="background-color:#0F0F0F;padding-top:96px;padding-bottom:96px;">

	<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|3xl"}},"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- wp:column {"width":"42%","style":{"spacing":{"blockGap":"var:preset|spacing|lg"}}} -->
		<div class="wp-block-column" style="flex-basis:42%;">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","fontWeight":"500","letterSpacing":"0.1em","textTransform":"uppercase"},"color":{"text":"#EAB308"}}} -->
			<p>Developer-first</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.03em"},"color":{"text":"#FFFFFF"}}} -->
			<h2 class="wp-block-heading">Clean code. Zero bloat.</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.4)"},"typography":{"fontSize":"var:preset|font-size|md","lineHeight":"1.7"}}} -->
			<p>NovAI's entire codebase is readable, well-documented, and structured so you can extend it without fighting the theme. No cryptic shortcodes, no proprietary page builders.</p>
			<!-- /wp:paragraph -->
			<!-- wp:list {"style":{"color":{"text":"rgba(255,255,255,0.5)"},"typography":{"fontSize":"var:preset|font-size|sm"},"spacing":{"blockGap":"8px"}}} -->
			<ul class="wp-block-list">
				<!-- wp:list-item --><li><span style="color:#EAB308;">→</span> theme.json v3 token system</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><span style="color:#EAB308;">→</span> Block patterns in plain PHP</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><span style="color:#EAB308;">→</span> No jQuery, no build step required</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><span style="color:#EAB308;">→</span> GPL v2 — fork it, sell it</li><!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"58%"} -->
		<div class="wp-block-column" style="flex-basis:58%;">
			<!-- wp:group {"className":"novai-code-window","style":{"color":{"background":"#161616"},"border":{"radius":"14px","color":"rgba(255,255,255,0.07)","width":"1px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
			<div class="wp-block-group novai-code-window">
				<!-- wp:group {"style":{"color":{"background":"rgba(255,255,255,0.03)"},"spacing":{"padding":{"top":"10px","right":"14px","bottom":"10px","left":"14px"}},"border":{"bottom":{"color":"rgba(255,255,255,0.06)","width":"1px"}}},"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","fontFamily":"var:preset|font-family|system-mono"},"color":{"text":"rgba(255,255,255,0.2)"}}} --><p>theme.json — v3</p><!-- /wp:paragraph -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"6px"}},"layout":{"type":"flex"}} -->
					<div class="wp-block-group">
						<span style="display:inline-block;width:10px;height:10px;border-radius:50%;background:#FF5F57;"></span>
						<span style="display:inline-block;width:10px;height:10px;border-radius:50%;background:#FEBC2E;"></span>
						<span style="display:inline-block;width:10px;height:10px;border-radius:50%;background:#28C840;"></span>
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
				<!-- wp:code {"style":{"color":{"background":"transparent","text":"rgba(255,255,255,0.75)"},"typography":{"fontSize":"12px","fontFamily":"var:preset|font-family|system-mono","lineHeight":"1.85"},"spacing":{"padding":{"top":"20px","right":"22px","bottom":"20px","left":"22px"}}}} -->
<pre class="wp-block-code"><code><span style="color:rgba(255,255,255,0.3);">{</span>
  <span style="color:#38BDF8;">"$schema"</span><span style="color:rgba(255,255,255,0.3);">:</span> <span style="color:#A78BFA;">"https://schemas.wp.org/trunk/theme.json"</span><span style="color:rgba(255,255,255,0.3);">,</span>
  <span style="color:#38BDF8;">"version"</span><span style="color:rgba(255,255,255,0.3);">:</span> <span style="color:#EAB308;">3</span><span style="color:rgba(255,255,255,0.3);">,</span>
  <span style="color:#38BDF8;">"settings"</span><span style="color:rgba(255,255,255,0.3);">: {</span>
    <span style="color:#38BDF8;">"color"</span><span style="color:rgba(255,255,255,0.3);">: {</span>
      <span style="color:#38BDF8;">"palette"</span><span style="color:rgba(255,255,255,0.3);">: [</span>
        <span style="color:rgba(255,255,255,0.3);">{</span> <span style="color:#38BDF8;">"slug"</span><span style="color:rgba(255,255,255,0.3);">:</span> <span style="color:#A78BFA;">"nova-purple"</span><span style="color:rgba(255,255,255,0.3);">,</span>
          <span style="color:#38BDF8;">"color"</span><span style="color:rgba(255,255,255,0.3);">:</span> <span style="color:#A78BFA;">"#6C47FF"</span> <span style="color:rgba(255,255,255,0.3);">},</span>
        <span style="color:rgba(255,255,255,0.3);">{</span> <span style="color:#38BDF8;">"slug"</span><span style="color:rgba(255,255,255,0.3);">:</span> <span style="color:#A78BFA;">"orbit-blue"</span><span style="color:rgba(255,255,255,0.3);">,</span>
          <span style="color:#38BDF8;">"color"</span><span style="color:rgba(255,255,255,0.3);">:</span> <span style="color:#A78BFA;">"#38BDF8"</span> <span style="color:rgba(255,255,255,0.3);">}</span>
      <span style="color:rgba(255,255,255,0.3);">]</span>
    <span style="color:rgba(255,255,255,0.3);">},</span>
    <span style="color:#38BDF8;">"layout"</span><span style="color:rgba(255,255,255,0.3);">: {</span>
      <span style="color:#38BDF8;">"contentSize"</span><span style="color:rgba(255,255,255,0.3);">:</span> <span style="color:#A78BFA;">"780px"</span><span style="color:rgba(255,255,255,0.3);">,</span>
      <span style="color:#38BDF8;">"wideSize"</span><span style="color:rgba(255,255,255,0.3);">:</span> <span style="color:#A78BFA;">"1200px"</span>
    <span style="color:rgba(255,255,255,0.3);">}</span>
  <span style="color:rgba(255,255,255,0.3);">}</span>
<span style="color:rgba(255,255,255,0.3);">}</span></code></pre>
				<!-- /wp:code -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
