---
applyTo: "**/*.php,**/*.html,**/*.json,**/*.js,**/*.css"
---

# Skill: WordPress Penetration Testing Awareness

This skill documents WordPress-specific security vulnerabilities, attack surfaces,
and defensive coding practices relevant to the NovAI theme. Use this to review
theme code for security issues before ThemeForest and WordPress.org submission.

> **Scope**: This skill covers defensive security awareness for theme development.
> It does NOT assist with offensive exploitation, bypassing security controls,
> or unauthorized testing of live systems.

---

## WordPress Theme Attack Surface

### 1. Cross-Site Scripting (XSS)

**Risk**: Unescaped output in PHP files renders attacker-controlled HTML/JS.

#### Vulnerable Pattern

```php
// NEVER do this — unescaped output
echo $_GET['search'];
echo get_theme_mod('custom_text');
echo $post->post_title;
```

#### Secure Pattern

```php
// Always escape at output time
echo esc_html( get_theme_mod( 'custom_text', '' ) );
echo esc_attr( $post->post_title );
echo wp_kses_post( $allowed_html_content );
echo esc_url( home_url( '/' ) );
```

#### NovAI Checklist

```
[ ] All echo/print statements use esc_html(), esc_attr(), esc_url(), or wp_kses_post()
[ ] get_theme_mod() values always escaped before output
[ ] Pattern files contain no PHP output below ?> (pure block markup only)
[ ] No unescaped URL parameters rendered in templates
```

---

### 2. Cross-Site Request Forgery (CSRF)

**Risk**: Forms/AJAX without nonces allow attackers to trigger actions on behalf of logged-in users.

#### NovAI Context

NovAI v1.0.0 has no forms or AJAX. If added in future versions:

```php
// Form nonce output
wp_nonce_field( 'novai_action_name', 'novai_nonce' );

// Nonce verification before processing
if ( ! isset( $_POST['novai_nonce'] ) ||
     ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['novai_nonce'] ) ), 'novai_action_name' ) ) {
    wp_die( esc_html__( 'Security check failed.', 'novai' ) );
}
```

---

### 3. PHP Object Injection / Arbitrary File Inclusion

**Risk**: Dynamic file includes with user-controlled paths enable RFI/LFI.

#### Vulnerable Pattern

```php
// NEVER do this
include $_GET['template'] . '.php';
require get_theme_mod('custom_file');
```

#### NovAI Pattern (safe)

```php
// NovAI uses static require_once — no dynamic paths
require_once NOVAI_DIR . '/inc/block-patterns.php';
require_once NOVAI_DIR . '/inc/font-preload.php';
require_once NOVAI_DIR . '/inc/performance.php';
```

#### Rule

All `require_once` / `include_once` in NovAI use the `NOVAI_DIR` constant — never a variable or user input.

---

### 4. SQL Injection

**Risk**: Unparameterized database queries allow data extraction or modification.

#### NovAI Context

NovAI v1.0.0 makes no direct database queries. If added:

```php
global $wpdb;

// NEVER concatenate user input into SQL
$results = $wpdb->get_results( "SELECT * FROM {$wpdb->posts} WHERE ID = " . $_GET['id'] );

// ALWAYS use prepare() with placeholders
$results = $wpdb->get_results(
    $wpdb->prepare( "SELECT * FROM {$wpdb->posts} WHERE ID = %d", absint( $_GET['id'] ) )
);
```

---

### 5. Sensitive Information Disclosure

**Risk**: Debug output, error messages, file paths, or version numbers exposed to visitors.

#### NovAI Rules

```php
// Never in committed code
var_dump( $variable );
print_r( $array );
error_log( $debug_info );
// phpinfo();
```

**theme.json**: Never embed API keys, tokens, or credentials.
**readme.txt**: Do not expose internal server paths in changelog entries.

#### WordPress.org Requirement

`WP_DEBUG` must produce zero PHP errors, warnings, or notices with the theme active.

