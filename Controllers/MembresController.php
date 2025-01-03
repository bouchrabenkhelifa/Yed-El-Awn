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
public function modifierMembre() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'modifierMembre') {
        if (isset($_POST['id']) && isset($_POST['nom']) && isset($_POST['telephone']) && isset($_POST['email']) && isset($_POST['adresse'])) {
                $id = $_POST['id'];
                $nom = $_POST['nom'];
                $telephone = $_POST['telephone'];
                $email = $_POST['email'];
                $adresse = $_POST['adresse'];
                    $result = $this->MembresModel->updateMembre($id, $nom, $telephone, $email, $adresse);
                    if ($result) {
                        header('Location: ../Pages/Membres.php');
                        exit;
                    } else {
                        echo "Erreur lors de la modification du membre.";
                    }
                }
            }
    
    }
    

}
?>