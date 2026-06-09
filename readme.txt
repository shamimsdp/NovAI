=== NovAI ===
Contributors: novai
Tags: full-site-editing, block-patterns, custom-colors, custom-fonts, wide-blocks
Requires at least: 6.4
Tested up to: 6.6
Requires PHP: 8.0
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A lightning-fast FSE block theme with three niche starter templates — NovAI (AI tools), Orbit (SaaS), and Forge (developer tools). 28 patterns, 5 style variations, Lighthouse 95+.

== Description ==

NovAI is a Full Site Editing (FSE) WordPress block theme built for founders launching AI startups, SaaS products, and developer-first companies.

It ships with three complete starter templates (NovAI, Orbit, Forge), 28 reusable block patterns across 7 categories, 5 style variations, and a theme.json v3 design token system with 16 colors, 9 fluid type sizes, 7 spacing sizes, and 4 shadow presets.

= Key Features =

* **Three niche starter templates** — NovAI (AI tools) · Orbit (SaaS analytics) · Forge (developer tools)
* **28 block patterns** across 7 categories: Navigation, Heroes, Features, Social Proof, Pricing & CTA, Content, Footers
* **5 style variations** — Dark · Minimal · Vibrant · Corporate · Gradient
* **theme.json v3** with full design token mapping (colors, type scale, spacing, shadows)
* **Self-hosted Inter font** — no Google Fonts, no CDN, GDPR-compliant
* **Lighthouse 95+** on all four metrics (Performance, Accessibility, Best Practices, SEO)
* **WCAG 2.1 AA** — skip links, focus states, landmark regions, proper heading order
* **Translation ready** — `.pot` file included, text domain: `novai`
* **Mobile-first** — fluid type scale via CSS `clamp()`, responsive column patterns
* **WooCommerce compatible** (full template overrides planned for v1.1)
* **No jQuery** — vanilla JavaScript only, deferred and IIFE-wrapped
* **GPL v2 licensed** — 100% open source, no locked features

= Starter Templates =

