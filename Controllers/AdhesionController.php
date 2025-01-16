<?php

require_once __DIR__ . '/../Models/AdhesionModel.php';
require_once __DIR__ . '/../Views/FormMembreView.php';

class AdhesionController {
    private $AdhesionModel;
    private $FormMembreView;

    public function __construct($db) {
        $this->AdhesionModel = new AdhesionModel($db);
        $this->FormMembreView = new FormMembreView();
    }
    public function afficherForm() {
        $this->FormMembreView->afficher();
    }
    
    public function Join($nom, $telephone,$adresse,$photo,$carteidentite,$recu,$date_enregistrement,$id_utilisateur) {
        try {
            if (empty($nom) || empty($telephone) || empty($adresse)) {
                throw new Exception("Tous les champs requis doivent être remplis.");
            }
            if ($_FILES['carteidentite']['error'] !== UPLOAD_ERR_OK) {
                throw new Exception("Erreur lors de l'upload de la carte d'identité.");
            }
            if ($_FILES['photo']['error'] !== UPLOAD_ERR_OK) {
                throw new Exception("Erreur lors de l'upload de la photo.");
            }
            if ($_FILES['recu']['error'] !== UPLOAD_ERR_OK) {
                throw new Exception("Erreur lors de l'upload du reçu.");
            }
            

 
            $this->AdhesionModel->ajouter($nom, $telephone,$adresse,$photo,$carteidentite,$recu,$carteidentite,$recu,$date_enregistrement,$id_utilisateur);
            echo "Demande d'adhesion envoyée";
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }


    
}
?>