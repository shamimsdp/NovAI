# Skill: WordPress FSE Block Theme Development

This skill provides expert-level knowledge for building WordPress Full Site
Editing (FSE) block themes with `theme.json` v3, block patterns, style
variations, and native WordPress block markup.

---

## Core Concepts

### WordPress FSE Architecture

- **theme.json** — Single source of truth for all design tokens. Replaces
  `add_theme_support()` calls and `editor-styles`. Version 3 adds `$schema`,
  `settings.appearanceTools`, fluid type, and `useRootPaddingAwareAlignments`.
- **Templates** (`templates/`) — Full-page HTML-comment block markup replacing
  PHP template files. Named per WP template hierarchy: `index.html`,
  `single.html`, `page.html`, `front-page.html`, `archive.html`, `404.html`,
  `search.html`.
- **Template Parts** (`parts/`) — Reusable sections (header, footer) composed
  into templates. Registered in `theme.json` under `templateParts`.
- **Block Patterns** (`patterns/`) — Auto-registered from PHP files with
  docblock headers. WordPress 6.0+ scans this directory automatically.
- **Style Variations** (`styles/`) — JSON files that override `theme.json`
  palette and styles. Referenced in Site Editor "Styles" panel.

### theme.json v3 Schema

```json
{
    "$schema": "https://schemas.wp.org/trunk/theme.json",
    "version": 3,
    "settings": {
        "appearanceTools": true,
        "useRootPaddingAwareAlignments": true,
        "color": {
            "custom": false,
            "defaultPalette": false,
            "palette": [
                { "slug": "primary", "color": "#hexvalue", "name": "Primary" }
            ]
        },
        "typography": {
            "fluid": true,
            "fontFamilies": [
                {
                    "slug": "inter",
                    "name": "Inter",
                    "fontFamily": "Inter, system-ui, sans-serif",
                    "fontFace": [
                        {
                            "fontFamily": "Inter",
                            "fontWeight": "400",
                            "fontStyle": "normal",
                            "src": [
                                "file:./assets/fonts/inter/inter-400.woff2"
                            ],
                            "fontDisplay": "swap"
                        }
                    ]
                }
            ],
            "fontSizes": [
                {
                    "slug": "base",
                    "name": "Base",
                    "size": "1rem",
                    "fluid": { "min": "0.9375rem", "max": "1rem" }
                }
            ]
        },
        "spacing": {
            "spacingSizes": [
                { "slug": "sm", "size": "1rem", "name": "Small" },
                { "slug": "lg", "size": "3rem", "name": "Large" }
            ]
        }
    },
    "styles": {
        "color": {
            "background": "var:preset|color|primary",
            "text": "var:preset|color|body-text"
        },
        "typography": {
            "fontFamily": "var:preset|font-family|inter",
            "fontSize": "var:preset|font-size|base"
        }
    }
}
```

### Token Reference Patterns

| Context          | Example                            |
| ---------------- | ---------------------------------- |
| JSON attribute   | `"var:preset\|color\|slug"`        |
| CSS `var()`      | `var(--wp--preset--color--slug)`   |
| Spacing in JSON  | `"var:preset\|spacing\|lg"`        |
| Spacing in CSS   | `var(--wp--preset--spacing--lg)`   |
| Font size JSON   | `"var:preset\|font-size\|xl"`      |
| Font family JSON | `"var:preset\|font-family\|inter"` |
| Shadow JSON      | `"var:preset\|shadow\|md"`         |

### Block Pattern File Format

```php
<?php
/**
 * Title: Human Readable Name
 * Slug: theme-slug/pattern-name
 * Categories: theme-category-slug
 * Block Types: core/group
 * Viewport Width: 1280
 * Inserter: true
 */
?>
<!-- wp:group {"align":"full","style":{"color":{"background":"var:preset|color|bg"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background">
  <!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"var:preset|font-size|3xl"}}} -->
  <h2 class="wp-block-heading">Section Heading</h2>
  <!-- /wp:heading -->
</div>
<!-- /wp:group -->
```

Rules:

