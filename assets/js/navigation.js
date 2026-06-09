/**
 * NovAI — Navigation JS
 *
 * Handles:
 * 1. Sticky header shrink-on-scroll class toggle
 * 2. Intersection Observer-based scroll reveal
 *
 * Vanilla JS, no dependencies, deferred load.
 */

(function () {
    "use strict";

    /* ── Sticky header: add .is-scrolled after scrolling 40px ─────────────── */

    const SCROLL_THRESHOLD = 40;

    const stickyHeaders = document.querySelectorAll(
        ".novai-header, .novai-nav-dark, .novai-nav-light",
    );

    if (stickyHeaders.length) {
        function onScroll() {
            const scrolled = window.scrollY > SCROLL_THRESHOLD;
            stickyHeaders.forEach(function (el) {
                el.classList.toggle("is-scrolled", scrolled);
            });
        }

        window.addEventListener("scroll", onScroll, { passive: true });
        onScroll(); // run once on page load
    }

    /* ── Scroll reveal via IntersectionObserver ────────────────────────────── */

    const animatables = document.querySelectorAll(".novai-animate");

    if (
        animatables.length &&
        "IntersectionObserver" in window &&
        window.matchMedia("(prefers-reduced-motion: no-preference)").matches
    ) {
        const observer = new IntersectionObserver(
            function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("is-visible");
                        observer.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.12, rootMargin: "0px 0px -40px 0px" },
        );

        animatables.forEach(function (el) {
            observer.observe(el);
        });
    } else {
        /* Reduced motion or no IO support — show everything immediately */
        animatables.forEach(function (el) {
            el.classList.add("is-visible");
        });
    }
})();
