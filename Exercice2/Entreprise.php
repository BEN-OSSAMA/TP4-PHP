<?php


require_once 'Client.php';

class Entreprise extends Client {
    private $numPatente;
    private $typeSociete;
    private $secteurActivite;

 
    public function __construct($id, $nom, $adresse, $numPatente, $typeSociete, $secteurActivite) {
        parent::__construct($id, $nom, $adresse);
        $this->numPatente = $numPatente;
        $this->typeSociete = $typeSociete;
        $this->secteurActivite = $secteurActivite;
    }


    public function payerFacture() {
        echo "L'entreprise " . $this->getNom() . " paie la facture par cheque.<br>";
    }

    public function reclamation() {
        echo "L'entreprise " . $this->getNom() . " exerce dans le secteur d'activité : " . $this->secteurActivite . ".<br>";
    }


    
    public function __toString() {
        return "Entreprise [ID: " . $this->getId() . ", Nom: " . $this->getNom() . ", Adresse: " . $this->getAdresse() . ", Numéro de patente: " . $this->numPatente . ", Type de société: " . $this->typeSociete . ", Secteur d'activité: " . $this->secteurActivite . "]<br>";
    }
}
?>