**NovAI — AI Tooling**
Dark-first design for AI product launches. Deep Space background (#0D0B1A), Nova Purple accent (#6C47FF). Includes terminal-style hero, feature bento grid, 3-column pricing, FAQ accordion, and full-width CTA.

**Orbit — SaaS Analytics**
Dark Navy aesthetic for SaaS companies. Navy background (#03111F), Sky Blue accent (#38BDF8). Data-display layouts, statistics bar, feature comparisons, logo grid, and waitlist CTA.

**Forge — Developer Tools**
Monospace-driven aesthetic for API and CLI products. True Black background (#0F0F0F), Amber accent (#EAB308). Code blocks, terminal mockups, changelog pattern, and integration grid.

= Pattern Library =

All 28 patterns are available in Appearance → Editor → Patterns or via the block inserter.

Navigation (3): nav-dark, nav-light, nav-minimal
Heroes (4): hero-dark, hero-split, hero-light, hero-code
Features (4): features-3col, features-alt, features-bento, features-stats
Social Proof (4): logos, testimonials-3col, testimonial-featured, team
Pricing & CTA (5): pricing-3col, pricing-2col, cta-dark, cta-light, waitlist
Content (6): how-steps, faq, code-block, changelog, integrations, stats-bar
Footer & Misc (3): footer-dark, footer-minimal, banner

= Style Variations =

Switch the complete color scheme in one click via Appearance → Editor → Styles → Browse Styles.

Dark (default): Deep Space background, Nova Purple accent — flagship NovAI look
Minimal: Lavender White background, clean light mode
Vibrant: Purple-to-blue gradient, bold hero
Corporate: Clean white background, professional tone
Gradient: Dark background with radial glow overlays

== Installation ==

= From WordPress Dashboard =

1. Go to Appearance → Themes → Add New.
2. Click Upload Theme and select the novai.zip file.
3. Click Install Now, then Activate.
4. Go to Appearance → Editor to start customizing with block patterns and style variations.

= From WP-CLI =

    wp theme install novai.zip --activate

= Manual Upload =

1. Extract novai.zip into /wp-content/themes/novai/
2. Go to Appearance → Themes and click Activate next to NovAI.

= Import Demo Content (optional) =

1. Install and activate the WP All Import plugin.
2. Go to All Import → New Import.
3. Upload demo/content.xml from the theme package.
4. Follow the import wizard.
5. Set the front page under Settings → Reading → Your homepage displays → A static page.

== Frequently Asked Questions ==

= Does NovAI require the block editor? =

Yes. NovAI is a Full Site Editing (FSE) block theme and requires WordPress 6.4 or later with the block editor enabled. It is not compatible with the Classic Editor plugin.

= Does it work with WooCommerce? =

NovAI is WooCommerce-compatible for basic store functionality. Full template overrides (shop, product, cart, checkout) are planned for v1.1.

= Are the fonts GDPR-compliant? =

Yes. NovAI bundles the Inter font as WOFF2 files in assets/fonts/inter/. No requests are made to Google Fonts, any CDN, or any external server. All assets are 100% self-hosted.

= Can I switch between the three starter templates? =

Yes. Each starter template corresponds to a style variation. Go to Appearance → Editor → Styles → Browse Styles to switch the complete color scheme in one click. Individual patterns can be mixed freely between templates.

= How do I customise colors and fonts? =

Use the Global Styles panel in the Site Editor (Appearance → Editor → Styles → Edit Styles). All colors, font sizes, and spacing are controllable without writing any CSS.

= Can I add a child theme? =

Yes. Create a folder novai-child/ in /wp-content/themes/ with a style.css declaring Template: novai. Standard WordPress child theme rules apply.

= How do I update the theme? =

For ThemeForest purchases, download the latest version and install via Appearance → Themes → Upload Theme. For WordPress.org, use the standard automatic update mechanism when available.

= How do I translate NovAI? =

Use languages/novai.pot as the translation base. Create .po and .mo files with Poedit or WP-CLI: wp i18n make-mo languages/

= The block editor shows validation errors on my patterns =

This usually means a block was added or updated in a WordPress version newer than the pattern was written for. Use the "Attempt Block Recovery" option in the editor, or report the issue via the support forum.

== Screenshots ==

1. Front page using the NovAI (Dark) template — hero, features, pricing
2. Style Variations panel — all five schemes
3. Block pattern inserter showing all 7 categories
4. Orbit template — SaaS analytics layout
5. Forge template — developer tools layout
6. Site Editor — Global Styles panel

== Changelog ==

= 1.0.0 =
* Initial release.
* Three starter templates: NovAI, Orbit, Forge.
* 28 block patterns across 7 categories.
* 5 style variations: Dark, Minimal, Vibrant, Corporate, Gradient.
* theme.json v3 design token system: 16 colors, 9 fluid type sizes, 7 spacing sizes, 4 shadows.
* Self-hosted Inter font (400 Regular, 600 SemiBold — WOFF2).
* Lighthouse 95+ baseline on all four metrics.
* WCAG 2.1 AA accessibility: skip links, focus states, landmark regions.
* Supplemental CSS for transitions, hover states, and reduced motion.
* Vanilla JS sticky header and scroll reveal (no jQuery).
* Translation-ready with languages/novai.pot.
* wp-env local development environment pre-configured.
* GitHub Copilot agents and skills pre-configured.

== Upgrade Notice ==

= 1.0.0 =
Initial release — no upgrade path needed.

== Copyright ==

NovAI WordPress Theme, Copyright 2026 NovAI
NovAI is distributed under the terms of the GNU General Public License v2 or later.
https://www.gnu.org/licenses/gpl-2.0.html

Inter Font, Copyright 2020 The Inter Project Authors
Licensed under the SIL Open Font License, Version 1.1 (GPL-compatible).
Source: https://rsms.me/inter/
Font license: https://github.com/rsms/inter/blob/master/LICENSE.txt

Tabler Icons, Copyright 2020 Paweł Kuna
Licensed under the MIT License.
Source: https://tabler-icons.io/
