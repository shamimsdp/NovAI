# Changelog

All notable changes to NovAI are documented here.  
Format follows [Keep a Changelog](https://keepachangelog.com/en/1.0.0/).  
Versioning follows [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

---

## [Unreleased]

### Planned

- WooCommerce template overrides (`templates/woocommerce/`)
- Three custom page templates (blank, page-no-header, single-sidebar)
- Demo content XML (`demo/content.xml`)
- ThemeForest HTML documentation (`documentation/`)
- Self-hosted Inter WOFF2 font files (`assets/fonts/`)
- Theme screenshot at 1200×900 (`assets/images/screenshot.png`)
- Orbit and Forge starter template homepage variants

---

## [1.0.0] — 2026-06-09

### Added

#### Core Theme Files

- `style.css` — Theme header with all required WordPress metadata
- `functions.php` — Theme setup, asset enqueuing, pattern categories, font preloading
- `index.php` — Fallback template with silent redirect
- `readme.txt` — WordPress.org-format documentation
- `theme.json` v3 — Complete design token system

#### Design Token System (`theme.json`)

- 16-color palette: nova-purple, stellar-violet, orbit-blue, deep-space, nebula, cloud-white, surface-dark, text-muted, text-secondary, white, black, forge-amber, success, danger, warning, border-subtle
- 5 gradient presets: nova-gradient, hero-gradient, orbit-gradient, forge-gradient, subtle-gradient
- 2 font families: Inter (self-hosted), system-mono
- 9 fluid font sizes: xs through 5xl (using `clamp()`)
- 7 spacing sizes: xs through 3xl
- 4 shadow presets: card, card-hover, glow-purple, glow-blue
- Full element styles for h1-h6, links, buttons
- Custom CSS variables: `--novai-transition`, `--novai-border-sm/md/lg/xl`

#### Templates (7)

- `index.html` — Blog index with post loop
- `single.html` — Single post with sidebar-free layout
- `page.html` — Static page
- `front-page.html` — Homepage (pattern-driven, full-width)
- `archive.html` — Category, tag, and date archives
- `404.html` — Not found with search and navigation
- `search.html` — Search results

#### Template Parts (2)

- `header.html` — Sticky dark navigation, backdrop-blur, site logo, dual CTAs
- `footer.html` — 4-column footer (brand, Product, Templates, Support nav, newsletter)

#### Block Patterns (28)

**Navigation (3)**

- `nav-dark.php` — Dark sticky nav with logo and CTA buttons
- `nav-light.php` — Light navigation with translucent background
- `nav-minimal.php` — Minimal centered navigation

**Heroes (4)**

- `hero-dark.php` — Full-width dark hero with badge, headline, dual CTAs, browser mockup
- `hero-split.php` — 2-column hero: copy left, product screenshot right
- `hero-light.php` — Light/lavender hero for corporate style
- `hero-code.php` — Developer hero with animated terminal code block

**Features (4)**

- `features-3col.php` — Classic 3-column feature card grid
- `features-alt.php` — Alternating image/text feature rows
- `features-stats.php` — Feature list with inline metrics
- `features-bento.php` — Bento grid with varying card sizes

**Social Proof (4)**

- `logos.php` — Customer logo bar (grayscale strip)
- `testimonials-3col.php` — Three testimonial cards with avatars and ratings
- `testimonial-featured.php` — Single large featured testimonial with photo
- `stats-bar.php` — 4-column stats/metrics bar

**Pricing & CTA (5)**

- `pricing-3col.php` — Three pricing tiers with feature comparison
- `pricing-2col.php` — Two-column comparison table (NovAI vs. competitors)
- `cta-dark.php` — Dark full-width call-to-action section
- `cta-light.php` — Light gradient CTA with email capture
- `waitlist.php` — Early-access waitlist form with social proof counter

**Content (6)**

- `how-steps.php` — Numbered 3-step how-it-works section
- `faq.php` — Accordion FAQ using core/details blocks
- `code-block.php` — Syntax-highlighted code display with window chrome
- `changelog.php` — Product changelog with version badges
- `team.php` — Team member grid with roles and social links
- `integrations.php` — Integration/partner logo grid with descriptions

**Footer (2)**

- `footer-dark.php` — Full 4-column dark footer with newsletter signup
- `footer-minimal.php` — Single-row minimal footer for Forge/developer template

#### Style Variations (5)

- `styles/dark.json` — Default deep space (flagship NovAI palette)
- `styles/minimal.json` — Light mode with lavender-white background
- `styles/vibrant.json` — Gradient background for bold presentations
- `styles/corporate.json` — Professional white with muted corporate colors
- `styles/gradient.json` — Dark with radial glow overlays

#### Assets

- `assets/css/custom.css` — Supplemental CSS: transitions, hover states, FAQ chevrons, sticky header, scroll reveal, focus-visible, print, scrollbar styles
- `assets/css/editor.css` — Block editor dark background parity
- `assets/js/navigation.js` — Sticky header scroll class + IntersectionObserver scroll reveal

#### Developer Experience

- `.context/` — Six-File Context Methodology documentation
- `README.md` — Full project documentation
- `CHANGELOG.md` — This file
- `LICENSE` — GPL v2 full text
- `.gitignore` — Standard WordPress theme ignores
- `.github/copilot-instructions.md` — GitHub Copilot repository instructions
- `.github/prompts/` — AI agent prompt files for pattern building, submission checking, style variation creation, accessibility audit
- `.vscode/settings.json` — VS Code workspace settings
- `.vscode/extensions.json` — Recommended VS Code extensions
- `inc/performance.php` — Performance optimisation hooks
- `inc/font-preload.php` — WOFF2 font preload link injection
- `inc/block-patterns.php` — Block pattern category registration
- `languages/novai.pot` — Translation template

---

[Unreleased]: https://github.com/your-org/novai/compare/v1.0.0...HEAD
[1.0.0]: https://github.com/your-org/novai/releases/tag/v1.0.0
