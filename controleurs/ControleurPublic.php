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
    case 'voirVeille':
        include 'vues/v-veille.php';
        break;
    case 'voirStage':
        include 'vues/v-stage.php';
        break;
    case 'voirStage1':
        include 'vues/v-stage1.php';
        break;
    case 'voirStage2':
        include 'vues/v-stage2.php';
        break;
    case 'voirProjet1':
        include 'vues/v-projet1.php';
        break;
    case 'voirProjet2':
        include 'vues/v-projet2.php';
        break;
    case 'voirProjet3':
        include 'vues/v-projet3.php';
        break;
    default:
        include 'vues/v-accueil.php';
        break;
}
?>