document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const navLinks = document.querySelector('.nav-links');
    const userNav = document.querySelector('.user-nav');
    let isMenuOpen = false;

    function toggleMobileMenu() {
        if (window.innerWidth <= 768) {
            isMenuOpen = !isMenuOpen;
            navLinks.style.display = isMenuOpen ? 'flex' : 'none';
            userNav.style.display = isMenuOpen ? 'flex' : 'none';
        }
    }

    // Handle resize events
    let resizeTimer;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            if (window.innerWidth > 768) {
                navLinks.style.display = 'flex';
                userNav.style.display = 'flex';
                isMenuOpen = false;
            }
        }, 250);
    });

    // Add touch support for mobile devices
    document.addEventListener('touchstart', function() {}, {passive: true});

    // Optimize scroll performance
    let lastKnownScrollPosition = 0;
    let ticking = false;

    function onScroll(scrollPos) {
        const header = document.querySelector('.header');
        if (scrollPos > 50) {
            header.classList.add('header-scrolled');
        } else {
            header.classList.remove('header-scrolled');
        }
    }

    document.addEventListener('scroll', function() {
        lastKnownScrollPosition = window.scrollY;

        if (!ticking) {
            window.requestAnimationFrame(function() {
                onScroll(lastKnownScrollPosition);
                ticking = false;
            });

            ticking = true;
        }
    });

    // Lazy loading for images
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    observer.unobserve(img);
                }
            });
        });

        document.querySelectorAll('img[data-src]').forEach(img => {
            imageObserver.observe(img);
        });
    }

    // Handle form submission on mobile
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            if (window.innerWidth <= 768) {
                const submitButton = form.querySelector('button[type="submit"]');
                if (submitButton) {
                    submitButton.disabled = true;
                    submitButton.textContent = 'Processing...';
                }
            }
        });
    });

    // Add touch feedback for buttons
    const buttons = document.querySelectorAll('button, .nav-item, .social-btn');
    buttons.forEach(button => {
        button.addEventListener('touchstart', function() {
            this.style.opacity = '0.7';
        }, { passive: true });

        button.addEventListener('touchend', function() {
            this.style.opacity = '1';
        }, { passive: true });
    });

    // Handle orientation change
    window.addEventListener('orientationchange', function() {
        // Force reflow of critical elements
        const criticalElements = [
            '.content-wrapper',
            '.flight-cards',
            '.newsletter-content'
        ];

        criticalElements.forEach(selector => {
            const element = document.querySelector(selector);
            if (element) {
                element.style.display = 'none';
                element.offsetHeight; // Force reflow
                element.style.display = '';
            }
        });
    });
});
