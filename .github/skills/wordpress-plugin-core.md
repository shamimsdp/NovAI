---
applyTo: "**/*.php,functions.php,inc/**"
---

# Skill: WordPress Plugin Core APIs

This skill covers the WordPress plugin/theme API surface most relevant to NovAI:
hooks, filters, settings API, block registration, REST API, and the patterns used
to extend WordPress cleanly without coupling to global state.

> Although NovAI is a theme (not a plugin), it uses the same WordPress API layer.
> This skill documents the APIs used in `functions.php`, `inc/`, and patterns.

---

## Hook System

### Actions vs Filters

| Type   | Purpose                              | Returns        | Example hook         |
| ------ | ------------------------------------ | -------------- | -------------------- |
| Action | Run side effects (output, DB writes) | Nothing        | `wp_enqueue_scripts` |
| Filter | Transform and return a value         | Modified value | `the_content`        |

```php
// Action — side effect only, return value ignored
add_action( 'wp_head', 'novai_preload_fonts', 1 );

// Filter — MUST return the value
add_filter( 'script_loader_src', 'novai_remove_query_strings' );
function novai_remove_query_strings( string $src ): string {
    return str_contains( $src, '?ver=' ) ? remove_query_arg( 'ver', $src ) : $src;
}
```

### Hook Priority

- Default priority: `10`
- Lower number = runs earlier
- Same priority = runs in registration order
- NovAI font preload uses priority `1` to appear before stylesheets in `<head>`

### Removing Core Hooks (NovAI `performance.php` pattern)

```php
// Remove must happen at or before the hook fires, and match exact callback
remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); // priority must match
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );   // default priority 10
```

---

## Theme Setup API

### `after_setup_theme` — Correct Hook for `add_theme_support()`

```php
add_action( 'after_setup_theme', 'novai_setup' );
function novai_setup(): void {
    load_theme_textdomain( 'novai', get_template_directory() . '/languages' );
    add_theme_support( 'wp-block-styles' );       // Load block.json styles
    add_theme_support( 'align-wide' );             // Enable alignwide/alignfull
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-styles' );
    add_editor_style( 'assets/css/editor.css' );   // Editor CSS
    add_theme_support( 'html5', [
        'search-form', 'comment-form', 'comment-list',
        'gallery', 'caption', 'style', 'script',
    ] );
}
```

### `wp_enqueue_scripts` — Enqueue Front-End Assets

```php
add_action( 'wp_enqueue_scripts', 'novai_enqueue_assets' );
function novai_enqueue_assets(): void {
    wp_enqueue_style(
        'novai-style',
        get_template_directory_uri() . '/assets/css/custom.css',
        [],            // no dependencies
        NOVAI_VERSION
    );
    wp_enqueue_script(
        'novai-navigation',
        get_template_directory_uri() . '/assets/js/navigation.js',
        [],
        NOVAI_VERSION,
        [ 'strategy' => 'defer', 'in_footer' => true ]
    );
}
```

---

## Block Pattern API

### Auto-Registration (WordPress 6.0+)

WordPress scans `patterns/*.php` automatically. File header drives registration:

```php
<?php
/**
 * Title: Hero Dark
 * Slug: novai/hero-dark
 * Categories: novai-heroes
 * Block Types: core/group
 * Viewport Width: 1280
 * Inserter: true
 */
?>
<!-- wp:group ... -->
```

### Manual Registration (Fallback)

```php
register_block_pattern(
    'novai/hero-dark',
    [
        'title'      => __( 'Hero Dark', 'novai' ),
        'content'    => '<!-- wp:group ... -->',
        'categories' => [ 'novai-heroes' ],
    ]
);
```

### Pattern Category Registration

```php
add_action( 'init', 'novai_register_pattern_categories' );
function novai_register_pattern_categories(): void {
    register_block_pattern_category(
        'novai-heroes',
        [ 'label' => __( 'NovAI — Heroes', 'novai' ) ]
    );
}
```

---

## Block Registration API

### `register_block_type()` — For Custom Blocks (v1.1+ scope)

```php
// In a plugin or in functions.php
add_action( 'init', 'novai_register_blocks' );
function novai_register_blocks(): void {
    register_block_type( __DIR__ . '/blocks/my-block/block.json' );
}
```

### `block.json` Minimum Structure

```json
{
    "$schema": "https://schemas.wp.org/trunk/block.json",
    "apiVersion": 3,
    "name": "novai/my-block",
    "title": "My Block",
    "category": "theme",
    "textdomain": "novai",
    "editorScript": "file:./index.js",
    "style": "file:./style.css"
}
```

---

## Template Parts API

### Registering Template Parts in `theme.json`

```json
"templateParts": [
  {
    "name": "header",
    "title": "Header",
    "area": "header"
  },
  {
    "name": "footer",
    "title": "Footer",
    "area": "footer"
  }
]
```

### Using in Templates

```html
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->
<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
```

---

## Options / Theme Mods API

NovAI v1.0 does not expose a Theme Customizer (Customizer API is deprecated in FSE).
If options are needed, use Settings API in a plugin, or `theme.json` global styles.

