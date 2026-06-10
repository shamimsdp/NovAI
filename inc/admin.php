<?php
declare(strict_types=1);
/**
 * NovAI — Admin Experience & Theme Options
 *
 * @package NovAI
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function novai_on_theme_activation(): void {
	update_option( 'novai_show_welcome_panel', '1' );
}
add_action( 'after_switch_theme', 'novai_on_theme_activation' );

function novai_handle_welcome_dismiss(): void {
	if ( ! isset( $_GET['novai-dismiss-welcome'] ) ) {
		return;
	}

	if ( ! current_user_can( 'edit_theme_options' ) ) {
		return;
	}

	$nonce = isset( $_GET['_wpnonce'] ) ? sanitize_text_field( wp_unslash( (string) $_GET['_wpnonce'] ) ) : '';
	if ( ! wp_verify_nonce( $nonce, 'novai_dismiss_welcome' ) ) {
		return;
	}

	update_option( 'novai_show_welcome_panel', '0' );
	wp_safe_redirect( admin_url( 'themes.php' ) );
	exit;
}
add_action( 'admin_init', 'novai_handle_welcome_dismiss' );

/**
 * Save site identity fields (logo, title, tagline).
 *
 * @return void
 */
function novai_handle_site_identity_save(): void {
	if ( ! isset( $_POST['novai_site_identity_nonce'] ) ) {
		return;
	}

	if ( ! wp_verify_nonce( sanitize_text_field( wp_unslash( (string) $_POST['novai_site_identity_nonce'] ) ), 'novai_site_identity' ) ) {
		return;
	}

	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}

	if ( isset( $_POST['blogname'] ) ) {
		update_option( 'blogname', sanitize_text_field( wp_unslash( (string) $_POST['blogname'] ) ) );
	}

	if ( isset( $_POST['blogdescription'] ) ) {
		update_option( 'blogdescription', sanitize_text_field( wp_unslash( (string) $_POST['blogdescription'] ) ) );
	}

	if ( isset( $_POST['novai_logo_id'] ) ) {
		$logo_id = absint( $_POST['novai_logo_id'] );
		if ( $logo_id > 0 ) {
			update_option( 'site_logo', $logo_id );
			set_theme_mod( 'custom_logo', $logo_id );
		} else {
			delete_option( 'site_logo' );
			remove_theme_mod( 'custom_logo' );
		}
	}

	wp_safe_redirect( add_query_arg( [ 'page' => 'novai-dashboard', 'tab' => 'site-identity', 'novai-updated' => '1' ], admin_url( 'admin.php' ) ) );
	exit;
}
add_action( 'admin_init', 'novai_handle_site_identity_save' );

/**
 * Enqueue WP media uploader on NovAI dashboard.
 *
 * @param string $hook Current admin hook.
 * @return void
 */
function novai_enqueue_dashboard_media( string $hook ): void {
	if ( 'toplevel_page_novai-dashboard' !== $hook ) {
		return;
	}
	wp_enqueue_media();
}
add_action( 'admin_enqueue_scripts', 'novai_enqueue_dashboard_media' );

function novai_register_admin_settings(): void {
	register_setting( 'novai_header_options_group', 'novai_header_options', 'novai_sanitize_header_options' );
	register_setting( 'novai_blog_options_group', 'novai_blog_options', 'novai_sanitize_blog_options' );
	register_setting( 'novai_footer_options_group', 'novai_footer_options', 'novai_sanitize_footer_options' );
	register_setting( 'novai_performance_options_group', 'novai_performance_options', 'novai_sanitize_performance_options' );
	register_setting( 'novai_integrations_options_group', 'novai_integrations_options', 'novai_sanitize_integrations_options' );
}
add_action( 'admin_init', 'novai_register_admin_settings' );

function novai_register_admin_menus(): void {
	add_menu_page(
		esc_html__( 'NovAI Dashboard', 'novai' ),
		esc_html__( 'NovAI', 'novai' ),
		'edit_theme_options',
		'novai-dashboard',
		'novai_render_dashboard_page',
		'dashicons-admin-customizer',
		58
	);

	add_submenu_page(
		'novai-dashboard',
		esc_html__( 'Dashboard', 'novai' ),
		esc_html__( 'Dashboard', 'novai' ),
		'edit_theme_options',
		'novai-dashboard',
		'novai_render_dashboard_page'
	);
}
add_action( 'admin_menu', 'novai_register_admin_menus', 20 );

