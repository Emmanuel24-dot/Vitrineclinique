<?php
require_once __DIR__ . '/../config.php';

// Traitement du formulaire de contact (validation côté serveur)
$formSuccess = false;
$formErrors = [];
$formData = ['nom' => '', 'email' => '', 'telephone' => '', 'sujet' => '', 'message' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_submit'])) {
    $formData['nom'] = isset($_POST['nom']) ? trim($_POST['nom']) : '';
    $formData['email'] = isset($_POST['email']) ? trim($_POST['email']) : '';
    $formData['telephone'] = isset($_POST['telephone']) ? trim($_POST['telephone']) : '';
    $formData['sujet'] = isset($_POST['sujet']) ? trim($_POST['sujet']) : '';
    $formData['message'] = isset($_POST['message']) ? trim($_POST['message']) : '';

    if ($formData['nom'] === '') {
        $formErrors[] = 'Le nom est obligatoire.';
    }
    if ($formData['email'] === '' || !filter_var($formData['email'], FILTER_VALIDATE_EMAIL)) {
        $formErrors[] = 'Veuillez saisir une adresse email valide.';
    }
    if ($formData['telephone'] === '') {
        $formErrors[] = 'Le numéro de téléphone est obligatoire.';
    }
    if ($formData['message'] === '') {
        $formErrors[] = 'Le message ne peut pas être vide.';
    }

    if (empty($formErrors)) {
        // Dans un environnement réel : envoi d'email (mail()) ou enregistrement en base de données.
        $formSuccess = true;
        $formData = ['nom' => '', 'email' => '', 'telephone' => '', 'sujet' => '', 'message' => ''];
    }
}

$page_title = 'Contact - ' . SITE_NAME;
$page_description = 'Contactez Clinique Santé Plus pour prendre rendez-vous ou poser vos questions. Adresse, téléphone, email, WhatsApp et horaires d\'ouverture.';
include __DIR__ . '/../includes/header.php';

// Horaires d'ouverture
$hours = [
    'Lundi' => '07h30 - 19h00',
    'Mardi' => '07h30 - 19h00',
    'Mercredi' => '07h30 - 19h00',
    'Jeudi' => '07h30 - 19h00',
    'Vendredi' => '07h30 - 19h00',
    'Samedi' => '08h00 - 16h00',
    'Dimanche' => '09h00 - 13h00 (urgences uniquement)',
];
$todayName = ['Sunday' => 'Dimanche', 'Monday' => 'Lundi', 'Tuesday' => 'Mardi', 'Wednesday' => 'Mercredi', 'Thursday' => 'Jeudi', 'Friday' => 'Vendredi', 'Saturday' => 'Samedi'][date('l')];
?>

<section class="page-header">
    <div class="container">
        <span class="section-eyebrow">Contact</span>
        <h1 class="section-title">Nous sommes à votre écoute</h1>
        <p class="section-subtitle mx-auto">Une question, une urgence ou une demande de rendez-vous ? Contactez-nous dès maintenant.</p>
    </div>
</section>

<!-- Informations de contact -->
<section class="section pb-0">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 fade-in-up">
                <div class="contact-info-card">
                    <i class="bi bi-geo-alt-fill"></i>
                    <div>
                        <h6 class="mb-1">Adresse</h6>
                        <p class="mb-0 small" style="color: var(--color-text-light);"><?php echo SITE_ADDRESS; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 fade-in-up">
                <div class="contact-info-card">
                    <i class="bi bi-telephone-fill"></i>
                    <div>
                        <h6 class="mb-1">Téléphone</h6>
                        <p class="mb-0 small"><a href="tel:<?php echo SITE_PHONE_LINK; ?>" style="color: var(--color-text-light);"><?php echo SITE_PHONE; ?></a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 fade-in-up">
                <div class="contact-info-card">
                    <i class="bi bi-envelope-fill"></i>
                    <div>
                        <h6 class="mb-1">Email</h6>
                        <p class="mb-0 small"><a href="mailto:<?php echo SITE_EMAIL; ?>" style="color: var(--color-text-light);"><?php echo SITE_EMAIL; ?></a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 fade-in-up">
                <div class="contact-info-card">
                    <i class="bi bi-whatsapp"></i>
                    <div>
                        <h6 class="mb-1">WhatsApp</h6>
                        <p class="mb-0 small"><a href="https://wa.me/<?php echo SITE_WHATSAPP_LINK; ?>" style="color: var(--color-text-light);"><?php echo SITE_WHATSAPP; ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Formulaire + Carte -->
