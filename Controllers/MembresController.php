<?php

require_once __DIR__ . '/../Models/MembresModel.php';
require_once __DIR__ . '/../Views/MembresView.php';
require_once __DIR__ . '/../Views/ModifierMembreView.php';

class MembresController {
    private $MembresModel;
    private $MembresView;
    private $ModifierMembreView;

    public function __construct($db) {
        $this->MembresModel = new MembresModel($db);
        $this->MembresView = new MembresView();
        $this->ModifierMembreView = new ModiferMembreView();
    }

    public function afficherMembres() {
        $stmt = $this->MembresModel->getAll();
        $Membres = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->MembresView->afficherListeMembres($Membres);
    }
    public function Afficher() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $membre = $this->MembresModel->getMembreById($id);
            $this->ModifierMembreView->Modifier($membre);
        } else {
            echo "ID du membre manquant.";
        }
     }
     public function handleRequest() {
        if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                case 'supprimerMembre':
                    if (isset($_GET['id'])) {
                        $idmembre = $_GET['id'];
                        $this->supprimerMembre($idmembre);
                    }
                    break;
            }
        }
    }
    public function supprimerMembre($id) {
        if ($this->MembresModel->supprimer($id)) {
            header('Location: ../Pages/Membres.php'); 
            exit();
        }
    }
    public function ajouterMembre($nom, $telephone, $adresse, $motdepasse) {
        try {
            if (empty($nom) || empty($telephone) || empty($adresse) || empty($motdepasse)) {
                throw new Exception("Tous les champs requis doivent être remplis.");
            }

 
            $this->MembresModel->ajouter($nom, $telephone,$adresse,$motdepasse);
            echo "Membre ajouté avec succès.";
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }

    
    public function modifierMembre() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'modifierMembre') {
            echo "Méthode modifierMembre atteinte !"; // Debug

            if (isset($_POST['id']) && isset($_POST['nom']) && isset($_POST['telephone'])  && isset($_POST['adresse'])) {
                $id = $_POST['id'];
                $nom = $_POST['nom'];
                $telephone = $_POST['telephone'];
                $adresse = $_POST['adresse'];
                $result = $this->MembresModel->updateMembre($id, $nom, $telephone, $adresse);
                if ($result) {
                    header("Location: Membres.php");
                    exit();
                } else {
                    header("Location: ModifierMembre.php?id=" . $id . "&error=1");
                    exit();
                }
            }
        }
    }
    
}
?>