function novai_add_appearance_shortcuts(): void {
	global $submenu;

	if ( ! isset( $submenu['themes.php'] ) ) {
		return;
	}

	$existing_slugs = wp_list_pluck( $submenu['themes.php'], 2 );
	$links          = [
		[ esc_html__( 'Navigation', 'novai' ), 'site-editor.php?path=/navigation' ],
		[ esc_html__( 'Patterns', 'novai' ), 'site-editor.php?path=/patterns' ],
		[ esc_html__( 'Fonts', 'novai' ), 'site-editor.php?path=/wp_global_styles' ],
	];

	foreach ( $links as $link ) {
		if ( in_array( $link[1], $existing_slugs, true ) ) {
			continue;
		}
		add_submenu_page( 'themes.php', $link[0], $link[0], 'edit_theme_options', $link[1] );
	}
}
add_action( 'admin_menu', 'novai_add_appearance_shortcuts', 99 );

function novai_render_themes_welcome_panel(): void {
	if ( ! current_user_can( 'edit_theme_options' ) ) {
		return;
	}

	$screen = get_current_screen();
	if ( ! $screen || 'themes' !== $screen->id ) {
		return;
	}

	if ( '1' !== (string) get_option( 'novai_show_welcome_panel', '1' ) ) {
		return;
	}

	$dismiss_url = wp_nonce_url(
		add_query_arg( 'novai-dismiss-welcome', '1', admin_url( 'themes.php' ) ),
		'novai_dismiss_welcome'
	);
	$dashboard_url = admin_url( 'admin.php?page=novai-dashboard' );
	$editor_url    = admin_url( 'site-editor.php' );
	$image_url     = get_theme_file_uri( 'screenshot.png' );

	echo '<div class="notice notice-success novai-welcome-panel">';
	echo '<a class="notice-dismiss" href="' . esc_url( $dismiss_url ) . '"><span class="screen-reader-text">' . esc_html__( 'Dismiss this notice.', 'novai' ) . '</span></a>';
	echo '<div class="novai-welcome-panel__inner">';
	echo '<img class="novai-welcome-panel__image" src="' . esc_url( $image_url ) . '" alt="' . esc_attr__( 'NovAI preview', 'novai' ) . '">';
	echo '<h2>' . esc_html__( 'Thanks for installing NovAI Theme!', 'novai' ) . '</h2>';
	echo '<p>' . esc_html__( 'Start with the NovAI dashboard to configure options quickly, or build everything from scratch in Site Editor.', 'novai' ) . '</p>';
	echo '<div class="novai-welcome-panel__actions">';
	echo '<a class="button button-primary button-hero" href="' . esc_url( $dashboard_url ) . '">' . esc_html__( 'Let\'s Get Started', 'novai' ) . '</a>';
	echo '<a class="button button-secondary button-hero" href="' . esc_url( $editor_url ) . '">' . esc_html__( 'Build From Scratch', 'novai' ) . '</a>';
	echo '</div></div></div>';
}
add_action( 'admin_notices', 'novai_render_themes_welcome_panel' );

