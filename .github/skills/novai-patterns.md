# Skill: NovAI Pattern Conventions

This skill documents NovAI-specific conventions, token references, and
patterns for building block patterns in the NovAI theme. Read this before
creating or editing any `patterns/*.php` file.

---

## NovAI Color System

All patterns must use these slugs. Never hardcode hex values.

### Primary Palette (NovAI Dark Template)

| Slug             | Hex       | Role                               |
| ---------------- | --------- | ---------------------------------- |
| `deep-space`     | `#0D0B1A` | Page background                    |
| `nebula`         | `#1E1A38` | Card / surface background          |
| `surface-dark`   | `#2A2550` | Raised surface, hover states       |
| `nova-purple`    | `#6C47FF` | Primary CTA, links, focus rings    |
| `stellar-violet` | `#A78BFA` | Hover accent, icon fills           |
| `orbit-blue`     | `#38BDF8` | Secondary accent, highlights       |
| `cloud-white`    | `#F7F6FE` | Body text, headings on dark        |
| `text-secondary` | `#C5BEE8` | Subtitles, metadata                |
| `text-muted`     | `#8B83C4` | Captions, footnotes                |
| `white`          | `#FFFFFF` | Override white on colored surfaces |

### Orbit Template Palette (apply in `styles/dark.json` override context)

| Slug         | Hex       | Role                 |
| ------------ | --------- | -------------------- |
| `orbit-dark` | `#03111F` | Orbit bg             |
| `orbit-blue` | `#38BDF8` | Orbit primary accent |

### Forge Template Palette

| Slug          | Hex       | Role         |
| ------------- | --------- | ------------ |
| `forge-dark`  | `#0F0F0F` | Forge bg     |
| `forge-amber` | `#EAB308` | Forge accent |

### Status Colors

| Slug      | Hex       | Usage          |
| --------- | --------- | -------------- |
| `success` | `#34D399` | Success states |
| `danger`  | `#EF4444` | Error states   |
| `warning` | `#F59E0B` | Warning badges |

---

## Spacing Scale

| Slug  | px  | rem | Typical use                       |
| ----- | --- | --- | --------------------------------- |
| `xs`  | 8   | 0.5 | Inner padding on tight components |
| `sm`  | 16  | 1   | Component internal padding        |
| `md`  | 24  | 1.5 | Gap between related elements      |
| `lg`  | 48  | 3   | Section sub-gap                   |
| `xl`  | 64  | 4   | Small section vertical padding    |
| `2xl` | 96  | 6   | Standard section padding          |
| `3xl` | 128 | 8   | Hero / large section padding      |

In JSON attributes:

```json
"style": { "spacing": { "padding": { "top": "var:preset|spacing|2xl", "bottom": "var:preset|spacing|2xl" } } }
```

---

## Typography Scale

| Slug   | Min  | Max  | Use                     |
| ------ | ---- | ---- | ----------------------- |
| `xs`   | 11px | 12px | Labels, legal, captions |
| `sm`   | 13px | 14px | Meta, small body        |
| `base` | 15px | 16px | Body text               |
| `md`   | 17px | 18px | Lead paragraph          |
| `lg`   | 19px | 22px | Subheadings             |
| `xl`   | 24px | 28px | Section headings (H3)   |
| `2xl`  | 30px | 36px | Page headings (H2)      |
| `3xl`  | 40px | 52px | Hero heading (H1)       |
| `4xl`  | 52px | 72px | Display text            |
| `5xl`  | 64px | 96px | Oversized display       |

In JSON attributes:

```json
"style": { "typography": { "fontSize": "var:preset|font-size|3xl" } }
```

---

## Pattern Category Map

| PHP slug             | Display label         | Files                                                       |
| -------------------- | --------------------- | ----------------------------------------------------------- |
| `novai-navigation`   | NovAI — Navigation    | nav-\*.php                                                  |
| `novai-heroes`       | NovAI — Heroes        | hero-\*.php                                                 |
| `novai-features`     | NovAI — Features      | features-\*.php                                             |
| `novai-social-proof` | NovAI — Social Proof  | logos.php, testimonial\*, team, stats-bar                   |
| `novai-pricing`      | NovAI — Pricing & CTA | pricing-_.php, cta-_.php, waitlist.php                      |
| `novai-content`      | NovAI — Content       | how-steps, faq, code-block, changelog, integrations, banner |
| `novai-footer`       | NovAI — Footer & Misc | footer-\*.php                                               |

---

## Canonical Pattern Structures

### Full-Width Section (standard)

