# CIWEC Hospital Website

This repository contains the frontend/UI work and design-system guidance for the CIWEC Hospital website.

> **Website:** https://demo2.ukesh.com/

## Overview

The purpose of this project is to provide a modern, professional, responsive, and consistent healthcare website experience across desktop, tablet, and mobile devices.

The UI direction focuses on:

- Professional healthcare branding
- Consistent typography
- Clear visual hierarchy
- Accessible color contrast
- Responsive layouts
- Consistent spacing and components
- Clean card and button styles
- Mobile-friendly navigation
- Reliable content presentation
- Production-ready visual quality

---

## UI Audit Summary

The following areas were identified as important during the UI review.

### High Priority

- Remove test/demo content from production pages.
- Remove duplicated history/timeline content.
- Ensure statistics do not visibly render as `0` before JavaScript initializes.
- Check doctor profiles for placeholder or mismatched information.
- Correct grammar and content inconsistencies such as `Years of Excellences`.
- Verify the current number of years of hospital service and use it consistently.
- Ensure all production sections contain final approved content.

### Medium Priority

- Standardize font weights.
- Standardize heading sizes.
- Standardize section spacing.
- Standardize card radius and shadows.
- Reduce unnecessary color variations.
- Use the red brand color primarily as an accent.
- Standardize breadcrumb styling.
- Standardize rating/star presentation.
- Standardize button dimensions and typography.

### Final Polish

- Normalize icon sizes.
- Normalize image aspect ratios.
- Improve mobile spacing.
- Check heading wrapping at different resolutions.
- Improve paragraph line lengths.
- Review footer information density.
- Standardize hover and transition effects.

---

# Design System

## Brand Colors

The website should use a controlled color palette rather than introducing arbitrary colors throughout individual components.

```css
:root {
    /* BRAND */
    --primary: #11497b;
    --primary-dark: #0d3a61;

    --secondary: #e53935;
    --secondary-dark: #c62828;

    /* TEXT */
    --text-heading: #0f172a;
    --text-body: #475569;
    --text-muted: #64748b;

    /* BACKGROUND */
    --bg-white: #ffffff;
    --bg-light: #f8fafc;
    --bg-blue-light: #eff6ff;

    /* BORDER */
    --border: #e2e8f0;

    /* RADIUS */
    --radius-sm: 0.5rem;
    --radius-md: 0.75rem;
    --radius-lg: 1rem;
    --radius-xl: 1.5rem;
}
```

### Color Usage

| Color | Purpose |
|---|---|
| `#11497b` | Primary brand color |
| `#0d3a61` | Dark primary / hover |
| `#e53935` | Accent / emergency / important CTA |
| `#c62828` | Dark accent / hover |
| `#0f172a` | Main headings |
| `#475569` | Body text |
| `#64748b` | Secondary/muted text |
| `#f8fafc` | Light section background |
| `#eff6ff` | Soft blue background |
| `#e2e8f0` | Borders |

### Color Guidelines

- Blue should remain the dominant brand color.
- Red should be used as an accent rather than a second primary color.
- Avoid introducing random shades of blue or red.
- Avoid excessive use of saturated colors.
- Text colors should be selected from the design-system variables.
- Maintain sufficient contrast between text and background.

---

# Typography

Typography should have a clear hierarchy.

Recommended structure:

| Element | Weight |
|---|---:|
| Main heading | 600 |
| Section heading | 600 |
| Card heading | 600 |
| Button | 500–600 |
| Section label | 500 |
| Body text | 400 |
| Small metadata | 400 |

Avoid making every heading `font-weight: 700`. A slightly lighter hierarchy creates a more refined healthcare interface.

## Recommended Font Structure

Use a maximum of two font families:

```css
:root {
    --font-heading: 'Inter', sans-serif;
    --font-body: 'Inter', sans-serif;
}
```

If a separate display font is introduced later, it should be used consistently and only where it improves the visual hierarchy.

---

# Spacing System

Sections should follow a predictable spacing scale.

Recommended desktop spacing:

```css
.section-padding {
    padding-block: 5rem;
}
```

Recommended mobile spacing:

```css
@media (max-width: 768px) {
    .section-padding {
        padding-block: 3.5rem;
    }
}
```

Avoid using unrelated values such as:

```text
72px
84px
96px
104px
120px
```

unless there is a specific design reason.

---

# Component Guidelines

## Cards

Cards should share a common visual language.

Recommended base:

```css
.card {
    background: #ffffff;
    border: 1px solid var(--border);
    border-radius: var(--radius-lg);
    box-shadow: var(--shadow-sm);
    transition: 0.3s ease;
}
```