function novai_admin_css(): void {
	$screen = get_current_screen();
	if ( ! $screen ) {
		return;
	}

	if ( 'themes' !== $screen->id && 'toplevel_page_novai-dashboard' !== $screen->id ) {
		return;
	}

	echo '<style>
	/* Welcome panel on Themes page */
	.novai-welcome-panel{padding:0;border-left:4px solid #2f7ae5;}
	.novai-welcome-panel .notice-dismiss{z-index:3;}
	.novai-welcome-panel__inner{max-width:860px;margin:24px auto;padding:8px 24px 24px;text-align:center;}
	.novai-welcome-panel__image{display:block;max-width:440px;width:100%;margin:0 auto 20px;border-radius:10px;box-shadow:0 14px 30px rgba(16,24,40,.12);}
	.novai-welcome-panel__actions{display:flex;gap:12px;justify-content:center;flex-wrap:wrap;margin-top:18px;}
	/* Dashboard brand header */
	.novai-brand-header{display:flex;align-items:center;justify-content:space-between;padding:12px 20px;background:#fff;border:1px solid #dfe4ea;border-radius:10px;margin-bottom:0;}
	.novai-brand-header__left{display:flex;align-items:center;gap:10px;}
	.novai-brand-icon{font-size:28px;color:#2f7ae5;line-height:1;}
	.novai-brand-name{font-size:18px;font-weight:700;color:#1e293b;}
	.novai-brand-badge{background:#2f7ae5;color:#fff;font-size:10px;font-weight:700;padding:2px 7px;border-radius:3px;text-transform:uppercase;letter-spacing:.5px;}
	.novai-brand-version{color:#64748b;font-size:13px;}
	.novai-brand-header__right{display:flex;gap:16px;}
	.novai-brand-header__right a{color:#2f7ae5;font-size:13px;text-decoration:none;display:flex;align-items:center;gap:4px;}
	.novai-brand-header__right a:hover{text-decoration:underline;}
	/* Tabs */
	.novai-dash-tabs{margin:0;border-bottom:1px solid #dfe4ea;background:#fff;padding:0 4px;border-left:1px solid #dfe4ea;border-right:1px solid #dfe4ea;}
	.novai-dash-tabs .nav-tab{border:none!important;border-bottom:3px solid transparent!important;border-radius:0!important;padding:10px 16px!important;margin:0!important;background:transparent!important;color:#50575e;font-weight:500;}
	.novai-dash-tabs .nav-tab:hover{color:#2f7ae5;border-bottom-color:#c3d4f5!important;}
	.novai-dash-tabs .nav-tab-active{color:#2f7ae5!important;border-bottom-color:#2f7ae5!important;font-weight:600;}
	/* Layout grid */
	.novai-dash-body{display:grid;grid-template-columns:1fr 300px;gap:0;border:1px solid #dfe4ea;border-top:none;border-radius:0 0 10px 10px;overflow:hidden;}
	.novai-dash-main{background:#fff;padding:20px 24px;}
	.novai-dash-sidebar{background:#f9f9fb;border-left:1px solid #dfe4ea;padding:20px;}
	/* Get Started section */
	.novai-getstarted-header{display:flex;align-items:center;justify-content:space-between;margin-bottom:16px;padding-bottom:12px;border-bottom:1px solid #f0f0f1;}
	.novai-getstarted-header h2{margin:0;font-size:16px;}
	.novai-feature-grid{display:grid;grid-template-columns:1fr 1fr;gap:0;}
	.novai-feature-link{display:block;padding:14px 12px;text-decoration:none;border-bottom:1px solid #f0f0f1;border-right:1px solid #f0f0f1;transition:background .15s;}
	.novai-feature-link:nth-child(2n){border-right:none;}
	.novai-feature-link:hover{background:#f0f6ff;}
	.novai-feature-link strong{display:block;color:#2f7ae5;font-size:13px;font-weight:600;margin-bottom:3px;}
	.novai-feature-link span{display:block;color:#646970;font-size:12px;}
	/* Sidebar sections */
	.novai-sidebar-section{margin-bottom:24px;}
	.novai-sidebar-section h3{font-size:13px;font-weight:600;margin:0 0 8px;color:#1e293b;}
	.novai-sidebar-section p{font-size:12px;color:#646970;margin:0 0 8px;}
	.novai-sidebar-section a.novai-review-link{color:#2f7ae5;font-size:12px;text-decoration:none;}
	.novai-sidebar-section a.novai-review-link:hover{text-decoration:underline;}
	.novai-plugin-item{display:flex;align-items:flex-start;gap:8px;padding:8px 0;border-bottom:1px solid #f0f0f1;}
	.novai-plugin-item:last-child{border-bottom:none;}
	.novai-plugin-icon{width:32px;height:32px;border-radius:6px;background:#e8f0fe;display:flex;align-items:center;justify-content:center;flex-shrink:0;}
	.novai-plugin-icon .dashicons{color:#2f7ae5;font-size:18px;width:18px;height:18px;}
	.novai-plugin-info{flex:1;min-width:0;}
	.novai-plugin-info strong{display:block;font-size:12px;color:#1e293b;}
	.novai-plugin-info span{display:block;font-size:11px;color:#646970;margin-top:2px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;}
	.novai-plugin-install{font-size:11px;font-weight:600;color:#2f7ae5;text-decoration:none;white-space:nowrap;flex-shrink:0;margin-top:2px;}
	@media (max-width:960px){.novai-dash-body{grid-template-columns:1fr;}.novai-feature-grid{grid-template-columns:1fr;}.novai-feature-link{border-right:none;}}
	</style>';
}
add_action( 'admin_head', 'novai_admin_css' );

function novai_render_dashboard_page(): void {
	$theme = wp_get_theme();
	$tabs  = [ 'welcome', 'site-identity', 'header', 'blog', 'footer', 'performance', 'integrations' ];
	$tab   = isset( $_GET['tab'] ) ? sanitize_key( (string) $_GET['tab'] ) : 'welcome';
	if ( ! in_array( $tab, $tabs, true ) ) {
		$tab = 'welcome';
	}

	$tab_labels = [
		'welcome'       => esc_html__( 'Welcome', 'novai' ),
		'site-identity' => esc_html__( 'Site Identity', 'novai' ),
		'header'        => esc_html__( 'Header Options', 'novai' ),
		'blog'          => esc_html__( 'Blog Layouts', 'novai' ),
		'footer'        => esc_html__( 'Footer Options', 'novai' ),
		'performance'   => esc_html__( 'Performance', 'novai' ),
		'integrations'  => esc_html__( 'Integrations', 'novai' ),
	];

	echo '<div class="wrap">';

	// Brand header bar.
	echo '<div class="novai-brand-header">';
	echo '<div class="novai-brand-header__left">';
	echo '<span class="novai-brand-icon dashicons dashicons-admin-customizer"></span>';
	echo '<span class="novai-brand-name">NovAI</span>';
	echo '<span class="novai-brand-badge">' . esc_html__( 'FREE', 'novai' ) . '</span>';
	echo '<span class="novai-brand-version">v' . esc_html( $theme->get( 'Version' ) ) . '</span>';
	echo '</div>';
	echo '<div class="novai-brand-header__right">';
	echo '<a href="' . esc_url( admin_url( 'admin.php?page=novai-dashboard' ) ) . '"><span class="dashicons dashicons-media-document"></span> ' . esc_html__( 'Documentation', 'novai' ) . '</a>';
	echo '<a href="' . esc_url( admin_url( 'admin.php?page=novai-dashboard' ) ) . '"><span class="dashicons dashicons-list-view"></span> ' . esc_html__( 'Changelog', 'novai' ) . '</a>';
	echo '</div>';
	echo '</div>';

	// Tab navigation.
	echo '<h2 class="nav-tab-wrapper novai-dash-tabs">';
	foreach ( $tab_labels as $slug => $label ) {
		$url   = admin_url( 'admin.php?page=novai-dashboard&tab=' . $slug );
		$class = 'nav-tab' . ( $tab === $slug ? ' nav-tab-active' : '' );
		echo '<a class="' . esc_attr( $class ) . '" href="' . esc_url( $url ) . '">' . esc_html( $label ) . '</a>';
	}
	echo '</h2>';

	// Body: main + sidebar.
	echo '<div class="novai-dash-body">';
	echo '<div class="novai-dash-main">';
	novai_render_dashboard_tab( $tab );
	echo '</div>';

	// Sidebar.
	echo '<aside class="novai-dash-sidebar">';
	echo '<div class="novai-sidebar-section">';
	echo '<h3>' . esc_html__( 'Leave us a review', 'novai' ) . '</h3>';
	echo '<p>' . esc_html__( 'Are you enjoying NovAI? We would love to hear your feedback.', 'novai' ) . '</p>';
	echo '<a class="novai-review-link" href="https://wordpress.org/support/theme/novai/reviews/#new-post" target="_blank" rel="noopener">' . esc_html__( 'Submit a review', 'novai' ) . ' &#x2197;</a>';
	echo '</div>';
	echo '<div class="novai-sidebar-section">';
	echo '<h3>' . esc_html__( 'Quick Links', 'novai' ) . '</h3>';
	$links = [
		[ admin_url( 'site-editor.php' ), 'dashicons-layout', esc_html__( 'Site Editor', 'novai' ), esc_html__( 'Templates, patterns and global styles', 'novai' ) ],
		[ admin_url( 'site-editor.php?path=/wp_global_styles' ), 'dashicons-art', esc_html__( 'Fonts & Colors', 'novai' ), esc_html__( 'Manage typography and palette', 'novai' ) ],
		[ admin_url( 'site-editor.php?path=/navigation' ), 'dashicons-menu', esc_html__( 'Navigation Menus', 'novai' ), esc_html__( 'Manage site navigation', 'novai' ) ],
		[ admin_url( 'site-editor.php?path=/patterns' ), 'dashicons-screenoptions', esc_html__( 'Patterns', 'novai' ), esc_html__( 'Insert and edit block patterns', 'novai' ) ],
	];
	foreach ( $links as $link ) {
		echo '<div class="novai-plugin-item">';
		echo '<div class="novai-plugin-icon"><span class="dashicons ' . esc_attr( $link[1] ) . '"></span></div>';
		echo '<div class="novai-plugin-info"><strong>' . esc_html( $link[2] ) . '</strong><span>' . esc_html( $link[3] ) . '</span></div>';
		echo '<a class="novai-plugin-install" href="' . esc_url( $link[0] ) . '">' . esc_html__( 'Open', 'novai' ) . ' &rarr;</a>';
		echo '</div>';
	}
	echo '</div></aside>';
	echo '</div></div>';
}

function novai_render_dashboard_tab( string $tab ): void {
	switch ( $tab ) {
		case 'header':
			novai_render_header_form();
			break;
		case 'blog':
			novai_render_blog_form();
			break;
		case 'footer':
			novai_render_footer_form();
			break;
		case 'performance':
			novai_render_performance_form();
			break;
		case 'integrations':
			novai_render_integrations_form();
			break;
		case 'site-identity':
			novai_render_site_identity_form();
			break;
		case 'welcome':
		default:
			echo '<div class="novai-getstarted-header">';
			echo '<h2 style="margin:0;font-size:15px;">' . esc_html__( 'Get Started', 'novai' ) . '</h2>';
			echo '<a class="button button-primary" href="' . esc_url( admin_url( 'site-editor.php' ) ) . '">' . esc_html__( 'Open Site Editor', 'novai' ) . '</a>';
			echo '</div>';
			echo '<div class="novai-feature-grid">';
			$features = [
				[ admin_url( 'admin.php?page=novai-dashboard&tab=site-identity' ), esc_html__( 'Upload Logo', 'novai' ), esc_html__( 'Recommended size: 200x50px', 'novai' ) ],
				[ admin_url( 'site-editor.php?path=/wp_global_styles' ), esc_html__( 'Set Colors', 'novai' ), esc_html__( 'Brand colors & site palette', 'novai' ) ],
				[ admin_url( 'site-editor.php?path=/wp_global_styles' ), esc_html__( 'Customize Fonts', 'novai' ), esc_html__( 'Typography & text styles', 'novai' ) ],
				[ admin_url( 'site-editor.php' ), esc_html__( 'Layout Options', 'novai' ), esc_html__( 'Content structure & spacing', 'novai' ) ],
				[ admin_url( 'admin.php?page=novai-dashboard&tab=header' ), esc_html__( 'Header Options', 'novai' ), esc_html__( 'Navigation & branding setup', 'novai' ) ],
				[ admin_url( 'admin.php?page=novai-dashboard&tab=blog' ), esc_html__( 'Blog Layouts', 'novai' ), esc_html__( 'Post display & formatting', 'novai' ) ],
				[ admin_url( 'admin.php?page=novai-dashboard&tab=footer' ), esc_html__( 'Footer Options', 'novai' ), esc_html__( 'Footer layout & content', 'novai' ) ],
				[ admin_url( 'admin.php?page=novai-dashboard&tab=performance' ), esc_html__( 'Performance', 'novai' ), esc_html__( 'Animation & hover controls', 'novai' ) ],
			];
			foreach ( $features as $feature ) {
				echo '<a class="novai-feature-link" href="' . esc_url( $feature[0] ) . '"><strong>' . esc_html( $feature[1] ) . '</strong><span>' . esc_html( $feature[2] ) . '</span></a>';
			}
			echo '</div>';
			break;
	}
}

function novai_render_site_identity_form(): void {
	$site_title = (string) get_option( 'blogname', '' );
	$tagline    = (string) get_option( 'blogdescription', '' );
	$logo_id    = absint( get_option( 'site_logo', get_theme_mod( 'custom_logo', 0 ) ) );
	$logo_url   = $logo_id ? (string) wp_get_attachment_image_url( $logo_id, 'medium' ) : '';

	if ( isset( $_GET['novai-updated'] ) ) {
		echo '<div class="notice notice-success inline is-dismissible"><p>' . esc_html__( 'Settings saved.', 'novai' ) . '</p></div>';
	}

	echo '<h2>' . esc_html__( 'Site Identity', 'novai' ) . '</h2>';
	echo '<form method="post" id="novai-site-identity-form">';
	wp_nonce_field( 'novai_site_identity', 'novai_site_identity_nonce' );
	echo '<input type="hidden" name="novai_logo_id" id="novai-logo-id" value="' . esc_attr( (string) $logo_id ) . '">';

	echo '<div style="margin-bottom:20px;">';
	echo '<p><strong>' . esc_html__( 'Logo', 'novai' ) . '</strong></p>';
	echo '<p class="description" style="margin-bottom:10px;">' . esc_html__( 'Recommended size: 200×50px', 'novai' ) . '</p>';
	echo '<div id="novai-logo-preview" style="min-height:40px;margin-bottom:10px;">';
	if ( $logo_url ) {
		echo '<img src="' . esc_url( $logo_url ) . '" alt="' . esc_attr__( 'Current logo', 'novai' ) . '" style="max-width:200px;height:auto;display:block;margin-bottom:8px;border:1px solid #dfe4ea;padding:6px;border-radius:4px;background:#fff;">';
	}
	echo '</div>';
	echo '<button type="button" class="button" id="novai-logo-select">' . esc_html__( 'Select / Change Logo', 'novai' ) . '</button>';
	if ( $logo_id ) {
		echo ' <button type="button" class="button" id="novai-logo-remove">' . esc_html__( 'Remove Logo', 'novai' ) . '</button>';
	}
	echo '</div>';

	echo '<table class="form-table" role="presentation">';
	echo '<tr><th scope="row"><label for="novai-blogname">' . esc_html__( 'Site Title', 'novai' ) . '</label></th>';
	echo '<td><input type="text" class="regular-text" id="novai-blogname" name="blogname" value="' . esc_attr( $site_title ) . '" /></td></tr>';
	echo '<tr><th scope="row"><label for="novai-tagline">' . esc_html__( 'Tagline', 'novai' ) . '</label></th>';
	echo '<td><input type="text" class="regular-text" id="novai-tagline" name="blogdescription" value="' . esc_attr( $tagline ) . '" />';
	echo '<p class="description">' . esc_html__( 'In a few words, explain what this site is about.', 'novai' ) . '</p></td></tr>';
	echo '</table>';
	submit_button();
	echo '</form>';

	echo '<script>
(function(){
	if ( typeof wp === "undefined" || ! wp.media ) { return; }
	var frame;
	document.getElementById("novai-logo-select").addEventListener("click", function(e){
		e.preventDefault();
		if ( frame ) { frame.open(); return; }
		frame = wp.media({
			title: "' . esc_js( __( 'Select Logo', 'novai' ) ) . '",
			button: { text: "' . esc_js( __( 'Use as Logo', 'novai' ) ) . '" },
			multiple: false,
			library: { type: "image" }
		});
		frame.on("select", function(){
			var a = frame.state().get("selection").first().toJSON();
			document.getElementById("novai-logo-id").value = a.id;
			var src = (a.sizes && a.sizes.medium) ? a.sizes.medium.url : a.url;
			document.getElementById("novai-logo-preview").innerHTML = "<img src=\""+src+"\" style=\"max-width:200px;height:auto;display:block;margin-bottom:8px;border:1px solid #dfe4ea;padding:6px;border-radius:4px;background:#fff;\">";
		});
		frame.open();
	});
	var removeBtn = document.getElementById("novai-logo-remove");
	if ( removeBtn ) {
		removeBtn.addEventListener("click", function(e){
			e.preventDefault();
			document.getElementById("novai-logo-id").value = "0";
			document.getElementById("novai-logo-preview").innerHTML = "";
		});
	}
})();
</script>';
}

function novai_render_header_form(): void {
	$options = wp_parse_args( (array) get_option( 'novai_header_options', [] ), [
		'sticky'    => 1,
		'show_cta'  => 1,
		'cta_label' => esc_html__( 'Get Started', 'novai' ),
		'cta_url'   => home_url( '/' ),
	] );

	echo '<h2>' . esc_html__( 'Header Options', 'novai' ) . '</h2><form method="post" action="options.php">';
	settings_fields( 'novai_header_options_group' );
	echo '<table class="form-table" role="presentation">';
	echo '<tr><th scope="row">' . esc_html__( 'Sticky Header', 'novai' ) . '</th><td><label><input type="checkbox" name="novai_header_options[sticky]" value="1" ' . checked( 1, (int) $options['sticky'], false ) . ' /> ' . esc_html__( 'Enable sticky header behavior', 'novai' ) . '</label></td></tr>';
	echo '<tr><th scope="row">' . esc_html__( 'Show Header CTA', 'novai' ) . '</th><td><label><input type="checkbox" name="novai_header_options[show_cta]" value="1" ' . checked( 1, (int) $options['show_cta'], false ) . ' /> ' . esc_html__( 'Show CTA button in header', 'novai' ) . '</label></td></tr>';
	echo '<tr><th scope="row">' . esc_html__( 'CTA Label', 'novai' ) . '</th><td><input type="text" class="regular-text" name="novai_header_options[cta_label]" value="' . esc_attr( (string) $options['cta_label'] ) . '" /></td></tr>';
	echo '<tr><th scope="row">' . esc_html__( 'CTA URL', 'novai' ) . '</th><td><input type="url" class="regular-text" name="novai_header_options[cta_url]" value="' . esc_attr( (string) $options['cta_url'] ) . '" /></td></tr>';
	echo '</table>';
	submit_button();
	echo '</form>';
}

function novai_render_blog_form(): void {
	$options = wp_parse_args( (array) get_option( 'novai_blog_options', [] ), [
		'show_meta'         => 1,
		'show_featured_img' => 1,
		'excerpt_length'    => 28,
	] );

	echo '<h2>' . esc_html__( 'Blog Layouts', 'novai' ) . '</h2><form method="post" action="options.php">';
	settings_fields( 'novai_blog_options_group' );
	echo '<table class="form-table" role="presentation">';
	echo '<tr><th scope="row">' . esc_html__( 'Show Post Meta', 'novai' ) . '</th><td><label><input type="checkbox" name="novai_blog_options[show_meta]" value="1" ' . checked( 1, (int) $options['show_meta'], false ) . ' /> ' . esc_html__( 'Display date/author metadata', 'novai' ) . '</label></td></tr>';
	echo '<tr><th scope="row">' . esc_html__( 'Show Featured Image', 'novai' ) . '</th><td><label><input type="checkbox" name="novai_blog_options[show_featured_img]" value="1" ' . checked( 1, (int) $options['show_featured_img'], false ) . ' /> ' . esc_html__( 'Display featured image on posts', 'novai' ) . '</label></td></tr>';
	echo '<tr><th scope="row">' . esc_html__( 'Excerpt Length (words)', 'novai' ) . '</th><td><input type="number" min="10" max="80" name="novai_blog_options[excerpt_length]" value="' . esc_attr( (string) $options['excerpt_length'] ) . '" /></td></tr>';
	echo '</table>';
	submit_button();
	echo '</form>';
}

function novai_render_footer_form(): void {
	$options = wp_parse_args( (array) get_option( 'novai_footer_options', [] ), [
		'show_social' => 1,
		'copyright'   => sprintf( 'Copyright %d NovAI.', gmdate( 'Y' ) ),
	] );

	echo '<h2>' . esc_html__( 'Footer Options', 'novai' ) . '</h2><form method="post" action="options.php">';
	settings_fields( 'novai_footer_options_group' );
	echo '<table class="form-table" role="presentation">';
	echo '<tr><th scope="row">' . esc_html__( 'Show Social Links', 'novai' ) . '</th><td><label><input type="checkbox" name="novai_footer_options[show_social]" value="1" ' . checked( 1, (int) $options['show_social'], false ) . ' /> ' . esc_html__( 'Display social links in footer', 'novai' ) . '</label></td></tr>';
	echo '<tr><th scope="row">' . esc_html__( 'Copyright Text', 'novai' ) . '</th><td><input type="text" class="regular-text" name="novai_footer_options[copyright]" value="' . esc_attr( (string) $options['copyright'] ) . '" /></td></tr>';
	echo '</table>';
	submit_button();
	echo '</form>';
}

function novai_render_performance_form(): void {
	$options = wp_parse_args( (array) get_option( 'novai_performance_options', [] ), [
		'enable_reveal' => 1,
		'enable_hover'  => 1,
	] );

	echo '<h2>' . esc_html__( 'Performance', 'novai' ) . '</h2><form method="post" action="options.php">';
	settings_fields( 'novai_performance_options_group' );
	echo '<table class="form-table" role="presentation">';
	echo '<tr><th scope="row">' . esc_html__( 'Scroll Reveal Animations', 'novai' ) . '</th><td><label><input type="checkbox" name="novai_performance_options[enable_reveal]" value="1" ' . checked( 1, (int) $options['enable_reveal'], false ) . ' /> ' . esc_html__( 'Enable section reveal animations', 'novai' ) . '</label></td></tr>';
	echo '<tr><th scope="row">' . esc_html__( 'Card Hover Effects', 'novai' ) . '</th><td><label><input type="checkbox" name="novai_performance_options[enable_hover]" value="1" ' . checked( 1, (int) $options['enable_hover'], false ) . ' /> ' . esc_html__( 'Enable hover transform effects', 'novai' ) . '</label></td></tr>';
	echo '</table>';
	submit_button();
	echo '</form>';
}

function novai_render_integrations_form(): void {
	$options = wp_parse_args( (array) get_option( 'novai_integrations_options', [] ), [
		'ga_id'          => '',
		'facebook_pixel' => '',
	] );

	echo '<h2>' . esc_html__( 'Integrations', 'novai' ) . '</h2>';
	echo '<p>' . esc_html__( 'Store optional tracking IDs. Make sure your privacy and cookie policy is configured.', 'novai' ) . '</p>';
	echo '<form method="post" action="options.php">';
	settings_fields( 'novai_integrations_options_group' );
	echo '<table class="form-table" role="presentation">';
	echo '<tr><th scope="row">' . esc_html__( 'Google Analytics ID', 'novai' ) . '</th><td><input type="text" class="regular-text" placeholder="G-XXXXXXXXXX" name="novai_integrations_options[ga_id]" value="' . esc_attr( (string) $options['ga_id'] ) . '" /></td></tr>';
	echo '<tr><th scope="row">' . esc_html__( 'Facebook Pixel ID', 'novai' ) . '</th><td><input type="text" class="regular-text" name="novai_integrations_options[facebook_pixel]" value="' . esc_attr( (string) $options['facebook_pixel'] ) . '" /></td></tr>';
	echo '</table>';
	submit_button();
	echo '</form>';
}

function novai_sanitize_header_options( array $input ): array {
	return [
		'sticky'    => ! empty( $input['sticky'] ) ? 1 : 0,
		'show_cta'  => ! empty( $input['show_cta'] ) ? 1 : 0,
		'cta_label' => sanitize_text_field( (string) ( $input['cta_label'] ?? '' ) ),
		'cta_url'   => esc_url_raw( (string) ( $input['cta_url'] ?? '' ) ),
	];
}

function novai_sanitize_blog_options( array $input ): array {
	$length = absint( (int) ( $input['excerpt_length'] ?? 28 ) );
	if ( $length < 10 ) {
		$length = 10;
	}
	if ( $length > 80 ) {
		$length = 80;
	}

	return [
		'show_meta'         => ! empty( $input['show_meta'] ) ? 1 : 0,
		'show_featured_img' => ! empty( $input['show_featured_img'] ) ? 1 : 0,
		'excerpt_length'    => $length,
	];
}

function novai_sanitize_footer_options( array $input ): array {
	return [
		'show_social' => ! empty( $input['show_social'] ) ? 1 : 0,
		'copyright'   => sanitize_text_field( (string) ( $input['copyright'] ?? '' ) ),
	];
}

function novai_sanitize_performance_options( array $input ): array {
	return [
		'enable_reveal' => ! empty( $input['enable_reveal'] ) ? 1 : 0,
		'enable_hover'  => ! empty( $input['enable_hover'] ) ? 1 : 0,
	];
}

function novai_sanitize_integrations_options( array $input ): array {
	return [
		'ga_id'          => sanitize_text_field( (string) ( $input['ga_id'] ?? '' ) ),
		'facebook_pixel' => sanitize_text_field( (string) ( $input['facebook_pixel'] ?? '' ) ),
	];
}
