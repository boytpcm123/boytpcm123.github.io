## 2025-05-10 - Icon Buttons and Map Iframe Accessibility
**Learning:** Legacy static portfolio websites often use empty `<a>` links styled with CSS background images for social/action buttons and raw `<iframe>`s without `title` or `aria-label` attributes, which blocks screen reader navigation.
**Action:** Always inspect icon-only links and embedded iframes in static web projects to add `aria-label` and `title` attributes.
