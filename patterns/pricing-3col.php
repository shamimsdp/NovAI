<?php
/**
 * Title: Pricing — 3 column
 * Slug: novai/pricing-3col
 * Categories: novai-pricing
 * Block Types: core/group, core/columns, core/column, core/heading, core/paragraph, core/list, core/list-item, core/buttons, core/button
 * Viewport Width: 1280
 * Inserter: true
 */
?>
<!-- wp:group {"style":{"color":{"background":"#0D0B1A"},"spacing":{"padding":{"top":"var:preset|spacing|3xl","bottom":"var:preset|spacing|3xl","right":"var:preset|spacing|lg","left":"var:preset|spacing|lg"}}},"layout":{"type":"constrained","wideSize":"1200px"}} -->
<div class="wp-block-group" style="background-color:#0D0B1A;padding-top:96px;padding-bottom:96px;">

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|sm","margin":{"bottom":"var:preset|spacing|2xl"}}},"layout":{"type":"constrained","contentSize":"560px"},"textAlign":"center"} -->
	<div class="wp-block-group has-text-align-center">
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","fontWeight":"500","letterSpacing":"0.1em","textTransform":"uppercase"},"color":{"text":"#6C47FF"}}} -->
		<p class="has-text-align-center">Simple pricing</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":2,"textAlign":"center","style":{"typography":{"fontWeight":"600","letterSpacing":"-0.03em"},"color":{"text":"#FFFFFF"}}} -->
		<h2 class="wp-block-heading has-text-align-center">One purchase. All three templates.</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","style":{"color":{"text":"rgba(255,255,255,0.4)"},"typography":{"fontSize":"var:preset|font-size|md"}}} -->
		<p class="has-text-align-center">No subscriptions. No recurring fees. Pay once and own it forever, including all future updates.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|md"}},"verticalAlignment":"stretch"} -->
	<div class="wp-block-columns are-vertically-aligned-stretch">

		<!-- Starter tier -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"color":{"background":"#1E1A38"},"border":{"radius":"20px","color":"rgba(108,71,255,0.2)","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|xl","right":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|xl"},"blockGap":"var:preset|spacing|lg"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"space-between"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|sm"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","fontWeight":"500","letterSpacing":"0.05em","textTransform":"uppercase"},"color":{"text":"rgba(255,255,255,0.4)"}}} --><p>Starter</p><!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"clamp(32px,4vw,48px)","fontWeight":"700","letterSpacing":"-0.04em","lineHeight":"1"},"color":{"text":"#FFFFFF"}}} -->
					<h3 class="wp-block-heading">$29</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px"},"color":{"text":"rgba(255,255,255,0.3)"}}} --><p>One-time · Regular license</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:separator {"style":{"color":{"background":"rgba(108,71,255,0.2)"}}} --><hr class="wp-block-separator has-alpha-channel-opacity" /><!-- /wp:separator -->
				<!-- wp:list {"style":{"color":{"text":"rgba(255,255,255,0.55)"},"typography":{"fontSize":"13px"},"spacing":{"blockGap":"10px"}}} -->
				<ul class="wp-block-list">
					<!-- wp:list-item --><li><span style="color:#A78BFA;">✓</span> NovAI template only</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><span style="color:#A78BFA;">✓</span> 10 core block patterns</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><span style="color:#A78BFA;">✓</span> 6 months support</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><span style="color:rgba(255,255,255,0.2);">✗</span> <span style="text-decoration:line-through;">Orbit &amp; Forge templates</span></li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><span style="color:rgba(255,255,255,0.2);">✗</span> <span style="text-decoration:line-through;">White-label option</span></li><!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"width":100,"style":{"color":{"background":"transparent","text":"#A78BFA"},"border":{"radius":"10px","color":"rgba(108,71,255,0.4)","width":"1.5px"},"spacing":{"padding":{"top":"12px","bottom":"12px"}},"typography":{"fontSize":"13px","fontWeight":"500"}}} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#">Get Starter</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- Pro tier — featured -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"color":{"background":"#6C47FF"},"border":{"radius":"20px"},"spacing":{"padding":{"top":"var:preset|spacing|xl","right":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|xl"},"blockGap":"var:preset|spacing|lg"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"space-between"}} -->
			<div class="wp-block-group" style="background-color:#6C47FF;">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|sm"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|sm"}},"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","fontWeight":"500","letterSpacing":"0.05em","textTransform":"uppercase"},"color":{"text":"rgba(255,255,255,0.7)"}}} --><p>Pro — Most popular</p><!-- /wp:paragraph -->
						<!-- wp:group {"style":{"color":{"background":"rgba(255,255,255,0.15)"},"border":{"radius":"99px"},"spacing":{"padding":{"top":"3px","right":"9px","bottom":"3px","left":"9px"}}}} -->
						<div class="wp-block-group" style="display:inline-block;"><p style="font-size:10px;color:#fff;font-weight:500;">✦ Best value</p></div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"clamp(32px,4vw,48px)","fontWeight":"700","letterSpacing":"-0.04em","lineHeight":"1"},"color":{"text":"#FFFFFF"}}} -->
					<h3 class="wp-block-heading">$59</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px"},"color":{"text":"rgba(255,255,255,0.55)"}}} --><p>One-time · Regular license</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:separator {"style":{"color":{"background":"rgba(255,255,255,0.2)"}}} --><hr class="wp-block-separator has-alpha-channel-opacity" /><!-- /wp:separator -->
				<!-- wp:list {"style":{"color":{"text":"rgba(255,255,255,0.85)"},"typography":{"fontSize":"13px"},"spacing":{"blockGap":"10px"}}} -->
				<ul class="wp-block-list">
					<!-- wp:list-item --><li>✓ All 3 starter templates</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li>✓ All 28 block patterns</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li>✓ 5 style variations</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li>✓ 12 months support</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li>✓ Lifetime updates</li><!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"width":100,"style":{"color":{"background":"#FFFFFF","text":"#6C47FF"},"border":{"radius":"10px"},"spacing":{"padding":{"top":"12px","bottom":"12px"}},"typography":{"fontSize":"13px","fontWeight":"600"}}} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="https://themeforest.net">Buy on ThemeForest →</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- Agency tier -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"color":{"background":"#1E1A38"},"border":{"radius":"20px","color":"rgba(108,71,255,0.2)","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|xl","right":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|xl"},"blockGap":"var:preset|spacing|lg"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"space-between"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|sm"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","fontWeight":"500","letterSpacing":"0.05em","textTransform":"uppercase"},"color":{"text":"rgba(255,255,255,0.4)"}}} --><p>Agency</p><!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"clamp(32px,4vw,48px)","fontWeight":"700","letterSpacing":"-0.04em","lineHeight":"1"},"color":{"text":"#FFFFFF"}}} -->
					<h3 class="wp-block-heading">$199</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px"},"color":{"text":"rgba(255,255,255,0.3)"}}} --><p>One-time · Extended license</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:separator {"style":{"color":{"background":"rgba(108,71,255,0.2)"}}} --><hr class="wp-block-separator has-alpha-channel-opacity" /><!-- /wp:separator -->
				<!-- wp:list {"style":{"color":{"text":"rgba(255,255,255,0.55)"},"typography":{"fontSize":"13px"},"spacing":{"blockGap":"10px"}}} -->
				<ul class="wp-block-list">
					<!-- wp:list-item --><li><span style="color:#A78BFA;">✓</span> Everything in Pro</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><span style="color:#A78BFA;">✓</span> White-label rights</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><span style="color:#A78BFA;">✓</span> Use on client sites</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><span style="color:#A78BFA;">✓</span> Priority support queue</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><span style="color:#A78BFA;">✓</span> Figma source files</li><!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"width":100,"style":{"color":{"background":"transparent","text":"#A78BFA"},"border":{"radius":"10px","color":"rgba(108,71,255,0.4)","width":"1.5px"},"spacing":{"padding":{"top":"12px","bottom":"12px"}},"typography":{"fontSize":"13px","fontWeight":"500"}}} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#">Get Agency</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- FAQ micro-text -->
	<!-- wp:paragraph {"align":"center","style":{"color":{"text":"rgba(255,255,255,0.25)"},"typography":{"fontSize":"12px"},"spacing":{"margin":{"top":"var:preset|spacing|xl"}}}} -->
	<p class="has-text-align-center">All prices in USD · Secure checkout via Envato · 30-day buyer protection guarantee</p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
