<?php
/**
 * Title: Integrations grid
 * Slug: novai/integrations
 * Categories: novai-content
 * Block Types: core/group, core/columns, core/column, core/heading, core/paragraph, core/image
 * Viewport Width: 1280
 * Inserter: true
 */
?>
<!-- wp:group {"style":{"color":{"background":"#0D0B1A"},"spacing":{"padding":{"top":"var:preset|spacing|3xl","bottom":"var:preset|spacing|3xl","right":"var:preset|spacing|lg","left":"var:preset|spacing|lg"}}},"layout":{"type":"constrained","wideSize":"1200px"}} -->
<div class="wp-block-group" style="background-color:#0D0B1A;padding-top:96px;padding-bottom:96px;">

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|sm","margin":{"bottom":"var:preset|spacing|2xl"}}},"layout":{"type":"constrained","contentSize":"560px"},"textAlign":"center"} -->
	<div class="wp-block-group has-text-align-center">
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","fontWeight":"500","letterSpacing":"0.1em","textTransform":"uppercase"},"color":{"text":"#6C47FF"}}} -->
		<p class="has-text-align-center">Integrations</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":2,"textAlign":"center","style":{"typography":{"fontWeight":"600","letterSpacing":"-0.03em"},"color":{"text":"#FFFFFF"}}} -->
		<h2 class="wp-block-heading has-text-align-center">Works with your existing stack</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","style":{"color":{"text":"rgba(255,255,255,0.4)"},"typography":{"fontSize":"var:preset|font-size|md"}}} -->
		<p class="has-text-align-center">NovAI plays nicely with the most popular WordPress plugins and services.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- Integration cards: 4 col × 2 row = 8 items -->
	<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|md"}}} -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"novai-int-card","style":{"color":{"background":"#1E1A38"},"border":{"radius":"14px","color":"rgba(108,71,255,0.15)","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|lg","right":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg","left":"var:preset|spacing|lg"},"blockGap":"var:preset|spacing|sm"}},"layout":{"type":"flex","verticalAlignment":"center"},"textAlign":"left"} -->
			<div class="wp-block-group novai-int-card">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"24px"}}} --><p>🛒</p><!-- /wp:paragraph -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"2px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","fontWeight":"500"},"color":{"text":"#FFFFFF"}}} --><p>WooCommerce</p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"11px"},"color":{"text":"rgba(255,255,255,0.3)"}}} --><p>Sell anything</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"novai-int-card","style":{"color":{"background":"#1E1A38"},"border":{"radius":"14px","color":"rgba(108,71,255,0.15)","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|lg","right":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg","left":"var:preset|spacing|lg"},"blockGap":"var:preset|spacing|sm"}},"layout":{"type":"flex","verticalAlignment":"center"}} -->
			<div class="wp-block-group novai-int-card">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"24px"}}} --><p>📧</p><!-- /wp:paragraph -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"2px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","fontWeight":"500"},"color":{"text":"#FFFFFF"}}} --><p>Mailchimp</p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"11px"},"color":{"text":"rgba(255,255,255,0.3)"}}} --><p>Email marketing</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"novai-int-card","style":{"color":{"background":"#1E1A38"},"border":{"radius":"14px","color":"rgba(108,71,255,0.15)","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|lg","right":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg","left":"var:preset|spacing|lg"},"blockGap":"var:preset|spacing|sm"}},"layout":{"type":"flex","verticalAlignment":"center"}} -->
			<div class="wp-block-group novai-int-card">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"24px"}}} --><p>📚</p><!-- /wp:paragraph -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"2px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","fontWeight":"500"},"color":{"text":"#FFFFFF"}}} --><p>LearnDash</p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"11px"},"color":{"text":"rgba(255,255,255,0.3)"}}} --><p>Online courses</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"novai-int-card","style":{"color":{"background":"#1E1A38"},"border":{"radius":"14px","color":"rgba(108,71,255,0.15)","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|lg","right":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg","left":"var:preset|spacing|lg"},"blockGap":"var:preset|spacing|sm"}},"layout":{"type":"flex","verticalAlignment":"center"}} -->
			<div class="wp-block-group novai-int-card">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"24px"}}} --><p>📊</p><!-- /wp:paragraph -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"2px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","fontWeight":"500"},"color":{"text":"#FFFFFF"}}} --><p>Google Analytics</p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"11px"},"color":{"text":"rgba(255,255,255,0.3)"}}} --><p>Traffic insights</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- Row 2 -->
	<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|md","margin":{"top":"var:preset|spacing|md"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"novai-int-card","style":{"color":{"background":"#1E1A38"},"border":{"radius":"14px","color":"rgba(108,71,255,0.15)","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|lg","right":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg","left":"var:preset|spacing|lg"},"blockGap":"var:preset|spacing|sm"}},"layout":{"type":"flex","verticalAlignment":"center"}} -->
			<div class="wp-block-group novai-int-card">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"24px"}}} --><p>🔒</p><!-- /wp:paragraph -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"2px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","fontWeight":"500"},"color":{"text":"#FFFFFF"}}} --><p>Wordfence</p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"11px"},"color":{"text":"rgba(255,255,255,0.3)"}}} --><p>Security</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"novai-int-card","style":{"color":{"background":"#1E1A38"},"border":{"radius":"14px","color":"rgba(108,71,255,0.15)","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|lg","right":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg","left":"var:preset|spacing|lg"},"blockGap":"var:preset|spacing|sm"}},"layout":{"type":"flex","verticalAlignment":"center"}} -->
			<div class="wp-block-group novai-int-card">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"24px"}}} --><p>⚡</p><!-- /wp:paragraph -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"2px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","fontWeight":"500"},"color":{"text":"#FFFFFF"}}} --><p>WP Rocket</p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"11px"},"color":{"text":"rgba(255,255,255,0.3)"}}} --><p>Caching &amp; CDN</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"novai-int-card","style":{"color":{"background":"#1E1A38"},"border":{"radius":"14px","color":"rgba(108,71,255,0.15)","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|lg","right":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg","left":"var:preset|spacing|lg"},"blockGap":"var:preset|spacing|sm"}},"layout":{"type":"flex","verticalAlignment":"center"}} -->
			<div class="wp-block-group novai-int-card">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"24px"}}} --><p>🎯</p><!-- /wp:paragraph -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"2px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","fontWeight":"500"},"color":{"text":"#FFFFFF"}}} --><p>Yoast SEO</p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"11px"},"color":{"text":"rgba(255,255,255,0.3)"}}} --><p>Search optimization</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"novai-int-card","style":{"color":{"background":"#1E1A38"},"border":{"radius":"14px","color":"rgba(108,71,255,0.15)","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|lg","right":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg","left":"var:preset|spacing|lg"},"blockGap":"var:preset|spacing|sm"}},"layout":{"type":"flex","verticalAlignment":"center"}} -->
			<div class="wp-block-group novai-int-card">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"24px"}}} --><p>💳</p><!-- /wp:paragraph -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"2px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","fontWeight":"500"},"color":{"text":"#FFFFFF"}}} --><p>Stripe</p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"11px"},"color":{"text":"rgba(255,255,255,0.3)"}}} --><p>Payments</p><!-- /wp:paragraph -->
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
