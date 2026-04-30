<?php

if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'accueil';
}
$action = htmlspecialchars($_REQUEST['action']);

switch ($action) {
    case "ajouter_contact":
        $listedistributeur = PdoDistributeur::getDistributeur();
        include 'vues/vues_contacts/v-ajouter-contact.php';
        break;
    case "afficher_contact":
        $listedistributeur = PdoDistributeur::getDistributeur();
        $listeContacts = PdoContact::getContact();
        include 'vues/vues_contacts/v-afficher-contact.php';
        break;
    case "contact_ajouter":
        $idContact = $_POST["id"];
        $prenomContact = $_POST["prenom"];
        $nomContact = $_POST["nom"];
        $mailContact = $_POST["mail"];
        $fixeContact = $_POST["tel_fixe"];
        $portableContact = $_POST["tel_portable"];
        $privilegieContact = $_POST["privilegie"];
        if (isset($privlegieContact))
        {
            $privilegieContact = 1;
        }
        else
        {
            $privilegieContact = 0;
        }
        $id_distributeurContact = $_POST["id_distributeur"];
        PdoContact::addContact($idContact, $prenomContact, $nomContact, $mailContact, $fixeContact, $portableContact, $privilegieContact, $id_distributeurContact);
        
        include 'vues/vues_contacts/v-afficher-contact.php';
        break;
   
}