- No PHP code below the `?>` closing tag
- All colors use `var:preset|color|{slug}` in JSON attributes
- No inline styles with raw hex values
- Self-contained — no dependencies on other patterns

### Registering Block Pattern Categories

```php
// In functions.php or inc/block-patterns.php
function theme_register_pattern_categories(): void {
    $categories = [
        'theme-heroes'    => __( 'Heroes',    'textdomain' ),
        'theme-features'  => __( 'Features',  'textdomain' ),
    ];
    foreach ( $categories as $slug => $label ) {
        register_block_pattern_category( $slug, [ 'label' => $label ] );
    }
}
add_action( 'init', 'theme_register_pattern_categories' );
```

### Self-Hosting Fonts

In `theme.json`, reference local WOFF2 files:

```json
"src": ["file:./assets/fonts/inter/inter-400.woff2"]
```

For performance, add preload links via PHP:

```php
function theme_preload_fonts( string $html ): string {
    $preload  = '<link rel="preload" href="' . get_template_directory_uri();
    $preload .= '/assets/fonts/inter/inter-400.woff2" as="font" ';
    $preload .= 'type="font/woff2" crossorigin="anonymous">' . "\n";
    return $preload . $html;
}
add_filter( 'wp_head', 'theme_preload_fonts', 1 );
```

### Style Variations

A style variation at `styles/dark.json` only needs to override what's different:

```json
{
    "$schema": "https://schemas.wp.org/trunk/theme.json",
    "version": 3,
    "title": "Dark",
    "slug": "dark",
    "settings": {
        "color": {
            "palette": [
                { "slug": "bg", "color": "#0a0a0a", "name": "Background" }
            ]
        }
    },
    "styles": {
        "color": {
            "background": "var:preset|color|bg"
        }
    }
}
```

---

## WordPress.org Compliance Requirements

### Required style.css Header Fields

```css
/*
Theme Name:     My Theme
Theme URI:      https://example.com
Author:         Author Name
Author URI:     https://example.com
Description:    Theme description.
Version:        1.0.0
Requires at least: 6.4
Tested up to:   6.6
Requires PHP:   8.0
License:        GNU General Public License v2 or later
License URI:    https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:    my-theme
Tags:           full-site-editing, block-patterns, custom-colors
*/
```

### Approved WordPress.org Theme Tags (select ≤ 5)

`full-site-editing`, `block-patterns`, `custom-colors`, `custom-fonts`,
`custom-logo`, `custom-menu`, `featured-images`, `footer-widgets`,
`one-column`, `two-columns`, `three-columns`, `wide-blocks`, `blog`,
`portfolio`, `e-commerce`, `technology`, `entertainment`, `holiday`

### Security Escaping

```php
// Output
echo esc_html( $value );
echo esc_attr( $value );
echo esc_url( $url );
echo wp_kses_post( $html );
echo esc_html__( 'string', 'textdomain' );

// Input sanitization (system boundaries only)
$value = sanitize_text_field( $_POST['key'] );
$id    = absint( $_GET['id'] );
```

---

## Performance Best Practices for FSE Themes

1. **No render-blocking assets** — enqueue CSS with `media="print"` trick or
   inline critical CSS. For FSE, `theme.json` styles are inlined automatically.
2. **Defer JS** — use `'strategy' => 'defer'` in `wp_enqueue_script()` args.
3. **Preload WOFF2** — `<link rel="preload" as="font">` in `<head>`.
4. **Disable emoji scripts** — `remove_action('wp_head', 'print_emoji_detection_script', 7)`
5. **Remove query strings** from static assets for proxy caching.
6. **Lazy-load images** — WordPress core adds `loading="lazy"` by default.

---

## Template Hierarchy Quick Reference

| Template file     | Matches                              |
| ----------------- | ------------------------------------ |
| `front-page.html` | Static front page (Reading Settings) |
| `home.html`       | Blog posts index                     |
| `index.html`      | Fallback for all pages               |
| `single.html`     | Single post                          |
| `page.html`       | Static page                          |
| `archive.html`    | Category / tag / date archives       |
| `search.html`     | Search results                       |
| `404.html`        | Not found                            |
| `singular.html`   | Single post or page (fallback)       |
