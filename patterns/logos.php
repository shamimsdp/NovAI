<?php
/**
 * Title: Logo bar
 * Slug: novai/logos
 * Categories: novai-social-proof
 * Block Types: core/group, core/heading, core/paragraph, core/columns, core/column, core/image
 * Viewport Width: 1280
 * Inserter: true
 */
?>
<!-- wp:group {"style":{"color":{"background":"#0D0B1A"},"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl","right":"var:preset|spacing|lg","left":"var:preset|spacing|lg"}},"border":{"top":{"color":"rgba(46,40,87,0.5)","width":"1px"},"bottom":{"color":"rgba(46,40,87,0.5)","width":"1px"}}},"layout":{"type":"constrained","wideSize":"1200px"}} -->
<div class="wp-block-group" style="background-color:#0D0B1A;padding-top:48px;padding-bottom:48px;">

	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","fontWeight":"500","letterSpacing":"0.1em","textTransform":"uppercase"},"color":{"text":"rgba(255,255,255,0.25)"},"spacing":{"margin":{"bottom":"var:preset|spacing|lg"}}}} -->
	<p class="has-text-align-center">Trusted by teams at</p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2xl"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","verticalAlignment":"center"}} -->
	<div class="wp-block-group">

		<!-- wp:image {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logos/logo-acme.svg","alt":"Acme Corp","width":96,"height":28,"style":{"css":"opacity:0.3;filter:brightness(10);"}} /-->

		<!-- wp:image {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logos/logo-stellar.svg","alt":"Stellar Labs","width":96,"height":28,"style":{"css":"opacity:0.3;filter:brightness(10);"}} /-->

		<!-- wp:image {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logos/logo-nova.svg","alt":"Nova Systems","width":96,"height":28,"style":{"css":"opacity:0.3;filter:brightness(10);"}} /-->

		<!-- wp:image {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logos/logo-orbit.svg","alt":"Orbit Analytics","width":96,"height":28,"style":{"css":"opacity:0.3;filter:brightness(10);"}} /-->

		<!-- wp:image {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logos/logo-forge.svg","alt":"Forge API","width":96,"height":28,"style":{"css":"opacity:0.3;filter:brightness(10);"}} /-->

		<!-- wp:image {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logos/logo-nexus.svg","alt":"Nexus Cloud","width":96,"height":28,"style":{"css":"opacity:0.3;filter:brightness(10);"}} /-->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
