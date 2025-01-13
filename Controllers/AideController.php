<?php

require_once __DIR__ . '/../Models/AideModel.php';
require_once __DIR__ . '/../Views/DemandeAideView.php';
require_once __DIR__ . '/../Views/AideView.php';

class AideController {
    private $AideModel;
    private $AideView;
    private $DemandeAideView;

    public function __construct($db) {
        $this->AideModel = new AideModel($db);
        $this->DemandeAideView = new DemandeAideView();
        $this->AideView = new AideView();

    }

    // Affiche toutes les demandes d'aide
    public function afficherAide() {
        $stmt = $this->AideModel->getAll();
        $Aides = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->AideView->afficherListeAide($Aides);
    }

    public function Ajouter($nom_demandeur, $date_naissance, $type_aide, $description,$date_demande) {
        if (empty($nom_demandeur) ||empty($date_demande) || empty($date_naissance) || empty($type_aide) || empty($description)) {
            $_SESSION['error'] = "Tous les champs sont obligatoires";
            return false;
        }
        
        return $this->AideModel->AjouterDemande($nom_demandeur, $date_naissance, $type_aide, $description,$date_demande);
    }
    }

?>
