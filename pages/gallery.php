<?php
require_once __DIR__ . '/../config.php';
$page_title = 'Galerie - ' . SITE_NAME;
$page_description = 'Découvrez en images les locaux, équipements et l\'ambiance chaleureuse de Clinique Santé Plus.';
include __DIR__ . '/../includes/header.php';

// Photos de démonstration de la clinique
$gallery = [
    ['color' => '16A34A', 'text' => 'Façade+de+la+clinique', 'caption' => 'Façade de la clinique'],
    ['color' => 'DCFCE7', 'text' => 'Salle+d%27attente', 'caption' => 'Salle d\'attente'],
    ['color' => '128539', 'text' => 'Cabinet+de+consultation', 'caption' => 'Cabinet de consultation'],
    ['color' => '16A34A', 'text' => 'Équipements+médicaux', 'caption' => 'Équipements médicaux modernes'],
    ['color' => 'DCFCE7', 'text' => 'Notre+personnel', 'caption' => 'Notre personnel soignant'],
    ['color' => '128539', 'text' => 'Laboratoire+d%27analyses', 'caption' => 'Laboratoire d\'analyses'],
    ['color' => '16A34A', 'text' => 'Bloc+pédiatrique', 'caption' => 'Espace pédiatrique'],
    ['color' => 'DCFCE7', 'text' => 'Accueil+patients', 'caption' => 'Espace d\'accueil'],
];
?>

<section class="page-header">
    <div class="container">
        <span class="section-eyebrow">Galerie</span>
        <h1 class="section-title">Découvrez notre clinique en images</h1>
        <p class="section-subtitle mx-auto">Des locaux modernes, un cadre lumineux et des équipements de pointe pour votre confort.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row g-4">
            <?php foreach ($gallery as $photo) : ?>
            <div class="col-md-6 col-lg-3 fade-in-up">
                <div class="gallery-item">
                    <img src="https://placehold.co/500x400/<?php echo $photo['color']; ?>/<?php echo $photo['color'] === 'DCFCE7' ? '16A34A' : 'FFFFFF'; ?>?text=<?php echo $photo['text']; ?>" alt="<?php echo htmlspecialchars($photo['caption']); ?>" loading="lazy">
                    <div class="gallery-caption"><?php echo htmlspecialchars($photo['caption']); ?></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
