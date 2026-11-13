/**
 * Clinique Santé Plus - Script principal
 * Navbar au scroll, retour en haut, animations, accordéon FAQ, validation formulaire.
 */
document.addEventListener('DOMContentLoaded', function () {

    /* ---------- Effet navbar au défilement ---------- */
    var navbar = document.getElementById('mainNavbar');
    function handleNavbarScroll() {
        if (!navbar) return;
        if (window.scrollY > 40) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    }
    handleNavbarScroll();
    window.addEventListener('scroll', handleNavbarScroll);

    /* ---------- Bouton retour en haut ---------- */
    var backToTop = document.getElementById('backToTop');
    if (backToTop) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 300) {
                backToTop.classList.add('show');
            } else {
                backToTop.classList.remove('show');
            }
        });
        backToTop.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    /* ---------- Animations discrètes à l'apparition ---------- */
    var animatedItems = document.querySelectorAll('.fade-in-up');
    if ('IntersectionObserver' in window && animatedItems.length) {
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });
        animatedItems.forEach(function (item) { observer.observe(item); });
    } else {
        animatedItems.forEach(function (item) { item.classList.add('visible'); });
    }

    /* ---------- Validation du formulaire de contact ---------- */
    var contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function (event) {
            if (!contactForm.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            contactForm.classList.add('was-validated');
        }, false);
    }

    /* ---------- Fermeture du menu mobile après clic ---------- */
    var navLinks = document.querySelectorAll('.navbar-nav .nav-link, .navbar-nav .btn');
    var navMenu = document.getElementById('navMenu');
    if (navMenu) {
        navLinks.forEach(function (link) {
            link.addEventListener('click', function () {
                if (navMenu.classList.contains('show')) {
                    var collapse = bootstrap.Collapse.getOrCreateInstance(navMenu);
                    collapse.hide();
                }
            });
        });
    }
});
