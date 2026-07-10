// ============================================
    MAIN JAVASCRIPT
    ============================================ */

document.addEventListener('DOMContentLoaded', function() {
    // ===== Back to Top Button =====
    const backToTopBtn = document.getElementById('backToTop');

    if (backToTopBtn) {
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopBtn.classList.remove('hidden');
                backToTopBtn.classList.add('flex');
            } else {
                backToTopBtn.classList.add('hidden');
                backToTopBtn.classList.remove('flex');
            }
        }, { passive: true });

        backToTopBtn.addEventListener('click', function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // ===== Smooth Scroll for Anchor Links =====
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;

            const target = document.querySelector(targetId);
            if (target) {
                e.preventDefault();
                const navbarHeight = 64;
                const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - navbarHeight;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
});

// ============================================
    LOAD COMPONENTS
    ============================================ */
document.addEventListener('DOMContentLoaded', function() {
    // Load Header
    const headerContainer = document.getElementById('header');
    if (headerContainer) {
        fetch('components/header.html')
            .then(response => response.text())
            .then(data => {
                headerContainer.innerHTML = data;
                initMobileMenu();
            })
            .catch(error => console.error('Error loading header:', error));
    }

    // Load Footer
    const footerContainer = document.getElementById('footer');
    if (footerContainer) {
        fetch('components/footer.html')
            .then(response => response.text())
            .then(data => {
                footerContainer.innerHTML = data;
            })
            .catch(error => console.error('Error loading footer:', error));
    }
});

// ============================================
    MOBILE MENU FUNCTIONS
    ============================================ */
function initMobileMenu() {
    const toggler = document.getElementById('navbarToggler');
    const mobileMenu = document.getElementById('mobileMenu');

    if (toggler && mobileMenu) {
        window.toggleMobileMenu = function() {
            mobileMenu.classList.toggle('open');
            toggler.classList.toggle('active');
        };

        window.closeMobileMenu = function() {
            mobileMenu.classList.remove('open');
            toggler.classList.remove('active');
        };
    }
}

// ============================================
    NAVBAR SCROLL EFFECT
    ============================================ */
document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.querySelector('nav');
    if (navbar) {
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 50) {
                navbar.style.boxShadow = '0 4px 40px rgba(0, 0, 0, 0.6)';
                navbar.style.borderBottomColor = 'rgba(255, 255, 255, 0.06)';
            } else {
                navbar.style.boxShadow = 'none';
                navbar.style.borderBottomColor = 'rgba(255, 255, 255, 0.04)';
            }
        }, { passive: true });
    }
});
