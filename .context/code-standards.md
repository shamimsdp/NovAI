# Code Standards

## General

- Follow [WordPress Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/) throughout
- All PHP functions, hooks, filters, classes, and globals prefixed with `novai_`
- Keep functions single-purpose; maximum ~40 lines per function
- Fix root causes — never layer workarounds over broken invariants
- No debug code (`var_dump`, `print_r`, `console.log`) in committed files

## PHP

- **PHP 8.0+ syntax** is permitted (named arguments, match expressions, union types)
- **No closing `?>` tag** at end of PHP files
- **Strict types** — add `declare(strict_types=1)` to new `inc/` files
- **Escape all output**: `esc_html__()`, `esc_attr()`, `esc_url()`, `wp_kses_post()`
- **Sanitize all input**: `sanitize_text_field()`, `absint()`, `wp_kses()` at system boundaries
- **Nonces** on any form or AJAX call (not currently used — note here if added)
- Use WordPress functions over PHP natives where equivalent: `wp_parse_args()` not `array_merge()`
- Arrays: short syntax `[]` not `array()`
- String interpolation: use concatenation or `sprintf()` — not interpolated `"$var"` strings in output
- Doc blocks on all public functions:

```php
/**
 * Short description.
 *
 * @param string $param Description.
 * @return void
 */
```

## theme.json

- All color references use the `var:preset|color|{slug}` notation inside block attributes JSON
- All spacing references use `var:preset|spacing|{slug}`
- No hardcoded hex or pixel values in `theme.json` element/block styles — use preset references
- Style variations in `/styles/` override **only** the values that differ; never repeat the full `theme.json`
- Font sizes must use `fluid: true` with `min` and `max` values for responsive scaling

## Block Patterns (PHP)

- File header format strictly: `Title`, `Slug`, `Categories`, `Block Types`, `Viewport Width`, `Inserter`
- Slug format: `novai/{kebab-case-name}` — unique across the project
- Patterns must be **self-contained**: no assumptions about surrounding context
- No PHP output inside pattern files below the `?>` closing tag — pure HTML comment blocks
- Use `var:preset|color|{slug}` in JSON attributes inside block comments
- Use inline `style=""` only for values that cannot be expressed via theme.json presets

## JavaScript

- Vanilla ES5-compatible JS (IE is dead, but transpilation not set up — be pragmatic)
- IIFE wrapper `(function() { 'use strict'; ... })()` for all scripts
- `'use strict'` always enabled
- No jQuery — use native DOM APIs
- Event listeners: always `{ passive: true }` on scroll/touch handlers
- `IntersectionObserver` with fallback for `prefers-reduced-motion`
- No `console.log` in production code

## CSS (`assets/css/`)

- Token-first: use `var(--wp--preset--color--{slug})` — no hardcoded hex in CSS
- BEM-like class names: `.novai-{component}` or `.novai-{component}__{element}`
- Custom classes prefixed with `novai-` to avoid collision with WordPress core classes
- Never override `.wp-block-*` styles unless absolutely necessary — use wrapper classes
- Specificity: keep it flat (one class selector); avoid `!important` except for accessibility overrides
- Mobile-first: base styles for mobile, `@media (min-width: ...)` for larger screens
- `prefers-reduced-motion` media query on all animations

## Accessibility

- All images require `alt` attribute (empty `alt=""` for decorative images)
- Color contrast: minimum 4.5:1 for body text, 3:1 for large text (WCAG 2.1 AA)
- Focus indicators visible: `outline: 2px solid var(--wp--preset--color--nova-purple)`
- All interactive elements reachable via keyboard
- ARIA labels on icon-only buttons
- `<main>` landmark present in every template
- Skip-to-content link in header

## WordPress.org Compliance Checklist

- [ ] Text domain matches theme folder name: `novai`
- [ ] No calls to external services without disclosure
- [ ] No premium-only features gated behind payment in the free version
- [ ] No admin notices except on legitimate theme-specific events
- [ ] Screenshot dimensions: 1200 × 900 px (PNG)
- [ ] Tags: max 5 from the [approved tag list](https://make.wordpress.org/themes/handbook/review/required/theme-tags/)
- [ ] `readme.txt` follows WordPress.org format with all required fields
- [ ] License and license URI present in `style.css` header
- [ ] All bundled resources (fonts, images) GPL-compatible
- [ ] Theme Check plugin passes with zero errors, zero warnings

## ThemeForest Compliance Checklist

- [ ] All files and folders use lowercase, hyphen-separated names
- [ ] `documentation/` folder with HTML docs
- [ ] Demo content XML in `demo/`
- [ ] Proper file comment headers in all PHP files
- [ ] No encrypted or obfuscated code
- [ ] All PHP errors silenced (error_reporting should never be in theme code)
- [ ] `style.css` header complete with all required fields
- [ ] Preview images at required dimensions (590 × 300 main, 590 × 590 thumbnail)

## File Organization

- `templates/` — WordPress template hierarchy HTML files (no PHP)
- `parts/` — Template part HTML files (no PHP)
- `patterns/` — One PHP file per block pattern (header comment only, then HTML)
- `styles/` — Style variation JSON files (partial theme.json overrides)
- `assets/css/` — Compiled/written CSS only; no Sass or PostCSS at this stage
- `assets/js/` — Vanilla JS; no build step required
- `assets/fonts/` — WOFF2 font files only
- `assets/images/` — Theme images (screenshot, preview, demo images)
- `inc/` — PHP helper files, included by `functions.php`
- `languages/` — `.pot` file and compiled translations
- `demo/` — Demo import XML and importer assets
- `documentation/` — ThemeForest HTML documentation
- `.context/` — AI development context files (not shipped in theme package)
- `.github/` — GitHub CI/CD and Copilot configuration (not shipped in theme package)
