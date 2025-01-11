<?php

require_once __DIR__ . '/../Models/AnnoncesModel.php';
require_once __DIR__ . '/../Views/AnnoncesView.php';

class AnnoncesController {
    private $AnnoncesModel;
    private $AnnoncesView;

    public function __construct($db) {
        $this->AnnoncesModel = new AnnoncesModel($db);
        $this->AnnoncesView = new AnnoncesView();
    }

    public function afficherAnnonces() {
        $stmt = $this->AnnoncesModel->getAll();
        $Annonces = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->AnnoncesView->afficherListeAnnonces($Annonces);
    }
    public function handleRequest() {
        if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                case 'supprimer':
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $this->supprimer($id);
                    }
                    break;
            }
        }
    }
    public function supprimer($id) {
        if ($this->AnnoncesModel->supprimer($id)) {
            header('Location: ../Pages/Annonces.php'); 
            exit();
        }
    }
    public function ajouterAnnonce($titre,$description,$date_publication) {
        try {
            if (empty($titre) || empty($description) ||  empty($date_publication) ) {
                throw new Exception("Tous les champs requis doivent être remplis.");
            }
            $this->AnnoncesModel->ajouter($titre,$description,$date_publication);
            echo "Annonce ajouté avec succès.";
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }
}
?>