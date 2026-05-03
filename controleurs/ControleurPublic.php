<?php
if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'voirAccueil';
}

$action = htmlspecialchars($_REQUEST['action']);

switch ($action) {
    case 'voirAccueil':
        include 'vues/v-accueil.php';
        break;

    case 'voirProjets':
        include 'vues/v-btssio.php';
        break;

    case 'voirContact':
        include 'vues/v-contact.php';
        break;
    case 'voirProfil':
        include 'vues/v-profil.php';
        break;
    default:
        include 'vues/v-accueil.php';
        break;
}
?>