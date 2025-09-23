// burger-menu.js
// Toggle the sidebar nav on small screens (375px - 760px) by adding/removing
// the "open" class on the <nav> element. This file is intentionally small
// and has no dependencies. It was created per the user's request.

(function () {
    'use strict';

    var burger = document.getElementById('burger');
    var nav = document.querySelector('nav');

    if (!burger || !nav) return;

    function isSmallScreen() {
        return window.matchMedia('(min-width: 375px) and (max-width: 760px)').matches;
    }

    function openNav() {
        nav.classList.add('open');
        burger.setAttribute('aria-expanded', 'true');
        nav.setAttribute('aria-hidden', 'false');
    }

    function closeNav() {
        nav.classList.remove('open');
        burger.setAttribute('aria-expanded', 'false');
        nav.setAttribute('aria-hidden', 'true');
    }

    burger.addEventListener('click', function (e) {
        e.stopPropagation();
        if (!isSmallScreen()) return; // only toggle in the target range
        if (nav.classList.contains('open')) closeNav();
        else openNav();
    });

    // Close when clicking outside the nav on small screens
    document.addEventListener('click', function (e) {
        if (!isSmallScreen()) return;
        if (!nav.classList.contains('open')) return;
        if (!nav.contains(e.target) && e.target !== burger) {
            closeNav();
        }
    });

    // Close on Escape
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && nav.classList.contains('open')) {
            closeNav();
        }
    });

    // Ensure state stays consistent on resize
    window.addEventListener('resize', function () {
        if (!isSmallScreen()) {
            // remove small-screen-only 'open' and ensure nav visible on larger screens
            nav.classList.remove('open');
            burger.setAttribute('aria-expanded', 'false');
            // Remove inline display none applied by CSS (handled by CSS media queries)
        }
    });

})();