```html
<!-- wp:group {"align":"full","style":{"color":{"background":"var:preset|color|deep-space"},"spacing":{"padding":{"top":"var:preset|spacing|2xl","bottom":"var:preset|spacing|2xl"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">
    <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|md","left":"var:preset|spacing|md"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
    <div class="wp-block-group">
        <!-- section content here -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
```

### Section Header (headline + subtext)

```html
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|sm"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group">
    <!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"var:preset|font-size|3xl","fontWeight":"700"},"color":{"text":"var:preset|color|cloud-white"}}} -->
    <h2 class="wp-block-heading has-text-align-center">Section Title</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|md"},"color":{"text":"var:preset|color|text-secondary"}}} -->
    <p class="has-text-align-center">
        Supporting subtitle or description text.
    </p>
    <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```

### 3-Column Feature Grid

```html
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|lg","left":"var:preset|spacing|lg"}}}} -->
<div class="wp-block-columns alignwide">
    <!-- wp:column -->
    <div class="wp-block-column">
        <!-- card content -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column -->
    <div class="wp-block-column">
        <!-- card content -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column -->
    <div class="wp-block-column">
        <!-- card content -->
    </div>
    <!-- /wp:column -->
</div>
<!-- /wp:columns -->
```

### Card / Feature Block

```html
<!-- wp:group {"style":{"color":{"background":"var:preset|color|nebula"},"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|lg","right":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg","left":"var:preset|spacing|lg"},"blockGap":"var:preset|spacing|sm"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div
    class="wp-block-group has-nebula-background-color has-background"
    style="border-radius:12px"
>
    <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|xl","fontWeight":"600"},"color":{"text":"var:preset|color|cloud-white"}}} -->
    <h3 class="wp-block-heading">Feature Title</h3>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|base"},"color":{"text":"var:preset|color|text-secondary"}}} -->
    <p>Feature description text goes here.</p>
    <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```

### CTA Button (primary)

```html
<!-- wp:buttons -->
<div class="wp-block-buttons">
    <!-- wp:button {"style":{"color":{"background":"var:preset|color|nova-purple","text":"var:preset|color|white"},"border":{"radius":"8px"},"typography":{"fontWeight":"600"}}} -->
    <div class="wp-block-button">
        <a
            class="wp-block-button__link has-nova-purple-background-color has-white-color has-text-color has-background wp-element-button"
            style="border-radius:8px;font-weight:600"
            >Get Started Free</a
        >
    </div>
    <!-- /wp:button -->
</div>
<!-- /wp:buttons -->
```

### Tag / Badge

```html
<!-- wp:group {"style":{"color":{"background":"var:preset|color|nova-purple","text":"var:preset|color|white"},"border":{"radius":"100px"},"spacing":{"padding":{"top":"var:preset|spacing|xs","right":"var:preset|spacing|sm","bottom":"var:preset|spacing|xs","left":"var:preset|spacing|sm"}}},"layout":{"type":"constrained"}} -->
<div
    class="wp-block-group has-nova-purple-background-color has-white-color has-text-color has-background"
    style="border-radius:100px"
>
    <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|xs","fontWeight":"600","letterSpacing":"0.05em","textTransform":"uppercase"}}} -->
    <p
        style="font-size:var(--wp--preset--font-size--xs);font-weight:600;letter-spacing:0.05em;text-transform:uppercase"
    >
        New Feature
    </p>
    <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
```

---

## Common Mistakes to Avoid

| Wrong                                   | Correct                                          |
| --------------------------------------- | ------------------------------------------------ |
| `"background": "#6C47FF"`               | `"background": "var:preset\|color\|nova-purple"` |
| `style="padding: 96px 0"`               | `"padding": {"top":"var:preset\|spacing\|2xl"}`  |
| `"fontSize": "40px"`                    | `"fontSize": "var:preset\|font-size\|3xl"`       |
| `Slug: my-pattern` (no namespace)       | `Slug: novai/my-pattern`                         |
| PHP `echo` below `?>`                   | Pure HTML block markup, no PHP                   |
| `font-family: Inter, sans-serif` in CSS | `var(--wp--preset--font-family--inter)`          |

---

## Gradient Presets

NovAI defines these gradients in `theme.json`:

| Slug             | Description                              |
| ---------------- | ---------------------------------------- |
| `purple-to-blue` | `nova-purple` → `orbit-blue` (135deg)    |
| `space-fade`     | `deep-space` → `nebula` fade (180deg)    |
| `violet-glow`    | `stellar-violet` → transparent radial    |
| `amber-fade`     | `forge-amber` → transparent (Forge only) |

Usage in JSON: `"gradient": "var:preset|gradient|purple-to-blue"`
