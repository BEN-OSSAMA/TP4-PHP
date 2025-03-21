<?php


class Client {
    private $id;
    private $nom;
    private $adresse;

    private static $nbr_user = 0;

    private static $instance = null;


    public function __construct($id, $nom, $adresse) {
        $this->id = $id;
        $this->nom = $nom;
        $this->adresse = $adresse;

 
        self::$nbr_user++;
    }

    public static function getInstance($id, $nom, $adresse) {
        if (self::$instance === null) {
            self::$instance = new Client($id, $nom, $adresse);
        }
        return self::$instance;
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


    public function setId($id) {
        $this->id = $id;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
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
        echo "L'objet Client avec l'ID " . $this->id . " est détruit.<br>";
        echo "Nombre d'utilisateurs : " . self::$nbr_user . "<br>";
    }
}
?>