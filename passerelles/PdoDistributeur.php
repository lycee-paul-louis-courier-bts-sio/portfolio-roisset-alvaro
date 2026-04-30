<?php
/**
 * Classe d'accès aux données
 * Gère la table distributeur
 */
class PdoDistributeur {
    /**
     * Obtient l'utilisateur correspondant au login et mot de passe reçu en paramètre
     * @return Array $distributeur Un tableau vide ou contenant une seule ligne
     */
    public static function getDistributeur() {
        //on récupère une instance de la classe Pdo_Connexion_bd_millenuits qui établit une connexion à la base de données
        $objPdo = PdoConnexion::getPdoConnexion();
 
        //définition de la requête SQL à exécuter 
        $req = "SELECT id, raison_sociale FROM distributeur";
       
      
        //demande d'exécution de la requête passée en paramètre
        $res = $objPdo->query($req);
        
        //on récupère le résultat de la requête dans la variable $distributeur 
        $distributeur = $res->fetchAll();
        //Ferme le curseur ce qui permet à la requête d'être de nouveau exécutée
        $res->closeCursor();
        /*Retourne un tableau contenant toutes les ligues du jeu d'enregistrements
        ou un tableau vide ni aucun enregistrement trouvé*/
        return $distributeur;
         
    }
}