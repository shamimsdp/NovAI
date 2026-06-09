---
applyTo: "**"
---

# Skill: UI/UX Pro Max — Design Excellence

This skill provides elite-level UI/UX design principles, visual design patterns,
interaction design heuristics, and component-level guidance for building world-class
digital interfaces. Apply this when designing or critiquing patterns, layouts,
typography, color usage, spacing, motion, and accessibility in NovAI.

---

## Core Design Principles

### 1. Visual Hierarchy

- **Size contrast** drives the eye: headline ≥ 2× the body size
- Limit to 3 heading levels visible per viewport
- Whitespace is a design element — negative space creates visual breathing room
- Group related items using proximity; separate unrelated items with generous gaps

### 2. Contrast & Legibility

- Body text minimum contrast: **4.5:1** (WCAG AA)
- Large text (≥ 18px normal or ≥ 14px bold): **3:1** minimum
- Interactive elements (buttons, links): **3:1** against adjacent UI
- Never use pure white (#FFFFFF) on pure black (#000000) for body — too harsh; use `#F7F6FE` on `#0D0B1A`
- Avoid low-opacity text overlays on gradient backgrounds — test every combination

### 3. Typography System

- **3-tier hierarchy**: Display → Heading → Body; never skip levels
- Line height: 1.15–1.25 for headings; 1.6–1.75 for body text
- Max line length: 60–75 characters for body (use `max-width: 65ch`)
- Letter spacing: negative (-0.02em) for large headings; slightly positive (+0.01em) for all-caps labels
- Never mix more than 2 font families — NovAI uses **Inter** (UI) + **System Mono** (code only)

### 4. Spacing Rhythm

- Use the spacing scale exclusively — never one-off px values
- Vertical rhythm: related elements share a common spacing unit
- Section padding should always be symmetric (same top and bottom)
- Cards: inner padding = `spacing.sm` to `spacing.lg` depending on card size

### 5. Color Usage

- Max 3 dominant colors per layout (background + surface + accent)
- Reserve the primary accent (`nova-purple`) for **one** primary CTA per viewport
- Use muted variants (`text-muted`, `text-secondary`) for supporting text — never the primary text color on secondary labels
- Avoid pure white text on `nova-purple` backgrounds for long-form content — use it only for short labels and buttons

---

## Layout Patterns

### Grid Systems

```
Content width:  1200px max (constrained layout)
Wide width:     1400px max (wide alignment)
Full width:     100vw      (full alignment — banners, heroes)
Columns:        12-column grid (implicit via wp:columns)
Gutter:         spacing.lg (48px) default
```

### Section Structure Pattern

```
[Full-width container]  bg color, top/bottom padding: spacing.2xl
  └─ [Constrained inner] max-width: 1200px, horizontal padding: spacing.md
       ├─ [Section header] centered, max-width: 720px, margin: 0 auto
       └─ [Section body]   pattern-specific layout
```

### Responsive Breakpoints

| Name    | px    | Applies to                    |
| ------- | ----- | ----------------------------- |
| Mobile  | 320+  | base styles (single column)   |
| Tablet  | 768+  | 2-column grids, side-by-side  |
| Desktop | 1024+ | 3+ column grids, full layouts |
| Wide    | 1280+ | max content width reached     |

### Mobile-First Columns

- 3-column grids → 1 column on mobile, 2 on tablet, 3 on desktop
- 2-column grids → 1 column on mobile, 2 on tablet+
- Use `wp:columns` `isStackedOnMobile: true` always

---

## Component Design Standards

### Buttons

- **Primary**: filled, nova-purple bg, white text, 8px radius, font-weight 600
- **Secondary**: outlined, 1px nova-purple border, transparent bg, nova-purple text
- **Ghost**: no border, text-only, hover reveals underline or bg
- Min touch target: 44×44px (WCAG 2.5.5)
- Padding: 12px vertical, 24px horizontal (standard); 10px/20px (compact)
- Never use more than 2 CTAs in the same visual unit — primary + secondary only

### Cards

- Background: `nebula` (#1E1A38) for dark templates
- Border radius: 10–16px (scale with card size)
- Border: 1px solid `rgba(108,71,255,0.15)` (--novai-border-sm)
- Hover: raise shadow + border opacity increase; never move/scale the whole card

### Badges / Labels

- Background: semi-transparent accent (e.g., `rgba(108,71,255,0.15)`)
- Text: accent color (`nova-purple` or `stellar-violet`)
- Border radius: 100px (pill)
- Font size: `xs` or `sm`; uppercase; letter-spacing 0.05em

### Icons

- Size: 20×20px (inline UI), 24×24px (feature cards), 32×32px (large callouts)
- Stroke-based preferred over filled for technical/developer aesthetics
- Always paired with a text label unless space-constrained (add `aria-label`)
- Never decorate with color that conflicts with the text color

---

## Motion & Interaction

### Animation Principles

- **Purposeful**: animate to communicate state change, not to decorate
- **Duration**: 150–300ms for UI transitions; 400–600ms for page-level reveals
- **Easing**: `ease-out` for elements entering viewport; `ease-in-out` for toggles
- Always gate all animations behind `prefers-reduced-motion: no-preference`

### Hover States

- Background shift: opacity +0.08 (use rgba overlay)
- Border brightening: increase rgba opacity
- Never change font size or weight on hover (causes layout shift)
- Transitions always: `transition: background 150ms ease, border-color 150ms ease, box-shadow 200ms ease`

### Focus States

- `outline: 2px solid var(--wp--preset--color--nova-purple)`
- `outline-offset: 3px`
- `border-radius: 4px` (match component shape)
- Never suppress focus outlines with `outline: none` without a visible replacement

---

## Dark Mode Design (NovAI Default)

### Surface Layering (3 levels)

```
Level 0 (page bg):   deep-space   #0D0B1A
Level 1 (component): nebula       #1E1A38  (cards, nav, modal bg)
Level 2 (raised):    surface-dark #2A2550  (hover, active, selected)
```

### Text Hierarchy on Dark

```
Primary text:   cloud-white   #F7F6FE  — headings, body
Secondary text: text-secondary #C5BEE8  — subtitles, labels
Muted text:     text-muted    #8B83C4  — captions, footnotes, meta
Disabled:       text-muted at 50% opacity
```

### Glow Effects (use sparingly)

- Hero sections: `radial-gradient(ellipse at 50% 0%, rgba(108,71,255,0.12) 0%, transparent 70%)`
- Accent glows: `box-shadow: 0 0 40px rgba(108,71,255,0.15)` on CTA elements
- Never stack more than 2 glow layers — becomes muddy

---

## Pattern-Specific UX Guidelines

### Hero Sections

- Single primary action (1 CTA button) + optional secondary ghost button
- Social proof line beneath CTA: "Trusted by 1,200+ founders" with avatar stack
- Max heading: 72px on desktop; 40px on mobile
- Subheading: 18–20px, `text-secondary` color, max-width: 560px, centered

### Feature Grids

- 3-column: 3 features max per visual grouping (cognitive limit)
- Include an icon or illustration per feature — pure text cards feel flat
- Keep feature copy under 60 words per card

### Pricing Tables

- Visually distinguish the recommended tier (border, badge, slightly elevated card)
- List features exhaustively — omission creates distrust
- "Most Popular" badge: positioned absolutely on card top edge, centered

### Testimonials

- Always include a real name + role + company (not just "John D.")
- Avatar images: 40×40px minimum, circular
- Star ratings: show only if 4.5+ stars — lower ratings reduce conversions

### CTAs (Call to Action)

- One dominant CTA per section — second CTA should be 30–50% less visually prominent
- Button text: action verb + benefit ("Start Building Free", not just "Sign Up")
- Supporting microcopy beneath CTA: remove friction ("No credit card required")

---

## Accessibility Quick Reference

| Check                   | Requirement                                  |
| ----------------------- | -------------------------------------------- |
| Color contrast (body)   | ≥ 4.5:1                                      |
| Color contrast (large)  | ≥ 3:1                                        |
| Focus indicator         | Visible, ≥ 3:1 contrast against bg           |
| Touch targets           | ≥ 44×44px                                    |
| Alt text                | Descriptive for informative; `""` decorative |
| Heading order           | No skipped levels (H1→H2→H3)                 |
| Form labels             | Explicit `<label for>` or `aria-label`       |
| Link context            | Never "click here" or "read more" alone      |
| Keyboard navigation     | All interactive elements reachable by Tab    |
| Screen reader landmarks | `<main>`, `<nav>`, `<header>`, `<footer>`    |

---

## Anti-Patterns — Never Do These

- **Wall of text**: break paragraphs at 3–4 sentences max
- **Too many CTAs**: more than 2 competing CTAs per viewport causes decision paralysis
- **Vibrating colors**: pure red+green, pure blue+orange adjacent at high saturation
- **Tiny click targets**: icon-only buttons under 44px
- **Justified text**: never `text-align: justify` — creates inconsistent word spacing
- **Orphaned headings**: a heading with no body content beneath it
- **Decorative icons without text on mobile**: always include visible text labels at mobile breakpoints
- **Multiple H1s**: exactly one H1 per page template
- **Lorem ipsum in production**: placeholder text ships as a critical error in ThemeForest review