### Reading Theme Mods (if used in future)

```php
// Always provide a default; always escape output
$value = get_theme_mod( 'novai_option_name', 'default_value' );
echo esc_html( $value );
```

---

## Internationalization (i18n) API

### Translatable Strings

```php
// Standard string
__( 'Text', 'novai' )

// Echoed string
_e( 'Text', 'novai' )

// With context (disambiguates identical strings)
_x( 'Post', 'noun: a blog entry', 'novai' )

// With placeholder
sprintf( __( 'Welcome, %s', 'novai' ), esc_html( $name ) )

// Plural forms
sprintf(
    /* translators: %d: number of patterns */
    _n( '%d pattern', '%d patterns', $count, 'novai' ),
    number_format_i18n( $count )
)
```

### Loading Text Domain

```php
// In after_setup_theme — must fire before any __() call
load_theme_textdomain( 'novai', get_template_directory() . '/languages' );
```

### Generating POT File

```bash
wp i18n make-pot . languages/novai.pot --domain=novai --exclude=node_modules,vendor
```

---

## Asset Versioning

```php
// Use NOVAI_VERSION constant — bump on every release
define( 'NOVAI_VERSION', '1.0.0' );

// Or use file modification time for cache-busting during dev
$ver = defined('WP_DEBUG') && WP_DEBUG
    ? filemtime( get_template_directory() . '/assets/css/custom.css' )
    : NOVAI_VERSION;
wp_enqueue_style( 'novai-style', NOVAI_URI . '/assets/css/custom.css', [], $ver );
```

---

## REST API (Future: v1.1+)

If REST endpoints are added (e.g., for a block or widget):

```php
add_action( 'rest_api_init', 'novai_register_rest_routes' );
function novai_register_rest_routes(): void {
    register_rest_route(
        'novai/v1',
        '/data',
        [
            'methods'             => 'GET',
            'callback'            => 'novai_rest_get_data',
            'permission_callback' => '__return_true', // public endpoint
            'args'                => [
                'id' => [
                    'validate_callback' => fn( $v ) => is_numeric( $v ),
                    'sanitize_callback' => 'absint',
                    'required'          => true,
                ],
            ],
        ]
    );
}
```

Rules:

- `permission_callback` must never be omitted (WordPress 5.5+ warns; 6.0+ enforces)
- `sanitize_callback` required on all args
- Validate input types before database queries

---

## Transients API (Caching)

For any computed/remote data fetched in PHP:

```php
function novai_get_cached_data(): array {
    $cached = get_transient( 'novai_data_key' );
    if ( false !== $cached ) {
        return $cached;
    }

    $data = [ /* ... compute expensive data ... */ ];
    set_transient( 'novai_data_key', $data, HOUR_IN_SECONDS );
    return $data;
}
```

Time constants: `MINUTE_IN_SECONDS`, `HOUR_IN_SECONDS`, `DAY_IN_SECONDS`, `WEEK_IN_SECONDS`

---

## WordPress Coding Standards Quick Reference

| Standard              | Rule                                                    |
| --------------------- | ------------------------------------------------------- |
| Indentation           | Tabs (not spaces) in PHP files                          |
| Braces                | Opening brace on same line for functions and classes    |
| Yoda conditions       | `if ( 'value' === $var )` — constant on left            |
| Spacing in conditions | `if ( $x )` not `if($x)` — space after keyword          |
| Array syntax          | `[]` short syntax, not `array()`                        |
| Trailing commas       | Required on multi-line arrays                           |
| Return types          | Declare `: void`, `: string`, `: array` etc. (PHP 8.0+) |
| Strict types          | `declare(strict_types=1)` in all `inc/` files           |
| No closing tag        | No `?>` at end of PHP files                             |
| Ternary               | `$x = ( $condition ) ? $a : $b` — spaces around `?:`    |

---

## Common WordPress APIs Quick Reference

| Task                      | API                                              |
| ------------------------- | ------------------------------------------------ |
| Get theme directory path  | `get_template_directory()`                       |
| Get theme directory URL   | `get_template_directory_uri()`                   |
| Get child theme path      | `get_stylesheet_directory()`                     |
| Sanitize free text input  | `sanitize_text_field()`                          |
| Sanitize integer input    | `absint()`                                       |
| Sanitize URL input        | `esc_url_raw()` (storage) / `esc_url()` (output) |
| Sanitize HTML content     | `wp_kses_post()` / `wp_kses()`                   |
| Escape for HTML output    | `esc_html()`                                     |
| Escape for HTML attribute | `esc_attr()`                                     |
| Escape for JS output      | `esc_js()`                                       |
| Check user capability     | `current_user_can( 'edit_posts' )`               |
| Verify nonce              | `wp_verify_nonce( $nonce, 'action' )`            |
| Create nonce              | `wp_create_nonce( 'action' )`                    |
| Safe redirect             | `wp_safe_redirect( $url )`                       |
| Parse URL                 | `wp_parse_url()`                                 |
| Format number for locale  | `number_format_i18n( $number )`                  |
