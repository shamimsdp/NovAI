# GitHub Copilot Instructions — NovAI WordPress Block Theme

You are assisting with **NovAI**, a production-grade WordPress Full Site Editing (FSE)
block theme targeting simultaneous submission to **ThemeForest** (premium) and
**WordPress.org** (free). Read all six `.context/` files before making any changes.

---

## Project Identity

| Property    | Value                                                                       |
| ----------- | --------------------------------------------------------------------------- |
| Theme slug  | `novai`                                                                     |
| Text domain | `novai`                                                                     |
| PHP prefix  | `novai_`                                                                    |
| Version     | `1.0.0` (sync across style.css + functions.php + readme.txt + CHANGELOG.md) |
| License     | GPL v2 or later                                                             |
| WP minimum  | 6.4                                                                         |
| PHP minimum | 8.0                                                                         |

---

## Context Files — Read Before Acting

| File                            | Purpose                                          |
| ------------------------------- | ------------------------------------------------ |
| `.context/project-overview.md`  | Goals, templates, feature list, requirements     |
| `.context/architecture.md`      | File boundaries, token system, naming rules      |
| `.context/code-standards.md`    | PHP, JS, CSS, pattern, and a11y rules            |
| `.context/ui-context.md`        | Color tokens, type scale, spacing, shadow system |
| `.context/progress-tracker.md`  | What's done, in-progress, and next up            |
| `.context/ai-workflow-rules.md` | Scoping rules, protected files, compliance rules |

---

## Critical Rules — Always Enforce

### WordPress.org Hard Requirements

- **No external HTTP calls** — all fonts, scripts, and styles must be self-hosted
- **GPL v2+** for all PHP, JS, CSS; OFL-1.1 for fonts (GPL-compatible)
- **Text domain `novai`** on every `__()`, `_e()`, `_x()`, `esc_html__()` call
- **Escape all output** — `esc_html__()`, `esc_attr()`, `esc_url()`, `wp_kses_post()`
- **No obfuscated code** — all files must be human-readable
- **No upsell or locked features** in any submitted file

### ThemeForest Hard Requirements

- `documentation/` HTML docs required
- `demo/content.xml` importable demo content required
- Preview image 590×300 (main) + 590×590 (thumbnail)
- `CHANGELOG.md` and `readme.txt` must stay in sync

### Code Prefixing

- All PHP functions, hooks, filters, classes, constants: prefix `novai_`
- All CSS classes: prefix `.novai-`
- All pattern slugs: prefix `novai/`
- All block pattern category slugs: prefix `novai-`

---

## Architecture at a Glance

```
novai/
├── .context/           ← AI context files (do not ship in release ZIP)
├── .github/            ← Copilot config (do not ship in release ZIP)
├── assets/
│   ├── css/
│   │   ├── custom.css  ← Supplemental CSS only (no design tokens here)
│   │   └── editor.css  ← Block editor dark-mode parity
│   ├── fonts/inter/    ← Self-hosted WOFF2 font files
│   ├── images/         ← screenshot.png + preview images
│   └── js/
│       └── navigation.js ← Vanilla JS only, IIFE-wrapped, deferred
├── demo/               ← Demo XML (ThemeForest requirement)
├── documentation/      ← HTML documentation (ThemeForest requirement — must be named this)
├── inc/
│   ├── block-patterns.php  ← Pattern category registration
│   ├── font-preload.php    ← WOFF2 <link rel="preload"> injection
│   └── performance.php     ← Asset optimisation hooks
├── languages/
│   └── novai.pot       ← i18n template (regenerate with wp i18n make-pot)
├── parts/              ← header.html, footer.html
├── patterns/           ← 28 .php block pattern files (auto-registered)
├── styles/             ← 5 style variation .json files
├── templates/          ← 7 page template .html files
├── functions.php
├── index.php
├── readme.txt
├── style.css
└── theme.json          ← Single source of design truth
```

---

## Design Token System

All design values live in `theme.json`. Reference them correctly:

| Context              | Notation                                |
| -------------------- | --------------------------------------- |
| Block JSON attribute | `"var:preset\|color\|nova-purple"`      |
| CSS                  | `var(--wp--preset--color--nova-purple)` |
| Spacing in JSON      | `"var:preset\|spacing\|lg"`             |
| Font size in JSON    | `"var:preset\|font-size\|xl"`           |

**Never** hardcode hex values, pixel sizes, or font names inside patterns or CSS.

---

## Block Pattern Rules

Every pattern file must follow this exact header format:

