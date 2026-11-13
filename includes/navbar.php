<?php
/**
 * Barre de navigation fixe avec effet au défilement (voir assets/js/script.js).
 */
$currentPage = basename($_SERVER['PHP_SELF']);

function navActive($file, $current) {
    return $file === $current ? ' active' : '';
}
?>
<header>
    <nav class="navbar navbar-expand-lg fixed-top" id="mainNavbar">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="<?php echo BASE_URL; ?>/index.php">
                <i class="bi bi-heart-pulse-fill brand-icon"></i>
                <span class="brand-text">
                    <span class="brand-name"><?php echo SITE_NAME; ?></span>
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Ouvrir le menu de navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
                    <li class="nav-item"><a class="nav-link<?php echo navActive('index.php', $currentPage); ?>" href="<?php echo BASE_URL; ?>/index.php">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link<?php echo navActive('about.php', $currentPage); ?>" href="<?php echo BASE_URL; ?>/pages/about.php">À propos</a></li>
                    <li class="nav-item"><a class="nav-link<?php echo navActive('services.php', $currentPage); ?>" href="<?php echo BASE_URL; ?>/pages/services.php">Services</a></li>
                    <li class="nav-item"><a class="nav-link<?php echo navActive('doctors.php', $currentPage); ?>" href="<?php echo BASE_URL; ?>/pages/doctors.php">Médecins</a></li>
                    <li class="nav-item"><a class="nav-link<?php echo navActive('gallery.php', $currentPage); ?>" href="<?php echo BASE_URL; ?>/pages/gallery.php">Galerie</a></li>
                    <li class="nav-item"><a class="nav-link<?php echo navActive('faq.php', $currentPage); ?>" href="<?php echo BASE_URL; ?>/pages/faq.php">FAQ</a></li>
                    <li class="nav-item"><a class="nav-link<?php echo navActive('contact.php', $currentPage); ?>" href="<?php echo BASE_URL; ?>/pages/contact.php">Contact</a></li>
                    <li class="nav-item ms-lg-2">
                        <a class="btn btn-medical-primary btn-sm rounded-pill px-3" href="<?php echo BASE_URL; ?>/pages/contact.php#rdv">
                            <i class="bi bi-calendar-check"></i> Rendez-vous
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