---

### 6. Insecure Direct Object Reference (IDOR)

**Risk**: Accessing private post/media by manipulating IDs without permission checks.

#### NovAI Context

No AJAX endpoints in v1.0.0. If REST API or AJAX added in v1.1+:

```php
// Always check capability before serving private data
add_action( 'wp_ajax_novai_action', 'novai_handle_ajax' );

function novai_handle_ajax(): void {
    // 1. Verify nonce
    check_ajax_referer( 'novai_ajax_nonce', 'nonce' );
    // 2. Check capability
    if ( ! current_user_can( 'edit_posts' ) ) {
        wp_send_json_error( [ 'message' => 'Unauthorized' ], 403 );
    }
    // 3. Sanitize input
    $post_id = absint( $_POST['post_id'] ?? 0 );
    // 4. Process...
}
```

---

### 7. Open Redirect

**Risk**: Redirecting to user-supplied URLs enables phishing.

```php
// Vulnerable
wp_redirect( $_GET['redirect_to'] );

// Safe — validate against allowed origins
$redirect = wp_sanitize_redirect( wp_unslash( $_GET['redirect_to'] ?? '' ) );
if ( wp_validate_redirect( $redirect, home_url() ) ) {
    wp_redirect( $redirect );
    exit;
}
```

---

### 8. Content Security Policy (CSP) Considerations

NovAI is CSP-friendly by design:

- **No inline scripts** except IIFE in `navigation.js` (enqueued, not inline)
- **No `eval()`** in JavaScript
- **No external script sources** — all assets self-hosted
- **No `javascript:` hrefs** in patterns or templates

If a hosting environment adds a strict CSP header, NovAI should work without `unsafe-inline` or `unsafe-eval`.

---

### 9. Dependency Security

**Current dependencies**: None (zero npm packages on the front-end; `headroom-ai` is dev-only).

#### Rules

- Never enqueue a script from an external CDN
- Never use `add_action('wp_head', ...)` to inject `<script>` tags from user-controlled sources
- Before adding any npm dependency to the build pipeline, check it against:
    - `npm audit`
    - [Snyk Advisor](https://snyk.io/advisor/)

---

### 10. WordPress.org Security Review Checklist

WordPress.org reviewers specifically check for these:

```
[ ] All data output escaped (esc_html, esc_attr, esc_url, wp_kses_post)
[ ] All user input sanitized at system boundaries (sanitize_text_field, absint)
[ ] No PHP short tags (<? instead of <?php)
[ ] No extract() calls on $_POST, $_GET, or $_REQUEST
[ ] No eval() anywhere
[ ] No base64_decode() on dynamic data
[ ] No remote file execution (include from URL)
[ ] Nonces on all form/AJAX actions (n/a for v1.0.0 — no forms)
[ ] No hardcoded credentials or API keys
[ ] file_get_contents() never used with user-supplied paths
[ ] No use of create_function() (deprecated, removed in PHP 8.0)
[ ] No calls to register_globals or global $_REQUEST without sanitization
```

---

### 11. Third-Party Plugin Interaction Risks

When NovAI renders content from plugins (WooCommerce, Contact Form 7 etc.):

- Always use `do_shortcode()` output through `wp_kses_post()` if echoing
- Never trust plugin output as safe HTML — treat it as untrusted input
- Template overrides (`woocommerce/` folder) must follow the same escaping rules as theme PHP

---

### 12. ThemeForest Security Requirements

ThemeForest reviewers flag these as hard failures:

```
[ ] No obfuscated PHP (no base64 blobs, no eval of encoded strings)
[ ] No backdoors (no hidden admin user creation, no remote execution shells)
[ ] No license enforcement via external API calls that phone home
[ ] No encrypted/compiled PHP (ionCube, Zend Guard not allowed)
[ ] All passwords and credentials are user-supplied, never hardcoded
```
