<?php if (!defined('BASE_URL')) { require_once __DIR__ . '/../config.php'; } ?>
    <footer class="site-footer">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4">
                    <a href="<?php echo BASE_URL; ?>/index.php" class="footer-brand d-flex align-items-center gap-2 mb-3">
                        <i class="bi bi-heart-pulse-fill brand-icon"></i>
                        <span class="brand-name"><?php echo SITE_NAME; ?></span>
                    </a>
                    <p class="text-muted-light"><?php echo SITE_SLOGAN; ?></p>
                    <div class="d-flex gap-2 mt-3">
                        <a href="#" class="social-icon" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-icon" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-icon" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                        <a href="https://wa.me/<?php echo SITE_WHATSAPP_LINK; ?>" class="social-icon" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h6 class="footer-title">Navigation</h6>
                    <ul class="footer-links">
                        <li><a href="<?php echo BASE_URL; ?>/index.php">Accueil</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/pages/about.php">À propos</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/pages/services.php">Services</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/pages/doctors.php">Médecins</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h6 class="footer-title">Ressources</h6>
                    <ul class="footer-links">
                        <li><a href="<?php echo BASE_URL; ?>/pages/gallery.php">Galerie</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/pages/faq.php">FAQ</a></li>
                        <li><a href="<?php echo BASE_URL; ?>/pages/contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h6 class="footer-title">Contact</h6>
                    <ul class="footer-contact">
                        <li><i class="bi bi-geo-alt-fill"></i> <?php echo SITE_ADDRESS; ?></li>
                        <li><i class="bi bi-telephone-fill"></i> <a href="tel:<?php echo SITE_PHONE_LINK; ?>"><?php echo SITE_PHONE; ?></a></li>
                        <li><i class="bi bi-envelope-fill"></i> <a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a></li>
                        <li><i class="bi bi-whatsapp"></i> <a href="https://wa.me/<?php echo SITE_WHATSAPP_LINK; ?>"><?php echo SITE_WHATSAPP; ?></a></li>
                    </ul>
                </div>
            </div>
            <hr class="footer-divider">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-2 pb-3">
                <p class="mb-0 small text-muted-light">&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. Tous droits réservés.</p>
                <p class="mb-0 small text-muted-light">Site vitrine à but de démonstration.</p>
            </div>
        </div>
    </footer>

    <!-- Bouton retour en haut -->
    <button id="backToTop" class="back-to-top" aria-label="Retour en haut">
        <i class="bi bi-arrow-up"></i>
    </button>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- JS du site -->
    <script src="<?php echo BASE_URL; ?>/assets/js/script.js"></script>
</body>
</html>
