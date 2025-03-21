<?php


require_once 'Client.php';

class Particulier extends Client {

    
    public function payerFacture() {
        echo "Le particulier " . $this->getNom() . " paie la facture en espèces.<br>";
    }

    public function reclamation() {
        echo "Le particulier " . $this->getNom() . " n'a pas de secteur d'activité.<br>";
    }


    public function __toString() {
        return "Particulier [ID: " . $this->getId() . ", Nom: " . $this->getNom() . ", Adresse: " . $this->getAdresse() . "]<br>";
    }
}
?>