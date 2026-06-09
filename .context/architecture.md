# Architecture Context

## Stack

| Layer            | Technology                        | Role                                              |
| ---------------- | --------------------------------- | ------------------------------------------------- |
| Theme Engine     | WordPress FSE (Full Site Editing) | Page rendering, template hierarchy                |
| Design Tokens    | `theme.json` v3                   | Colors, typography, spacing, shadows, borders     |
| Block Markup     | WordPress core blocks             | All layout and content composition                |
| Pattern System   | PHP file-header registration      | Auto-registered block patterns                    |
| Style Variations | `/styles/*.json`                  | One-click color palette switches                  |
| Supplemental CSS | `assets/css/custom.css`           | Transitions, pseudo-elements, hover states        |
| Editor CSS       | `assets/css/editor.css`           | Dark editor canvas parity                         |
| Navigation JS    | `assets/js/navigation.js`         | Sticky header + scroll reveal (vanilla, deferred) |
| Fonts            | WOFF2 in `assets/fonts/`          | Self-hosted Inter 400/600 — no Google Fonts       |
| Translations     | `languages/novai.pot`             | i18n baseline                                     |
| PHP Helpers      | `inc/`                            | Performance, font preload, block categories       |

## System Boundaries

- `templates/` — Full-page HTML templates. Each file maps to a WordPress template hierarchy slug (index, single, page, front-page, archive, 404, search). No PHP logic — block markup only.
- `parts/` — Reusable template parts (header, footer). Registered in `theme.json` under `templateParts`. Composable within templates.
- `patterns/` — Block patterns. One PHP file per pattern. WordPress auto-registers them via file header comments. No direct PHP output — file header only, then an HTML comment block.
- `styles/` — Style variation JSON files. Override only `settings.color.palette` and root `styles.color.*`. Must not duplicate all of `theme.json`.
- `assets/` — Static files only (CSS, JS, fonts, images). No PHP.
- `inc/` — PHP-only helper files included by `functions.php`. No markup output.
- `languages/` — `.pot` file and compiled `.po`/`.mo` files for translators.
- `demo/` — Demo XML and setup wizard assets. Not loaded on activation — user-initiated only.

## File Naming Conventions

| Type             | Convention             | Example                               |
| ---------------- | ---------------------- | ------------------------------------- |
| Templates        | WordPress slug         | `front-page.html`                     |
| Template parts   | Descriptive            | `header.html`, `footer.html`          |
| Patterns         | `category-variant.php` | `hero-dark.php`, `pricing-3col.php`   |
| Style variations | `name.json`            | `minimal.json`, `corporate.json`      |
| PHP includes     | `noun.php`             | `performance.php`, `font-preload.php` |

## theme.json v3 Token Architecture

```
settings.color.palette[]         → var(--wp--preset--color--{slug})
settings.typography.fontSizes[]  → var(--wp--preset--font-size--{slug})
settings.spacing.spacingSizes[]  → var(--wp--preset--spacing--{slug})
settings.shadow.presets[]        → var(--wp--preset--shadow--{slug})
settings.typography.fontFamilies[] → var(--wp--preset--font-family--{slug})
```

Custom non-preset variables (set in `styles.css`):

```
--novai-transition: 200ms ease
--novai-border-sm: 1px solid rgba(108,71,255,0.15)
--novai-border-md: 1px solid rgba(108,71,255,0.25)
--novai-border-lg: 1px solid rgba(108,71,255,0.4)
--novai-border-xl: 2px solid rgba(108,71,255,0.6)
```

## Block Pattern Registration

WordPress 6.0+ auto-registers patterns from files in `/patterns/`. Each file must have:

```php
<?php
/**
 * Title: Human-readable name
 * Slug: novai/unique-slug
 * Categories: novai-category-slug
 * Block Types: core/group
 * Viewport Width: 1280
 * Inserter: true
 */
?>
<!-- wp:group ... -->
```

Custom categories are registered in `inc/block-patterns.php` via `register_block_pattern_category()` on `init`.

## Template Part Registration

Template parts used in templates must be registered in `theme.json`:

```json
"templateParts": [
  { "name": "header", "title": "Header", "area": "header" },
  { "name": "footer", "title": "Footer", "area": "footer" }
]
```

## Performance Architecture

1. **Fonts**: WOFF2 files in `assets/fonts/`. Preloaded via `wp_head` with `rel="preload"`. `@font-face` in `theme.json` `settings.typography.fontFamilies`.
2. **CSS**: Single `assets/css/custom.css` enqueued with version hash. No `wp-block-library-theme` (dequeued in `functions.php`).
3. **JS**: `assets/js/navigation.js` loaded with `strategy: defer`. No jQuery.
4. **Images**: `loading="lazy"` on all non-LCP images. LCP image (hero) uses `fetchpriority="high"`.

## Invariants

1. **No PHP in template/parts HTML files** — templates and parts are pure block markup. All PHP belongs in `functions.php` or `inc/`.
2. **No hardcoded hex values in block markup** — always use `var:preset|color|{slug}` or `var(--wp--preset--color--{slug})`.
3. **No external HTTP calls** — no Google Fonts, no CDN scripts, no tracking pixels. All assets self-hosted.
4. **All user-facing strings wrapped in `__()`** — text domain `novai`. No concatenated translation strings.
5. **All output escaped** — `esc_html__()`, `esc_attr()`, `esc_url()`, `wp_kses_post()` at every echo point.
6. **No closing PHP tag** at end of PHP files — WordPress coding standards.
7. **Pattern slugs must be unique** — format `novai/{descriptive-name}`. Collision causes silent override.
