<?php

// ControleurPublic.php
// Ce contrôleur gère les pages accessibles au public : accueil, projets, etc.

if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'voirAccueil';
}

$action = htmlspecialchars($_REQUEST['action']);

switch ($action) {
    case 'voirAccueil':
        include 'vues/vues_portfolio/v-accueil.php';
        break;

    case 'voirProjets':
        include 'vues/vues_portfolio/v-btssio.php';
        break;

    case 'voirContact':
        include 'vues/vues_portfolio/v-contact.php';
        break;
    case 'voirProfil':
        include 'vues/vues_portfolio/v-profil.php';
        break;
    default:
        // Si l'action n'existe pas, on redirige vers l'accueil
        include 'vues/vues_portfolio/v-accueil.php';
        break;
}
?>