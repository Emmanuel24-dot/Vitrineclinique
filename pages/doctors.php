<?php
require_once __DIR__ . '/../config.php';
$page_title = 'Nos médecins - ' . SITE_NAME;
$page_description = 'Découvrez l\'équipe de médecins spécialistes de Clinique Santé Plus : généralistes, pédiatres, cardiologues, gynécologues et plus.';
include __DIR__ . '/../includes/header.php';

// Équipe médicale fictive de démonstration
$doctors = [
    ['photo' => 41, 'name' => 'Dr. Aïssata Diallo', 'specialty' => 'Médecine générale', 'exp' => '12 ans d\'expérience', 'bio' => 'Diplômée de la faculté de médecine d\'Abidjan, le Dr. Diallo accompagne ses patients avec rigueur et bienveillance.'],
    ['photo' => 12, 'name' => 'Dr. Kouassi Bertin', 'specialty' => 'Pédiatrie', 'exp' => '10 ans d\'expérience', 'bio' => 'Spécialiste de la santé infantile, il assure le suivi des nourrissons jusqu\'à l\'adolescence.'],
    ['photo' => 45, 'name' => 'Dr. Fatou N\'Guessan', 'specialty' => 'Gynécologie', 'exp' => '15 ans d\'expérience', 'bio' => 'Experte en suivi prénatal et postnatal, elle œuvre pour la santé de la femme à chaque étape de la vie.'],
    ['photo' => 33, 'name' => 'Dr. Yao Marc Brou', 'specialty' => 'Cardiologie', 'exp' => '18 ans d\'expérience', 'bio' => 'Cardiologue reconnu, il est spécialisé dans la prévention et le traitement des maladies cardiovasculaires.'],
    ['photo' => 25, 'name' => 'Dr. Mariam Coulibaly', 'specialty' => 'Dermatologie', 'exp' => '9 ans d\'expérience', 'bio' => 'Elle prend en charge les pathologies de la peau avec une approche moderne et personnalisée.'],
    ['photo' => 52, 'name' => 'Dr. Jean-Paul Kacou', 'specialty' => 'Dentisterie', 'exp' => '14 ans d\'expérience', 'bio' => 'Chirurgien-dentiste passionné, il veille à la santé bucco-dentaire de toute la famille.'],
];
?>

<section class="page-header">
    <div class="container">
        <span class="section-eyebrow">Notre équipe</span>
        <h1 class="section-title">Des médecins à votre écoute</h1>
        <p class="section-subtitle mx-auto">Une équipe pluridisciplinaire de spécialistes expérimentés et dévoués à votre santé.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row g-4">
            <?php foreach ($doctors as $doctor) : ?>
            <div class="col-md-6 col-lg-4 fade-in-up">
                <div class="doctor-card">
                    <img src="https://i.pravatar.cc/400?img=<?php echo $doctor['photo']; ?>" alt="Photo de <?php echo htmlspecialchars($doctor['name']); ?>" class="doctor-photo" loading="lazy">
                    <div class="doctor-body">
                        <h5 class="doctor-name"><?php echo htmlspecialchars($doctor['name']); ?></h5>
                        <p class="doctor-specialty"><?php echo htmlspecialchars($doctor['specialty']); ?></p>
                        <p class="doctor-bio mb-2"><?php echo htmlspecialchars($doctor['bio']); ?></p>
                        <span class="badge rounded-pill" style="background-color: var(--color-primary-light); color: var(--color-primary);">
                            <i class="bi bi-briefcase"></i> <?php echo htmlspecialchars($doctor['exp']); ?>
                        </span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