<section class="section" id="rdv">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 fade-in-up">
                <span class="section-eyebrow">Demande de rendez-vous</span>
                <h2 class="section-title">Envoyez-nous un message</h2>

                <?php if ($formSuccess) : ?>
                    <div class="alert alert-success d-flex align-items-center gap-2" role="alert">
                        <i class="bi bi-check-circle-fill"></i> Votre message a bien été envoyé. Nous vous recontacterons rapidement.
                    </div>
                <?php endif; ?>

                <?php if (!empty($formErrors)) : ?>
                    <div class="alert alert-danger" role="alert">
                        <ul class="mb-0">
                            <?php foreach ($formErrors as $error) : ?>
                                <li><?php echo htmlspecialchars($error); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <form id="contactForm" method="POST" action="<?php echo BASE_URL; ?>/pages/contact.php#rdv" class="needs-validation" novalidate>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="nom" class="form-label">Nom complet</label>
                            <input type="text" class="form-control" id="nom" name="nom" value="<?php echo htmlspecialchars($formData['nom']); ?>" required>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($formData['email']); ?>" required>
                        </div>
                        <div class="col-md-6">
                            <label for="telephone" class="form-label">Téléphone</label>
                            <input type="tel" class="form-control" id="telephone" name="telephone" value="<?php echo htmlspecialchars($formData['telephone']); ?>" required>
                        </div>
                        <div class="col-md-6">
                            <label for="sujet" class="form-label">Sujet</label>
                            <select class="form-select" id="sujet" name="sujet">
                                <option value="Demande de rendez-vous" <?php echo $formData['sujet'] === 'Demande de rendez-vous' ? 'selected' : ''; ?>>Demande de rendez-vous</option>
                                <option value="Question générale" <?php echo $formData['sujet'] === 'Question générale' ? 'selected' : ''; ?>>Question générale</option>
                                <option value="Urgence médicale" <?php echo $formData['sujet'] === 'Urgence médicale' ? 'selected' : ''; ?>>Urgence médicale</option>
                                <option value="Autre" <?php echo $formData['sujet'] === 'Autre' ? 'selected' : ''; ?>>Autre</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required><?php echo htmlspecialchars($formData['message']); ?></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" name="contact_submit" class="btn btn-medical-primary btn-lg rounded-pill px-4">
                                <i class="bi bi-send"></i> Envoyer le message
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-6 fade-in-up">
                <span class="section-eyebrow">Nous trouver</span>
                <h2 class="section-title">Notre localisation</h2>
                <div class="map-wrap mb-4">
                    <iframe src="<?php echo SITE_MAPS_EMBED; ?>" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Localisation de <?php echo SITE_NAME; ?>"></iframe>
                </div>

                <div class="hours-table">
                    <table class="table mb-0">
                        <thead>
                            <tr><th colspan="2"><i class="bi bi-clock"></i> Horaires d'ouverture</th></tr>
                        </thead>
                        <tbody>
                            <?php foreach ($hours as $day => $hour) : ?>
                            <tr class="<?php echo $day === $todayName ? 'today' : ''; ?>">
                                <td><?php echo $day; ?><?php echo $day === $todayName ? ' <span class="badge text-bg-success ms-1">Aujourd\'hui</span>' : ''; ?></td>
                                <td><?php echo $hour; ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
