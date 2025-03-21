<?php


abstract class Client {
    private $id;
    private $nom;
    private $adresse;

  
    private static $nbr_user = 0;

    
    public function __construct($id, $nom, $adresse) {
        $this->id = $id;
        $this->nom = $nom;
        $this->adresse = $adresse;


        self::$nbr_user++;
    }


    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function afficherInfos() {
        echo "ID: " . $this->id . "<br>";
        echo "Nom: " . $this->nom . "<br>";
        echo "Adresse: " . $this->adresse . "<br>";
    }


    public static function getNbrUser() {
        return self::$nbr_user;
    }


    public function __destruct() {

        self::$nbr_user--;
    }


    abstract public function payerFacture();
    abstract public function reclamation();
}
?>