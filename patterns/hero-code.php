<?php
/**
 * Title: Developer code hero
 * Slug: novai/hero-code
 * Categories: novai-heroes
 * Block Types: core/group, core/columns, core/column, core/heading, core/paragraph, core/buttons, core/button, core/code
 * Viewport Width: 1280
 * Inserter: true
 */
?>
<!-- wp:group {"style":{"color":{"background":"#0F0F0F"},"spacing":{"padding":{"top":"120px","bottom":"80px","right":"var:preset|spacing|lg","left":"var:preset|spacing|lg"}}},"layout":{"type":"constrained","wideSize":"1200px"}} -->
<div class="wp-block-group" style="background-color:#0F0F0F;padding-top:120px;padding-bottom:80px;">

	<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|3xl"}},"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"var:preset|spacing|lg"}}} -->
		<div class="wp-block-column" style="flex-basis:50%;">

			<!-- wp:group {"style":{"color":{"background":"rgba(234,179,8,0.1)"},"border":{"radius":"6px","color":"rgba(234,179,8,0.25)","width":"1px"},"spacing":{"padding":{"top":"4px","right":"10px","bottom":"4px","left":"10px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group" style="display:inline-flex;">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","fontWeight":"500","fontFamily":"var:preset|font-family|system-mono"},"color":{"text":"#EAB308"}}} -->
				<p>$ forge --template api-gateway</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:heading {"level":1,"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.04em","lineHeight":"1.05","fontSize":"clamp(36px, 5vw, 58px)"},"color":{"text":"#FFFFFF"}}} -->
			<h1 class="wp-block-heading">Build better APIs,<br>ship <span style="color:#EAB308;">faster</span></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.45)"},"typography":{"fontSize":"var:preset|font-size|lg","lineHeight":"1.65"}}} -->
			<p>The developer-first WordPress theme built for API products, CLI tools, and technical founders who value code quality over marketing fluff.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|sm","margin":{"top":"var:preset|spacing|sm"}}}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"color":{"background":"#EAB308","text":"#0F0F0F"},"border":{"radius":"8px"},"spacing":{"padding":{"top":"12px","right":"24px","bottom":"12px","left":"24px"}},"typography":{"fontSize":"13px","fontWeight":"600","fontFamily":"var:preset|font-family|system-mono"}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">$ npm install novai</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"style":{"color":{"background":"transparent","text":"rgba(255,255,255,0.5)"},"border":{"radius":"8px","color":"rgba(255,255,255,0.1)","width":"1px"},"spacing":{"padding":{"top":"12px","right":"24px","bottom":"12px","left":"24px"}},"typography":{"fontSize":"13px","fontFamily":"var:preset|font-family|system-mono"}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/docs">Read the docs</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%;">
			<!-- wp:group {"className":"novai-code-window","style":{"color":{"background":"#161616"},"border":{"radius":"12px","color":"rgba(255,255,255,0.08)","width":"1px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
			<div class="wp-block-group novai-code-window">
				<!-- wp:group {"style":{"color":{"background":"rgba(255,255,255,0.04)"},"spacing":{"padding":{"top":"10px","right":"14px","bottom":"10px","left":"14px"}},"border":{"bottom":{"color":"rgba(255,255,255,0.06)","width":"1px"}}},"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","fontFamily":"var:preset|font-family|system-mono"},"color":{"text":"rgba(255,255,255,0.25)"}}} --><p>forge.config.js</p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"10px"},"color":{"text":"rgba(234,179,8,0.6)"}}} --><p>● JS</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:code {"style":{"color":{"background":"transparent","text":"rgba(255,255,255,0.8)"},"typography":{"fontSize":"12px","fontFamily":"var:preset|font-family|system-mono","lineHeight":"1.8"},"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}}}} -->
<pre class="wp-block-code"><code><span style="color:#EAB308">import</span> <span style="color:#38BDF8">{ defineConfig }</span> <span style="color:#EAB308">from</span> <span style="color:#A78BFA">'novai/forge'</span><span style="color:rgba(255,255,255,0.4)">;</span>

<span style="color:#EAB308">export default</span> <span style="color:#38BDF8">defineConfig</span>({
  <span style="color:rgba(255,255,255,0.5)">// Three starter templates included</span>
  <span style="color:#A78BFA">template</span>: <span style="color:#34D399">'api-gateway'</span>,
  <span style="color:#A78BFA">auth</span>: { <span style="color:#A78BFA">provider</span>: <span style="color:#34D399">'jwt'</span> },
  <span style="color:#A78BFA">rateLimit</span>: { <span style="color:#A78BFA">rpm</span>: <span style="color:#38BDF8">1000</span> },
  <span style="color:#A78BFA">docs</span>: { <span style="color:#A78BFA">openapi</span>: <span style="color:#EAB308">true</span> },
});</code></pre>
				<!-- /wp:code -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
