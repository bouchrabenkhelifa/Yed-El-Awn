<?php

require_once __DIR__ . '/../Models/BenevoleModel.php';
require_once __DIR__ . '/../Views/BenevoleView.php';

class BenevoleController {
    private $BenevoleModel;
    private $BenevoleView;

    public function __construct($db) {
        $this->BenevoleModel = new BenevoleModel($db);
        $this->BenevoleView = new BenevoleView();
    }

    public function afficherBenevole() {
        $stmt = $this->BenevoleModel->getAll();
        $Benevole = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->BenevoleView->afficherListeBenevole($Benevole);
    }
    public function Ajouter($id_membre, $domaine_interet, $date_inscription, $id_evenement, $disponibilite) {
        try {
    
            if (empty($disponibilite) || empty($domaine_interet) || empty($date_inscription) || empty($id_evenement)) {
                echo "Erreur : Tous les champs doivent être remplis.";
                exit;
            }
        
            $this->BenevoleModel->ajouter($id_membre, $domaine_interet, $date_inscription, $id_evenement, $disponibilite);
            echo "Benevole ajouté avec succès.";
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }
    
}   

?>