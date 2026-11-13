<?php
require_once __DIR__ . '/../config.php';
$page_title = 'À propos - ' . SITE_NAME;
$page_description = 'Découvrez l\'histoire, la mission, la vision et les valeurs de Clinique Santé Plus, votre clinique médicale de confiance.';
include __DIR__ . '/../includes/header.php';
?>

<section class="page-header">
    <div class="container">
        <span class="section-eyebrow">À propos de nous</span>
        <h1 class="section-title">Une clinique engagée pour votre bien-être</h1>
        <p class="section-subtitle mx-auto">Découvrez qui nous sommes, ce qui nous anime et notre engagement envers chaque patient.</p>
    </div>
</section>

<!-- Histoire -->
<section class="section">
    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-lg-6 fade-in-up">
                <img src="https://placehold.co/640x460/DCFCE7/16A34A?text=Notre+Histoire" alt="Histoire de la clinique Santé Plus" class="img-fluid rounded-4" loading="lazy">
            </div>
            <div class="col-lg-6 fade-in-up">
                <span class="section-eyebrow">Notre histoire</span>
                <h2 class="section-title">Plus de 15 ans au service de la santé</h2>
                <p style="color: var(--color-text-light);">
                    Fondée en 2010 par un groupe de médecins passionnés, Clinique Santé Plus est née de la volonté
                    d'offrir à la population d'Abidjan un accès à des soins médicaux modernes, accessibles et humains.
                    Au fil des années, la clinique s'est agrandie, s'est équipée de technologies de pointe et a constitué
                    une équipe pluridisciplinaire reconnue pour son professionnalisme.
                </p>
                <p style="color: var(--color-text-light);">
                    Aujourd'hui, nous accueillons chaque année des milliers de patients, dans un cadre pensé pour
                    leur confort et leur sérénité.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Mission, Vision, Valeurs -->
<section class="section section-soft">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-eyebrow">Notre raison d'être</span>
            <h2 class="section-title">Mission, vision et valeurs</h2>
        </div>
        <div class="row g-4">
            <div class="col-md-4 fade-in-up">
                <div class="service-card text-start">
                    <div class="service-icon"><i class="bi bi-bullseye"></i></div>
                    <h5>Notre mission</h5>
                    <p style="color: var(--color-text-light);">Offrir à chaque patient des soins médicaux de qualité, accessibles et adaptés à ses besoins, dans le respect de sa dignité.</p>
                </div>
            </div>
            <div class="col-md-4 fade-in-up">
                <div class="service-card text-start">
                    <div class="service-icon"><i class="bi bi-eye"></i></div>
                    <h5>Notre vision</h5>
                    <p style="color: var(--color-text-light);">Devenir la clinique de référence en Côte d'Ivoire pour la qualité de ses soins et l'excellence de sa relation patient.</p>
                </div>
            </div>
            <div class="col-md-4 fade-in-up">
                <div class="service-card text-start">
                    <div class="service-icon"><i class="bi bi-gem"></i></div>
                    <h5>Nos valeurs</h5>
                    <p style="color: var(--color-text-light);">Humanité, intégrité, excellence médicale, écoute et innovation guident chacune de nos actions au quotidien.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Engagement -->
<section class="section">
    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-lg-6 fade-in-up order-lg-2">
                <img src="https://placehold.co/640x460/16A34A/FFFFFF?text=Notre+Engagement" alt="Engagement envers les patients" class="img-fluid rounded-4" loading="lazy">
            </div>
            <div class="col-lg-6 fade-in-up order-lg-1">
                <span class="section-eyebrow">Notre engagement</span>
                <h2 class="section-title">Toujours à l'écoute de nos patients</h2>
                <ul class="list-unstyled mt-4">
                    <li class="mb-3"><i class="bi bi-check-circle-fill text-primary-medical me-2"></i>Un accueil chaleureux et personnalisé à chaque visite</li>
                    <li class="mb-3"><i class="bi bi-check-circle-fill text-primary-medical me-2"></i>Une transparence totale sur les diagnostics et traitements</li>
                    <li class="mb-3"><i class="bi bi-check-circle-fill text-primary-medical me-2"></i>Des délais de prise en charge réduits</li>
                    <li class="mb-3"><i class="bi bi-check-circle-fill text-primary-medical me-2"></i>Une confidentialité stricte de vos données médicales</li>
                    <li class="mb-3"><i class="bi bi-check-circle-fill text-primary-medical me-2"></i>Une équipe en formation continue sur les dernières avancées médicales</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
