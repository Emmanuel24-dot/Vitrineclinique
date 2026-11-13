<?php
/**
 * Configuration globale du site - Clinique Santé Plus
 * Définit les constantes utilisées par toutes les pages (chemins, infos clinique).
 */

// Calcule l'URL de base du projet pour que les liens fonctionnent
// quel que soit le sous-dossier d'installation sous WampServer/XAMPP.
$rootDir = str_replace('\\', '/', __DIR__);
$docRoot = str_replace('\\', '/', rtrim($_SERVER['DOCUMENT_ROOT'], '/'));
$baseUrl = str_replace($docRoot, '', $rootDir);

define('BASE_URL', $baseUrl === '' ? '' : $baseUrl);

// Informations générales de la clinique (modifiable facilement pour un vrai client)
define('SITE_NAME', 'Clinique Santé Plus');
define('SITE_SLOGAN', 'Votre santé, notre priorité au quotidien.');
define('SITE_PHONE', '+228 90 00 00 00');
define('SITE_PHONE_LINK', '+22890000000');
define('SITE_WHATSAPP', '+228 90 00 00 00');
define('SITE_WHATSAPP_LINK', '22890000000');
define('SITE_EMAIL', 'contact@cliniquesanteplus.tg');
define('SITE_ADDRESS', 'Boulevard Latrille, Agoè, Lomé, TOGO');
define('SITE_MAPS_EMBED', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63036.96!2d-3.99!3d5.359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNcKwMjEnMzguNCJOIDPCsDU5JzI0LjAiVw!5e0!3m2!1sfr!2sci!4v1700000000000');
