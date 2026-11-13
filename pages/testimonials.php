<?php
require_once __DIR__ . '/../config.php';
$page_title = 'Témoignages - ' . SITE_NAME;
$page_description = 'Découvrez les témoignages de patients satisfaits par les services de Clinique Santé Plus.';
include __DIR__ . '/../includes/header.php';

// Témoignages de démonstration
$testimonials = [
    ['avatar' => 47, 'name' => 'Aïcha Koné', 'role' => 'Patiente depuis 2019', 'text' => 'Une équipe à l\'écoute, des locaux impeccables et un suivi médical de qualité. Je recommande vivement Clinique Santé Plus à toute ma famille.'],
    ['avatar' => 14, 'name' => 'Serge Aka', 'role' => 'Patient depuis 2021', 'text' => 'Pris en charge en urgence un dimanche soir, le personnel a été d\'une efficacité et d\'une gentillesse remarquables.'],
    ['avatar' => 36, 'name' => 'Nadège Tano', 'role' => 'Maman de deux enfants', 'text' => 'Le pédiatre suit mes enfants depuis leur naissance. Toujours rassurant et disponible, je ne changerais pour rien au monde.'],
    ['avatar' => 22, 'name' => 'Ibrahim Sanogo', 'role' => 'Patient depuis 2017', 'text' => 'Des médecins compétents, des délais d\'attente raisonnables et un vrai suivi personnalisé. Bravo à toute l\'équipe.'],
];
?>

<section class="page-header">
    <div class="container">
        <span class="section-eyebrow">Témoignages</span>
        <h1 class="section-title">Ce que disent nos patients</h1>
        <p class="section-subtitle mx-auto">La satisfaction de nos patients est notre plus belle récompense.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div id="testimonialsCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php foreach ($testimonials as $index => $t) : ?>
                <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p class="testimonial-text">« <?php echo htmlspecialchars($t['text']); ?> »</p>
                        <img src="https://i.pravatar.cc/100?img=<?php echo $t['avatar']; ?>" alt="<?php echo htmlspecialchars($t['name']); ?>" class="testimonial-avatar mt-3 mb-2" loading="lazy">
                        <h6 class="testimonial-name"><?php echo htmlspecialchars($t['name']); ?></h6>
                        <span class="testimonial-role"><?php echo htmlspecialchars($t['role']); ?></span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Suivant</span>
            </button>
            <div class="carousel-indicators position-relative mt-4" style="bottom: 0;">
                <?php foreach ($testimonials as $index => $t) : ?>
                <button type="button" data-bs-target="#testimonialsCarousel" data-bs-slide-to="<?php echo $index; ?>" class="<?php echo $index === 0 ? 'active' : ''; ?>" aria-current="<?php echo $index === 0 ? 'true' : 'false'; ?>" aria-label="Témoignage <?php echo $index + 1; ?>"></button>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
