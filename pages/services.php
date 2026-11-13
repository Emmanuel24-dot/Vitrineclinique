<?php
require_once __DIR__ . '/../config.php';
$page_title = 'Nos services - ' . SITE_NAME;
$page_description = 'Médecine générale, pédiatrie, gynécologie, cardiologie, dermatologie, dentisterie, vaccination et plus. Découvrez tous les services médicaux de Clinique Santé Plus.';
include __DIR__ . '/../includes/header.php';

// Liste des services proposés par la clinique
$services = [
    ['icon' => 'bi-heart-pulse', 'title' => 'Médecine générale', 'desc' => 'Consultations, bilans de santé et suivi médical pour toute la famille.'],
    ['icon' => 'bi-emoji-smile', 'title' => 'Pédiatrie', 'desc' => 'Suivi de croissance, vaccination et soins adaptés aux nourrissons et enfants.'],
    ['icon' => 'bi-gender-female', 'title' => 'Gynécologie', 'desc' => 'Suivi gynécologique, prénatal et postnatal dans un cadre rassurant.'],
    ['icon' => 'bi-activity', 'title' => 'Cardiologie', 'desc' => 'Dépistage, diagnostic et suivi des maladies cardiovasculaires.'],
    ['icon' => 'bi-bandaid', 'title' => 'Dermatologie', 'desc' => 'Diagnostic et traitement des affections de la peau, des cheveux et des ongles.'],
    ['icon' => 'bi-emoji-laughing', 'title' => 'Dentisterie', 'desc' => 'Soins dentaires, détartrage, soins conservateurs et esthétique dentaire.'],
    ['icon' => 'bi-shield-plus', 'title' => 'Vaccination', 'desc' => 'Calendrier vaccinal complet pour enfants et adultes, dans le respect des normes.'],
    ['icon' => 'bi-clipboard2-pulse', 'title' => 'Examens médicaux', 'desc' => 'Bilans de santé complets, examens d\'aptitude et check-up préventifs.'],
    ['icon' => 'bi-droplet', 'title' => 'Analyses de laboratoire', 'desc' => 'Analyses biologiques fiables et résultats rapides grâce à notre laboratoire intégré.'],
    ['icon' => 'bi-exclamation-triangle', 'title' => 'Urgences médicales', 'desc' => 'Prise en charge rapide des urgences médicales, 7 jours sur 7.'],
    ['icon' => 'bi-person-badge', 'title' => 'Consultation spécialisée', 'desc' => 'Accès à des médecins spécialistes pour des prises en charge ciblées.'],
    ['icon' => 'bi-clipboard2-check', 'title' => 'Suivi médical', 'desc' => 'Accompagnement personnalisé sur le long terme pour les maladies chroniques.'],
];
?>

<section class="page-header">
    <div class="container">
        <span class="section-eyebrow">Nos services</span>
        <h1 class="section-title">Des soins complets pour toute la famille</h1>
        <p class="section-subtitle mx-auto">Découvrez l'ensemble des services médicaux assurés par notre équipe de spécialistes qualifiés.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row g-4">
            <?php foreach ($services as $service) : ?>
            <div class="col-md-6 col-lg-4 fade-in-up">
                <div class="service-card">
                    <div class="service-icon"><i class="bi <?php echo $service['icon']; ?>"></i></div>
                    <h5><?php echo htmlspecialchars($service['title']); ?></h5>
                    <p style="color: var(--color-text-light);"><?php echo htmlspecialchars($service['desc']); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section section-soft">
    <div class="container">
        <div class="cta-section fade-in-up">
            <h2 class="mb-3">Besoin d'un avis médical ?</h2>
            <p class="mb-4" style="color: rgba(255,255,255,0.85);">Nos médecins spécialistes sont à votre disposition pour vous accompagner.</p>
            <a href="<?php echo BASE_URL; ?>/pages/contact.php#rdv" class="btn btn-medical-light btn-lg rounded-pill px-4">
                <i class="bi bi-calendar-check"></i> Prendre rendez-vous
            </a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