```php
<?php
/**
 * Title: Human Readable Name
 * Slug: novai/kebab-case-name
 * Categories: novai-category-slug
 * Block Types: core/group
 * Viewport Width: 1280
 * Inserter: true
 */
?>
<!-- wp:group { ... } -->
```

- Slug must be unique across all 28+ patterns
- Pattern content below `?>` is pure HTML block markup — no PHP echo
- Colors: `"var:preset|color|{slug}"`, never `"#hexvalue"`
- Patterns must be self-contained — no dependencies on other patterns

---

## PHP Standards

```php
<?php
declare(strict_types=1);
// ── No closing ?> tag at end of file
// ── All functions prefixed novai_
// ── Doc blocks on all public functions
// ── PHP 8.0+ syntax permitted
```

- Escape: `esc_html__()` / `esc_attr()` / `esc_url()` / `wp_kses_post()`
- Sanitize input at boundaries: `sanitize_text_field()` / `absint()`
- No `var_dump`, `print_r`, or `error_log` in committed code
- Max ~40 lines per function; single-purpose

---

## JavaScript Standards

```javascript
(function () {
    "use strict";
    // All scripts wrapped in IIFE
    // No jQuery — native DOM APIs only
    // { passive: true } on scroll/touch handlers
    // IntersectionObserver with prefers-reduced-motion check
    // No console.log in production
})();
```

---

## CSS Standards

```css
/* Token-first — no hardcoded hex in CSS */
color: var(--wp--preset--color--nova-purple);

/* BEM-like naming */
.novai-component {
}
.novai-component__element {
}

/* Mobile-first */
/* base styles here */
@media (min-width: 768px) {
    /* tablet+ */
}
@media (min-width: 1024px) {
    /* desktop+ */
}

/* Always include */
@media (prefers-reduced-motion: reduce) {
    /* disable animations */
}
```

---

## Workflow — One Thing at a Time

1. Read `progress-tracker.md` to find the current task
2. Make the smallest verifiable change
3. Do not combine `theme.json` edits with pattern edits in one step
4. After completing a task, update `progress-tracker.md`

### Protected Files — Ask Before Modifying

- `style.css` (version bump needed)
- `theme.json` (slug rename breaks all patterns)
- Any pattern slug that already exists

---

## Accessibility Checklist

- `alt` on all images (`alt=""` for decorative)
- Contrast ≥ 4.5:1 body / 3:1 large text
- `:focus-visible` outline: `2px solid var(--wp--preset--color--nova-purple)`
- All interactive elements keyboard-reachable
- `<main>` landmark in every template
- Skip-to-content link present

---

## Pre-Submission Checklist

```
[ ] Theme Check plugin — zero errors, zero warnings
[ ] Lighthouse all four metrics ≥ 95
[ ] WP_DEBUG=true — zero PHP errors, notices, or warnings
[ ] All 28 patterns insert without validation errors
[ ] All 5 style variations render in Site Editor
[ ] readme.txt version matches style.css version
[ ] screenshot.png — 1200×900 PNG, actual theme design
[ ] Inter WOFF2 files in assets/fonts/inter/
[ ] Demo XML imports cleanly on fresh WordPress install
[ ] documentation/index.html is complete
[ ] CHANGELOG.md and readme.txt changelog match
```

---

## Agents and Skills Available

| Name                            | File                                              | Purpose                                     |
| ------------------------------- | ------------------------------------------------- | ------------------------------------------- |
| `theme-developer`               | `.github/agents/theme-developer.md`               | Build/fix theme files and templates         |
| `pattern-builder`               | `.github/agents/pattern-builder.md`               | Create new block patterns                   |
| `wp-reviewer`                   | `.github/agents/wp-reviewer.md`                   | Review for WP.org + ThemeForest compliance  |
| `wp-block-theme`                | `.github/skills/wp-block-theme.md`                | WordPress FSE block theme knowledge         |
| `novai-patterns`                | `.github/skills/novai-patterns.md`                | NovAI-specific pattern conventions          |
| `ui-ux-pro-max`                 | `.github/skills/ui-ux-pro-max.md`                 | Design excellence, layout, and UX patterns  |
| `wordpress-penetration-testing` | `.github/skills/wordpress-penetration-testing.md` | Security review and escaping/sanitization   |
| `wordpress-plugin-core`         | `.github/skills/wordpress-plugin-core.md`         | WordPress hooks, APIs, and coding standards |

## Context Files Reference

| File                            | Purpose                                         |
| ------------------------------- | ----------------------------------------------- |
| `.context/full-feature-list.md` | Complete feature inventory with ✅/❌/⏳ status |
