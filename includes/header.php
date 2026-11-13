<?php
/**
 * Header commun : balises meta SEO, CSS, ouverture du body.
 * Variables attendues (définies dans la page appelante avant l'inclusion) :
 * $page_title, $page_description, $page_h1 (optionnel)
 */
if (!defined('BASE_URL')) {
    require_once __DIR__ . '/../config.php';
}
if (!isset($page_title)) {
    $page_title = SITE_NAME . ' - ' . SITE_SLOGAN;
}
if (!isset($page_description)) {
    $page_description = 'Clinique Santé Plus, votre clinique médicale moderne : médecine générale, pédiatrie, gynécologie, cardiologie et plus. Prenez rendez-vous dès aujourd\'hui.';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="author" content="<?php echo SITE_NAME; ?>">
    <meta name="robots" content="index, follow">

    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- CSS du site -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/style.css">
    <!-- Favicon -->
    <link rel="icon" href="<?php echo BASE_URL; ?>/assets/images/favicon.svg" type="image/svg+xml">
</head>
<body>
<?php include __DIR__ . '/navbar.php'; ?>
