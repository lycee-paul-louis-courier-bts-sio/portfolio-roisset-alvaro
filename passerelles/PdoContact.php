<?php
/**
 * Classe d'accès aux données
 * Gère la table contact
 */
class PdoContact {
    /**
     * Obtient l'utilisateur correspondant au login et mot de passe reçu en paramètre
     * @return Array $contact Un tableau vide ou contenant une seule ligne
     */
    public static function getContact() {
        //on récupère une instance de la classe Pdo_Connexion_bd_millenuits qui établit une connexion à la base de données
        $objPdo = PdoConnexion::getPdoConnexion();
 
        //définition de la requête SQL à exécuter 
        $req = "SELECT id, nom, prenom, mail, tel_fixe, tel_portable, privilegie, id_distributeur FROM contact";
        
        //demande d'exécution de la requête passée en paramètre
        $res = $objPdo->query($req);
        
        //on récupère le résultat de la requête dans la variable $distributeur 
        $getcontact = $res->fetchAll();
        //Ferme le curseur ce qui permet à la requête d'être de nouveau exécutée
        $res->closeCursor();
        /*Retourne un tableau contenant toutes les ligues du jeu d'enregistrements
        ou un tableau vide ni aucun enregistrement trouvé*/
        return $getcontact;
    }
    public static function addContact($idContact, $prenomContact, $nomContact, $mailContact, $fixeContact, $portableContact, $privilegieContact, $id_distributeurContact) {
        //on récupère une instance de la classe Pdo_Connexion_bd_millenuits qui établit une connexion à la base de données
        $objPdo = PdoConnexion::getPdoConnexion();
 
        //définition de la requête SQL à exécuter 
        $req2 = "INSERT INTO contact(id, nom, prenom, mail, tel_fixe, tel_portable, privilegie, id_distributeur )"
                . " VALUES ($idContact,'$nomContact', '$prenomContact', '$mailContact', '$fixeContact', '$portableContact', $privilegieContact, $id_distributeurContact)";
        
        //demande d'exécution de la requête passée en paramètre
        $res = $objPdo->exec($req2);   
       
        return;
         
    }
}