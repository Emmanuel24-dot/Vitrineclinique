<?php
require_once __DIR__ . '/../config.php';
$page_title = 'FAQ - ' . SITE_NAME;
$page_description = 'Trouvez les réponses aux questions les plus fréquentes sur les rendez-vous, horaires, paiements et urgences à Clinique Santé Plus.';
include __DIR__ . '/../includes/header.php';

// Questions fréquentes
$faqs = [
    ['q' => 'Comment prendre rendez-vous ?', 'a' => 'Vous pouvez prendre rendez-vous via notre formulaire de contact en ligne, par téléphone au ' . SITE_PHONE . ', ou directement à l\'accueil de la clinique.'],
    ['q' => 'Quels sont les horaires de la clinique ?', 'a' => 'Nous sommes ouverts du lundi au vendredi de 7h30 à 19h00, le samedi de 8h00 à 16h00, et le dimanche de 9h00 à 13h00 pour les urgences. Consultez la page Contact pour le tableau complet des horaires.'],
    ['q' => 'Quels moyens de paiement sont acceptés ?', 'a' => 'Nous acceptons les paiements en espèces, par carte bancaire, par mobile money (Orange Money, MTN Money, Wave) ainsi que la prise en charge par certaines assurances et mutuelles santé.'],
    ['q' => 'Proposez-vous des consultations d\'urgence ?', 'a' => 'Oui, notre service d\'urgences médicales est disponible 7 jours sur 7 pour une prise en charge rapide en cas de besoin.'],
    ['q' => 'Quels documents apporter lors de ma première visite ?', 'a' => 'Merci de vous présenter avec une pièce d\'identité, votre carnet de santé (si disponible), votre carte d\'assurance ou de mutuelle, et tout document médical relatif à vos antécédents.'],
];
?>

<section class="page-header">
    <div class="container">
        <span class="section-eyebrow">FAQ</span>
        <h1 class="section-title">Foire aux questions</h1>
        <p class="section-subtitle mx-auto">Retrouvez les réponses aux questions les plus posées par nos patients.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="faqAccordion">
                    <?php foreach ($faqs as $index => $faq) : ?>
                    <div class="accordion-item fade-in-up">
                        <h2 class="accordion-header">
                            <button class="accordion-button <?php echo $index === 0 ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#faq<?php echo $index; ?>" aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>" aria-controls="faq<?php echo $index; ?>">
                                <?php echo htmlspecialchars($faq['q']); ?>
                            </button>
                        </h2>
                        <div id="faq<?php echo $index; ?>" class="accordion-collapse collapse <?php echo $index === 0 ? 'show' : ''; ?>" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="color: var(--color-text-light);">
                                <?php echo htmlspecialchars($faq['a']); ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <div class="text-center mt-5">
                    <p style="color: var(--color-text-light);">Vous n'avez pas trouvé de réponse à votre question ?</p>
                    <a href="<?php echo BASE_URL; ?>/pages/contact.php" class="btn btn-medical-primary rounded-pill px-4">
                        <i class="bi bi-chat-dots"></i> Contactez-nous
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
