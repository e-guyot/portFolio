<?php

class PdoContact {

    private static $serveur = 'mysql:host=localhost';
    private static $bdd = 'dbname=portfolio_contact';//'dbname=id4953923_contact';
    private static $user = 'root';//'id4953923_contact';
    private static $mdp = '';//'contact01';
    private static $monPdo;
    private static $monPdoContact = null;

     private function __construct() {
        PdoContact::$monPdo = new PDO(PdoContact::$serveur . ';' . PdoContact::$bdd, PdoContact::$user, PdoContact::$mdp);
        PdoContact::$monPdo->query("SET CHARACTER SET utf8");
    }

    public function _destruct() {
        PdoContact::$monPdo = null;
    }

     public static function getPdoContact() {
        if (PdoContact::$monPdoContact == null) {
            PdoContact::$monPdoContact = new PdoContact();
        }
        return PdoContact::$monPdoContact;
    }

      public function newContact($nom, $email, $comment) {
        $req = "INSERT INTO contact (id, email, nom, comment) VALUES (NULL, '$email', '$nom', '$comment')";
        PdoContact::$monPdo->exec($req);
        
    }
}
?>