Different sections may change their content or layout, but should not unnecessarily introduce different:

- Border radii
- Shadows
- Padding systems
- Heading weights
- Hover effects

---

## Buttons

Buttons should use consistent:

- Height
- Padding
- Border radius
- Font weight
- Icon size
- Hover transition

Primary CTA:

```text
Primary Blue
White text
```

Emergency/critical action:

```text
Red Accent
White text
```

Secondary action:

```text
White/Light background
Primary border/text
```

---

# Content Guidelines

Production pages must not contain:

- Test service names
- Demo content
- Placeholder descriptions
- Placeholder doctor names
- Duplicate content
- Temporary statistics
- Incorrect grammar
- Inconsistent numerical information

Examples of content that must be reviewed before production:

```text
test service
Travel Medicine Demo
Family Medicine demo
Years Of Excellences
```

All content should be reviewed and approved before deployment.

---

# Homepage UI Checklist

## Header

- [ ] Logo has correct size and alignment.
- [ ] Navigation spacing is consistent.
- [ ] Active navigation state is visible.
- [ ] Header works on desktop.
- [ ] Header works on tablet.
- [ ] Mobile menu works correctly.
- [ ] CTA buttons remain visible and accessible.
- [ ] Header does not overlap page content.

## Hero

- [ ] Heading has correct hierarchy.
- [ ] Hero image is correctly cropped.
- [ ] CTA buttons are aligned.
- [ ] Text remains readable over the background.
- [ ] Hero works on smaller screens.
- [ ] No horizontal overflow occurs.

## Services

- [ ] Cards have consistent dimensions.
- [ ] Icons have consistent sizing.
- [ ] Card titles have consistent weight.
- [ ] Descriptions have similar line lengths.
- [ ] Hover states are consistent.
- [ ] No demo/test services remain.

## Why CIWEC

- [ ] Image dimensions are consistent.
- [ ] Text hierarchy is clear.
- [ ] Icons use the approved design style.
- [ ] Cards have consistent spacing.
- [ ] Mobile layout is tested.

## Statistics

- [ ] Numbers are correct.
- [ ] Numbers do not display `0` while waiting for JavaScript.
- [ ] Counter animation works.
- [ ] Labels have consistent typography.
- [ ] Statistics remain readable on mobile.

## History

- [ ] Timeline years are correct.
- [ ] No duplicated timeline content exists.
- [ ] Active timeline state is clear.
- [ ] Images maintain consistent aspect ratio.
- [ ] Timeline works on mobile.

## Doctors

- [ ] Every doctor has final approved data.
- [ ] No placeholder specialization is displayed.
- [ ] Images have consistent aspect ratio.
- [ ] Names use consistent typography.
- [ ] Qualifications are formatted consistently.
- [ ] Profile links work.

## Patient Stories / Reviews

- [ ] Review cards have consistent dimensions.
- [ ] Star ratings are consistent.
- [ ] Reviewer information is aligned.
- [ ] Review text does not overflow.
- [ ] Carousel controls are accessible.
- [ ] Mobile carousel works correctly.

## Awards

- [ ] Award images are correctly cropped.
- [ ] Captions use consistent typography.
- [ ] Carousel behavior is consistent.
- [ ] Images are optimized.

## Publications

- [ ] Publication titles use consistent weight.
- [ ] Dates and metadata use muted text.
- [ ] PDF/document icons are consistent.
- [ ] Links are accessible.
- [ ] Cards have consistent spacing.

## Locations

- [ ] Location cards use consistent layout.
- [ ] Address text is readable.
- [ ] Contact information is grouped correctly.
- [ ] Map links work.
- [ ] Mobile layout is usable.

## Footer

- [ ] Footer columns are aligned.
- [ ] Heading hierarchy is consistent.
- [ ] Links have proper hover states.
- [ ] Contact information is readable.
- [ ] Social icons have consistent dimensions.
- [ ] Newsletter form is responsive.
- [ ] Copyright section is aligned.

---

# Responsive Testing

The website should be tested at the following viewport sizes.

## Desktop

```text
1920 × 1080
1600 × 900
1440 × 900
1366 × 768
1280 × 720
```

## Tablet

```text
1024 × 1366
820 × 1180
768 × 1024
```

## Mobile

```text
430 × 932
414 × 896
390 × 844
375 × 812
```

### Responsive Checklist

At every breakpoint check:

- [ ] No horizontal scrollbar
- [ ] No clipped content
- [ ] No overlapping elements
- [ ] Images do not stretch
- [ ] Text does not overflow
- [ ] Buttons remain usable
- [ ] Navigation works
- [ ] Cards stack correctly
- [ ] Section spacing remains balanced
- [ ] Fixed elements do not cover content

---

# Accessibility

The website should be checked for:

- Proper heading hierarchy
- Sufficient color contrast
- Keyboard navigation
- Visible focus states
- Accessible buttons
- Accessible links
- Meaningful `alt` attributes
- Form labels
- ARIA attributes where required
- Screen-reader compatibility
- Sufficient touch-target size

Recommended tools:

- Google Lighthouse
- axe DevTools
- WAVE

---

# Performance

UI quality should not come at the expense of performance.

Review:

- Image compression
- WebP/AVIF usage
- Lazy loading
- Font loading
- JavaScript bundles
- CSS bundles
- Third-party scripts
- Video loading
- Cumulative Layout Shift
- Largest Contentful Paint

Avoid loading large images when a smaller responsive version is sufficient.

---

# UI Testing Workflow

Before merging a UI change:

```text
1. Develop the UI
       ↓
2. Test desktop
       ↓
3. Test tablet
       ↓
4. Test mobile
       ↓
5. Check horizontal overflow
       ↓
6. Check typography
       ↓
7. Check colors
       ↓
8. Check spacing
       ↓
9. Check accessibility
       ↓
10. Check console errors
       ↓
11. Review production content
       ↓
12. Create Git commit
       ↓
13. Push feature branch
       ↓
14. Create Merge Request
```

---

# Git Workflow

Recommended branch structure:

```text
website_staging
       │
       └── MR_SS_feature
                │
                ├── ticketXXXX
                ├── ticketYYYY
                └── ticketZZZZ
```

Feature work should be developed on ticket branches.

Example:

```bash
git checkout website_staging

git checkout -b MR_SS_feature

git checkout -b ticket6660
```

After completing the ticket:

```bash
git add .
git commit -m "Fix responsive UI issues"

git push origin ticket6660
```

Create a Merge Request:

```text
ticket6660
      ↓
MR_SS_feature
```

After reviewing all feature changes:

```text
MR_SS_feature
      ↓
website_staging
```

---

# Recommended Commit Messages

Use clear commit messages.

Examples:

```text
Fix responsive service card layout
Fix homepage typography consistency
Standardize hospital brand colors
Fix mobile navigation spacing
Remove demo service content
Fix doctor card data presentation
Improve history timeline UI
Fix statistics counter rendering
Improve footer responsive layout
```

Avoid messages such as:

```text
update
changes
fix
final
new
testing
```

---

# UI Review Checklist Before Production

```text
[ ] No test/demo content
[ ] No placeholder data
[ ] No duplicate sections
[ ] Typography is consistent
[ ] Colors use design tokens
[ ] Buttons are consistent
[ ] Cards are consistent
[ ] Spacing is consistent
[ ] Images are optimized
[ ] Desktop layout works
[ ] Tablet layout works
[ ] Mobile layout works
[ ] No horizontal overflow
[ ] No console errors
[ ] Accessibility reviewed
[ ] Lighthouse reviewed
[ ] Forms tested
[ ] Navigation tested
[ ] Links tested
[ ] Footer reviewed
[ ] Production content approved
```

---

# License

Copyright © 2026 CIWEC Hospital / Project Contributors.

This project is provided for the authorized development and maintenance of the CIWEC Hospital website.

Unless explicitly authorized by the project owner, the source code, design, branding, content, images, logos, medical information, and other project assets may not be copied, redistributed, modified, or used for another commercial or public website.

Third-party libraries, frameworks, fonts, icons, images, and other dependencies remain subject to their respective licenses.

For permission to reuse any project material, contact the project owner.

---

# Third-Party Technologies

This project may use third-party technologies such as:

- Laravel
- PHP
- Tailwind CSS
- JavaScript
- Font Awesome
- Google Fonts
- Swiper
- reCAPTCHA
- Other third-party APIs or services

Each third-party dependency is governed by its own license and terms of use.

---

# Maintainer

**Shibu Sharma**

Laravel Full Stack Developer

Website: https://shibusharma.com.np/

GitHub: https://github.com/shibusharma1

LinkedIn: https://www.linkedin.com/in/shibusharma/

---

## Status

**UI Development / Improvement**

The website is actively being refined for:

- Visual consistency
- Responsive design
- Accessibility
- Performance
- Production readiness
- Healthcare-focused user experience
#   n e p r e v a - w e b s i t e  
 