<?php
/**
 * Title: Team grid
 * Slug: novai/team
 * Categories: novai-content
 * Block Types: core/group, core/columns, core/column, core/heading, core/paragraph, core/image
 * Viewport Width: 1280
 * Inserter: true
 */
?>
<!-- wp:group {"style":{"color":{"background":"#0D0B1A"},"spacing":{"padding":{"top":"var:preset|spacing|3xl","bottom":"var:preset|spacing|3xl","right":"var:preset|spacing|lg","left":"var:preset|spacing|lg"}}},"layout":{"type":"constrained","wideSize":"1200px"}} -->
<div class="wp-block-group" style="background-color:#0D0B1A;padding-top:96px;padding-bottom:96px;">

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|sm","margin":{"bottom":"var:preset|spacing|2xl"}}},"layout":{"type":"constrained","contentSize":"480px"},"textAlign":"center"} -->
	<div class="wp-block-group has-text-align-center">
		<!-- wp:heading {"level":2,"textAlign":"center","style":{"typography":{"fontWeight":"600","letterSpacing":"-0.03em"},"color":{"text":"#FFFFFF"}}} -->
		<h2 class="wp-block-heading has-text-align-center">Built by founders, for founders</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","style":{"color":{"text":"rgba(255,255,255,0.4)"},"typography":{"fontSize":"var:preset|font-size|md"}}} -->
		<p class="has-text-align-center">A small team obsessed with performance, design, and developer experience.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|md"}}} -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"novai-team-card","style":{"color":{"background":"#1E1A38"},"border":{"radius":"16px","color":"rgba(108,71,255,0.15)","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|xl","right":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|xl"},"blockGap":"var:preset|spacing|md"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center"},"textAlign":"center"} -->
			<div class="wp-block-group novai-team-card has-text-align-center">
				<!-- wp:image {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/team/team-1.jpg","alt":"Alex Rivera","width":72,"height":72,"style":{"border":{"radius":"50%"}}} /-->
				<!-- wp:heading {"level":4,"textAlign":"center","style":{"typography":{"fontSize":"var:preset|font-size|md","fontWeight":"600"},"color":{"text":"#FFFFFF"}}} --><h4 class="wp-block-heading has-text-align-center">Alex Rivera</h4><!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"12px"},"color":{"text":"rgba(255,255,255,0.35)"}}} --><p class="has-text-align-center">Lead Developer</p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"12px","lineHeight":"1.6"},"color":{"text":"rgba(255,255,255,0.45)"}}} --><p class="has-text-align-center">8 years WordPress, Power Elite author with 40k+ sales.</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"novai-team-card","style":{"color":{"background":"#1E1A38"},"border":{"radius":"16px","color":"rgba(56,189,248,0.15)","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|xl","right":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|xl"},"blockGap":"var:preset|spacing|md"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center"},"textAlign":"center"} -->
			<div class="wp-block-group novai-team-card has-text-align-center">
				<!-- wp:image {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/team/team-2.jpg","alt":"Priya Nair","width":72,"height":72,"style":{"border":{"radius":"50%"}}} /-->
				<!-- wp:heading {"level":4,"textAlign":"center","style":{"typography":{"fontSize":"var:preset|font-size|md","fontWeight":"600"},"color":{"text":"#FFFFFF"}}} --><h4 class="wp-block-heading has-text-align-center">Priya Nair</h4><!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"12px"},"color":{"text":"rgba(255,255,255,0.35)"}}} --><p class="has-text-align-center">Design Lead</p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"12px","lineHeight":"1.6"},"color":{"text":"rgba(255,255,255,0.45)"}}} --><p class="has-text-align-center">Former Figma designer. Specializes in SaaS and AI product design.</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"novai-team-card","style":{"color":{"background":"#1E1A38"},"border":{"radius":"16px","color":"rgba(234,179,8,0.15)","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|xl","right":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|xl"},"blockGap":"var:preset|spacing|md"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center"},"textAlign":"center"} -->
			<div class="wp-block-group novai-team-card has-text-align-center">
				<!-- wp:image {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/team/team-3.jpg","alt":"Kwame Asante","width":72,"height":72,"style":{"border":{"radius":"50%"}}} /-->
				<!-- wp:heading {"level":4,"textAlign":"center","style":{"typography":{"fontSize":"var:preset|font-size|md","fontWeight":"600"},"color":{"text":"#FFFFFF"}}} --><h4 class="wp-block-heading has-text-align-center">Kwame Asante</h4><!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"12px"},"color":{"text":"rgba(255,255,255,0.35)"}}} --><p class="has-text-align-center">Developer Relations</p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"12px","lineHeight":"1.6"},"color":{"text":"rgba(255,255,255,0.45)"}}} --><p class="has-text-align-center">WordPress.org contributor and certified Gutenberg block developer.</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
