<?php
require_once __DIR__ . '/config.php';
$page_title = SITE_NAME . ' - Clinique médicale moderne à Abidjan';
$page_description = 'Clinique Santé Plus : médecine générale, pédiatrie, gynécologie, cardiologie, dentisterie et plus. Une équipe de médecins dévoués à votre service, 7j/7.';
include __DIR__ . '/includes/header.php';
?>

<!-- ===================== HERO ===================== -->
<section class="hero">
    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-lg-6">
                <span class="section-eyebrow">Bienvenue à <?php echo SITE_NAME; ?></span>
                <h1 class="hero-title">Votre santé, <span>notre priorité</span> au quotidien.</h1>
                <p class="hero-subtitle mt-3">
                    Une clinique moderne, des médecins expérimentés et des soins personnalisés pour vous
                    et toute votre famille, dans un cadre chaleureux et rassurant.
                </p>
                <div class="d-flex flex-wrap gap-3 mt-4">
                    <a href="<?php echo BASE_URL; ?>/pages/contact.php#rdv" class="btn btn-medical-primary btn-lg rounded-pill px-4">
                        <i class="bi bi-calendar-check"></i> Prendre rendez-vous
                    </a>
                    <a href="<?php echo BASE_URL; ?>/pages/contact.php" class="btn btn-medical-outline btn-lg rounded-pill px-4">
                        <i class="bi bi-telephone"></i> Nous contacter
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-image-wrap">
                    <img src="https://placehold.co/700x520/16A34A/FFFFFF?text=Clinique+Sant%C3%A9+Plus" alt="Équipe médicale de Clinique Santé Plus" class="img-fluid w-100" loading="lazy">
                    <div class="hero-badge">
                        <i class="bi bi-shield-check"></i>
                        <div>
                            <strong class="d-block">Soins certifiés</strong>
                            <span class="small text-muted">Équipe agréée &amp; expérimentée</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== PRESENTATION RAPIDE ===================== -->
<section class="section">
    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-lg-6">
                <img src="https://placehold.co/640x460/DCFCE7/16A34A?text=Notre+Clinique" alt="Façade de la clinique Santé Plus" class="img-fluid rounded-4 fade-in-up" loading="lazy">
            </div>
            <div class="col-lg-6 fade-in-up">
                <span class="section-eyebrow">Qui sommes-nous</span>
                <h2 class="section-title">Une clinique à taille humaine, des soins de haute qualité</h2>
                <p class="text-muted-light" style="color: var(--color-text-light);">
                    Depuis plus de 15 ans, Clinique Santé Plus accompagne ses patients avec des soins médicaux
                    complets, une technologie moderne et une approche humaine. Notre équipe pluridisciplinaire
                    met tout en œuvre pour vous offrir des diagnostics fiables et un suivi attentif.
                </p>
                <ul class="list-unstyled mt-4">
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-primary-medical me-2"></i>Médecins certifiés et expérimentés</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-primary-medical me-2"></i>Équipements médicaux modernes</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-primary-medical me-2"></i>Accueil chaleureux et personnalisé</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-primary-medical me-2"></i>Disponibilité 7 jours sur 7</li>
                </ul>
                <a href="<?php echo BASE_URL; ?>/pages/about.php" class="btn btn-medical-outline rounded-pill px-4 mt-2">En savoir plus</a>
            </div>
        </div>
    </div>
</section>

<!-- ===================== CHIFFRES CLES ===================== -->
<section class="section section-soft">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-6 col-lg-3 fade-in-up">
                <div class="stat-card">
                    <div class="stat-number">15 000+</div>
                    <div class="stat-label">Patients pris en charge</div>
                </div>
            </div>
            <div class="col-6 col-lg-3 fade-in-up">
                <div class="stat-card">
                    <div class="stat-number">22</div>
                    <div class="stat-label">Médecins spécialistes</div>
                </div>
            </div>
            <div class="col-6 col-lg-3 fade-in-up">
                <div class="stat-card">
                    <div class="stat-number">15</div>
                    <div class="stat-label">Années d'expérience</div>
                </div>
            </div>
            <div class="col-6 col-lg-3 fade-in-up">
                <div class="stat-card">
                    <div class="stat-number">98%</div>
                    <div class="stat-label">Patients satisfaits</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== SERVICES (aperçu) ===================== -->
<section class="section">
    <div class="container text-center">
        <span class="section-eyebrow">Nos services</span>
        <h2 class="section-title">Des soins complets pour toute la famille</h2>
        <p class="section-subtitle mx-auto">Découvrez nos principaux services médicaux assurés par des spécialistes qualifiés.</p>

        <div class="row g-4 mt-4">
            <div class="col-md-4 fade-in-up">
                <div class="service-card text-start">
                    <div class="service-icon"><i class="bi bi-heart-pulse"></i></div>
                    <h5>Médecine générale</h5>
                    <p class="text-muted-light" style="color: var(--color-text-light);">Consultations, bilans de santé et suivi médical pour toute la famille.</p>
                </div>
            </div>
            <div class="col-md-4 fade-in-up">
                <div class="service-card text-start">
                    <div class="service-icon"><i class="bi bi-emoji-smile"></i></div>
                    <h5>Pédiatrie</h5>
                    <p class="text-muted-light" style="color: var(--color-text-light);">Suivi de croissance, vaccination et soins adaptés aux enfants.</p>
                </div>
            </div>
            <div class="col-md-4 fade-in-up">
                <div class="service-card text-start">
                    <div class="service-icon"><i class="bi bi-activity"></i></div>
                    <h5>Cardiologie</h5>
                    <p class="text-muted-light" style="color: var(--color-text-light);">Dépistage et suivi des maladies cardiovasculaires.</p>
                </div>
            </div>
        </div>
        <a href="<?php echo BASE_URL; ?>/pages/services.php" class="btn btn-medical-primary rounded-pill px-4 mt-5">
            Voir tous nos services <i class="bi bi-arrow-right"></i>
        </a>
    </div>
</section>

<!-- ===================== TEMOIGNAGE (aperçu) ===================== -->
<section class="section section-soft">
    <div class="container text-center">
        <span class="section-eyebrow">Avis de nos patients</span>
        <h2 class="section-title mb-5">Ce que disent nos patients</h2>
        <div class="testimonial-card fade-in-up">
            <div class="testimonial-stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p class="testimonial-text">« Une équipe à l'écoute, des locaux impeccables et un suivi médical de qualité. Je recommande vivement Clinique Santé Plus à toute ma famille. »</p>
            <img src="https://i.pravatar.cc/100?img=47" alt="Patiente satisfaite" class="testimonial-avatar mt-3 mb-2" loading="lazy">
            <h6 class="testimonial-name">Aïcha Koné</h6>
            <span class="testimonial-role">Patiente depuis 2019</span>
        </div>
        <a href="<?php echo BASE_URL; ?>/pages/testimonials.php" class="btn btn-medical-outline rounded-pill px-4 mt-5">Voir tous les témoignages</a>
    </div>
</section>

<!-- ===================== CTA FINAL ===================== -->
<section class="section">
    <div class="container">
        <div class="cta-section fade-in-up">
            <h2 class="mb-3">Prêt à prendre soin de votre santé ?</h2>
            <p class="mb-4" style="color: rgba(255,255,255,0.85);">Notre équipe est à votre écoute pour répondre à toutes vos questions et vous accompagner.</p>
            <a href="<?php echo BASE_URL; ?>/pages/contact.php#rdv" class="btn btn-medical-light btn-lg rounded-pill px-4">
                <i class="bi bi-calendar-check"></i> Prendre rendez-vous maintenant
            </a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
